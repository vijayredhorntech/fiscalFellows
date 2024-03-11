@extends('layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>DSA <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">DSA</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">

                    <h2 class="mb-3">DSA</h2>
                    <p>We are here with tie up with top-notch banks to provide you finance with competitive rate of interest, the least hassles of documentation and faster disbursements so that you can focus on your core business without worrying about the cumbersome process of documentation, rate negotiations and numerous visits of banks to sort list the best for you.
                    </p>
                    <p>Let’s fuel the growth together!!!</p>


                    <h5 class="mb-3 mt-5">Personal Finance:</h5>
                    <ul>
                        <li>
                            Ease of fulfilling the dreams. Fiancé is the biggest tool to turn dreams into reality. Whether you are buying a house, buying your dream car, furnishing your house with amenities, want to grab a latest gadgets or just going on a dream destination we are here to find your dream.
                        </li>

                    </ul>


                    <h5 class="mb-3 mt-5">Business Finance:</h5>
                    <ul>
                        <li>
                            Finance is the fuel for any business.
                            In a developing economy like ours, which is poised to grow at an exponential rate, business is blooming in every corner of the country. Finance is lifeblood and fuel to each and every business. For a startup, it’s a seeding spur and for an existing one this the expansion fuel.

                        </li>

                    </ul>

                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->


@endsection
