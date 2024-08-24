<?php
 session_start();
 include "./Connection/connection.php"
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SiteCraft</title>
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

   <!-- About Us Content -->
    <main class="main-content">
        <section class="about-section">
            <div class="container-fluid">
                <!-- Introduction Section -->
                <div class="content row align-items-center">
                    <div class="col-md-6">
                        <img src="./Uploads/About us.png" class="full-width-img reveal reveal-left" alt="Our Team">
                    </div>
                    <div class="col-md-6">
                        <h3 class="AH reveal reveal-right">Welcome to SiteCraft</h3>
                        <div class="text-box reveal reveal-right">
                            <p class="para">
                                At SiteCraft, we believe that building a website should be easy, accessible, and affordable for everyone. Our platform empowers users to create stunning websites with minimal effort, leveraging a wide range of templates, tools, and features to bring your vision to life.
                            <br>
                                Whether you are a small business owner, a creative professional, or an entrepreneur, SiteCraft provides the perfect solution for all your website needs. Our mission is to provide an intuitive and powerful website builder that caters to the needs of users of all skill levels.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission and Vision Section -->
                <div class="row my-5">
                    <div class="col-md-12 mission-vision-box reveal reveal-left">
                        <h3>Our Mission</h3>
                        <p>
                            At SiteCraft, our mission is to revolutionize the world of web design by making it universally accessible and incredibly user-friendly. We believe that creating a stunning, functional online store shouldn't be reserved for those with technical expertise or deep pockets. Our goal is to empower individuals and businesses of all sizes to bring their visions to life effortlessly. We strive to provide a comprehensive suite of tools and resources designed to simplify the web design process, ensuring that anyone, from aspiring entrepreneurs to established enterprises, can create a professional and engaging online presence. By offering an intuitive platform with customizable templates, advanced features, and reliable support, we aim to eliminate the barriers of entry to online success. Our mission extends beyond just providing a service; we are dedicated to fostering a community where creativity and innovation flourish, and where every user can achieve their digital goals with confidence and ease. We are committed to being the catalyst for your online success, helping you build a beautiful store that stands out in the digital marketplace and drives your business forward.
                        </p>
                    </div>

                    <div class="col-md-6 video-container">
                        <video autoplay loop muted playsinline src="Uploads/about.mp4" class="about-video reveal reveal-left"></video>
                    </div>

                    <div class="col-md-6 vision-box reveal reveal-right">
                        <h3>Our Vision</h3>
                        <p>
                            At SiteCraft, we envision a future where building an online store is not just a privilege for the tech-savvy but a reality for everyone. We aspire to break down the barriers of web development, allowing individuals and businesses of all sizes to effortlessly create and manage their online presence. Our goal is to transform the way people approach e-commerce by providing an intuitive, user-friendly platform that eliminates the need for costly developers and complex software. We aim to empower our users with a suite of robust tools and features that are not only easy to use but also highly customizable to fit their unique needs. Whether you're an entrepreneur with a groundbreaking idea or a small business owner looking to expand your reach, SiteCraft is committed to being your trusted partner in online store creation. We envision a world where our platform serves as a catalyst for success, providing unparalleled flexibility, innovative solutions, and dedicated support to help you achieve your business goals and thrive in the digital marketplace.
                        </p>
                    </div>
                    <!-- Background Shapes -->
                    <div class="background-shapes1">
                        <div class="circle1 shape1"></div>
                        <div class="square1 shape2"></div>
                        <div class="circle1 shape3"></div>
                        <div class="square1 shape4"></div>
                    </div>
                </div>

                <!-- Values and Offers Section -->
                <div class="effect row my-5">
                    <div class="col-md-12 background-shapes2">
                    <div class="values">
                        <h3 class="reveal reveal-left">Our Values</h3>
                        <ul>
                            <li><strong>Innovation:</strong> We constantly innovate to bring the best features and tools to our users.</li>
                            <li><strong>User-Centric:</strong> Our platform is designed with the user in mind, ensuring a seamless and intuitive experience.</li>
                            <li><strong>Affordability:</strong> We offer competitive pricing to make web design accessible to everyone.</li>
                            <li><strong>Support:</strong> Our dedicated support team is always here to help you with any questions or issues.</li>
                            <li><strong>Community:</strong> We foster a community of users who can share ideas, tips, and support each other.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 background-shapes2">
                    <div class="offers">
                        <h3>What We Offer</h3>
                        <p>
                            At SiteCraft, we offer a comprehensive suite of tools and features to help you build and manage your Store:
                        </p>
                        <ul>
                            <li><strong>Customizable Templates:</strong> Choose from a variety of professionally designed templates that you can easily customize to fit your brand.</li>
                            <li><strong>Drag-and-Drop Builder:</strong> Our intuitive drag-and-drop builder makes it easy to create and edit your website without any coding skills.</li>
                            <li><strong>E-commerce Integration:</strong> Set up an online store with ease using our powerful e-commerce tools.</li>
                            <li><strong>SEO Tools:</strong> Improve your website's visibility on search engines with our built-in SEO features.</li>
                            <li><strong>Responsive Design:</strong> Ensure your website looks great on all devices with our fully responsive templates.</li>
                            <li><strong>24/7 Support:</strong> Get round-the-clock support from our dedicated team to help you with any issues or questions.</li>
                        </ul>
                    </div>
                </div>

                <!-- Testimonials Section -->
                <div class="effect row testimonials-section">
                    <div class="col-12">
                        <h3>Testimonials</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"SiteCraft has transformed the way I do business online. The platform is easy to use and the support team is incredibly helpful."</p>
                                <h5 class="card-title">- Sarah Johnson</h5>
                                <p class="card-text"><small>Entrepreneur</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"I built my website in just a few hours with SiteCraft. The templates are beautiful and the customization options are endless."</p>
                                <h5 class="card-title">- Michael Lee</h5>
                                <p class="card-text"><small>Freelancer</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"The e-commerce integration made it so easy to set up my online store. I've seen a significant increase in sales since using SiteCraft."</p>
                                <h5 class="card-title">- Anna Williams</h5>
                                <p class="card-text"><small>Small Business Owner</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <section class="promo-section position-relative">
                    <div class="container reveal reveal-right">
                        <div class="row align-items-center">
                            <div class="col-md-6 promo-text">
                                <h2>Ready to Create Your Website?</h2>
                                <p>Get started with SiteCraft today and build your dream website in no time!</p>
                                <a href="<?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? './Create_store/website_buildup.php' : './Auth/login.php'; ?>">
                                    <button id="learnMoreBtn" class="btn btn-primary">Start Building</button>
                                </a>
                            </div>
                            <div class="col-md-6 promo-image">
                                <img src="Uploads/promo.PNG" alt="SiteCraft Interface">
                            </div>
                        </div>
                    </div>
                    <!-- Background Shapes -->
                    <div class="shape-circle"></div>
                    <div class="shape-square"></div>
                    <div class="shape-rectangle"></div>
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