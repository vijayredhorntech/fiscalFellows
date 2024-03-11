@extends('layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>Business Setup and Support Services <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Business Setup and Support Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">

                    <h2 class="mb-3">Business Setup and Support Services</h2>
                    <p>Starting or managing a business? We’ve got you covered: </p>
                    <!-- EMI Calculator Widget START --><script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>
                    <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                        <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div>

                        <!-- EMI Calculator Widget END -->
                    <p>
                        <img src="{{asset('assets/images/bs.jpg')}}" alt="" class="img-fluid">
                    </p>

                    <h5 class="mb-3 mt-5">Comprehensive Business Solutions</h5>
                    <ul>
                        <li>
                            •	<span style="font-weight: bold">Business Registrations: </span>
                            <ul>
                                <li>
                                    o	<span style="font-weight: bold">Company/LLP Registration:</span> Set up your business as a private limited, LLP, or partnership.
                                </li>
                                <li>
                                    o	<span style="font-weight: bold">GST Registration:</span> Obtain your Goods and Services Tax identification.
                                </li>
                                <li>
                                    o	<span style="font-weight: bold">Trademark Registration:</span> Protect your brand identity.
                                </li>
                            </ul>
                        </li>

                        <li>
                            •	<span style="font-weight: bold">Statutory Compliances:  </span>
                            <ul>
                                <li>
                                    o	<span style="font-weight: bold">ROC Compliance:</span> Fulfill annual filing requirements with the Registrar of Companies.
                                </li>
                                <li>
                                    o	<span style="font-weight: bold">Tax Compliance:</span> File income tax returns, TDS, and GST.
                                </li>
                                <li>
                                    o	<span style="font-weight: bold">Labour Law Compliance:</span> Adhere to labor-related regulations.
                                </li>

                            </ul>
                        </li>

                        <li>
                            •	<span style="font-weight: bold">Inventory Audits:   </span>
                            <ul>
                                <li>
                                    o	Regular audits ensure accurate stock records, prevent losses, and optimize inventory management.
                                </li>
                            </ul>
                        </li>

                        <li>
                            •	<span style="font-weight: bold">Daily MIS Reports:    </span>
                            <ul>
                                <li>
                                    <span style="font-weight: bold">o	Monitor key performance indicators (KPIs), financial metrics, and operational data.</span>
                                </li>
                                <li>
                                    <span style="font-weight: bold">o	Make informed decisions based on real-time insights.</span>
                                </li>
                            </ul>
                        </li>

                        <li>
                            •	<span style="font-weight: bold">Ongoing Support: </span>
                            <ul>
                                <li>
                                    o	<span style="font-weight: bold">Compliance Management:</span> We ensure your business adheres to legal norms.
                                </li>
                                <li>
                                    o	<span>Financial Advisory:</span> Seek advice on financial planning, taxation, and growth strategies.
                                </li>

                            </ul>
                        </li>

                    </ul>

                    <p>Remember, at <span style="font-weight: bold">Fiscal Fellows</span>, we prioritize your success. we’re not just service providers; we’re partners in your success story. Reach out to us for personalized assistance! Let’s build a prosperous future together! <p>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->


@endsection
