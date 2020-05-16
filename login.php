<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>
    <link href="bootstrap-4.min.css" rel="stylesheet" type="text/css">
    <link href="style-custom.css" rel="stylesheet" type="text/css">
    <link href="cover.css" rel="stylesheet" type="text/css">
</head>

<body style="min-height:100vh;">
<div class="container col-md-12 pl-0 pr-0 bg-ash">
    <main role="main" style="min-height: 70vh">
        <div class="bg-ash">
            <div class=" m-auto">
                <div class="col-md-12 pl-4 pl-sm-0 pr-4 pr-sm-0 h-100 login-top-padding">
                    <div class=" col-md-5 col-lg-4 col-xl-3 mx-auto shadow-sm p-0">
                        <div class="welcome-login-text col-md-12 mx-auto text-center div-rom p-2">
                            <div class="login-header mx-auto pt-2 pr-2">
                                <p class="text-white mb-1">Log In</p>
                            </div>
                            <p class="text-white pt-2">Sign in to access</p>
                        </div>
                        <div class="registration-form mx-auto col-md-12 p-4 mt-3  login-box-margin">
                            <form class="needs-validation sign-up"  action="result.php" method="POST" name="merchant-sign-up-form" id="merchant-sign-up-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" style="padding: 4%!important;border-radius: 1%!important;" id="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" style="padding: 4%!important;border-radius: 1%!important;" id="password" placeholder="Password" name="password" required>
                                </div>
                                <div class="option-section col-md-12 pl-0 pr-0 mb-2">
                                    <label class="col-md-6 pl-0 pr-0 pt-3 login-font-size" ><a class="color-blue" id="forget_password" href="#">Forget Password?</a></label>
                                    <div class="option-section-left-item col-md-6 pr-0 pl-0">
                                        <input class="mt-2 col-md-12 mb-3 btn btn-green btn-login" name="submit" type="submit" value="Login"></input>
                                    </div>
                                </div>
                                <label class="option-section-left-item col-md-12 pr-0 pl-0 " for="no_account" >
                                    <a class="text-muted login-font-size" id="no_account" href="#">Haven't register yet? <span class="color-green">Register now!</span> </a>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<script>
    function validateEmail(email) {
        var re = /^([_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5}))|\d+$/;
        return re.test(email);
    }
</script>

</body>

</html>

