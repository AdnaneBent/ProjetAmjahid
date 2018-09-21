@include('partials.header')

<!--== Clients Start ==-->
  <section class="pb-0">
    <div class="container">
      <div class="row">
          <h1 class="textgold">Section Presse</h1>
          <div>
          @foreach($articles as $article)
          <!-- Post item -->
          <div class="col-md-6 col-sm-6 col-xs-12">
              <h2 class="textgold pt-10">{{$article->titre}}</h2>
              <div class=" wow fadeInUp row" data-wow-delay="0.1s">
                    <div class="post-date mt-60">
                        <h4>{{$article->created_at->format('d M Y')}}</h4>
                    </div>
                    <div class="display-table mb-30 full-width ">
                        <div class="v-align-middle img-responsive">
                            <img src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="{{$article->name}}" alt="">
                        </div>
                    </div>
                    <div style="margin-right: 100px;text-align: justify;">
                         <p> {!!$description = substr($article->contenu, 0, 300)!!} ... </p>
                         <a href="{{route('presseshow',['article'=>$article->id])}}" class="btn btn-md btn-warning btn-animate btn-square mb-40"><span>Read more <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                    <div class="page-pagination">
                        {{$articles->links('components.pagination')}}
                    </div>
    </div>
  </section>
  <!--== Clients End ==-->



@include('partials.contact' ,$socialnetworks)

