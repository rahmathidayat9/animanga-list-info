@extends('layouts.frontend.app',[
    'title' => 'Character Detail'
])
@section('content')
<!-- Anime Section Begin -->
<section class="anime-details spad">
<div class="container">
    <div class="anime__details__content">
        <div class="row">
            <div class="col-lg-3">
                <div class="anime__details__pic set-bg" data-setbg="{{ $character['image_url'] }}">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="anime__details__text">
                    <div class="anime__details__title">
                        <h3>{{ $character['name'] }}</h3>
                    </div>
                    
                    <p>{!! nl2br(e($character['about'])) !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Voice Actores</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($character['voice_actors'] as $vA)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ $vA['image_url'] }}">
                        <div class="ep">{{ $vA['language'] }}</div>
                    </div>
                    <div class="product__item__text">
                        <h5><a href="">{{ $vA['name'] }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Anime Section End -->

@stop