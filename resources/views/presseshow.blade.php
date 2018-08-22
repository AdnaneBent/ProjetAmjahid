@include('partials.header')

<section class="white-bg" id="restaurant">
    <div class="container">
      <div class="row">
		      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.1s">
        	<h2 class="mt-0 mb-0 font-80px textgold">{{$article->titre}}</h2
        	<p class="mt-30 font-300 font-16px">{!!$article->contenu!!}</p>
        </div>
        <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
        	<figure class=" mt-30"><img src="{{Storage::disk('imgArticleShow')->url($article->image)}}" alt="{{$article->titre}}" alt="">
          	</figure>
        </div>
      </div>
    </div>
</section>

@include('partials.contact',$socialnetworks)