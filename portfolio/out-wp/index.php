<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="http://jeong-yucheol.com">
    <meta name="robots" content="index,follow" />
    <meta name="description" content="카본 맞춤형 자전거 제작- 커스텀바이크제작">
    <meta property="og:type" content="website">
    <meta property="og:title" content="아웃피터스-카본커스텀바이크제작">
    <meta property="og:description" content="저희는 자전거를 만들고 있습니다.">
    <meta property="og:image" content="http://www.outfitters.co.kr/img/main_product1_1280.png">
    <meta property="og:url" content="http://www.outfitters.co.kr">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Outfitters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/total.css">
    <script type='text/javascript' src="js/prefixfree.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
      <script>
       $(function(){
         
         var menu = 1;
         $('#gnb>div').hide();
           
         function color_w(){
            $('#direction>ul>.bar').css({'background':'#fff'})
            $('#direction>ul>.big,.sub,.email,.call').css({'color':'#fff'})   
            $('#gnb>p').css({'background':'#fff'})
            $('#gnb>span,#gnb>div>span>a').css({'color':'#fff'})
            $('header>a').css({'background':'url(img/logo_w.png)no-repeat center center'})
            $('aside>a>i').css({'color':'#fff'})
           }
         function color_b(){
           $('#direction>ul>.bar').css({'background':'#000'})
           $('#direction>ul>.big,.sub,.email,.call').css({'color':'#000'})  
           $('#gnb>p').css({'background':'#000'})
           $('#gnb>span,#gnb>div>span>a').css({'color':'#000'})
           $('header>a').css({'background':'url(img/logo.png)no-repeat center center'})
           $('aside>a>i').css({'color':'#000'})

           }
          $('.sub').on('mouseover', function(appear){
             $('.big>span').css({
                 'width':'10px',
                 'transition':'0.5s'
                })
             $('.bar').css({
                 'width':'10px',
                 'transition':'0.5s'
                })
             $('.big>p').css({
                 'opacity':'1',
                 'transition':'0.5s'
                })
           })
          $('.sub').on('mouseout', function(disappear){
             $('.big>span').css({
                 'width':'60px',
                 'transition':'1s'
                })
             $('.big>p').css({
                 'opacity':'0',
                 'transition':'0.5s'
                })
             $('.bar').css({
                 'width':'50px',
                 'transition':'0.5s'
                })
             
           })
          $('#gnb').on('click',function(){
              if(menu==1){
              $('#gnb>span').fadeOut('100');
              $('#gnb>div').fadeIn('slow');
              menu = 2;
              }else{
                  $('#gnb>div').fadeOut('100');
                  $('#gnb>span').fadeIn('slow');
              menu = 1;
              }
           })
          $('.fa-y-combinator').on('mouseover',function(){
            $('.kakao').css({'color':'#fedd00','transition':'0.5s'})
            $('.kakao').css({'text-shadow':'0px 1px 1px #c48204'})
        })
          $('.fa-y-combinator').on('mouseout',function(){
           $('.kakao').css({'color':'#fff','transition':'0.5s'})
            })
       
          $('#sub_product').on('click',function(){
               color_b();
               $('#event_context').animate({'top':'100%'},500,'easeOutQuint')
               $('.bxslider').show();
               $('.bx-wrapper').show();
               mySlider.goToNextSlide();
               
           })
          $('#sub_event').on('click',function(){
               $('.bxslider').hide();
               $('.bx-wrapper').hide();
               $('#body_news').css({'background':'#000'})
               $('#event_context').animate({'top':'50%'},500,'easeOutQuint')
               color_w();
           })
           
           
        
       var mySlider = $('.bxslider').bxSlider({
          mode:'fade', //default : 'horizontal', options: 'horizontal', 'vertical', 'fade'
          speed:1000, 
          auto: false,
          captions: false,
            });
       
       })
      
    </script>
</head>
<body id="body_news">
   <header><a href="#"></a></header>
       <section id='gnb'>
       <p id='p1'></p>
       <p id='p2'></p>
       <span>menu</span>
       <div>    
           <span><a href="about.html">about</a></span>
           <span><a href="process.html">process</a></span>
           <span><a href="portfolio.html">portfolio</a></span>
           <span><a href="#" target="_blank">shop</a></span>
       </div>
       
       
       </section>
       <aside>
       <a href="https://www.facebook.com/fgoutfitters/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
       <a href="https://www.instagram.com/outfitters2017/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
       <a href=""><i class="fab fa-y-combinator" aria-hidden="true"></i></a>
       </aside>
              
       <div id="direction">
           <ul>
               <li class="big" id="sub_about"><span>news</span><p>.</p></li>
               <li class="bar"></li>
               <li class="sub" id="sub_product"><span>product</span></li>
               <li class="sub" id="sub_event"><span>event</span></li>
               
           </ul>
       </div>
      <ul class="bxslider">
       <li><img class='pp1' src="img/main_product1.png" title="11:08 Road bike"/></li>
      </ul>
      <div id="event_context" class ='context'>
       <p>헛! :( </p>
       <span>이번 달엔, 특별한 행사가 없습니다.</span></div>
       
    <footer>
        
        <span class="email">all@outfitters.co.kr</span>
        <span class="call">070.8811.1975</span>
        <span class="kakao">KakaoTalk <span>@아웃피터스</span></span>
        <span class="map">map</span>
        
        <div class="place_map">
        <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3164.8157803909294!2d127.00047871944174!3d37.51226283837647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d37.512024499999995!2d127.0011976!5e0!3m2!1sko!2skr!4v1482462700491&zoom=17" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </p>
        <div>
            <span class="workshop">한강자전거공방</span>
            <span class="subway">고속버스터미널역 8-2번 출구 도보 5분</span>
            <span class="car">자차이용시&nbsp;&nbsp; "신반포2차아파트109동"</span>
        </div>
        </div>
        <script>
          $(function(){
              
              var ccc ='2';
           $('.map').on('click',function(){
               if(ccc==2){$('.place_map').animate({'top':'0px'},800,'easeOutQuint')
                ccc='1';
             
               }else{$('.place_map').animate({'top':'-100%'},800,'easeOutQuint')
                ccc='2';
                }
            })
           
           $('.place_map').on('click',function(){
               $('.place_map').animate({'top':'-100%'},800,'easeOutQuint')
                ccc='2';
            })
           })
        </script>
    </footer>
    
    
    

</body>
</html>