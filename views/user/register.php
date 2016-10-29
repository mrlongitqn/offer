<!DOCTYPE html>
<html lang="js">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="../images/thumbs/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/common.css" type="text/css">
</head>
<body>
<!-- Slider main container -->
<div class="page-modal page-register">
    <header class="header-modal">
        <a href="/" class="logo">
            <img alt="logo" src="<?php echo BASE_URL ?>public/img/top/logo.png">
        </a>
        <h1 class="title-page">Register<span class="close js-close">x</span></h1>
    </header>
    <section class="content">
        <div class="register-center">
            <h4 class="title-page">User Register</h4>
            <div class="form">
                <form method="post" class="form-common form-register">
                    <input type="hidden" name="dateofbirth" />
                    <input type="hidden" name="gender" />
                    <div class="form-item">
                        <label><?php echo $error ?></label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="fullname" value="<?php echo $data_f['fullname']?>" placeholder="Full Name" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <input type="text" name="username" value="<?php echo $data_f['username']?>" placeholder="Username" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <input type="password" name="password" id="password" placeholder="Password" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <input type="password" name="repass" placeholder="Confirm Password" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <input type="email" name="email" value="<?php echo $data_f['email']?>" placeholder="Email" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <input type="text" name="mobilephone" value="<?php echo $data_f['mobilephone']?>" placeholder="mobilephone" class="input-control"/>
                    </div>
                    <div class="form-item">
                        <button type="submit" value="OK" class="btn-submit">Login</button>
                    </div>
                </form>
            </div>
            <ul class="widget">
                <li class="widget-item">
                    <a href="#">Terms of Service & Privacy Policy</a>
                </li>
            </ul>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        $("form").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                fullname: {
                    required: true,
                    minlength: 6
                },
                username:{
                    required: true,
                    minlength: 6
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                repass:{
                    required: true,
                    minlength: 6,
                    equalTo : "#password"
                },
                mobilephone: {
                    required: true,
                    minlength: 9
                }
            },
            // Specify validation error messages
            messages: {
                fullname: {
                    required: "Please enter your full name",
                    minlength: "Your full name must be at least 6 characters long"
                },
                username: {
                    required: "Please enter your user name",
                    minlength: "Your user name must be at least 6 characters long"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                repass:{
                    equalTo: "Confirm password not match with password"
                },
                email: "Please enter a valid email address",
                mobilephone: "Please enter your phone number"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>