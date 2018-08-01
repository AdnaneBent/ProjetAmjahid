@include('partials.header')

 {{-- Engagements Start --}}

<section class="text-center">
    <div class="container">
        <div class="row">
		    <div class="wow fadeInLeft" data-wow-delay="0.2s">
        	<h2 class="mt-0 mb-0 font-80px textgold">{{$engagement->titre}}</h2
        	<p class="mt-30 font-300 font-16px">{!!$engagement->contenu!!}</p>
        </div>
    </div>
    <br>
 
      <div id="carousel-example-generic" class="carousel slide container" data-ride="carousel">
          
          <!-- Wrapper for slides -->
          <div style="height:600px" class="carousel-inner container-fluid" role="listbox">
            @foreach( $carousels as $carousel )
            <div class="item {{ $loop->first ? ' active' : '' }}" >
                    <img class="img-responsive" src="{{Storage::disk('imgCarousel')->url($carousel->image)}}" alt="{{$carousel->name}}" alt="">
                </div>
            @endforeach
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            
        </a>
    </div>
</section>
    
    
	{{-- Engagement End --}}

    @include('partials.contact')

    