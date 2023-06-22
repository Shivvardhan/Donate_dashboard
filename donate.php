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
        background: #f6f5f5;
        border: 2px dashed #ddd;
        margin-top: 20px;
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
        box-shadow: inset 0 100px 0 0 #76C04E;
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
            <div class="col col-centered">
                <div class="green_Head">
                    <h1 class="txt_Head">EDUCATE A CHILD TODAY!</h1>
                </div>
                <div class="dash_Sec">
                    <div>
                        <button type="button" onclick="change(1000)" style="margin-right:25px;margin-bottom:15px;"
                            class="btn btn-outline-success btn-lg">₹1000</button>
                        <button type="button" onclick="change(1500)" style="margin-right:25px; margin-bottom:15px;"
                            class="btn btn-outline-success btn-lg">₹1500</button>
                        <button type="button" onclick="change(2000)" style="margin-right:25px; margin-bottom:15px;"
                            class="btn btn-outline-success btn-lg">₹2000</button>
                        <button type="button" onclick="change(2500)" style=" margin-bottom:15px;"
                            class="btn btn-outline-success btn-lg">₹2500</button>
                    </div>
                    <h1 class="txt_Head" style="text-align:center;">YOUR DONATION WILL HELP FOR THE EDUCATION OF 1 CHILD
                        FOR 2 MONTHS</h1>
                    <img style="margin:20px 0px 30px 0px;" src="./childs.png" alt="">
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
</body>
<script>
function change(value) {
    document.getElementById("amount").value = value;
}
</script>

</html>