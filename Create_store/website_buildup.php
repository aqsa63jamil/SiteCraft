<?php
session_start();
include("../Connection/connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['logged_in'] != true) {
    header('Location: ../Auth/login.php');
    exit();
}
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM store WHERE created_by = '$user_id'";

$result = $conn->query($sql);

$rows = array(); // Initialize $rows as an empty array

if ($result->num_rows > 0) {
    while($item = $result->fetch_assoc()){
        $rows[] = $item;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Theme Selector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<body>
    <?php include('../Components/navbar.php');?>
    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-lg-6 ">
                <h3>Sites</h3>
                <p>View and manage all your websites in one place.</p>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-end">
                <a href="./website_intro.php" class=" w-100 d-block d-lg-none"><button class="btn btn-primary rounded-pill px-3 w-100"><i class="bi bi-plus-lg me-2"></i>Create New Site</button></a>    
                <a href="./website_intro.php"><button class="btn btn-primary rounded-pill px-3 d-none d-lg-block"><i class="bi bi-plus-lg me-2"></i>Create New Site</button></a>    
            </div>
        </div>

        <div class="row sites-container rounded bg-light pb-3">
            <div class="col-12 d-flex align-items-center justify-content-end p-3">
                <div class="filter-cont form-control rounded-pill">
                    <i class="bi bi-search me-3"></i>
                    <input type="text" class="border border-0" placeholder="Search">
                </div>
            </div>
            <div class="dropdown-divider divider mb-3"></div>
            <div class="row items">
                <?php
                   foreach ($rows as $row) {
                        echo'
                            <div class="col-12 col-md-4 col-lg-3 mb-3 item ">
                        <div class="card">
                            <img src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/site-defualt-icon.png/v1/fit/w_370,h_370/file.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <h5 class="card-title">'.$row['name'].'</h5>
                                        <span>';
                                        if ($row['published'] == 0) {
                                            echo 'Not Published';
                                        } else {
                                            echo 'Published';
                                        } 
                                        echo'</span>
                                    </div>
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="options border border-primary rounded-circle" id="site-options" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <form method="POST">
                                        <div class="dropdown-menu dropdown-options" aria-labelledby="site-options">
                                             <a href="#" class="dropdown-item"><i class="bi bi-gear-wide-connected me-3"></i></i>Edit</a>
                                             <a href="#" class="dropdown-item"><i class="bi bi-fonts me-3"></i>Rename</a>
                                             <a href="#" class="dropdown-item"><i class="bi bi-eye-fill me-3"></i>Preview</a>
                                             <a href="delete_store.php?id='.$row['id'].'" class="dropdown-item  text-danger"><i class="bi bi-trash me-3"></i>Delete</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>