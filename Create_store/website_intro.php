<?php

include('../Connection/connection.php');
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['logged_in'] != true) {
    header('Location: ../Auth/login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['user_id'];
    $category = $_POST['category'];
    $storeName = $_POST['storeName'];
    $template = $_POST['template_checked'];

    if (isset($_FILES['storeLogo']) && $_FILES['storeLogo']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['storeLogo']['tmp_name'];
        $fileName = $_FILES['storeLogo']['name'];
        $fileSize = $_FILES['storeLogo']['size'];
        $fileType = $_FILES['storeLogo']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions) && $fileSize < 5000000) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = '../User_Uploads/';
            $dest_path = $uploadFileDir . $newFileName;
            
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $stmt = $conn->prepare("INSERT INTO store (name, category, logo, template, created_by) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssii", $storeName, $category, $dest_path, $template, $id);
                
                if ($stmt->execute()) {
                    header('Location: ./template_selection.php');
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "There was an error moving the uploaded file.";
            }
        } else {
            echo "Upload failed. Allowed file types: " . implode(',', $allowedfileExtensions) . ". Max file size: 5MB.";
        }
    } else {
        echo "Error: " . $_FILES['storeLogo']['error'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Website Builder | SiteCraft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<style>
.top-bar {
            position: absolute;
            margin-top: 2.8rem;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* display: flex; */
            gap: 3rem;
            z-index: 10;
        }
        .top-bar .icon {
            cursor: pointer;
        }
        .top-bar .icon:hover {
            color: #007bff;
        }
        .hidden {
            display: none;
        }
</style>
<body>
<div class="container-fluid full-height">
    <div class="row h-100">
        <div class="col-12 col-lg-7 bg-light">
            <div class="navbar navbar-expand-lg navbar-light mb-5">
                <a href="#" class="navbar-brand fw-bold px-3">
                    SiteCraft
                </a>
            </div>
            <div class="container shadow-lg h-75 p-5 rounded position-relative">
                <form id="storeForm" method="POST" action="website_intro.php" enctype="multipart/form-data">
                    <div id="categorySection">
                        <h3 class="mb-4 fw-bold">Select a category of your store.</h3>
                        <div class="search-field row">
                            <div class="col-8">
                                <div class="dropdown custom-dropdown">
                                    <button class="btn border dropdown-toggle w-100 rounded-pill px-3" type="button" id="customSelect" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select a category 
                                    </button>
                                    <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="customSelect">
                                        <li><a class="dropdown-item" href="#" data-value="E-commerce Store">E-commerce Store</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="E-commerce Electronics Shop">E-commerce Electronics Shop</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="E-commerce Clothing Store">E-commerce Clothing Store</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="E-commerce Appliance Shop">E-commerce Appliance Shop</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="E-commerce Books Store">E-commerce Books Store</a></li>
                                    </ul>
                                </div>
                                <input type="hidden" id="customSelectValue" name="category">
                            </div>
                            <button type="button" class="btn btn-primary col-3 ms-4" id="continueButton">Continue</button>
                        </div>
                        <div class="image-sec py-3 mt-5 d-flex align-items-center justify-content-center">
                            <img class="rounded-4 shadow-lg border border-black" src="https://cdn.shopify.com/shopifycloud/brochure/assets/home/redesign2022/pos-2-small-2bceb2e9fd90de0e825252632b00f723978536c6c4535e44468dfc31a7cef8f0.webp" alt="image" style="width: 50%;">
                        </div>
                    </div>
                    <div id="nameSection" class="d-none">
                        <h3 class="mb-4 fw-bold">Enter the name of your store.</h3>
                        <div class="search-field row">
                            <div class="col-8">
                                <input type="text" class="form-control rounded-pill px-3" id="storeName" name="storeName" placeholder="Store Name">
                            </div>
                            <button type="button" class="btn btn-primary col-3 ms-4" id="continueNameButton">Continue</button>
                            <button type="button"class="btn border-black rounded-pill px-4 py-1 col-3 position-absolute bottom-0 start-0 mx-3 my-3"  id="backNameButton"><i class="bi bi-arrow-left me-3 mt-3"></i> Back</button>
                        </div>
                        <div class="image-sec py-3 mt-5 d-flex align-items-center justify-content-center">
                            <img class="rounded-4 shadow-lg border border-black" src="https://cdn.shopify.com/shopifycloud/brochure/assets/home/redesign2022/pos-2-small-2bceb2e9fd90de0e825252632b00f723978536c6c4535e44468dfc31a7cef8f0.webp" alt="image" style="width: 50%;">
                        </div>
                    </div>
                    
                    <div id="logoSection" class="d-none">
                        <h3 class="mb-4 fw-bold">Upload your store logo.</h3>
                        <div class="search-field row">
                            <div class="col-8">
                                <input type="file" class="form-control rounded-pill px-3" id="storeLogo" name="storeLogo" >
                            </div>
                            <button type="button" class="btn btn-primary col-3 ms-4" id="continueLogoButton">Continue</button>
                            <button type="button" class="btn border-black rounded-pill px-4 py-1 col-3 position-absolute bottom-0 start-0 mx-3 my-3" id="backLogoButton"><i class="bi bi-arrow-left me-3 mt-3"></i> Back</button>
                        </div>
                        <div class="image-sec py-3 mt-5 d-flex align-items-center justify-content-center">
                            <img class="rounded-4 shadow-lg border border-black" id="logoPreview" src="https://cdn.shopify.com/shopifycloud/brochure/assets/home/redesign2022/pos-2-small-2bceb2e9fd90de0e825252632b00f723978536c6c4535e44468dfc31a7cef8f0.webp" alt="image" style="width: 50%;">
                        </div>
                    </div>

                    <div id="templateSection" class="d-none">
                        <h3 class="mb-4 fw-bold">Pick the Website Template You Love</h3>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card shadow-sm position-relative" id="template1" >
                                    <input type="radio" class="input-radio" name="template_checked" value="vegefoods" id="radio1">
                                    <div class="custom-radio"></div>
                                    <img src="../Uploads/template-1.jpg" class="card-img-top template-image" alt="VegeFoods">
                                    <div class="card-body">
                                        <h5 class="card-title">VegeFoods Landing Page</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card shadow-sm position-relative" id="template2" >
                                    <input type="radio" class="input-radio" name="template_checked" value="giftos" id="radio2">
                                    <div class="custom-radio"></div>
                                    <img src="../Uploads/Template-2.PNG" class="card-img-top template-image" alt="Home Goods Store">
                                    <div class="card-body">
                                        <h5 class="card-title">Home Goods Store</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card shadow-sm position-relative" id="template3" >
                                    <input type="radio" class="input-radio" name="template_checked" value="3" id="radio3">
                                    <div class="custom-radio"></div>
                                    <img src="../Uploads/Template-3.PNG" class="card-img-top template-image" alt="AI Company">
                                    <div class="card-body">
                                        <h5 class="card-title">Restaurant</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-next d-flex align-items-center justify-content-between px-5 py-2 rounded-pill fw-bold position-absolute bottom-0 end-0 mx-3 my-3" disabled >Finish</button>
                        <button type="button" class="btn border-black rounded-pill px-4 py-1 col-3 position-absolute bottom-0 start-0 mx-3 my-3" id="backTemplateButton"><i class="bi bi-arrow-left me-3 mt-3"></i> Back</button>
                    </div>
                </form>
                <div class="back position-absolute bottom-0 start-0 mx-3 my-3">
                    <button type="button" class="btn rounded-pill border shadow-lg px-4 fw-bold d-none" id="backButton"><i class="bi bi-arrow-left me-3"></i>Back</button>
                </div>
            </div>
        </div>
        <div class="name_logo_cont col-lg-5 d-none d-lg-flex align-items-center justify-content-center bg-secondary position-relative overflow-hidden">
            <div class="iframe-cont-old w-100 h-100 d-flex align-items-center justify-content-center">
                <iframe class="rounded-3 shadow-lg previewFrame" id="previewFrame" src="./preview.php" style="width:95%; height: 85%; border: none;"></iframe>
            </div>
      
                <!-- Iframe Container -->
                <div class="iframe-container template_sec_cont d-none">
                    <div class="top-bar">
                        <div class="icon" id="desktopIcon"><i class="bi bi-laptop"></i></div>
                        <div class="icon" id="mobileIcon"><i class="bi bi-phone"></i></div>
                    </div>

                    <iframe class="rounded-3 shadow-lg templateFrame" id="templateFrame1" src="../Templates/vegefoods/index.html" style="border: none;"></iframe>

                    <iframe class="rounded-3 shadow-lg templateFrame d-none" id="templateFrame2" src="../Templates/giftos/index.html" style="border: none;"></iframe>

                    <iframe class="rounded-3 shadow-lg templateFrame d-none" id="templateFrame3" src="../Templates/yamifood/index.html" style="border: none;"></iframe>
            </div>

            <div class="top-bar">
                <div class="icon hidden" id="closeIcon"><i class="bi bi-x-circle"></i></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="../Js/script.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const desktopIcon = document.getElementById('desktopIcon');
    const mobileIcon = document.getElementById('mobileIcon');
    const closeIcon = document.getElementById('closeIcon');
    const templateFrames = document.querySelectorAll('.templateFrame');

    desktopIcon.addEventListener('click', function() {
        templateFrames.forEach(frame => {
            if (!frame.classList.contains('d-none')) {
                const templateSrc = frame.getAttribute('src');
                window.open('desktop_view.php?src=' + encodeURIComponent(templateSrc), '_blank');
            }
        });
    });

    mobileIcon.addEventListener('click', function() {
        templateFrames.forEach(frame => {
            if (!frame.classList.contains('d-none')) {
                const templateSrc = frame.getAttribute('src');
                window.open('mobile_view.php?src=' + encodeURIComponent(templateSrc), '_blank');
            }
        });
    });

    closeIcon.addEventListener('click', function() {
        window.history.back();
    });

    // Show/Hide close icon based on view mode
    const urlParams = new URLSearchParams(window.location.search);
    const viewMode = urlParams.get('viewMode');

    if (viewMode === 'desktop' || viewMode === 'mobile') {
        closeIcon.classList.remove('hidden');
    }
});
</script>
</body>
</html>