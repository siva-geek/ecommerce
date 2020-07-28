<?php

$sname = "localhost";
$unmae = "root";
$password = "";

$db_name = "ecomm";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
// die($_POST['register']);

if (isset($_POST['register'])) {
    if (isset($_POST['name']) && isset($_POST['password'])) {
        // die('work');
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = 'saller';
        $phone = $_POST['phone'];
        $uname = validate($_POST['name']);
        $pass = validate($_POST['password']);
        if (empty($uname)) {
            header("Location: register.php?error=User Name is required");
            exit();
        } else if (empty($pass)) {
            header("Location: register.php?error= Password is required");
            exit();
        } else if (empty($uname)) {
            header("Location: register.php?error=Full Name is required");
            exit();
        } else {
            $sql = "INSERT INTO users (user_name, password, name,email,role,phone) VALUES ('$uname', '$pass', '$name','$email','$role','$phone' );";

            $result = mysqli_query($conn, $sql);
            // die($result);

            if ($result) {
                # code...
                header("Location: index.php?success=thank you for register");
                exit();
            }
        }

    } else {
        header("Location: register.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CachbackMart</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

    <!-- All CSS Flies   -->
    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <!-- <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/ionicons.min.css" /> -->
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <!-- <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/meanmenu.css" />
        <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
        <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css" />
        <link rel="stylesheet" href="assets/css/plugins/slick.css" /> -->
    <!--===== Main Css Files =====-->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <!-- ===== Responsive Css Files ===== -->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">

    <style>
    .bjcxym {
        flex-wrap: wrap;
        height: 100%;
        background-color: rgb(255, 255, 255);
        min-width: 474px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.2) 0px 6px 10px 0px, rgba(0, 0, 0, 0.2) 0px 1px 18px 0px;
        flex: 1 1 auto;
        padding: 35px 71px 50px 70px;
        border-radius: 5px;
    }

    .eWAAem {
        height: 36px;
        color: rgb(63, 63, 63);
        font-size: 26px;
        font-weight: 600;
        line-height: 36px;
        text-align: center;
        white-space: nowrap;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .bbJvDc form {
        margin-left: -9px;
        margin-right: -11px;
        color: rgb(63, 63, 63);
    }

    .bbJvDc .wrapper {
        margin-bottom: 20px;
    }

    .izezvj {
        text-align: unset;
        margin: 10px;
        overflow: visible;
    }

    .bbJvDc input {
        height: 35px;
    }

    .rhgTO {
        height: 30px;
        width: 100%;
        box-sizing: border-box;
        color: rgb(119, 119, 119);
        background-color: rgb(255, 255, 255);
        padding: 0px 8px 2px;
        border-radius: 2px;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(223, 223, 223);
        border-image: initial;
    }

    .eFyYvN {
        position: relative;
    }

    .bbJvDc .labelBtn {
        position: absolute;
        cursor: default;
        height: 35px;
        background-color: transparent;
        color: rgb(119, 119, 119);
        border-width: 1px;
        border-style: solid;
        border-color: transparent;
        border-image: initial;
    }

    .izezvj {
        text-align: unset;
        margin: 10px;
        overflow: visible;
    }

    .bbJvDc .wrapper {
        margin-bottom: 20px;
    }

    .bbJvDc input {
        height: 35px;
    }

    .rhgTO {
        height: 30px;
        width: 100%;
        box-sizing: border-box;
        color: rgb(119, 119, 119);
        background-color: rgb(255, 255, 255);
        padding: 0px 8px 2px;
        border-radius: 2px;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(223, 223, 223);
        border-image: initial;
    }

    .bbJvDc .wrapper {
        margin-bottom: 20px;
    }

    .izezvj {
        text-align: unset;
        margin: 10px;
        overflow: visible;
    }

    .bbJvDc .wrapper {
        margin-bottom: 20px;
    }

    button {
        appearance: button;
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(buttontext, rgb(170, 170, 170));
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: center;
        align-items: flex-start;
        cursor: default;
        background-color: -internal-light-dark(rgb(239, 239, 239), rgb(74, 74, 74));
        box-sizing: border-box;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 6px;
        border-width: 2px;
        border-style: outset;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(195, 195, 195));
        border-image: initial;
    }

    .bbJvDc .wrapper {
        margin-bottom: 20px;
    }

    .bbJvDc .showBtn:disabled {
        color: rgb(170, 170, 170);
    }

    .bbJvDc .showBtn {
        position: absolute;
        top: 0px;
        right: 0px;
        height: 35px;
        border-top-style: initial;
        border-right-style: initial;
        border-bottom-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-bottom-color: initial;
        background-color: transparent;
        color: rgb(71, 160, 251);
        border-width: 0px 0px 0px 1px;
        border-image: initial;
        border-left: 1px solid rgb(223, 223, 223);
        padding: 8px 13px 9px 12px;
    }

    .jcHWfV:disabled,
    .jcHWfV[disabled] {
        background-clip: padding-box;
        color: rgba(170, 170, 170, 0.8);
        background-color: rgba(71, 160, 251, 0.2);
        border-color: rgba(71, 160, 251, 0.2);
    }

    .jcHWfV:disabled,
    .jcHWfV[disabled] {
        cursor: not-allowed;
    }

    .dUFRbU {
        display: inline-block;
        white-space: nowrap;
        text-align: center;
        min-width: 15px;
        height: 15px;
        color: rgb(71, 160, 251);
        border-radius: 2px;
        text-decoration: none;
        padding: 0px;
        margin: 0px;
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
        background: transparent;
    }

    .gYNRye {
        color: rgb(170, 170, 170);
        font-size: 11px;
        line-height: 15px;
        width: 100%;
    }

    .bUybfs {
        margin: 20px 0px;
    }

    .bbJvDc .save {
        width: 100%;
        white-space: nowrap;
        color: rgb(255, 255, 255);
        background-color: rgb(71, 160, 251);
        height: 40px;
        padding-left: 15px;
        padding-right: 16px;
        border-radius: 2px;
        border-color: rgb(71, 160, 251);
    }

    .bbJvDc .save:disabled {
        opacity: 0.5;
    }

    .jcHWfV {
        padding-left: 8px;
        padding-right: 9px;
        height: 30px;
        cursor: pointer;
        min-width: 90px;
        white-space: nowrap;
        color: rgb(255, 255, 255);
        background-color: rgb(71, 160, 251);
        border-radius: 2px;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(71, 160, 251);
        border-image: initial;
    }
    </style>
</head>

<body class="home-12 home-20 home-medical" style="background: #8ff5b3;">

    <div id="main">




        <!-- About Area Start -->
        <section class="about-area" style="padding: 40px 50px 55px 50px;background: #8ff5b3;">
            <div class="container">
                <div class="about-title" style="padding-bottom: 45px;text-align: center;">

                </div>

                <div class="row">
                    <div class="col-lg-6 mb-res-sm-50px">
                        <div class="about-left-image">
                            <img src="assets/images/feature-bg/1.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="sc-pbKro bjcxym">
                                <div class="sc-pkfsj eWAAem">
                                    Create your Seller Account
                                </div>
                                <?php if (isset($_GET['error'])) {?>
                                <p class="text-danger ml-4"><?php echo $_GET['error']; ?></p>
                                <?php }?>
                                <div class="sc-pBAKv bbJvDc">
                                    <form method="post" action="">
                                        <div class="sc-fznWOq izezvj wrapper">

                                            <input placeholder="Enter Your Email Address" name="email" type="text"
                                                class="sc-AxhUy rhgTO">

                                            <div class="sc-fzolEj jJAzoG form-error"></div>
                                        </div>


                                        <div class="sc-psAte eFyYvN">
                                            <button class="labelBtn">+91 - </button>



                                            <div class="sc-fznWOq izezvj wrapper">

                                                <input placeholder=" Enter Your Mobile Number" name="phone"
                                                    class="sc-AxhUy rhgTO" style="padding: 0px 53px;">


                                            </div>
                                            <div class="sc-fznWOq izezvj">
                                                <button class="sc-fzozJi sc-fzoLsD jcHWfV showBtn" disabled>Send
                                                    OTP</button>
                                            </div>


                                        </div>



                                        <div class="sc-fznWOq izezvj wrapper">
                                            <input placeholder="Enter Your Full Name" name="name" type="text"
                                                class="sc-AxhUy rhgTO">
                                            <div class="sc-fzolEj jJAzoG form-error"></div>
                                        </div>


                                        <div class="sc-psAte eFyYvN">

                                            <div class="sc-fznWOq izezvj wrapper">
                                                <input placeholder="Set Password" name="password" type="password"
                                                    class="sc-AxhUy rhgTO">
                                                <div class="sc-fzolEj jJAzoG form-error"></div>
                                                <button type="button" class="sc-fzozJi sc-fzoLsD jcHWfV showBtn"
                                                    disabled>Show</button>
                                                <div class="sc-oTOtL gYNRye">Minimum 4 characters</div>
                                            </div>

                                        </div>

                                        <div class="sc-pzLIQ bUybfs">
                                            <div class="sc-oTOtL gYNRye">By filling this form, I agree to <a
                                                    class="sc-fzoiQi sc-fzoNJl dUFRbU" style="cursor: pointer;">Terms of
                                                    Use</a></div>

                                        </div>
                                        <input class="sc-fzozJi sc-fzoLsD sc-fzpans fHbZUJ save" type="submit"
                                            value="Sign Up" name="register">
                                    </form>
                                    <div class="sc-qZusK kGOiaE"><br />
                                        <div class="sc-oTOtL gYNRye">"Already a Seller? " <a href=""
                                                class="sc-fzoiQi sc-fzoNJl dUFRbU">Login Here</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- About Area End -->




    </div>




    <!--====== Vendors js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Plugins js ======-->
    <!-- <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/plugins/popper.min.js"></script>
        <script src="assets/js/plugins/meanmenu.js"></script>
        <script src="assets/js/plugins/owl-carousel.js"></script>
        <script src="assets/js/plugins/jquery.nice-select.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script>
        <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/range-script.js"></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src="assets/js/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from live.hasthemes.com/html/5/ecolife-preview/ecolife/index-20.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2020 09:00:16 GMT -->

</html>