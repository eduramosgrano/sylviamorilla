jQuery(document).ready(function($) {
  // navegator
  // // position
  var navegator       = $('.navegator'),
      navConteudo     = $('.navegator .conteudo'),
      conteudo        = $('.conteudo'),
	    navegatorTopPos = navegator.offset().top,
      conteudoTopPos  = conteudo.offset().top,
      menuBtn         = $('.menu-btn'),
      aniOn           = false,
      windowWidth     = $( window ).width(),
      sliderContant   = $('.content');

  $( window ).resize(function() {
      windowWidth     = $( window ).width();
      if(navegator.hasClass("is-top")){
        navegator.css({width:windowWidth});
      }
  });

  var ctrlMenu = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0"}});

  var tlMenu = new TimelineMax({ease:Power1.easeInOut});
      tlMenu
            .to(".navegator", 1, {width:windowWidth})
            .to(".navegator .social",0.5, {className:"+=is-top"})
            .to(".navegator .social", 0.5, {opacity:1});

  var tlMenuAtivo = new TimelineMax({ease:Power1.easeInOut});
      tlMenuAtivo
                .to(".navegator .conteudo", 1, {"display":"block"})
                .to(".navegator .conteudo", 1, {opacity:1})
                .to(".navegator .conteudo ul li", 1,{"margin-bottom":"40px"}, "-=1.5")
                .to(".navegator .conteudo", 1,{"padding-top":"130px"}, "-=1");

  tlMenuAtivo.stop();



  // // menu-btn

  menuBtn.on('click',function(e){
    e.preventDefault();
    $(this).toggleClass("is-active");
    console.log($(this).hasClass("is-active"));

    if($(this).hasClass("is-active")){
      // ativar menu
      if(!navegator.hasClass("is-top")){
          //console.log("abriu!");
          tlMenu.play(1);
        }
        navegator.parent().css("transition-property","top");
        navegator.parent().css("transition-duration","1s");
        navegator.parent().css("top",0);
        tlMenuAtivo.play(1);

    } else {
      // desativar menu
      if(!navegator.hasClass("is-top")){
          //console.log("fechou!");
          tlMenu.reverse(-1);
          navegator.parent().css("top",navegatorTopPos);
        }
          tlMenu.play();
          navegator.parent().css("top",navegatorTopPos);
          tlMenuAtivo.reverse();
      }
    })






  // END navegator

  // slider-portfolio
  $(".carousel").owlCarousel({
    items: 1,
    autoplay:true,
    loop: true,
    nav: true,
    navText: ['<div class="left col-xs-6"><div class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve"> <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225 c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z "/> </svg> </div></div>','<div class="left col-xs-6 "><div class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve"> <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5 c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z "/> </svg> </div></div>'],
    navContainer: '#navSetas',
    autoplayTimeout:8000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
    //autoplayHoverPause:true
  })

  //Hide content

  setInterval(function(){ sliderContant.addClass('downslide'); }, 3000);





})
