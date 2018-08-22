@include('partials.header')

 {{-- academies Start --}}

<section class="text-center white-bg">
    <div>
        <div class="container">
            <div class="row">
                <div class="wow fadeInLeft" data-wow-delay="0.8s">
                <h2 class="mt-0 mb-0 font-80px textgold">{{$academie->titre}}</h2
                    <div >
                <img style="width:70%;" src="{{Storage::disk('imgAcademie')->url($academie->image)}}" alt="{{$academie->name}}" alt="">
            </div>
            <div class="grey-bg">
                <p class="mt-30 font-300 font-16px grey-bg">{!!$academie->contenu!!}</p>
            </div>
        </div>
        <br>
    </div>
</section>
    
    
	{{-- academie End --}}

@include('partials.contact')

    