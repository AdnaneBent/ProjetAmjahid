@include('partials.header')


<section class="pb-0">
    <div class="container">
        <div class="box box-primary">
            <div class="box-body">
                @foreach($athletes as $athlete)
                {{-- titre --}}
                    <h2>{{$athlete->titre}}</h2>
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">
                            Née le : <span style="color:#be8c3c;">28 octobre 1995 (22 ans)</span>
                        </h4>
                        <h4 class="wow fadeInLeft" data-wow-delay="0.5s">
                            À : <span style="color:#be8c3c;">Bruxelles (Belgique)</span>
                        </h4>
                        <h4 class="wow fadeInLeft" data-wow-delay="0.4s">
                            Nationalité : <span style="color:#be8c3c;">Belge
                        </h4>
                        <hr>
                        {{-- Taille --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.3s">Poids : <span style="color:#be8c3c;">{{$athlete->poids}}</span></h4>
                        {{-- Poids --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.2s">Taille : <span style="color:#be8c3c;">{{$athlete->taille}}</h4>
                        <hr>
                        {{-- Sport --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.1s">Sport : <span style="color:#be8c3c;">jiu-jitsu</h4>
                        {{-- Rang --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.1s">Rang : <span style="color:#be8c3c;">{{$athlete->rang}}</h4>
                        {{-- Categorie --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.2s">Catégorie : <span style="color:#be8c3c;">{{$athlete->categorie}}</h4>
                        {{-- Club --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.3s">Club : <span style="color:#be8c3c;">{{$athlete->club}}</h4>
                        <hr>
                        {{-- Championne Mondial --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.4s">Championne du Monde: <span style="color:#be8c3c;">{{$athlete->champM}}</h4>
                        {{-- Championne des Jeux Mondiaux --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.5s">Championne des Jeux mondiaux: <span style="color:#be8c3c;">{{$athlete->champJ}}</h4>
                        {{-- Volume d'entraînement --}}
                            <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Volume d'entraînement journalier <span style="color:#be8c3c;">{{$athlete->training}}</h4>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5">
                            <img style="width:100%;" src="{{Storage::disk('imgAthlete')->url($athlete->image)}}" alt="Card image cap">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
  </section>

  <!--== Biographie Start ==-->
  <section class="pt-0 white-bg">
    <div class="container">
    	<div class="row">
        	<div class="col-md-6 wow fadeInLeft mt-80 mb-80" data-wow-delay="0.5s">
       	    	<img class="img-responsive" src="{{Storage::disk('imgBiographie')->url($biographie->image)}}" alt="{{$biographie->titre}}" alt="">
            </div>
            <div class="col-md-6 wow fadeInRight mt-100" data-wow-delay="0.5s">
                <div>
                <h2 class="textgold">{{$biographie->titre}}</h2>
                    <p>{!!$biographie->contenu!!}</p>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--== Biographies End ==-->




@include('partials.contact')