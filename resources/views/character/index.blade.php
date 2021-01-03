@extends('layouts.frontend.app',[
'title' => 'Character & Staff'
])
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
                                <div class="section-title mb-2">
                                    <h4>Character & Staff</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                             	   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($characters['characters'] as $character)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $character['image_url'] }}">
                                    <div class="ep">{{ $character['role'] }}</div>
                                </div>
                                <div class="product__item__text">
                                    <h5><a href="/character/{{ encrypt($character['mal_id']) }}">{{ $character['name'] }}</a></h5>
                                </div>
                            </div>
                        </div>
                     	@endforeach
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->
@stop