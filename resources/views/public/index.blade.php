@extends('layouts.public')

@section('content')
    <div class="stage" id="stage">
        <div class="block block-fill-height app-block-wayne"
             style="background-image: url({{ asset('img/cover.jpg') }})">

            <button class="btn btn-link stage-toggle" data-target="#stage" data-toggle="stage">
                <span class="icon icon-menu stage-toggle-icon"></span>
                Menu
            </button>

            <div class="block-sm-middle block-xs-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1 class="block-title mb-4">
              <span class="text-ribbon text-ribbon-primary">
                <span>#NattyRevolution</span>
              </span>
                            </h1>
                            <p class="lead mt-1">
              <span class="text-ribbon text-ribbon-primary">
                <span>
                    Empowering competitors to reach their own dreams and potential.
                </span>
              </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="block block-inverse block-transparent py-0 app-block-grid">

            <div class="block-bg-clip">
                <div class="block-bg">
                    <div class="block-bg-img"></div>
                </div>
            </div>

            <div class="container" id="grid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="row mb-3 mb-md-4">
                            <div class="col-lg-12">
                                <div class="card card-bold card-danger mb-0 app-box-shadow">
                                    <img src="{{ asset('img/mid1.jpg') }}">
                                    <div class="card-body pb-5">
                                        <h4 class="mb-0">Jane Doe</h4>
                                        <p class="text-serif"><em>PNBA/NGA Bikini Pro</em></p>
                                        <hr>
                                        <p class="text-serif"><em>Ms. Doe was the first athlete to reach out to us to
                                                coordinate her leak. We knew it was going to be the largest unofficial
                                                album
                                                drop in history. We doubled server capacity and made a lot ton of
                                                coffee.</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none d-lg-block">
                            <div class="col-lg-12">
                                <img src="{{ asset('img/mid5.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-md-4">
                                <div class="app-box-shadow">
                                    <img src="{{ asset('img/mid2.jpg') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3 mb-md-4">
                                <div class="app-box-shadow">
                                    <img src="{{ asset('img/mid4.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row d-none d-lg-block">
                            <div class="col-lg-12">
                                <img src="{{ asset('img/mid3.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block block-fill-height block-transparent block-angle app-block-chainz" id="chainz">

            <div class="block-bg-clip">
                <div class="block-bg">
                    <div class="block-bg-img block-bg-img-top"
                         style="background-image: url({{ asset('img/best.jpg') }})">
                    </div>
                </div>
            </div>

            <div class="block-sm-middle block-xs-top">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-7 col-lg-5">
                            <h1 class="block-title mb-4">
              <span class="text-ribbon text-ribbon-primary">
                <span>Best of the Best.</span>
              </span>
                            </h1>
                            <p class="lead">
              <span class="text-ribbon text-ribbon-primary">
                <span>
                  Every show, class, and competitor is as unmatched as the production value.
                </span>
              </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block block-fill-height block-transparent block-inverse block-angle app-block-kanye">
            <div class="block-bg-clip">
                <div class="block-bg">
                    <div class="block-bg-img block-bg-img-top"
                         style="background-image: url({{ asset('img/show.jpg') }})">
                    </div>
                </div>
            </div>

            <div class="block-xs-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-5">
                            <h1 class="block-title mb-4">
              <span class="text-ribbon">
                <span>Your Show.</span>
              </span>
                            </h1>
                            <p class="lead">
              <span class="text-ribbon">
                <span>
                    You're the star. We'll make sure this is an event that you'll never forget.
                </span>
              </span>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="682" height="384"
                                        src="https://www.youtube.com/embed/HYtRdcWc3KE?rel=0&amp;controls=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block block-transparent block-fill-height block-angle block-app-mosdef" id="contact">
            <div class="block-bg-clip">
                <div class="block-bg">
                    <div class="block-bg-img block-bg-img-top"
                         style="background-image: url({{ asset('img/contact.jpg') }})">
                    </div>
                </div>
            </div>

            <div class="block-xs-middle">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-7 col-lg-6">
                            <h1 class="block-title mb-4">
                                <span class="text-ribbon text-ribbon-primary">
                                    <span>Contact Us.</span>
                                </span>
                            </h1>
                            @include('public.forms.contact')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block block-fill-height block-inverse app-block-nicki"
             style="background-image: url({{ asset('img/nicki.jpg') }})"
             id="pricing">
            <div class="block-xs-middle">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-5">
                            <h1 class="block-title mb-4">
              <span class="text-ribbon">
                <span>Prep Coaching.</span>
              </span></h1>
                            <p class="lead">
              <span class="text-ribbon text-muted">
                <span>
                    Train with Team Classic Physique for your next competition.
                </span>
              </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-body">
                                    <h3 class="card-title">8 Week Package</h3>
                                    <h4 class="text-muted text-serif mt-0 mb-3">
                                        <em>$400</em>
                                    </h4>
                                    <p class="text-serif mb-1">
                                        <em>
                                            This is an awesome plan! Get in touch today to see how we can help you
                                            achieve your goals and dreams!
                                        </em>
                                    </p>
                                    <hr>
                                    <ul class="iconlist text-serif mb-4">
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Diet Coaching</em>
                                        </li>
                                        <li>
                                            <span class="icon icon-cross"></span>
                                            <em>Training Routines</em>
                                        </li>
                                        <li>
                                            <span class="icon icon-cross"></span>
                                            <em>Contest Day Tanning</em>
                                        </li>
                                    </ul>
                                    <button class="btn btn-secondary btn-square btn-block btn-lg">Start a basic trial
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card accent-primary mb-3 mb-lg-0">
                                <div class="card-body">
                                    <h3 class="card-title">20 Week Package</h3>
                                    <h4 class="text-primary text-serif mt-0 mb-3">
                                        <em>$700</em>
                                    </h4>
                                    <p class="text-serif mb-1">
                                        <em>
                                            This is an awesome plan! Get in touch today to see how we can help you
                                            achieve your goals and dreams!
                                        </em>
                                    </p>
                                    <hr>
                                    <ul class="iconlist text-serif mb-4">
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Diet Coaching</em>
                                        </li>
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Training Routines</em>
                                        </li>
                                        <li>
                                            <span class="icon icon-cross"></span>
                                            <em>Contest Day Tanning</em>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-square btn-block btn-lg">Start a basic trial
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-body">
                                    <h3 class="card-title">52 Week Package</h3>
                                    <h4 class="text-muted text-serif mt-0 mb-2">
                                        <em>$1090</em>
                                    </h4>
                                    <p class="text-serif mb-1">
                                        <em>
                                            This is an awesome plan! Get in touch today to see how we can help you
                                            achieve your goals and dreams!
                                        </em>
                                    <hr>
                                    <ul class="iconlist text-serif mb-4">
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Diet Coaching</em>
                                        </li>
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Training Routines</em>
                                        </li>
                                        <li class="active">
                                            <span class="icon icon-check"></span>
                                            <em>Contest Day Tanning</em>
                                        </li>
                                    </ul>
                                    <button class="btn btn-secondary btn-square btn-block btn-lg">Start a basic trial
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="block block-inverse accent-primary" id="footer">
            <div class="container">
                <div class="row text-serif">
                    <div class="col-md-4 mb-4">
                        <ul class="list-unstyled list-spaced">
                            <li><h4>Our Purpose</h4></li>
                            <li class="text-muted">
                                <em>
                                    Our Mayhem Production competitions strive to unite individuals from all organizations and divisions. To build a family like bond with those who share similar passions in promoting health, wellness and camaraderie between competitors. To help build each other up and step on stage WITH one another as opposed to against. We value trust, respect and integrity…empowering every competitor to reach their own potential.
                                </em>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <ul class="list-unstyled list-spaced">
                            <li><h4>All About the Athlete</h4></li>
                            <li class="text-muted">
                                <em>
                                    These are YOUR shows. We know you diet and train for months on end essentially for only a few minutes on stage. Because of this you deserve the best possible experience to display the results of all your hard work. Here at Mayhem Productions, the competitor’s desires and dreams are put first. From the world class venues, to the incredible swag bags, breathtaking photography, celebrity caliber media exposure and stunning awards…we do it with your needs and wants in mind. YOU are the stars on show day and we’ll do everything in our power to make this an event to remember.
                                </em>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <ul class="list-unstyled list-spaced">
                            <li><h4>Politics</h4></li>
                            <li class="text-muted">
                                <em>
                                    Politics have no place in this sport. Regardless of who you are, where you are from, your level of involvement in the sport or who your associations are, the best physique on the day of the show should win. To protect against politics and such bias we have handpicked the best judges available to us from all over the country. Each selected individual has proven themselves to be accurate judges, knowledgeable of the standards in each division and proven to be unbiased and trustworthy in their judging.
                                </em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection