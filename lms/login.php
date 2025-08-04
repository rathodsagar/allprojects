<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Login</title>
</head>
<body>
    
    <section class="container main-menu sticky-top">
        <nav class="navbar justify-content-center justify-content-md-start">
            <div class="navbar-left d-flex align-items-center">
                <a href="login.php" class="navbar-brand ml-0 d-block">
                    <picture>
                        <img src="assets/images/fill-logo.png" alt="" title="" class="inner-logo">
                    </picture>
                </a>
            </div>
        </nav>
    </section>

    <section class="login-sect mt-4 mt-md-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="login-banner">
                        <picture>
                            <img src="assets/images/login-banner.svg" alt="" title="" class="img-fluid">
                        </picture>
                    </div>
                </div>
                <div class="offset-md-1 col-md-5 col-12">
                    <div class="card comm-card sherpa-blue">
                        <div class="card-body">
                            <form action="" method="post" class="login-form"  id="login-form" autocomplete="off">
                                <h1 class="title">Login To CAMBOT</h1>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                    <div id="password" class="form-text forgot-password">
                                        <a href="" class="link">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Login" class="btn btn-fill">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>