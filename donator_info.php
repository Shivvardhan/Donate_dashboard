<?php 
if(isset($_POST['submitButton'])) {

$amount = $_POST['dn_Amount'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donator Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    /* centered columns styles */
    .row-centered {
        text-align: center;
        justify-content: center;
    }

    .col-centered {
        margin-top: 50px;
        display: inline-block;
        float: none;
        /* reset the text-align */
        text-align: center;
        /* inline-block space fix */


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
        font-size: 1.5625rem;
        font-weight: normal;
        line-height: 2em;
        border-radius: 1.6875rem;
        transition: all 0.5s ease;
        margin-right: 0.25rem;
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
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {

        /* CSS rules for small devices */
        .nav-res {
            padding: 0 20px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {

        /* CSS rules for medium devices */
        .nav-res {
            padding: 0 150px;
        }
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:100wh">
        <div class="container-fluid d-flex align-items-center nav-res">
            <a href="https://boonaryfoundation.com/"><img src="logo.png" style="height:50px;" alt=""></a>
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


    <div class="row row-centered" style="margin-bottom:60px;">
        <div class="col col-sm-11 col-md-5 col-lg-5 col-xl-5 col-centered" style="background-color:#F5F5F5;">
            <div class="dash_Sec" style="padding:50px;">
                <form action="checkout/start.php" method="POST">
                    <div style="display:flex; gap:25px;">
                        <div class="input-group mb-3">
                            <input type="text" style="height:50px;" class="form-control" placeholder="Enter Full Name"
                                aria-label="full_name" aria-describedby="basic-addon1" name="fname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">DOB</span>
                            <input type="date" class="form-control" placeholder="Enter Full Name" aria-label="dob"
                                aria-describedby="basic-addon1" name="dob" required>
                        </div>
                    </div>
                    <div style="display:flex; gap:25px;">
                        <div class="input-group mb-3">
                            <input type="email" style="height:50px;" class="form-control" placeholder="Enter Email"
                                aria-label="email" aria-describedby="basic-addon1" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">+91</span>
                            <input type="tel" class="form-control no-spin" pattern="{1}[0-9]{9}"
                                placeholder="Enter Phone" aria-label="phone" aria-describedby="basic-addon1"
                                name="phone" required>
                        </div>
                    </div>
                    <div style="display:flex; gap:25px;">
                        <div class="input-group mb-3">
                            <select class="form-select" name="country" style="height:50px;" id="country">
                                <option selected>--Select Country--</option>
                                <option value="India">India</option>
                            </select required>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select" name="state" style="height:50px;" id="state">
                                <option selected>--Select State--</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Puducherry">Puducherry</option>
                            </select required>
                        </div>
                    </div>
                    <div style="display:flex; gap:25px;">
                        <div class="input-group mb-3">
                            <input type="text" style="height:50px;" class="form-control" placeholder="City"
                                aria-label="city" aria-describedby="basic-addon1" name="city" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" style="height:50px;" class="form-control" placeholder="Address"
                                aria-label="address" aria-describedby="basic-addon1" name="address" required>
                        </div>
                    </div>
                    <div style="display:flex; gap:25px;">
                        <div class="input-group mb-3">
                            <input type="text" style="height:50px;" class="form-control" placeholder="Pin Code"
                                aria-label="pincode" aria-describedby="basic-addon1" name="pincode" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" style="height:50px;" class="form-control" placeholder="PAN No.*"
                                aria-label="pan" aria-describedby="basic-addon1" name="pan" required>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo $amount;?>" name="amount">
                    <!-- End Form -->
                    <div style="text-align:left;">
                        <span style="font-size:13px;">
                            "YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER SECTION 80G"
                        </span>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="eligibility" id="flexCheckDefault">
                            <!-- Hidden input field to store the value -->
                            <input type="hidden" name="contactPermission" id="contactPermission" value="not eligible">


                            <span style="color: #cdc2c2;font-size:14px;" class="form-check-label"
                                for="flexCheckDefault">
                                You agree that Boonary Foundation can reach out to you through Whatsapp/email/SMS/Phone
                                to provide information of your donation, campaigns, 80G receipt etc.
                            </span>
                        </div>
                    </div>

                    <div style="display:flex;gap:25px;justify-content: center;margin-top:25px;">
                        <button style="width:40%;height:40px;margin-top:5px;" type="button" onclick="redirectToPage()"
                            class="btn btn-outline-primary">Back</button>
                        <button class="button_dn button_slide slide_down" id="submitButton2" name="submitButton2"
                            type="submit">SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid " style="padding:0;background-color:#0D195C;">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">

            <!-- Section: Links  -->
            <section style="padding-top:70px;">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-4">
                            <!-- Content -->
                            <h2 class="fw-bold">Boonary Foundation
                            </h2>
                            <hr class="mb-4 mt-0 d-inline-block" style="width: 310px; background: white; height: 2px" />

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

                            <div class="rounded-social-buttons">
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
                            <h3 class=" fw-bold mb-4" style="font-size:30px;">Company</h3>

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
                            <h3 class=" fw-bold mb-4" style="font-size:30px;">Links</h3>

                            <p>
                                <a href="https://boonaryfoundation.com/courses-isl/" class="text-white"
                                    style="text-decoration:none;font-size:20px;font-weight:400">Courses</a>
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
                            <h3 class=" fw-bold mb-4" style="font-size:30px;">Support</h3>

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

</body>

<script>
var checkbox = document.getElementById("flexCheckDefault");
var hiddenInput = document.getElementById("contactPermission");

checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
        hiddenInput.value = "eligible"; // Set value to 1 when checkbox is checked
    } else {
        hiddenInput.value = "not eligible"; // Set value to 0 when checkbox is not checked
    }
});
</script>
<script>
function redirectToPage() {
    // Redirect to the desired page
    window.location.href = "./donate.php";
}
</script>

<?php 
}
?>

</html>