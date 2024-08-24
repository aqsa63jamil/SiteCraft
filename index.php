<?php
 session_start();
include "./Connection/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiteCrat-Home Page</title>
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
        
    <main class="main-content">
        <section id="home" class="home-section sec-1">
            <div class="content">
                <div class="left">
                    <h1 class="reveal reveal-left">The Ultimate <br> <span class="automated-words"></span><br>Store Builder</h1>
                    <p class="reveal reveal-left">Trusted by beginners, marketers & professionals;<br>Built with usability and performance in mind.</p>
                    <a href="<?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? './Create_store/Dashboard.php.php' : './Auth/login.php'; ?>"><button id="learnMoreBtn" class="btn btn-primary reveal reveal-left">Start Building</button></a>
                </div>
                <div class="right">
                    <img src="Uploads/homepage.png" alt="Website Builder" class="reveal reveal-right">
                </div>
            </div>
        </section>

        <!--About us -->
        <section id="about" class="sec-2 text-center py-5 position-relative">
            <div class="about-container">
                <h2 class="reveal reveal-left">About Us</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 position-relative">
                         <!-- Background Shape -->
                        <div class="background-shape1 circle1"></div>
                        <video autoplay loop muted playsinline src="Uploads/about-us.mp4" class="about-video reveal reveal-left" style="width:90%;  box-shadow: 0 8px 16px rgba(0,0,0,0.2); margin-bottom:3rem;"></video>
                    </div>
                    <div class="col-md-6">
                        <p class="reveal reveal-right">
                            Welcome to SiteCraft, your ultimate solution for creating stunning websites effortlessly. Our platform empowers you to build professional, creative, and business websites with ease. Whether you're a small business owner, a creative professional, or anyone in between, SiteCraft provides all the tools you need to design and launch your website quickly and efficiently.
                        </p>
                        <p class="reveal reveal-right">
                            Our mission is to provide an intuitive and powerful website builder that caters to the needs of all users, from beginners to advanced developers. We offer a wide range of templates and customization options, ensuring that your website stands out and reflects your unique style and brand.
                        </p>
                        <p class="reveal reveal-right">
                            Join thousands of satisfied users who have successfully created their websites with SiteCraft. Explore our features, get inspired by our templates, and start building your dream website today!
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4  position-relative">
                        <!-- Background Shape -->
                        <div class="background-shape1 square1"></div>
                        <div class="card reveal reveal-left">
                            <img src="Uploads/easy-to-use.webp" class="card-img-top" alt="Card Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Easy to Use</h5>
                                <p class="card-text">Our intuitive drag-and-drop interface makes it simple for anyone to create a beautiful website without any coding knowledge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <!-- Background Shape -->
                        <div class="background-shape1 rectangle1"></div>
                        <div class="card reveal reveal-left">
                            <img src="Uploads/templates.PNG" class="card-img-top" alt="Card Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Customizable Templates</h5>
                                <p class="card-text">Choose from a variety of professionally designed templates and customize them to match your unique style and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <!-- Background Shape -->
                        <div class="background-shape1 circle1"></div>
                        <div class="card reveal reveal-left">
                            <img src="Uploads/seo-tools.png" class="card-img-top" alt="Card Image 3">
                            <div class="card-body">
                                <h5 class="card-title">Powerful Features</h5>
                                <p class="card-text">From e-commerce capabilities to SEO tools, SiteCraft offers all the features you need to create a fully functional and successful website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us end-->

        <!-- Service Start -->
        <section id="services" class="sec-3 bg-light text-center py-5">
            <div class="container">
                <h2 class="reveal reveal-left">Our Services</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">Customizable Templates</h3>
                            <p class="card-text">Choose from a wide range of professional templates and customize them to suit your brand and style effortlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">Drag-and-Drop Builder</h3>
                            <p class="card-text">Easily create and edit your website with our intuitive drag-and-drop builder, no coding skills required.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">E-Commerce Integration</h3>
                            <p class="card-text">Set up an online store with ease using our comprehensive e-commerce features and tools.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">SEO Tools</h3>
                            <p class="card-text">Improve your website’s visibility with built-in SEO tools to help you rank higher on search engines.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">Responsive Design</h3>
                            <p class="card-text">Ensure your website looks great on all devices with our fully responsive design features.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-5 rounded reveal reveal-right">
                            <h3 class="card-title">24/7 Support</h3>
                            <p class="card-text">Get round-the-clock support from our dedicated team to help you with any issues or questions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- Service End -->

        <!--all in one start -->
        <section id="all-in-one" class="sec-4 text-center py-5 position-relative">
            <div class="all-in-one-container">
                <h2 class="reveal reveal-left">All-In-One Website Builder</h2>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card reveal reveal-left">
                            <img src="Uploads/build-websites.PNG" class="card-img-top-d" alt="Card Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Prebuilt Websites</h5>
                                <p class="card-text">
                                Prebuilt websites are designed to save you time. Import with a few clicks & customize it to suit your requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card reveal reveal-left">
                            <img src="Uploads/Mobile-friendly.PNG" class="card-img-top-d" alt="Card Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Mobile Friendly</h5>
                                <p class="card-text">
                                SiteCraft is 100% fluid & responsive across all device types, from mobile to desktop.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card reveal reveal-left">
                            <img src="Uploads/Online-store-builder.PNG" class="card-img-top-d" alt="Card Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Online Store Builder</h5>
                                <p class="card-text">
                                SiteCraft is allowing you to build successful online stores to sell anything online.</p>
                            </div>
                        </div>
                    </div>
                    <a href=""><button id="learnMoreBtn" class="btn1 btn-primary reveal reveal-left">Start Building</button></a>
                </div>
            </div>
            <!-- Background Shapes -->
            <div class="shape-circle"></div>
            <div class="shape-square"></div>
            <div class="shape-rectangle"></div>
        </section>
        <!--all in one end-->

        <!-- FAQs Section -->
        <section id="faqs" class="sec-5 py-5">
            <div class="container">
                <h2 class="reveal reveal-left">Frequently Asked Questions</h2>
                <div class="accordion accordion-flush reveal reveal-right" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h5 class="mb-0 accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is SiteCraft?
                            </button>
                        </h5>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                SiteCraft is a leading website builder that empowers you to create stunning websites with ease. From customizable templates to advanced e-commerce integration, we have all you need to succeed online.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="mb-0 accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How much does it cost to use SiteCraft?
                            </button>
                        </h5>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                SiteCraft offers various pricing plans to suit different needs and budgets. You can choose from our free plan or upgrade to one of our premium plans for additional features and capabilities.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="mb-0 accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Do I need any technical skills to use SiteCraft?
                            </button>
                        </h5>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                No, you do not need any technical skills to use SiteCraft. Our platform is designed to be user-friendly and intuitive, allowing anyone to create a professional-looking website without any coding knowledge.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="mb-0 accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Can I integrate e-commerce features into my SiteCraft website?
                            </button>
                        </h5>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes, SiteCraft offers advanced e-commerce integration, allowing you to set up an online store, manage products, process payments, and more. Our platform supports various e-commerce features to help you run a successful online business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- Contact Section Start -->
       <section id="contact" class="sec-6 text-center py-5 position-relative">
            <div class="container">
            <h2 class="reveal reveal-left">Contact Us</h2>
                <form id="contactForm" action="contact-form-handler.php" method="POST" class="reveal reveal-right">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border-0 border-bottom no-outline" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control border-0 border-bottom no-outline" id="message" name="message" placeholder="Your Message" rows="5" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <!-- Background Shapes -->
            <div class="shape-circle"></div>
            <div class="shape-square"></div>
            <div class="shape-rectangle"></div>
        </section>
        <!-- Contact Section End -->

        <!--cta start -->
        <section class="sec-7 promo-section position-relative">
            <div class="container reveal reveal-right">
                <div class="row">
                    <div class="col-md-6 promo-text">
                        <h2>Ready to Create Your Website?</h2>
                        <p>Get started with SiteCraft today and build your dream website in no time!</p>
                        <a href="<?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? './Create_store/website_buildup.php' : './Auth/login.php'; ?>"><button id="learnMoreBtn" class="btn btn-primary">Start Building</button></a>
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
    </main>

    <!-- Footer Start -->
    <footer class="bg-dark text-white">
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

        //type words
    var typed = new Typed(".automated-words", {
        strings: ["Creative", "Unique", "Modern"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

//accordion
document.addEventListener("DOMContentLoaded", function () {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const activeButton = document.querySelector('.accordion-button:not(.collapsed)');
            if (activeButton && activeButton !== button) {
                activeButton.click();
            }
        });
    });
});

</script> 
</body>
</html>