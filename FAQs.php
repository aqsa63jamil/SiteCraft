<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | SiteCraft</title>

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

        <!-- faq-section -->
        <main class="main-content">
            <section class="faq-section">
                <div class="container-fluid">
                    <div class="content1 row align-items-center">
                        <div class="col-md-6">
                            <img src="./Uploads/FAQS.png" alt="Our Team" class="full-width-img reveal reveal-left">
                        </div>
                        <div class="col-md-6">
                            <h3 class="FH reveal reveal-right">Frequently Asked Questions</h3>
                            <div class="text-box reveal reveal-right">
                                <p class="para">
                                Find answers to common questions about SiteCraft, our features, and how to use our website builder.
                                </p>
                            </div>  
                        </div>
                    </div>

                    <main class="container my-5">
                        <div class="accordion accordion-flush reveal reveal-right" id="accordionFlushExample">
                            <!--General Questions-->
                            <h3 class="reveal reveal-left">General Questions</h3>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        What is SiteCraft?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SiteCraft is a leading website builder that allows you to create stunning, professional websites with ease. Whether you are a beginner or a professional, our platform offers all the tools and resources you need to build and manage your online presence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Is SiteCraft suitable for beginners?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, SiteCraft is designed to be user-friendly and intuitive, making it easy for beginners to create and manage their websites without any technical knowledge.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Do I need any technical skills to use SiteCraft?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        No, you do not need any technical skills to use SiteCraft. Our platform is designed to be user-friendly and intuitive, allowing anyone to create a professional-looking website without any coding knowledge.
                                    </div>
                                </div>
                            </div>
                            <!--General Questions end-->
            
                            <!--Pricing and Plans-->
                            <!-- <h3 class="mt-5 reveal reveal-left">Pricing and Plans</h3>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        How much does SiteCraft cost?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SiteCraft offers a variety of pricing plans to suit different needs and budgets. We have a free plan with basic features and several premium plans with advanced capabilities. You can find detailed information about our pricing on our Pricing page.
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Can I change my plan later?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, you can upgrade or downgrade your plan at any time to better fit your needs. Changes to your plan will take effect immediately.
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Is there a free trial available?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, SiteCraft offers a free trial so you can explore our features and see how they work before committing to a paid plan.
                                    </div>
                                </div>
                            </div> -->
                            <!--pricing question end-->

                            <!--Features and Functionality-->
                            <h3 class="mt-5 reveal reveal-left">Features and Functionality</h3>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        What features does SiteCraft offer?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SiteCraft provides a wide range of features, including customizable templates, drag-and-drop editing, e-commerce integration, SEO tools, and much more. Our platform is designed to help you build a professional and effective online presence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        Can I integrate e-commerce into my SiteCraft website?
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, SiteCraft offers robust e-commerce integration, allowing you to set up an online store, manage products, process payments, and more. Our e-commerce features are designed to help you run a successful online business.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingNine">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                        Can I use my own domain name with SiteCraft?
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, you can use your own domain name with SiteCraft. If you don't have a domain name, you can also purchase one through our platform.
                                    </div>
                                </div>
                            </div>
                            <!--Features and Functionality end-->

                            <!--Customization-->
                            <h3 class="mt-5 reveal reveal-left">Customization</h3>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingTen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                        How can I Customize my Website on SiteCraft?
                                    </button>
                                </h2>
                                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SiteCraft offers a variety of customization options, including the ability to change colors, fonts, layouts, and more. Our intuitive drag-and-drop editor makes it easy to create a unique and personalized website that reflects your brand.
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingEleven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                        Can I Edit the HTML/CSS of my SiteCraft Website?
                                    </button>
                                </h2>
                                <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                    Yes, advanced users can access and edit the HTML/CSS of their store for further customization.
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingTwelve">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                        Does SiteCraft Support Multilingual Websites?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, SiteCraft supports the creation of multilingual websites, allowing you to reach a wider audience.
                                    </div>
                                </div>
                            </div> -->
                            <!--Customization end-->

                            <!--Support and Resources-->
                            <h3 class="mt-5 reveal reveal-left">Support and Resources</h3>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingThirteen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                                        What kind of support does SiteCraft offer?
                                    </button>
                                </h2>
                                <div id="flush-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="flush-headingThirteen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        SiteCraft offers comprehensive support through various channels, including email, and an extensive knowledge base. Our support team is always ready to help you with any questions or issues you may encounter.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingFourteen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="fakse" aria-controls="flush-collapseFourteen">
                                        Are there any tutorials or guides available?
                                    </button>
                                </h2>
                                <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, SiteCraft provides a variety of tutorials, guides, and resources to help you get the most out of our platform. You can access these resources through our knowledge base and blog.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item reveal reveal-right">
                                <h2 class="accordion-header" id="flush-headingFifteen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                                        How can I contact SiteCraft support?
                                    </button>
                                </h2>
                                <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        You can contact SiteCraft support via email.
                                    </div>
                                </div>
                            </div>
                            <!--Support and Resources end-->
                        </div>
                    </main>
                </div>
            </section>
        </main>
        <!--faqs end-->

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