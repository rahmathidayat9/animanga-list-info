@extends('layouts.frontend.app')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            
                <div class="hero__items set-bg" data-setbg="{{ asset('templates/frontend/anime-main') }}/img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Top Airing</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($topAiring['top'] as $tA)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $tA['image_url'] }}">
                                        <div class="ep">{{ $tA['type'] }}</div>
                                        <div class="view"><i class="fa fa-star"></i> {{ $tA['score'] }}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="{{ route('anime.show',encrypt($tA['mal_id'])) }}">{{ $tA['title'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Rating</h5>
                            </div>
                            @foreach($topScore['top'] as $tS)
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="{{ $tS['image_url'] }}">
                                <div class="ep">{{ $tS['type'] }}</div>
                                <div class="view"><i class="fa fa-star"></i> {{ $tS['score'] }}</div>
                                <h5><a href="/anime/{{ encrypt($aSR['mal_id'] }}">{{ $tS['title'] }}</a></h5>
                            </div>
                            @endforeach

        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

@stop