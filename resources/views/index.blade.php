@extends('layouts.layout')

@section('content')
    <div class="hero-wrap"  >
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url({{asset('assets/images/bg_1.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Business Grow</h2>
                                <h1 class="mb-4">We Help You Businesses Innovate and Grow</h1>
                                <p><a href="{{route('contactUs')}}" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{asset('assets/images/bg_2.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Support Business</h2>
                                <h1 class="mb-4">The Best Business Support</h1>
                                <p><a href="{{route('contactUs')}}" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{asset('assets/images/bg_3.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Give Advice</h2>
                                <h1 class="mb-4">Expert Financial Advice</h1>
                                <p><a href="{{route('contactUs')}}" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('assets/images/about.jpg')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Fiscal Fellows</span>
                        <h2 class="mb-4">Your Financial Solution Partner</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Mutual Funds</h4>
                            <p>Unlock the potential of your investments with our expert guidance in mutual funds. We provide personalized advice and tailored investment strategies to help you achieve your financial goals efficiently.</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4>Digital Signature</h4>
                            <p>Streamline your document signing process with our digital signature solutions. Enjoy the convenience of electronic signatures, eliminating the need for paperwork and enhancing the security of your transactions.</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>Business Setup</h4>
                            <p>Start your entrepreneurial journey on the right foot with our comprehensive business setup services. From registration and licensing to compliance and advisory, we provide end-to-end support to help you establish and grow your business with confidence.</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
                        <div class="text pl-4">
                            <h4>Support Services</h4>
                            <p>Our dedicated support team is here to assist you every step of the way. Whether you need assistance with financial planning, loan applications, or any other aspect of your financial journey, we're committed to providing timely and reliable support to ensure your success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-accounting-1"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Expertise</h3>
                            <p>Our team comprises seasoned professionals with deep industry knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-tax"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Innovation</h3>
                            <p>We leverage cutting-edge technology to deliver efficient solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-loan"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Client-Centric Approach</h3>
                            <p>Your success is our priority. We tailor our services to meet your unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-budget"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Transparency</h3>
                            <p>Trust is the foundation of our relationships. We maintain transparency in all our dealings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="5">0</strong>
                        </div>
                        <div class="text">
                            <span>Years of Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="4500">0</strong>
                        </div>
                        <div class="text">
                            <span>Cases Completed</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="1">0</strong>
                        </div>
                        <div class="text">
                            <span>Awards Won</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                        </div>
                        <div class="text">
                            <span>Expert Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="ftco-section testimony-section bg-light">--}}
{{--        <div class="overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center pb-5 mb-3">--}}
{{--                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">--}}
{{--                    <span class="subheading">Testimonies</span>--}}
{{--                    <h2>Happy Clients &amp; Feedbacks</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row ftco-animate">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="carousel-testimony owl-carousel ftco-owl">--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimony-wrap py-4">--}}
{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>--}}
{{--                                        <div class="pl-3">--}}
{{--                                            <p class="name">Roger Scott</p>--}}
{{--                                            <span class="position">Marketing Manager</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimony-wrap py-4">--}}
{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>--}}
{{--                                        <div class="pl-3">--}}
{{--                                            <p class="name">Roger Scott</p>--}}
{{--                                            <span class="position">Marketing Manager</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimony-wrap py-4">--}}
{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>--}}
{{--                                        <div class="pl-3">--}}
{{--                                            <p class="name">Roger Scott</p>--}}
{{--                                            <span class="position">Marketing Manager</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimony-wrap py-4">--}}
{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>--}}
{{--                                        <div class="pl-3">--}}
{{--                                            <p class="name">Roger Scott</p>--}}
{{--                                            <span class="position">Marketing Manager</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimony-wrap py-4">--}}
{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>--}}
{{--                                        <div class="pl-3">--}}
{{--                                            <p class="name">Roger Scott</p>--}}
{{--                                            <span class="position">Marketing Manager</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-faqs w-100">
                        <div class="img mb-4 mb-sm-0" style="background-image:url({{asset('assets/images/about-2.jpg')}});">
                        </div>
                        <div class="img img-2 mb-4 mb-sm-0" style="background-image:url({{asset('assets/images/about-1.jpg')}});">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                        <span class="subheading">FAQs</span>
                        <h2 class="mb-3">Frequently Asks Questions</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                        <p class="mb-0">What services does Fiscal Fellows offer?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Fiscal Fellows offers a range of financial services including mutual funds investment advice, digital signature solutions, DSA banking loans facilitation, and financing options for construction projects. We are committed to providing comprehensive solutions to meet your financial requirements.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingTwo" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">How can I invest in mutual funds through Fiscal Fellows?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Investing in mutual funds through Fiscal Fellows is a streamlined process. Our expert advisors will assess your financial goals and risk tolerance to recommend suitable mutual fund options. We provide personalized guidance to help you make informed investment decisions and maximize returns.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingThree" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">What are the benefits of using digital signatures provided by Fiscal Fellows?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Digital signatures offered by Fiscal Fellows bring efficiency and security to your document signing process. With our digital signature solutions, you can sign documents electronically, eliminating the need for physical signatures and paperwork. Enjoy enhanced convenience, reduced turnaround times, and heightened security with our digital signature services.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingFour" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                        <p class="mb-0">How can Fiscal Fellows assist with DSA banking loans?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <p>Fiscal Fellows specializes in facilitating DSA banking loans, ensuring a hassle-free borrowing experience for our clients. Our team works closely with leading banks to help you secure the best loan terms tailored to your financial situation. Whether you need a personal loan, business loan, or any other banking facility, we are here to guide you through the process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
