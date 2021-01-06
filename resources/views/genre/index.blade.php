@extends('layouts.frontend.app',[
    'title' => 'Genre List'
])
@section('css-script')
<link rel="stylesheet" type="text/css" href="{{ asset('css/genre.css') }}">
@stop

@section('content')
    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4 id="genre-title" class="genre-title">Choose Genre</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Genre:</p>
                                        <select name="genre" id="genre">
                                            <option value="">Select Genre</option>
                                            @foreach($genres as $genre)
                                            <option value="{{ $genre['mal_id'] }}">{{ $genre['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row anime-list" id="anime-list">
                            
                        </div>
                    </div>
                    <!-- <div class="product__pagination">
                        <a href="#" class="current-page">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </div> -->
                </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<!-- Product Section End -->
@stop

@section('js-script')
<script type="text/javascript" src="{{ asset('js/genre.js') }}"></script>
@stop