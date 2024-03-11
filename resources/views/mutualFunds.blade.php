@extends('layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>Mutual Funds <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Mutual Funds</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">

                    <h2 class="mb-3">Mutual Funds</h2>
                    <p>At Fiscal Fellows, we offer a diverse range of mutual funds to suit your investment goals. Here’s what you need to know:</p>

                    <p>
                        <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [
                                {
                                    "description": "",
                                    "proName": "GETTEX:NSE"
                                },
                                {
                                    "description": "",
                                    "proName": "BSE:SENSEX"
                                }
                            ],
                                "showSymbolLogo": true,
                                "isTransparent": false,
                                "displayMode": "adaptive",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    </p>

                    <h5 class="mb-3 mt-5">Personalized Solutions</h5>
                    <ul>
                        <li>
                            •	Our platform offers a <span style="font-weight: bold">diverse array of mutual funds</span> to cater to various investment goals.
                        </li>
                        <li>
                            •	<span style="font-weight: bold">Risk Assessment:</span> We consider your risk appetite and financial objectives to recommend suitable funds.
                        </li>
                        <li>
                            •	<span style="font-weight: bold">Long-Term Planning:</span> Whether you’re saving for retirement, education, or other milestones, we’ve got you covered.
                        </li>
                    </ul>


                    <h5 class="mb-3 mt-5">Performance Tracking</h5>
                    <p>We understand the importance of staying informed. Our mutual fund services provide <span style="font-weight: bold">regular statements and reports:</span> </p>

                    <ul>
                        <li>
                            o	<span style="font-weight: bold">Account Statements:</span> Receive periodic statements detailing your investments, transactions, and portfolio performance.
                        </li>
                        <li>
                            o	<span style="font-weight: bold">Annual Reports:</span> Access comprehensive reports summarizing fund performance, holdings, and strategies.
                        </li>
                        <li>
                            o	Stay informed about fund performance through our user-friendly interface.
                        </li>
                        <li>
                            o	<span style="font-weight: bold">Regular Updates:</span> Receive timely updates on your investments.
                        </li>
                    </ul>

                    <h5 class="mb-3 mt-5">Expert Guidance</h5>

                    <ul>
                        <li>
                            •	Our seasoned advisors provide <span style="font-weight: bold">personalized guidance</span>.
                        </li>
                        <li>
                            •	Whether you’re a novice or an experienced investor, we assist you in making informed choices.
                        </li>
                        <li>
                            •	<span style="font-weight: bold">Investment Strategies:</span> Learn about diversification, asset allocation, and more.
                        </li>

                    </ul>



                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->


@endsection
