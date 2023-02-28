<section class="banner">
    <div class="container custom-container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="banner__img text-center text-xxl-end">
                    <img src="{{ $homeSlide->home_slide  }}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content">
                    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $homeSlide->title  }}</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">{{ $homeSlide->short_title  }}</p>
                    <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll__down">
        <a href="#aboutSection" class="scroll__link">Scroll down</a>
    </div>
    <div class="banner__video">
        <a href="{{ $homeSlide->video_url  }}" class="popup-video"><i class="fas fa-play"></i></a>
    </div>
</section>
<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach($allMultiImage as $item)
                        <li>
                            <img class="light" src="{{ asset($item->multi_image ) }}" alt="XD">
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{ $aboutPage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src=" " alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutPage->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutPage->short_description }}</p>
                    <a href="about.html" class="btn">Download my resume</a>
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
                                        <img src="{{ asset($item->portfolio_image) }}" alt="">
                                    </div>
                                    <div class="portfolio__overlay__content">
                                        <span>{{$item->portfolio_name}}</span>
                                        <h4 class="title"><a href="">{{$item->  portfolio_title}}</a></h4>
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
<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @foreach($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="{{ route('blog_page.index') }}"><img src="{{ asset($item->image) }} " alt=""></a>
                            <div class="blog__post__tags">
                                {{--                                <a href="blog.html">{{ $item['category']['blog_category'] }}</a>--}}
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </span>
                            <h3 class="title"><a href=""> {{ $item->title }} </a></h3>
                            <a href="" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="{{ route('blog_page.index') }}" class="btn">more blog</a>
        </div>
    </div>
</section>

