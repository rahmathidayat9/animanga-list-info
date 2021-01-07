@extends('layouts.frontend.app',[
    'title' => 'Genre List'
])
@section('css-script')
<style type="text/css">
#overlay{   
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}
</style>
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
                                        <select data-url="/genre" name="genre" id="genre">
                                            <option value="0">Select Genre</option>
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
@stop

@section('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        
        $(document).ajaxSend(function() {
            $("#overlay").fadeIn(500);　
        });

        $("#genre").change(function(){

            if ($(this).val()==0) {
              document.location.href="/genre"
            }

            var id = $(this).val()
            
            $.ajax({
                url: "https://api.jikan.moe/v3/genre/anime/"+id,
                type: "GET",
                success: function(response){
                  
                  setTimeout(function(){
                    $("#overlay").fadeOut(500);
                  },300);

                    $("#genre-title").html("Genre : "+response.mal_url.name)
                    var anime = response.anime

                    $("#anime-list").html("")

                    $.each(anime,function(key, value){
                        $("#anime-list").append(`
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">

                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <img src="`+value.image_url+`" width="100%" style="height: 330px; object-fit: cover; object-position: center;">
                                        <div class="ep">`+value.type+`</div>
                                        <div class="view"><i class="fa fa-star"></i> `+value.score+`</div>
                                    </div>
                                    
                                    <div class="product__item__text">
                                        <h5><a href="/anime/`+value.mal_id+`">`+value.title+`</a></h5>
                                    </div>
                                </div>
                            </div>
                        `)
                    })
                }
            })
        })
    })
</script>
@stop