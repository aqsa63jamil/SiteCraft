<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form">
                    <form action="forgot-password.php" method="POST" autocomplete="">
                        <h2 class="text-center" style="font-weight: bold;  margin-bottom:3rem;">Forgot Password</h2>
                        <p class="text-center">Enter your email address</p>
                        <?php
                            if(count($errors) > 0){
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php 
                                        foreach($errors as $error){
                                            echo $error;
                                        }
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control button btn-primary mt-5" type="submit" name="check-email" value="Continue">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>