<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        background: #26007B;
        color: #fff;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex align-items-center" style="padding:0 200px;">
            <img src="logo.png" style="height:50px;" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="margin-top:15px;" sid="navbarSupportedContent">



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

                    <li class="nav-item" style="margin-right:20px;">
                        <a style="font-weight:600;" class="nav-link" href="#">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a href="donate.php"><button class="test-btn">DONATE</button></a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="row row-centered " style="margin-bottom:60px;">
        <div class="col col-centered">
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
    <div class="container-fluid " style="padding:0;background-color:#26007B;">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">

            <!-- Section: Links  -->
            <section style="padding-top:70px;">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Company name</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center" style="background-color: #26007B;padding-bottom:50px;">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- End of .container -->
</body>
<script>
function change(value) {
    document.getElementById("amount").value = value;
}
</script>

</html>