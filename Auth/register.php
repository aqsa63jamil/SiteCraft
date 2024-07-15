<?php

include('../Connection/connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            header("location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <h1>Sign Up</h1>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="row d-flex align-items-center justify-content-center px-lg-5">
                <div class="col-lg-6 col-12 p-4 border-divider px-lg-5 position-relative">
                    <div class="column-divider position-absolute d-none d-lg-flex"><p>or</p></div>
                    <form method="post">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control border-0 border-bottom no-outline" id="username" name="username" placeholder="Zohaib Khan" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control border-0 border-bottom no-outline" id="email" name="email" placeholder="name@example.com" required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control border-0 border-bottom no-outline" id="password" name="password" placeholder="@!20iandnjaskdn/^*^" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control border-0 border-bottom no-outline" id="confirmPassword" name="confirmPassword" placeholder="@!20iandnjaskdn/^*^" required>
                            <label for="confirmPassword">Confirm Password</label>
                            <div class="invalid-feedback">Passwords do not match.</div>
                            <div class="valid-feedback">Passwords match.</div>
                        </div>
                        <button type="submit" class="btn d-none d-lg-block text-primary rounded-pill px-3 fw-bold border border-primary">Sign Up</button>
                        <div class="container-sm d-lg-none d-flex align-items-center justify-content-center gap-3 mt-5">
                            <button class="btn btn-primary rounded-pill px-3 fw-bold">Sign Up</button>
                            <span>OR</span>
                            <button class="btn rounded-circle border border-primary">G</button>
                            <button class="btn rounded-circle border border-primary">G</button>
                        </div>

                    </form>
                </div>
                
                <div class="col-lg-6 col-12 p-4 px-lg-5 d-none d-lg-flex align-items-center justify-content-center">
                    <button class="btn btn-primary text-white">Continue with Google</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');

        confirmPasswordInput.addEventListener('input', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            } else {
                confirmPasswordInput.setCustomValidity('Passwords do not match.');
            }
        });

        passwordInput.addEventListener('input', function() {
            confirmPasswordInput.setCustomValidity('');
        });

        passwordInput.addEventListener('blur', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            }
        });

        confirmPasswordInput.addEventListener('blur', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            }
        });
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>
