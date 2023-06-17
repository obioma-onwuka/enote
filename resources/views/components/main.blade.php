<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.png" rel="icon">

        <title>@yield('title') - Task managing app</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style = 'background: rgb(99, 99, 186)'>
            <div class="container">
                <a class="navbar-brand text-uppercase" href="/">
                    <img src="img/favicon.png" alt="" style = "height: 45px">&nbsp;
                    <strong style = "color: #FFF">Enote</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="navbar-toggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                            <a href="/login" class="btn btn-outline-secondary" style = "background: #222; color: #FFF; border-radius: 37px; border:none">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="btn btn-outline-primary" style = "background: #FFF; color: #222; border-radius: 37px; border:none">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{$slot}}

        <footer class="py-5 footer" style = "background: rgb(99, 99, 186)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        
                        <span>
                            <img src="img/favicon.png" alt="" style = "height: 50px; border:3px solid #FF0000; border-radius: 50%; padding: 2px">
                            &nbsp;
                            <strong>
                                Enote Task Manager
                            </strong>
                        
                        </span>
                        <small class="d-block mb-3 mt-3">&copy; Copyright {{date('Y')}} All rights reserved</small>
                        {{-- Copyright --}}
                        <p>Designed by <a href="https://obtechng.com" target = "_blank" style = "color: #e9f29c">Obtechng.com</a></p>
                        {{-- Copyright --}}
                        <p>Clone From <a href="https://github.com/obioma-onwuka" target = "_blank" style = "color: #e9f29c">Github 🤝</a></p>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Enote Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Task Creation</a></li>
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Task Management</a></li>
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Task Sharing</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Register</a></li>
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Login</a></li>
                            <li><a href="#"><span style = "color:#e9f29c"> >> </span>Forgot Password</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="https://obtechng.com" target = "_blank"><span style = "color:#e9f29c"> >> </span>About</a></li>
                            <li><a href="https://github.com/obioma-onwuka" target = "_blank"><span style = "color:#e9f29c"> >> </span>Github</a></li>
                            <li><a href="https://twitter.com/obioma-onwuka1" target = "_blank"><span style = "color:#e9f29c"> >> </span>Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset ('js/jquery.min.js') }}"></script>
        <script src="{{ asset ('js/popper.min.js') }}/"></script>
        <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    </body>

</html>