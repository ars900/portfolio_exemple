@extends('frontend.main_master')
@section('main')

@section('title')
Blog | EasyLearning Website
@endsection

<main>
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title"> All Blogs </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standard__blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="blog__sidebar"><div class="widget"><h4 class="widget-title">Recent Blog</h4><ul class="rc__post">@foreach($blogs as $all )<li class="rc__post__item"><div class="rc__post__thumb"><a href=""><img src="{{ asset($all->image) }} " alt=""></a></div><div class="rc__post__content"><h5 class="title"><a href="blog-details.html">{{ $all->title }}</a></h5><span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }} </span></div></li>@endforeach</ul></div><div class="widget"><h4 class="widget-title">Categories</h4><ul class="sidebar__cat">@foreach($categories as $cat)<li class="sidebar__cat__item"><a href="">{{ $cat->blog_category  }}  </a></li>@endforeach</ul></div>
                        <div class="widget">
                            <h4 class="widget-title">Recent Comment</h4>
                            <ul class="sidebar__comment">
                                <li class="sidebar__comment__item">
                                    <a href="">Rasalina Sponde</a>
                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                </li>
                                <li class="sidebar__comment__item">
                                    <a href="">Rasalina Sponde</a>
                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                </li>
                                <li class="sidebar__comment__item">
                                    <a href="">Rasalina Sponde</a>
                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                </li>
                                <li class="sidebar__comment__item">
                                    <a href="">Rasalina Sponde</a>
                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="sidebar__tags">
                                <li><a href="">Business</a></li>
                                <li><a href="">Design</a></li>
                                <li><a href="">apps</a></li>
                                <li><a href="">landing page</a></li>
                                <li><a href="">data</a></li>
                                <li><a href="">website</a></li>
                                <li><a href="">book</a></li>
                                <li><a href="">Design</a></li>
                                <li><a href="">product design</a></li>
                                <li><a href="">landing page</a></li>
                                <li><a href="">data</a></li>
                            </ul>
                        </div>
                    </aside>
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