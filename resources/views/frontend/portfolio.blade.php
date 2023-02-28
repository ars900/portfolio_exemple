@extends('frontend.main_master')
@section('main')

@section('title')
    PortFolio | Arsi Website
@endsection

<main>
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Portfolio Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio">
        <div class="container">
           <div class="row justify-content-center">
               <div class="col-xl-6 col-lg-8">
                   <div class="section__title text-center">
                       <span class="sub-title">04 - Portfolio</span>
                       <h2 class="title">All creative work</h2>
                   </div>
               </div>
           </div>
        </div>
        <div class="tab-content" id="portfolioTabContent">
            <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="graphic-tab">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col">
                            <div class="portfolio__active">
                                @foreach($portfolio as $item)
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset($item->image) }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>{{$item->name}}</span>
                                            <h4 class="title"><a href="">{{$item->title}}</a></h4>
                                            <a href="" class="link">Case Study</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homeContact homeContact__style__two">
       <div class="container">
           <div class="homeContact__wrap">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="section__title">
                           <span class="sub-title">07 - Say hello</span>
                           <h2 class="title">Any questions? Feel free <br> to contact</h2>
                       </div>
                       <div class="homeContact__content">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                           <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="homeContact__form">
                           <form action="#">
                               <input type="text" placeholder="Enter name*">
                               <input type="email" placeholder="Enter mail*">
                               <input type="number" placeholder="Enter number*">
                               <textarea name="message" placeholder="Enter Massage*"></textarea>
                               <button type="submit">Send Message</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
</main>



@endsection
