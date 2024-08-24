<?php
session_start();
include "./Connection/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | SiteCraft</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <link rel="stylesheet" href="./Styles/styles.css">
     <link rel="stylesheet" href="./Styles/website_buildup.css">
     <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main-container">
        <!-- Header -->
        <header class=" py-3">
            <div class="container d-flex justify-content-between align-items-center">
                <h1 class="text-dark" style="font-weight:bold;"><span>S</span>ite<span>C</span>raft</h1>
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="./aboutus.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link text-dark" onmouseover="this.style.color='#ff6347';" onmouseout="this.style.color='#000';">Contact</a>
                        </li>
                        <div class="dropdown">
                            <button class="dropbtn">
                                Account
                            </button>
                            <div class="dropdown-content">
                                <?php
                                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                                    echo '
                                    <a href="./Auth/logout.php">Logout</a>
                                    <a href="./Create_store/website_buildup.php" >Dashboard</a>';
                                } else {
                                    echo '
                                    <a href="./Auth/login.php" >Login</a>
                                    <a href="./Auth/register.php" >Register</a>';
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

        <main class="main-content">
            <!-- Contact Us Content -->
            <section class="contact-section1">
                <div class="container-fluid">
                    <div class="content row align-items-center">
                        <div class="col-md-6">
                            <img src="Uploads/contact.png" alt="Contact Us" class="full-width-img reveal reveal-left">
                        </div>
                        <div class="col-md-6">
                            <h3 class="CH reveal reveal-right">Get in Touch with Us!</h3>
                            <div class="text-box reveal reveal-right">
                                <p class="para">
                                    We would love to hear from you! Whether you have a question about features, pricing, need a demo, or anything else, our team is ready to answer all your questions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-md-6 form-container reveal reveal-left">
                            <form action="contact-form-handler.php" method="POST" class="contact-form">
                                <h2 class="NS">Need Support</h2>

                                <!--inputs-->
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control border-0 border-bottom no-outline" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="email" class="form-control border-0 border-bottom no-outline" id="email" name="email" placeholder="name@example.com" required>
                                    <label for="email">Email address</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control border-0 border-bottom no-outline" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input class="form-control border-0 border-bottom no-outline" id="message" name="message" placeholder="Your Message" rows="5" required>
                                    <label for="message">Message</label>
                                </div>
                                <button type="submit" class="btn2" name="submit">Send Message</button>
                            </form>
                        </div>
                        <div class="map-container col-md-4 reveal reveal-right">
                            <div class="mapBg reveal reveal-right"></div>
                            <div class="map reveal reveal-right">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924237.7101196521!2d66.49593501614456!3d25.192983602435174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1723155305168!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
               
                    <div class="contactMethod reveal reveal-left">
                        <div class="method">
                            <i class="fa-solid fa-location-dot contactIcon"></i>
                            <article class="text">
                                <h3 class="MH">Address </h3>
                                <p class="CP">1234 Main Street, Anytown, Karachi</p>
                            </article>
                        </div>

                        <div class="method">
                            <i class="fa-solid fa-envelope contactIcon"></i>
                            <article class="text">
                                <h3 class="MH">Email </h3>
                                <p>contact@sitecraft.com</p>
                            </article>
                        </div>

                        <div class="method">
                            <i class="fa-solid fa-phone contactIcon"></i>
                            <article class="text">
                                <h3 class="MH">Phone </h3>
                                <p>(92) 456-7890</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer Start -->
        <footer class="bg-dark text-white py-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About SiteCraft</h5>
                        <p>SiteCraft is a leading website builder that empowers you to create stunning websites with ease. From customizable templates to advanced e-commerce integration, we have all you need to succeed online.</p>
                    </div>
                    <div class="col-md-4">
                    <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="./index.php" class="text-white">Home</a></li>
                            <li><a href="./aboutus.php" class="text-white">About</a></li>
                            <li><a href="./contact.php" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Support</h5>
                        <ul class="list-unstyled">
                            <li><a href="./FAQs.php" class="text-white">FAQs</a></li>
                            <li><a href="./help.php" class="text-white">Help</a></li>
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

<script>
        //scroll animation
       document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                    } else {
                        entry.target.classList.remove('reveal-active'); 
                    }
                });
            }, { threshold: 0.1 });

            reveals.forEach(reveal => {
                observer.observe(reveal);
            });
        });
    </script>

      <!-- ===== JS Files ===== -->
<script src="./Js/script.js"></script>
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