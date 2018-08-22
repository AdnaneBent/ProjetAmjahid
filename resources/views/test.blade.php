<section>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 col-sm-6 wow fadeInRight para" data-wow-delay="0.5s">
					<div style="background-image:url('{{Storage::disk('imgEngagement')->url($engagement->image)}}');" class="col-md-7 wow fadeInLeft mt-80 mb-80 para" data-wow-delay="0.5s" style="position: relative;">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
					<h2 class="mt-0 mb-0 font-60px textgold">{{$engagement->titre}}</h2
					<p class="mt-30 font-300 font-16px">{!!$description = substr($engagement->contenu, 0, 400)!!} ...</p>
					<p class="mt-30"><a href="{{route('engagement')}}" class="btn btn-md btn-warning btn-animate btn-square"><span>Découvrir <i class="tr-icon icofont icofont-arrow-right"></i></span></a></p>
				</div>
			</div>
		</div>
	</section>

	https://www.facebook.com/amjahid.amal/
	https://www.instagram.com/amalamjahid/?hl=fr