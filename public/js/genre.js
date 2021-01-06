$(document).ready(function(){
        $(document).ajaxSend(function() {
            $("#overlay").fadeIn(300);　
        });

        $("#genre").change(function(){
            var id = $(this).val()
            
            $.ajax({
                url: "https://api.jikan.moe/v3/genre/anime/"+id,
                type: "GET",
                success: function(response){
                  
                  setTimeout(function(){
                    $("#overlay").fadeOut(500);
                  },500);

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
                                        <h5><a href="/anime-details/`+value.mal_id+`">`+value.title+`</a></h5>
                                    </div>
                                </div>
                            </div>
                        `)
                    })
                }
            })
        })
    })