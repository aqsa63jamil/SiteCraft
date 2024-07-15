<!-- template_with_top_bar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template with Top Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .top-bar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top-bar .icon {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="icon" id="desktopIcon"><i class="bi bi-laptop"></i></div>
        <div class="icon" id="mobileIcon"><i class="bi bi-phone"></i></div>
    </div>
    <iframe src="../Templates/giftos/index.html" style="width: 100%; height: calc(100vh - 40px); border: none;"></iframe>

    <script>
        document.getElementById('desktopIcon').addEventListener('click', function() {
            window.location.href = 'desktop_view.html';
        });

        document.getElementById('mobileIcon').addEventListener('click', function() {
            window.location.href = 'mobile_view.html';
        });
    </script>
</body>
</html>