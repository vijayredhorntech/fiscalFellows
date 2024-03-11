<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 9878434296</a>
                                <a href="#"><span class="fa fa-paper-plane mr-1"></span>care@fiscalfellows.com</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/images/logo.jpg')}}" style="height: 100px; width: auto" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item {{Route::currentRouteName()=='home'? 'active': ''}}"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item {{Route::currentRouteName()=='about'? 'active': ''}}"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item {{Route::currentRouteName()=='mutualFunds'? 'active': ''}}"><a href="{{route('mutualFunds')}}" class="nav-link">Mutual Funds</a></li>
                <li class="nav-item {{Route::currentRouteName()=='digitalSignature'? 'active': ''}}"><a href="{{route('digitalSignature')}}" class="nav-link">Digital Signatures (DSCs)</a></li>
                <li class="nav-item {{Route::currentRouteName()=='businessSetup'? 'active': ''}}"><a href="{{route('businessSetup')}}" class="nav-link">Business Support</a></li>
                <li class="nav-item {{Route::currentRouteName()=='dsa'? 'active': ''}}"><a href="{{route('dsa')}}" class="nav-link">DSA</a></li>
                <li class="nav-item {{Route::currentRouteName()=='contactUs'? 'active': ''}}"><a href="{{route('contactUs')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
