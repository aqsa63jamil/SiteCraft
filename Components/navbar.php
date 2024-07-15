<?php


$user_id = $_SESSION['user_id'];

if (isset($_POST['logout'])) {
    
    $_SESSION = array();


    session_destroy();


    header("Location: ../Auth/login.php");
    exit;
}



$sql = "SELECT * FROM store WHERE created_by = '$user_id'";

$result = $conn->query($sql);



?>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SiteCraft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="allSitesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            All Sites
                        </a>
                        <div class="dropdown-menu dropdown-menu-custom create-website" aria-labelledby="allSitesDropdown">
                            <a href="./website_intro.php" class="create-site">+ Create New Site</a>
                            <?php
                            
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <a class="d-flex py-2 align-items-center justify-content-center" href="./website_buildup.php">
                                        <div class="row  mt-3 mx-1 shadow-sm rounded-3 ">
                                            <div class="col-3">
                                                <img class="w-100" src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/site-defualt-icon.png/v1/fit/w_370,h_370/file.jpg" alt="website" />
                                            </div>
                                            <div class="col-9 d-flex flex-column">
                                                <h6 class="mb-0 ">'.$row['name'].'</h6>
                                                <p class="mt-0 mb-0 text-secondary">';
                                                if ($row['published'] == 0) {
                                                    echo 'Not Published';
                                                } else {
                                                    echo 'Published';
                                                }
                                                echo '</p>
                                            </div>
                                            </div>
                                            </a>
                                    ';
                                }
                            } else {
                                echo '
                                    <div class="no-sites">
                                        <p>No sites found</p>
                                        <p>You don\'t have any sites to show at the moment. Create a new one to see it here.</p>
                                    </div>
                                ';
                            }
                            ?>
                            
                            <div class="dropdown-divider"></div>
                            <div class="all-sites-link">
                                <a href="./website_buildup.php">Go to All Sites</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="exploreDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="hireDropdown">
                            Hire a Professional
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="helpDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Help
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="helpDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Notifications
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-notification dropdown-menu-custom" aria-labelledby="notificationDropdown">
                            <div class="container notification">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-bell-fill" style="font-size:40px;"></i>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p>This is where you’ll see all your notifications from site.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="accountDropdown">
                            <div class="row">
                                <div class="col-2 d-flex align-items-center justify-content-center"><img width="30" height="30" src="https://img.icons8.com/officel/30/person-male-skin-type-1-2.png" class="rounded-circle" alt="Profile"></div>
                                <div class="col-10">
                                    <h6 class="m-0">Zohaib Khan</h6>
                                    <p class="m-0">Killerzobi893@gmail.com</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-8">
                                    <a href="#" class="nav-link m-0 p-0 d-flex gap-2 align-items-center justify-content-center"><i class="bi bi-gear"></i>Account Setting</a>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn d-none d-sm-block text-primary rounded-pill ms-auto px-2 py-0 border border-primary"><span>Log Out</span></button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav nav-icons">
                    
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link dropdown-toggle me-3" href="#" id="bellDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell position-relative">
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-notification dropdown-menu-custom" aria-labelledby="bellDropdown">
                            <div class="header p-1">
                                <h5>Notifications</h5>
                            </div>
                            <div class="dropdown-divider mb-3"></div>
                            <div class="container notification">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-bell-fill" style="font-size:40px;"></i>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p>This is where you’ll see all your notifications from site.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item profile-icon d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img width="30" height="30" src="https://img.icons8.com/officel/30/person-male-skin-type-1-2.png" class="rounded-circle" alt="Profile"></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="profileDropdown">
                            <div class="row">
                                <div class="col-2 d-flex align-items-center justify-content-center"><img width="30" height="30" src="https://img.icons8.com/officel/30/person-male-skin-type-1-2.png" class="rounded-circle" alt="Profile"></div>
                                <div class="col-10">
                                    <h6 class="m-0"><?php echo $_SESSION['user_name'];?></h6>
                                    <p class="m-0"><?php echo $_SESSION['user_email'];?></p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-8">
                                    <a href="#" class="nav-link m-0 p-0 d-flex gap-2 align-items-center justify-content-center"><i class="bi bi-gear"></i>Account Setting</a>
                                </div>
                                <div class="col-4">
                                    <form method="post">
                                        <button type="submit" name="logout" class="btn d-none d-sm-block text-primary rounded-pill ms-auto px-2 py-0 border border-primary"><span>Log Out</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
