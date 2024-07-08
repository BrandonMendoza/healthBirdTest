<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/avenir-lt-pro" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

         <!-- Custom Css -->
         <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

        <style>
            *{
                font-family: 'avenir lt pro';
            }

            .principal-container{
                background-color: #FDFAFC;
            }

        </style>
    </head>
    <body>
        <!-- Nav Icons -->
        <nav class="py-0 secoondary-color " >
            <div class="container d-flex flex-wrap justify-content-end " >
                <ul class="nav ">
                    <li class="nav-item">
                        <button class="btn btn-sm btn-header-small"> 
                        <img src="/img/EN.png">
                        <img class="icon-size" src="/img/Caret-down@2x.png">
                        <span class="glyphicon glyphicon-menu-down"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-header-small"> 
                            <img src="/img/phone.png">
                        </button>
                        
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-header-small"> 
                            <img src="/img/messages-question.png">
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- HealthBird Logo header -->
        <header class="py-3">
            <div class="container d-flex flex-wrap justify-content-start">
                <img class="fs-4" src="/img/LogoHB_Spelled.png">
            </div>
        </header>

        <div class="container-fluid text-center principal-container">
            <div class="row ">
                <!-- col 1 - img area-->
                <div class=" col-md-6 col-sm-4 col-xs-4"  >
                    <img class="fs-4 croped-img " src="/img/Splash-01-FULL.png" >
                </div>

                <!-- col 2 - Text/Form area  -->
                <div class="col-md-6 col-sm-4 col-xs-4 " >
                    <div class="row flex-column min-vh-100" > 
                        <div class="col p-0 text-start" >
                            <!-- Text -->
                            <div class="row pt-5 mt-4" >
                                <div class="col-sm-5" >
                                    <span class="font-secondary display-6 font-weight-750 ">
                                        <strong> Discover the health plan that best suits your needs </strong>
                                    </span>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm-5" >
                                    <span class="font-secondary ">Share a few details about you so our AI Costa can make tailored recommendations.</span>
                                    <br>
                                    <span class="font-secondary ">
                                        <strong>It will be as quick as ordering coffee.</strong>
                                    </span>
                                </div>
                            </div>
                            <!-- Form -->
                            <div class="row pt-5" >
                                <div class="col-md-auto" >
                                    
                                    <form id="formZipcode">
                                        @csrf
                                        <div class="form-group row m-0" >
                                            <label for="inputZipcode" class="col-sm-2 col-form-label little-quote p-0">ZIP code</label>
                                        </div>
                                        <div class="form-group row m-0" >
                                            <div class="col-md-auto p-0" >
                                                <!-- Zipcode INPUT  with maxlenght= 5 as first validation-->
                                                <input class="form-control input-style" 
                                                        id="inputZipcode" 
                                                        placeholder="Enter your ZIP code" 
                                                        maxlength="5" 
                                                        onfocus="clear()"
                                                        name="zipcode">
                                            </div>
                                            <div class="col pl-1" >
                                                <!-- Submit button-->
                                                <button type="submit" id="btnGetStarted" class="btn btn-style">GET STARTED</button>
                                            </div>
                                            <div class="col" >
                                            
                                            </div>
                                        </div>
                                        <div class="form-group row m-0" >
                                            <div class="col col-form-label little-quote-error p-0" id="responseMessage"></div>
                                        </div>
                                    </form>
                                    <!-- Form -->
                                </div>
                            </div>

                            <br>
                            <br><br>

                            <div class="row m-0 mt-5  fixed-row-bottom" >
                                <div class="col-6 text-center" >
                                    <span class="font-secondary footer-text"> Already have an account.</span>
                                    <a href="#" class="font-primary font-weight-750 sign-in text-decoration-none">  SIGN IN </a>
                                </div>
                            </div>
                            <div class="row m-0 pt-5 fixed-row-bottom">
                                <div class="col-6 text-center">
                                    <a href="#" class="terms"> Data subject</a><span class="font-primary"> | </span>
                                    <a href="#" class="terms"> Privacy policy</a><span class="font-primary"> | </span>
                                    <a href="#" class="terms">Terms of services</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form area end -->

            </div>
        </div>
        
        <!-- JQUERY FILE -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <!-- AJAX FILE -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        <!-- Bootstrap JS file -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- Global variable with the route to use in file welcome.js {{url('api/zipcodes')}} -->
        <script > 
            var globalRouteStoreZipcode = '{!!  url('api/zipcodes') !!}'; 
        </script>
        
        <!-- Own scripts -->
        <script src="{{asset('js/welcome.js')}}"></script>

    </body>
</html>
