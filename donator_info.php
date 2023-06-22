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
        max-width: 50%;
        padding: 50px;
        display: inline-block;
        float: none;
        /* reset the text-align */
        text-align: center;
        /* inline-block space fix */
        margin-right: -4px;


    }

    .green_Head {
        background-color: #76C04E;
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
    }

    .dash_Sec {
        padding: 40px 10px;
        background: #fff;
        border: 2px solid #ddd;
        min-height: auto;
        border-radius: 10px;
    }

    .btn-outline-success {
        color: #76C04E !important;
        border-color: #76C04E !important;
    }

    .btn-outline-success:hover {
        color: #fff !important;
        background-color: #76C04E !important;
        border-color: #76C04E !important;
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
        padding: 8px 60px;
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
        box-shadow: inset 0 100px 0 0 #76C04E;
    }

    .form-control,
    .form-select {
        border: 1px solid #FFED00 !important;
    }

    .input-group-text {
        background-color: #fff;
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
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row row-centered">
            <div class="col col-centered" style="background-color:#F5F5F5;">
                <div class="dash_Sec" style="padding:50px;">
                    <form action="payment_gateway.php" method="POST">
                        <div style="display:flex; gap:25px;">
                            <div class="input-group mb-3">
                                <input type="text" style="height:50px;" class="form-control"
                                    placeholder="Enter Full Name" aria-label="full_name" aria-describedby="basic-addon1"
                                    name="fname" required>
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
                            <span style="font-size:14px;">
                                "YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER SECTION 80G"
                            </span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="eligibility" value="eligible"
                                    id="flexCheckDefault">
                                <label style="color: #cdc2c2;font-size:14px;" class="form-check-label"
                                    for="flexCheckDefault">
                                    You agree that Boonary Foundation can reach out to you through
                                    Whatsapp/email/SMS/Phone to provide information of your donation, campaigns, 80G
                                    receipt etc.
                                </label>
                            </div>
                        </div>

                        <div style="display:flex;gap:25px;justify-content: center;margin-top:25px;">
                            <button style="width:40%;height:40px;" type="button" onclick="redirectToPage()"
                                class="btn btn-outline-warning">Back</button>
                            <button class="button_dn button_slide slide_down" id="submitButton2" name="submitButton2"
                                type="submit">SUBMIT
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
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