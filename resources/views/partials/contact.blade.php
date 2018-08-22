	<!--== Footer Start ==-->
  <footer class="footer dark-block" id="footer-fixed">
    <div class="footer-copyright"> 
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="copy-right text-left">© 2018 Torneo. All rights reserved</div>
          </div>
          <div class="col-md-6 col-xs-12">
            <ul class="social-media">
              @foreach($socialnetworks as $socialnetwork)
                <li><a href="{{$socialnetwork->link}}"><i class="{{$socialnetwork->image}}"></i></a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
  <!--== Footer End ==-->

   <!--== Javascript Plugins ==-->
<script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('theme/assets/js/plugins.js')}}"></script>
<script src="{{asset('theme/assets/js/master.js')}}"></script>

<script type="text/javascript">
var revapi314,
tpj=jQuery;

tpj(document).ready(function() {
if(tpj("#rev_slider_314_1").revolution == undefined){
revslider_showDoubleJqueryError("#rev_slider_314_1");
}else{
revapi314 = tpj("#rev_slider_314_1").show().revolution({
  sliderType:"hero",
  jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
  sliderLayout:"fullscreen",
  dottedOverlay:"none",
  delay:9000,
  responsiveLevels:[1240,1024,778,480],
  visibilityLevels:[1240,1024,778,480],
  gridwidth:[1240,1024,778,480],
  gridheight:[868,768,960,720],
  lazyType:"none",
  parallax: {
    type:"scroll",
    origo:"slidercenter",
    speed:400,
    levels:[1,2,3,4,5,6,7,8,9,10,15,48,49,50,51,55],
  },
  shadow:0,
  spinner:"spinner3",
  autoHeight:"off",
  fullScreenAutoWidth:"off",
  fullScreenAlignForce:"off",
  fullScreenOffsetContainer: "",
  fullScreenOffset: "60px",
  disableProgressBar:"on",
  hideThumbsOnMobile:"off",
  hideSliderAtLimit:0,
  hideCaptionAtLimit:0,
  hideAllCaptionAtLilmit:0,
  debugMode:false,
  fallbacks: {
    simplifyAll:"off",
    disableFocusListener:false,
  }
});
}
try{initSocialSharing("314")} catch(e){}
});	/*ready*/
</script>

<!-- Revolution js Files -->
<script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/revolution/js/revolution.extension.video.min.js')}}"></script>
<!--== Javascript Plugins End ==-->

</body>
</html>

<!--== Wrapper End ==-->
