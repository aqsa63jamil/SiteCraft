<?php
include("../Connection/connection.php");
session_start();

require '../loadenv.php';

loadEnv(__DIR__ . '/../.env');

$google_oauth_client_id = getenv('GOOGLE_OAUTH_CLIENT_ID');
$google_oauth_client_secret = getenv('GOOGLE_OAUTH_CLIENT_SECRET');
$google_oauth_redirect_uri = getenv('GOOGLE_OAUTH_REDIRECT_URI');
$google_oauth_version = getenv('GOOGLE_OAUTH_VERSION');

if (isset($_GET['code']) && !empty($_GET['code'])) {
    $params = [
        'code' => $_GET['code'],
        'client_id' => $google_oauth_client_id,
        'client_secret' => $google_oauth_client_secret,
        'redirect_uri' => $google_oauth_redirect_uri,
        'grant_type' => 'authorization_code'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.google.com/o/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $response = json_decode($response, true);
    if (isset($response['access_token']) && !empty($response['access_token'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/' . $google_oauth_version . '/userinfo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $response['access_token']]);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $profile = json_decode($response, true);
        
        if (isset($profile['email'])) {
            $google_name_parts = [];
            $google_name_parts[] = isset($profile['given_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['given_name']) : '';
            $google_name_parts[] = isset($profile['family_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['family_name']) : '';
            session_regenerate_id();
            $_SESSION['google_name'] = implode(' ', $google_name_parts);
            $_SESSION['google_picture'] = isset($profile['picture']) ? $profile['picture'] : '';

            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }
            
            $stmt->bind_param("s", $profile['email']);
            if($stmt->execute()){
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();
                if($user){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['username'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['logged_in'] = true;
                } else {
                    $stmt = $conn->prepare("INSERT INTO users (email, username, image) VALUES (?,?,?)");
                    if ($stmt === false) {
                        die('Prepare failed: ' . htmlspecialchars($conn->error));
                    }
                    
                    $stmt->bind_param("sss", $profile['email'], $_SESSION['google_name'], $_SESSION['google_picture']);
                    if($stmt->execute()){
                        $_SESSION['user_id'] = $conn->insert_id;
                        $_SESSION['user_name'] = $_SESSION['google_name'];
                        $_SESSION['user_email'] = $profile['email'];
                        $_SESSION['logged_in'] = true;
                    } else {
                        echo "Error executing query: ". $stmt->error;
                    }
                }
            } else {
                echo "Error executing query: ". $stmt->error;
            }

            header('Location: ../Create_Store/website_buildup.php');
            exit;
        } else {
            exit('Could not retrieve profile information! Please try again later!');
        }
    } else {
        exit('Invalid access token! Please try again later!');
    }
} else {
    $params = [
        'response_type' => 'code',
        'client_id' => $google_oauth_client_id,
        'redirect_uri' => $google_oauth_redirect_uri,
        'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
        'access_type' => 'offline',
        'prompt' => 'consent'
    ];
    header('Location: https://accounts.google.com/o/oauth2/auth?' . http_build_query($params));
    exit;
}
?>
