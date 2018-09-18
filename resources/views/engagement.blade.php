@include('partials.header')

 {{-- Engagements Start --}}

<section class="text-center">
    <div class="container">
        <div class="row">
		    <div class="wow fadeInLeft" data-wow-delay="0.2s">
        	<h2 class="mt-0 mb-0 font-80px textgold">{{$engagement->titre}}</h2>
        	<p style="text-align: justify;" class="mt-30 font-300 font-16px">{!!$engagement->contenu!!}</p>
        </div>
    </div>
    <br>

    <!-- Carousel container -->
    <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:1000px;margin:auto;">

<!-- Content -->
        <div class="carousel-inner" role="listbox">
            @foreach($carousels as $carousel)
            <div class="item {{ $loop->first ? ' active' : '' }}" >
                <img class="img-fluid" src="{{Storage::disk('imgCarousel')->url($carousel->image)}}" alt="{{$carousel->name}}" alt="">
            </div>
            @endforeach

        </div>

<!-- Previous/Next controls -->
        <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
        <span aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
        <span aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>

    </div>
</section>
    
    
	{{-- Engagement End --}}

@include('partials.contact',$socialnetworks)

    