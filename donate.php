<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="output.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <title>Donate</title>
    <style>
    /* centered columns styles */
    .row-centered {
        text-align: center;
        justify-content: center;
    }

    .col-centered {
        margin-top: 50px;
        max-width: 35%;
        display: inline-block;
        float: none;
        /* reset the text-align */
        text-align: center;
        /* inline-block space fix */
        margin-right: -4px;


    }

    .green_Head {
        background-color: #26007B;
        text-align: center;
        margin-bottom: 25px;
    }

    .txt_Head {
        /* font-family: bebas_neueregular; */
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 20px;
        padding: 20px;
        margin: 0;
        color: #fff;
    }

    .dash_Sec {
        padding: 40px 10px;
        background: #f6f5f5;
        border: 2px dashed #ddd;
        margin-top: 20px;
        min-height: auto;
        border-radius: 10px;
    }

    .btn-outline-primary {
        color: #26007B !important;
        border-color: #26007B !important;
    }

    .btn-outline-primary:hover {
        color: #fff !important;
        background-color: #26007B !important;
        border-color: #26007B !important;
    }

    .amtRpsIcons {
        position: absolute;
        left: 14px;
        top: 14px;
        color: #000;
        font-size: 16px;
    }

    .amtRps .form-control {
        border-radius: 8px;
        height: 50px !important;
        padding-left: 30px;
        font-size: 16px;
    }

    .button_dn {
        font-family: var(--bs-font-sans-serif);
        font-weight: 700;
        background: #ffed00;
        letter-spacing: 1px;
        border: none;
        padding: 13px 60px;
        border-radius: 30px;
        color: #010101;
        margin-top: 20px;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .button_slide {
        cursor: pointer;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }

    .slide_down:hover {
        box-shadow: inset 0 100px 0 0 #26007B;
        color: #fff;
    }

    .no-spin {
        /* Disable the spinner arrows */
        -moz-appearance: textfield;
        appearance: textfield;
    }

    /* Hide the spinner arrows in Chrome, Safari, and Edge */
    .no-spin::-webkit-inner-spin-button,
    .no-spin::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    button.test-btn {
        font-size: 16px;
        padding: 10px 25px;
        border: 2px solid #FFF;
        color: #FFF;
        background: #26007B;
        transition: .2s ease-in-out 0s;
        border-radius: 15px;
        font-weight: 700;
    }

    button.test-btn:hover {
        cursor: pointer;
        transform: scale(1.25);
        color: #fff;
    }

    .row {

        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    @charset "UTF-8";

    .svg-inline--fa {
        vertical-align: -0.200em;
    }

    .rounded-social-buttons {
        text-align: left;
        margin-left: -15px;
    }

    .rounded-social-buttons .social-button {
        display: inline-block;
        position: relative;
        cursor: pointer;
        width: 3.125rem;
        height: 3.125rem;
        border: 0.125rem solid transparent;
        padding: 0;
        text-decoration: none;
        text-align: center;
        color: #fefefe;
        font-size: 1.3rem;
        font-weight: normal;
        line-height: 2em;
        border-radius: 1.6875rem;
        transition: all 0.5s ease;
        margin-right: 0.1rem;
        margin-bottom: 0.25rem;
    }

    .nav-res {
        padding: 0 150px;
    }

    /* Extra small devices (phones, 576px and down) */
    @media (max-width: 576px) {

        /* CSS rules for extra small devices */
        .nav-res {
            padding: 0 10px;
        }

        .top-bar {
            display: none !important;
        }

        .bar2 {
            display: flex !important;
        }

        .goog-te-combo {
            height: 10px;
            width: 40px;
            border-radius: 10px;
        }

        .footer {
            margin-left: 0px !important;
        }
    }

    .res {
        margin-bottom: 20px !important;
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {

        /* CSS rules for small devices */
        .nav-res {
            padding: 0 20px;
        }

        .footer {
            margin-left: 5% !important;
        }

    }

    .res {
        margin-bottom: 20px !important;
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) && (max-width:1030px) {

        /* CSS rules for medium devices */
        .nav-res {
            padding: 0 100px !important;
        }

        .mid-col {
            margin-left: 15% !important;
        }


    }

    .nav-res {
        padding: 0 150px;
    }

    .top-bar {
        background-color: #26007B;
        height: 60px;
        width: 100%;
        margin-left: 0px;
        margin-right: 0px;
    }

    .bar2 {
        background-color: #26007B;
        height: 60px;
        width: 100%;
        margin-left: 0px;
        margin-right: 0px;
        display: none;
    }


    .footer {
        margin-left: 10%;
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
        color: white !important;
    }

    .goog-te-gadget {
        color: white !important;
    }

    .goog-te-combo {
        height: 30px;
        width: 150px;
        border-radius: 10px;
    }

    .login_txt {
        color: #FFF;
        text-decoration: none !important;
    }

    .login_txt:hover {
        color: #FFB606;
        text-decoration: underline !important;
    }
    </style>

</head>

<body>
    <div class="top-bar nav-res container-fluid d-flex align-items-center">
        <div id="google_translate_element"></div>
        <div class="col-sm-12 col-md-7 d-flex mid-col" style="margin-left :25%;gap:25px;margin-top:1%;">
            <p><i class="fas fa-phone mr-3" style="font-size:18px;color:#FFF;"></i> <a
                    style="text-decoration:none;font-size:20px;margin-left:5px;color:#fff;" href="tel:0731-4380559">
                    0731-4380559</a>
            </p>
            <p><i class="fas fa-envelope mr-3" style="font-size:20px;color:#FFF;"></i> <a
                    style="text-decoration:none;font-size:18px;margin-left:5px;color:#fff;"
                    href="mailto: info@boonaryfoundation.com">
                    info@boonaryfoundation.com</a></p>
        </div>
        <div class="d-flex" style="gap:10px;">

            <h5>
                <a class="login_txt" href="https://boonaryfoundation.com/login/">Login</a>
            </h5>

            <h5>
                <a class="login_txt" href="https://boonaryfoundation.com/register/">Register</a>
            </h5>

        </div>
    </div>
    <div class="bar2 nav-res container-fluid  align-items-center">
        <div class="d-flex" style="margin-left:5%;gap:10px;">

            <h5>
                <a class="login_txt" href="https://boonaryfoundation.com/login/">Login</a>
            </h5>

            <h5>
                <a class="login_txt" href="https://boonaryfoundation.com/register/">Register</a>
            </h5>

        </div>
        <div class="d-flex" style="margin-left:25%;gap:25px;margin-top:1%;">
            <p><i class="fas fa-phone mr-3" style="font-size:20px;color:#FFF;"></i> <a
                    style="text-decoration:none;font-size:20px;margin-left:5px;color:#fff;" href="tel:0731-4380559">
                </a>
            </p>
            <p><i class="fas fa-envelope mr-3" style="font-size:20px;color:#FFF;"></i> <a
                    style="text-decoration:none;font-size:20px;margin-left:5px;color:#fff;"
                    href="mailto: info@boonaryfoundation.com">
                </a></p>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex align-items-center nav-res res">
            <a href="https://boonaryfoundation.com/"><img src="logo.png" style="height:70px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="margin-top:15px;" id="navbarSupportedContent">



                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link active" aria-current="page"
                            href="https://boonaryfoundation.com/">HOME</a>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link"
                            href="https://boonaryfoundation.com/about-us/">ABOUT
                            US</a>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link"
                            href="https://boonaryfoundation.com/gallery/">GALLERY</a>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link"
                            href="https://boonaryfoundation.com/courses-isl/">COURSES-ISL</a>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link" href="#">GET INVOLVED</a>
                    </li>

                    <li class="nav-item" style="margin-right:10px;">
                        <a style="font-weight:600;" class="nav-link" href="#">CONTACT US</a>
                    </li>

                    <li class="nav-item">
                        <a href="donate.php"><button class="test-btn">DONATE</button></a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <span class="overlay-top-header" style="background-color:rgba(0, 0, 0, 0.5);opacity:1;">
        <div class="top_site_main" style="color: rgb(255, 255, 255); background-image: url('donate-02.jpg'); padding-top: 30%;margin-bottom:5%;background-repeat: no-repeat;
  background-size: cover; ">
        </div>
    </span>

    <div class="row row-centered " style="margin-bottom:60px;">
        <div class="col-sm-11 col-md-5 col-lg-5 col-xl-5 res">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-aeb1eed elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                    data-id="aeb1eed" data-element_type="widget" data-widget_type="thim-heading.default">
                    <div class="elementor-widget-container">
                        <div class="sc_heading" style="text-align:left">
                            <h3 class="title" style="font-size:24px;font-family: Roboto Slab;font-weight:700">Donate
                                <span class="thim-color" style="color:#FFB606">Text</span>
                            </h3>
                            <div class="sub-heading" style="color:#999999;font-size:17px;">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                    in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                    Lorem Ipsum passage, and going through the cites of the word in classical
                                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                    Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                    ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                    "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                    Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                    by English versions from the 1914 translation by H. Rackham.</p>
                            </div><span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-sm-11 col-md-5 col-lg-5 col-xl-5">
            <div class="green_Head">
                <h1 class="txt_Head">EDUCATE A CHILD TODAY!</h1>
            </div>
            <div class="dash_Sec">
                <div>
                    <button type="button" onclick="change(1000)" style="margin-right:25px;margin-bottom:15px;"
                        class="btn btn-outline-primary btn-lg">₹1000</button>
                    <button type="button" onclick="change(1500)" style="margin-right:25px; margin-bottom:15px;"
                        class="btn btn-outline-primary btn-lg">₹1500</button>
                    <button type="button" onclick="change(2000)" style="margin-right:25px; margin-bottom:15px;"
                        class="btn btn-outline-primary btn-lg">₹2000</button>
                    <button type="button" onclick="change(2500)" style=" margin-bottom:15px;"
                        class="btn btn-outline-primary btn-lg">₹2500</button>
                </div>
                <h1 class="txt_Head" style="text-align:center;color:black;">YOUR DONATION WILL HELP FOR THE
                    EDUCATION OF 1 CHILD
                    FOR 2 MONTHS</h1>
                <img style="height:20vh;margin-bottom:20px;" src="./image.png" alt="">
                <form action="donator_info.php" method="POST">
                    <div class="amtRps form-row" style="position:relative;">
                        <span class="amtRpsIcons"><i class="fa fa-inr"></i></span>
                        <input class="form-control no-spin" min="1000" name=" dn_Amount" placeholder="Other Amount"
                            type="number" id="amount" required>
                    </div>
                    <button class="button_dn button_slide slide_down" id="submitButton" name="submitButton"
                        type="submit">DONATE
                        NOW
                    </button>
                </form>
                <div style="padding-top:25px;">
                    <span style="font-size:12px;">"YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER
                        SECTION
                        80G AS
                        Boonary
                        FOUNDATION IS REGISTERED AS NON PROFIT ORGANIZATION"
                        PAN: AACTS7973G | 80G NUMBER: AACTS7973GF20210</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid " style="padding:0;background-color:#0D195C;">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">

            <!-- Section: Links  -->
            <section style="padding-top:30px;">
                <div class="container footer text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-4">
                            <!-- Content -->
                            <h2 class="fw-bold" style="font-family:Roboto Slab;font-weight:800;font-size:40px;">Boonary
                                Foundation
                            </h2>
                            <hr class="mb-4 mt-0 d-inline-block" style="width: 350px; background: white; height: 2px" />

                            <p><i class="fas fa-phone mr-3" style="font-size:20px;color:#FFB606;"></i> <a
                                    style="text-decoration:none;font-size:20px;margin-left:5px;color:#fff;"
                                    href="tel:0731-4380559">
                                    0731-4380559</a>
                            </p>
                            <p><i class="fas fa-envelope mr-3" style="font-size:20px;color:#FFB606;"></i> <a
                                    style="text-decoration:none;font-size:20px;margin-left:5px;color:#fff;"
                                    href="mailto: info@boonaryfoundation.com">
                                    info@boonaryfoundation.com</a></p>
                            <p><i class="fas fa-location-dot mr-3" style="font-size:20px;color:#FFB606;"></i><span
                                    style="font-size:20px;margin-left:5px;color:#fff;">Press Complex, Indore, Madhya
                                    Pradesh 452011</span></p>
                            <p><i class="fas fa-clock mr-3" style="font-size:20px;color:#FFB606;"></i><span
                                    style="font-size:20px;margin-left:5px;color:#fff;">OFFICE
                                    TIME:- 10:00AM TO
                                    5:30PM</span>
                            </p>

                            <div class="rounded-social-buttons mt-5">
                                <a class="social-button instagram" href="https://www.instagram.com/boonaryfoundation/"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="social-button facebook"
                                    href="https://www.facebook.com/profile.php?id=100088898893731&sk=photos"
                                    target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-button youtube" href="https://www.youtube.com/@boonaryfoundation"
                                    target="_blank"><i class="fab fa-youtube"></i></a>
                                <a class="social-button twitter" href="https://twitter.com/Boonary_NGO"
                                    target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>


                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h3 class=" fw-bold" style="font-size:30px;font-family:Roboto Slab;margin-bottom:40px;">
                                Company</h3>

                            <p>
                                <a href="https://boonaryfoundation.com/about-us/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">About</a>
                            </p>
                            <p>
                                <a href="https://boonaryfoundation.com/media/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Media</a>
                            </p>
                            <p>
                                <a href="https://boonaryfoundation.com/contact-us/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Contact</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h3 class=" fw-bold" style="font-size:30px;font-family:Roboto Slab;margin-bottom:40px;">
                                Links</h3>

                            <p>
                                <a href="https://boonaryfoundation.com/courses-isl/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400;">Courses</a>
                            </p>
                            <p>
                                <a href="https://boonaryfoundation.com/gallery/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Gallery</a>
                            </p>
                            <p>
                                <a href="https://boonaryfoundation.com/get-involved/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Get involved</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h3 class=" fw-bold" style="font-size:30px;font-family:Roboto Slab;margin-bottom:40px;">
                                Support</h3>

                            <p>
                                <a href="#" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Privacy</a>
                            </p>
                            <p>
                                <a href="#" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Terms</a>
                            </p>
                            <p>
                                <a href="#" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">FAQs</a>
                            </p>


                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center" style="background-color: #0D195C;padding-bottom:50px;font-size:20px;">
                Copyright © 2023 Boonary Foundation, All Rights Reserved.
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- End of .container -->
</body>
<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en'
    }, 'google_translate_element');
}
</script>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script>
function change(value) {
    document.getElementById("amount").value = value;
}
</script>

</html>