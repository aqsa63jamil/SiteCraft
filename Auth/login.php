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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <link rel="stylesheet" href="../Styles/styles.css">
     <link rel="stylesheet" href="../Styles/website_buildup.css">
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="../Styles/auth.css">
</head>
<body>
<div class="main-container">
    <!-- Header -->
    <header class=" py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-dark" style="font-weight:bold; font-size: 1.8rem;"><strong style="font-size: 1.8rem; color: #ff8c00;">S</strong>ite<strong style="font-size: 1.8rem; color: #ff8c00;">C</strong>raft</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../aboutus.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contact.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">Contact</a>
                    </li>
                    <div class="dropdown">
                        <button class="dropbtn text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">
                                Account
                        </button>
                        <div class="dropdown-content">
                            <?php
                                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                                    echo '
                                    <a href="./logout.php">Logout</a>
                                    <a href="../Create_store/website_buildup.php">Dashboard</a>';
                                } else {
                                    echo '
                                    <a href="./login.php">Login</a>
                                    <a href="./register.php" >Register</a>';
                                }
                            ?>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a href="./Create_store/website_buildup.php" class="btn create-store-btn rounded-lg text-light" style="border:none; background: linear-gradient(90deg, #ff8c00, #ff6347); margin-left:2.3rem;">Create Store</a>
                    </li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="toggleMenu()">
                &#9776;
            </div>
        </div>
    </header>

    <section class="about-section">
        <div class="container-fluid d-flex flex-column full-height">
            <!-- <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SiteCraft</a>
                </div>
            </nav> -->
            <div class="w-100 p-lg-5 container mx-auto my-auto">
                <div class="text-center mb-4">
                    <h1>Log In</h1>
                    <p class="text-center">Don't have an account? <a href="./register.php">Sign Up</a></p>
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
                        <?php } ?>
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
    </section>

    <!-- Footer Start -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>About SiteCraft</h5>
                    <p class="text-center">SiteCraft is a leading website builder that empowers you to create stunning websites with ease. From customizable templates to advanced e-commerce integration, we have all you need to succeed online.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="../index.php" class="text-white">Home</a></li>
                        <li><a href="../aboutus.php" class="text-white">About</a></li>
                        <li><a href="../contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="../FAQs.php" class="text-white">FAQs</a></li>
                        <li><a href="../help.php" class="text-white">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div style="margin-top: 7rem;">
                <p>&copy; 2024 SiteCraft. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</div>  

<!-- ===== JS Files ===== -->
<script src="../Js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include Bootstrap and jQuery (optional, for dropdown) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>                  