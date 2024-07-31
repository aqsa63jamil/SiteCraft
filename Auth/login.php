<?php
require_once "controllerUserData.php";

// if (isset($_SESSION['logged_in']) && isset($_SESSION['logged_in']) == true) {
//     header("location: ../Create_store/website_buildup.php");
// }
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM users WHERE email='$email'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {-
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             $_SESSION['logged_in'] = true;
//             $_SESSION['user_id'] = $row['id'];
//             $_SESSION['user_name'] = $row['username'];
//             $_SESSION['user_email'] = $row['email'];
//             header("location: ../Create_Store/website_buildup.php");
//             exit;
//         } else {
//             echo "Invalid password";
//         }
//     } else {
//         header('location: register.php');
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="../Styles/auth.css">
</head>
<body>
<div class="container-fluid d-flex flex-column full-height">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SiteCraft</a>
        </div>
    </nav>
    <div class="w-100 p-lg-5 container mx-auto my-auto">
        <div class="text-center mb-4">
            <h1>Log In</h1>
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
            <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
        </div>
        <div class="row d-flex align-items-center justify-content-center px-lg-5">
            <div class="col-lg-6 col-12 p-4 border-divider px-lg-5 position-relative">
                <div class="column-divider position-absolute d-none d-lg-flex"><p>or</p></div>
                <form method="post" action="">
                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control border-0 border-bottom no-outline" id="email" name="email" placeholder="name@example.com" required value="<?php echo htmlspecialchars($email); ?>">
                        <label for="email">Email address</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" class="form-control border-0 border-bottom no-outline" id="password" name="password" placeholder="@!20iandnjaskdn/^*^" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="link forget-pass text-left"><a href="./forgot-password.php">Forgot password?</a></div> <br>
                    <button type="submit" class="btn d-none d-lg-block text-primary rounded-pill px-3 fw-bold border border-primary" name="login" value="Login">Log In</button>
                    <div class="container-sm d-lg-none d-flex align-items-center justify-content-center gap-3 mt-5">
                        <button class="btn btn-primary rounded-pill px-3 fw-bold">Log In</button>
                        <span>OR</span>
                        <a href="google-auth.php" class="google-sign-in-button-mobile p-2"></a>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12 p-4 px-lg-5 d-none d-lg-flex align-items-center justify-content-center">
                <button type="button" class="google-sign-in-button" >
                    Sign in with Google
                </button>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>                  