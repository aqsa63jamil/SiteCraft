<?php
include("../Connection/connection.php");
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['logged_in'] != true) {
    header('Location: ../Auth/login.php');
    exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../Styles/styles.css">
  </head>
  <body>
    
      <?php include("../Components/navbar.php");?>
      <div class="container-fluid">
    <div class="row secondary-nav py-2 bg-light">
        <div class="col-12 col-lg-6 ">
            <div class="row d-flex align-items-center justify-content-center justify-content-lg-start fw-bold gap-3">
            <p class=" col-2 col-lg-1 mt-3">Page: </p>
            <select class="col-9 col-lg-6 rounded px-4 py-1 border" name="pages" id="pageSelector">
                <option value="" disabled selected>Select a page</option>
                <?php
                $dir = '../Templates/vegefoods';
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..' && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                        echo "<option value='{$file}'>{$file}</option>";
                    }
                }
                ?>
            </select>
            </div>
        </div>
        <form method="POST" class="col-12 col-lg-6 d-flex align-items-center justify-content-between justify-content-lg-end ">
            <button type="submit" class="px-3 py-1 border-0 border-lg-start bg-light fw-bold">Save</button>
            <button type="submit" class="px-3 py-1 border-0 bg-light fw-bold text-primary">Preview</button>
            <button type="submit" class="btn btn-primary px-3 py-1 rounded-pill fw-bold">Publish</button>
        </form>
    </div>
</div>

<div class="container-fluid">
    <div class="row mt-4" style="height: 75vh;">
        <div class="col-3">
            <h5>Change Theme</h5>
            <ul class="list-group">
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme1.css">Placid</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme2.css">Fashionable</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme3.css">Bohemian</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme4.css">Mature</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme5.css">Tangy</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme6.css">Vivid</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme7.css">Creamy</button></li>
                <li class="list-group-item"><button class="btn  theme-btn" data-theme="theme8.css">Laid-back</button></li>
            </ul>
        </div>
        <div class="col-9">
            <!-- Content Section -->
            <iframe class="rounded-3 shadow-lg" id="previewFrame" src="../Templates/vegefoods/index.html" style="width: 100%; height: 100%; border: none;"></iframe>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pageSelector').on('change', function() {
            var selectedPage = $(this).val();
            var newSrc = '../Templates/vegefoods/' + selectedPage;
            $('#previewFrame').attr('src', newSrc);
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>