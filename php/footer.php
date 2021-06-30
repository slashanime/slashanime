

    <!-- Footer part starts -->
    <footer>
         <p class="copyright"> ©SlashAnime 2021. All Rights Reserved. Powered by SlashAnime & Hangko.co <span style="color:rgb(255, 0, 0)"class="red"><a style="color:rgb(255, 0, 0)" href="#">Watch & Read Manga Anime Free </a></span></p>
         <p class="copyright">For more information,Suggestion & queries call<span class="red"><a style="color:rgb(255, 0, 0)"href="tel:+977-9811075414">+977-9811075414</a></span> </p>
    
       </footer>
         <!-- Footer part Ends--->
         <!-- import js libraries,framework & slick -->
         <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
         <script src="script/index.js" type="text/javascript"></script>
         <script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
         <script src="/script/Slick-jquery.js" type="text/javascript" s></script>

  <!-- import js libraries,framework & slick -->
  
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <!-- <script src="script/index.js" type="text/javascript"></script> -->
  <script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
   <!-- import js libraries,framework & slick -->
   <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });

    //for top-mid header
    $('.top-query').hover(function(){
            $('.top-query').css("width", '7vw'),2000
        })

        //For collapsed nav bar
        function openNav() {
                  document.getElementById("mySidebar").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                }
                
                function closeNav() {
                  document.getElementById("mySidebar").style.width = "0";
                  document.getElementById("main").style.marginLeft= "0";
                }
      </script>
    </body>
    </html>