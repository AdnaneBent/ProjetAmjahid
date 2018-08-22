@include('partials.header')

<!--== Clients Start ==-->
  <section class="pb-0">
    <div class="container">
      <div class="row">
          <h1 class="textgold">Les partenaires</h1>
          @foreach($partenaires as $partenaire)
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height container">
              <div class="v-align-middle img-responsive">
                <a href="http://{{$partenaire->url}}" target="_blank">
                  <img src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="{{$partenaire->name}}" alt="">
                </a>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--== Clients End ==-->


@include('partials.contact',$socialnetworks)

