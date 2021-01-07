@extends('layouts.frontend.app',[
    'title' => 'Anime Watching'
])
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:void(0)">Streaming</a>
                    <a href="javascript:void(0)">{{ $anime['title'] }}</a>
                    <span>Eps {{ $animeChoosed['episode_id'] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <iframe src="{{ $anime_link_src }}" width="100%" height="500" allowfullscreen allow="encrypted-media"> 
                    </iframe>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Menu</h5>
                    </div>
                    <a href="/streaming/anime/{{ encrypt($anime['mal_id']) }}">Kembali</a>
                    <!-- <a href="#">Ep 01</a>
                    <a href="#">Ep 02</a>
                    <a href="#">Ep 03</a>
                    <a href="#">Ep 04</a>
                    <a href="#">Ep 05</a>
                    <a href="#">Ep 06</a>
                    <a href="#">Ep 07</a>
                    <a href="#">Ep 08</a>
                    <a href="#">Ep 09</a>
                    <a href="#">Ep 10</a>
                    <a href="#">Ep 11</a>
                    <a href="#">Ep 12</a>
                    <a href="#">Ep 13</a>
                    <a href="#">Ep 14</a>
                    <a href="#">Ep 15</a>
                    <a href="#">Ep 16</a>
                    <a href="#">Ep 17</a>
                    <a href="#">Ep 18</a>
                    <a href="#">Ep 19</a> -->
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-1.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                            "demons" LOL</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-2.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-3.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-4.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                            "demons" LOL</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-5.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-6.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- Anime Section End -->

@stop