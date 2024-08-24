<?php
 session_start();
 include "./Connection/connection.php"
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support | SiteCraft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

        <!-- Help Content -->
        <main class="main-content">
            <section class="help-section">
                <div class="container-fluid">
                    <div class="content row align-items-center">
                        <div class="col-md-6">
                            <img src="Uploads/help.png" alt="Help and Support" class="full-width-img reveal reveal-left">
                        </div>
                        <div class="col-md-6">
                            <h3 class="HC reveal reveal-right">Welcome to SiteCraft Help Center</h3>
                            <div class="text-box reveal reveal-right">
                            <p class="para">
                                At SiteCraft, we are committed to providing our users with the best support possible. Whether you're just getting started or need advanced help, our comprehensive Help Center has everything you need to succeed.
                            </p>
                            </div>
                        </div>
                    </div>

                     <!-- FAQ Section -->
                    <div class="row faq reveal reveal-right position-relative">
                        <div class="background-shapes reveal reveal-left">
                            <div class="shape shape-circle"></div>
                            <div class="shape shape-square"></div>
                            <div class="shape shape-rectangle"></div>
                        </div>
                        <div class="col-md-12 reveal reveal-left">
                            <h3>Frequently Asked Questions</h3>
                            <ul>
                                <li><strong>How do I create an account?</strong> <br> To create an account, click on the "Register" button on the top right corner and fill out the registration form.</li>
                                <li><strong>What should I do if I forget my password?</strong> <br> If you forget your password, click on the "Forgot Password" link on the login page. Enter your email address, and you'll receive instructions to reset your password.</li>
                                <li><strong>How can I customize my website's template?</strong> <br> You can customize your stores template by selecting "Customize" from your dashboard. You’ll have options to change colors, fonts, and layout styles to match your brand.</li>
                                <li><strong>How do I set up an online store?</strong> <br> Our e-commerce integration makes it simple to set up an online store. Just add your products, set prices, and start selling!</li>
                                <li><strong>How do I manage my store's products?</strong> <br> In the dashboard, navigate to the "Manage Products" section where you can add, edit, or remove products, and set pricing and descriptions.</li>
                                <li><strong>How do I contact support?</strong> <br> You can contact our support team by clicking on the "Contact Us" link and filling out the support form. We are available 24/7 to assist you.</li>
                            </ul>
                        </div>
                    </div>

                     <!-- Contact Section -->
                    <div class="contact-section reveal reveal-right position-relative">
                        <div class="background-shapes">
                            <div class="shape shape-circle"></div>
                            <div class="shape shape-square"></div>
                            <div class="shape shape-rectangle"></div>
                        </div>
                        <h3>Need More Help?</h3>
                        <p>If you need further assistance, please don't hesitate to reach out to our support team.</p>
                            <li>Email: support@sitecraft.com</li>
                            <li>Phone: +1 234 567 890</li>
                            <li>Office Hours: Mon-Fri, 9:00 AM - 6:00 PM (EST)</li>
                            <br><br>
                        <a href="contact.php">Contact Us</a>
                    </div>
                    <section class="tips-section reveal reveal-left position-relative">
                        <h2>Helpful Tips</h2>
                        <ul>
                            <li>Make sure to regularly update your website to keep it fresh and engaging for visitors.</li>
                            <li>Utilize SEO best practices to improve your site's visibility on search engines.</li>
                            <li>Test your website on various devices to ensure it’s mobile-friendly.</li>
                            <li>Back up your site frequently to prevent data loss.</li>
                        </ul>
                    </section>
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
                            <!-- <li><a href="#" class="text-white">Services</a></li> -->
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
                     entry.target.classList.remove('reveal-active'); // Remove active class when element is not intersecting
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