$(document).ready(function(){
  // navegator
  // // position
  var navegator       = $('.navegator'),
      navConteudo     = $('.navegator .conteudo'),
      conteudo        = $('.conteudo'),
	    navegatorTopPos = navegator.offset().top,
      conteudoTopPos  = conteudo.offset().top,
      menuBtn         = $('.menu-btn'),
      aniOn           = false,
      windowWidth     = $( window ).width();

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

  var sceneMenu = new ScrollMagic.Scene({
          triggerElement: ".navegator"
          //duration: 10,    // the scene should last for a scroll distance of 100px
          //offset: 50        // start this scene after scrolling for 50px
      })
      .setClassToggle(".navegator","is-top")
      .setPin(".navegator")
      .setTween(tlMenu)
      .addTo(ctrlMenu); // assign the scene to the controller
      // .addIndicators() // add indicators (requires plugin)


  // // menu-btn

  menuBtn.on('click',function(e){
    e.preventDefault();
    $(this).toggleClass("is-active");
    console.log($(this).hasClass("is-active"));

    if($(this).hasClass("is-active")){
      // ativar menu
      if(!navegator.hasClass("is-top")){
          console.log("abriu!");
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


    // ScrollTo!!!
    // init controller
	var ctrlScroll = new ScrollMagic.Controller();

	// change behaviour of controller to animate scroll instead of jump
	ctrlScroll.scrollTo(function (newpos) {
		TweenMax.to(window, 1, {scrollTo: {y: newpos}});
	});

	//  bind scroll to anchor links
	$(document).on("click", "a[href^='#']", function (e) {
		var id = $(this).attr("href");
		if ($(id).length > 0) {
			e.preventDefault();

			// trigger scroll
			controller.scrollTo(id);
      menuBtn.toggleClass("is-active");
      if(!navegator.hasClass("is-top")){
          console.log("fechou!");
          tlMenu.reverse(-1);
          navegator.parent().css("top",navegatorTopPos);
        }
          tlMenu.play();
          navegator.parent().css("top",navegatorTopPos);
          tlMenuAtivo.reverse();

				// if supported by the browser we can even update the URL.
			if (window.history && window.history.pushState) {
				history.pushState("", document.title, id);
			}
		}
	});





  // END navegator

  // Slider-home
  $(".carousel").owlCarousel({
    items: 1,
    autoplay:true,
    autoplayTimeout:10000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
    //autoplayHoverPause:true
  })

  // init controller
  var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
  // // paralax
  new ScrollMagic.Scene({triggerElement: "#slider-home"})
					.setTween("#slider-home > .carousel", {y: "100%", ease: Linear.easeNone})
					.addTo(controller);

  // END Slider-home


  // Publico
  // init controller
  // // Foto
  var ctrlPublico = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.2"}});

  var tlChamada = new TimelineMax({});
      tlChamada
                .to(".chamada1 span", 1, {height:120})
                .to(".chamada1 span", 1, {height:120})
                .to(".chamada1 h1.i1", 1, {ease:Power2.easeInOut, opacity:1, x:10})
                .to(".publico .foto span.top ", 1, {left:0})
                .to(".publico .foto span.bottom ", 1, {right:0})
                .to(".publico .foto span.left ", 1, {top:0})
                .to(".publico .foto span.right ", 1, {bottom:0})
                .to(".foto .img.img1", 1, {ease:Power2.easeInOut, opacity:1})
                .to(".publico .foto .img1", 10, {"background-size":"100%"})
                .to(".foto .img.img1",1, {ease:Power2.easeInOut, opacity:0})
                .to(".chamada1", 1, {ease:Power1.easeOut, y:"8%"})
                .to(".chamada1 h1.i1",1, { ease:Power2.easeInOut, opacity:0, x:0})
                .to(".chamada1 h1.i2",1, { ease:Power2.easeInOut, opacity:1, x:10})
                .to(".foto .img.img2",1, {ease:Power2.easeInOut, opacity:1})
                .to(".publico .foto .img2", 10, {"background-size":"100%"})
                .to(".foto .img.img2",1, {ease:Power2.easeInOut, opacity:0})
                .to(".chamada1", 1, {ease:Power2.easeInOut, y:"15%"})
                .to(".chamada1 h1.i2",1, {ease:Power2.easeInOut, opacity:0, x:0})
                .to(".chamada1 h1.i3",1, {ease:Power2.easeInOut, opacity:1, x:10})
                .to(".foto .img.img3",1, {ease:Power2.easeInOut, opacity:1})
                .to(".publico .foto .img3", 10, {"background-size":"100%"})
                .to(".publico .foto span.top",1, {ease:Power2.easeInOut, opacity:0},"+=10");


  // create a scene
  new ScrollMagic.Scene({
          triggerElement: ".publico",
          duration: 4000,    // the scene should last for a scroll distance of 100px
          //offset: 50        // start this scene after scrolling for 50px
      })
      //.setClassToggle(".publico", "visible")
      .setPin(".publico") // pins the element for the the scene's duration
      .setTween(tlChamada)
      .addTo(ctrlPublico); // assign the scene to the controller

  // Serviços
  // init controller
  // // Foto
  var ctrlServicos = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.2"}});

  var tlServicos = new TimelineMax({});
      tlServicos
                .to(".servicos .foto span.top ", 1, {left:0})
                .to(".servicos .foto span.bottom ", 1, {right:0})
                .to(".servicos .foto span.left ", 1, {top:0})
                .to(".servicos .foto span.right ", 1, {bottom:0})
                .to(".servicos .chamada .frase1", 0.5, {opacity:1,y:10})
                .to(".servicos .foto .img1", 1, {opacity:1},"+=5")
                .to(".servicos .foto .img1", 10, {"background-size":"100% "})
                .to(".servicos .chamada .frase1", 0.5, {opacity:0})
                .to(".servicos .foto .img1", 1, {opacity:0})
                .to(".servicos .chamada .frase2", 0.5, {opacity:1,y:10})
                .to(".servicos .foto .img2", 1, {opacity:1},"+=5")
                .to(".servicos .foto .img2", 10, {"background-size":"100%"})
                .to(".servicos .chamada .frase2", 0.5, {opacity:0})
                .to(".servicos .foto .img2", 1, {opacity:0})
                .to(".servicos .chamada .frase3", 0.5, {opacity:1,y:10})
                .to(".servicos .foto .img3", 1, {opacity:1},"+=5")
                .to(".servicos .foto .img3", 10, {"background-size":"100%"})
                .to(".servicos .foto span.top", 1, {opacity:0},"+=10");



                // create a scene
                new ScrollMagic.Scene({
                        triggerElement: ".servicos",
                        duration: 3000,    // the scene should last for a scroll distance of 100px
                        //offset: 50        // start this scene after scrolling for 50px
                    })
                    //.setClassToggle(".publico", "visible")
                    //.addIndicators()
                    .setPin(".servicos") // pins the element for the the scene's duration
                    .setTween(tlServicos)
                    .addTo(ctrlServicos); // assign the scene to the controller

    // END Serviços


    // SOBRE

    function pathPrepare ($el) {
  		var $lineLength = $el[0].getTotalLength();

      // conf o path
      $($el[0]).css("stroke-dasharray", $lineLength);
  		$($el[0]).css("stroke-dashoffset", 0);

      // add array elemento dashoffset
      $el[$el.length] = $lineLength;
  	}

    var $s   = new Array(document.getElementById("s")),
        $y   = new Array(document.getElementById("y")),
        $l   = new Array(document.getElementById("l")),
        $v   = new Array(document.getElementById("v")),
        $i   = new Array(document.getElementById("i")),
        $a   = new Array(document.getElementById("a")),
        $m   = new Array(document.getElementById("m")),
        $o   = new Array(document.getElementById("o")),
        $r   = new Array(document.getElementById("r")),
        $rt   = new Array(document.getElementById("rt")),
        $i2   = new Array(document.getElementById("i2")),
        $l2   = new Array(document.getElementById("l2")),
        $l3   = new Array(document.getElementById("l3")),
        $a2   = new Array(document.getElementById("a2"));


    // prepare SVG
	  pathPrepare($s);
    pathPrepare($y);
    pathPrepare($l);
    pathPrepare($v);
    pathPrepare($i);
    pathPrepare($a);
    pathPrepare($m);
    pathPrepare($o);
    pathPrepare($r);
    pathPrepare($rt);
    pathPrepare($i2);
    pathPrepare($l2);
    pathPrepare($l3);
    pathPrepare($a2);

    // init controller

	  var ctrlSobre = new ScrollMagic.Controller();
    // build tween
  	var tlSobre = new TimelineMax()
  		.add(TweenMax.to($s[0], 0.1, {strokeDashoffset: $s[1], ease:Linear.easeNone}))
      .add(TweenMax.to($y[0], 0.1, {strokeDashoffset: $y[1], ease:Linear.easeNone}))
      .add(TweenMax.to($l[0], 0.1, {strokeDashoffset: $l[1], ease:Linear.easeNone}))
      .add(TweenMax.to($v[0], 0.1, {strokeDashoffset: $v[1], ease:Linear.easeNone}))
      .add(TweenMax.to($i[0], 0.1, {strokeDashoffset: $i[1], ease:Linear.easeNone}))
      .add(TweenMax.to($a[0], 0.1, {strokeDashoffset: $a[1], ease:Linear.easeNone}))
      .add(TweenMax.to($m[0], 0.1, {strokeDashoffset: $m[1], ease:Linear.easeNone}))
      .add(TweenMax.to($o[0], 0.1, {strokeDashoffset: $o[1], ease:Linear.easeNone}))
      .add(TweenMax.to($r[0], 0.1, {strokeDashoffset: $r[1], ease:Linear.easeNone}))
      .add(TweenMax.to($rt[0], 0.1, {strokeDashoffset: $rt[1], ease:Linear.easeNone}))
      .add(TweenMax.to($i2[0], 0.1, {strokeDashoffset: $i2[1], ease:Linear.easeNone}))
      .add(TweenMax.to($l2[0], 0.1, {strokeDashoffset: $l2[1], ease:Linear.easeNone}))
      .add(TweenMax.to($l3[0], 0.1, {strokeDashoffset: $l3[1], ease:Linear.easeNone}))
      .add(TweenMax.to($a2[0], 0.1, {strokeDashoffset: $a2[1], ease:Linear.easeNone}))
      .add(TweenMax.to($("#io"), 0.1, {opacity:0, ease:Linear.easeNone}))
      .add(TweenMax.to($("#io2"), 0.1, {opacity:0, ease:Linear.easeNone}))
      .add(TweenMax.to($(".sobre .foto"), 0.1, {opacity:1, ease:Linear.easeNone}))
      .add(TweenMax.to($(".sobre p"), 0.1, {opacity:1, ease:Linear.easeNone}));
    // build scene
  	var scene = new ScrollMagic.Scene({
            triggerElement: ".sobre",
            duration: 100,
            tweenChanges: true
          })
  					.setTween(tlSobre)
  					.addTo(ctrlSobre);

    //END SOBRE

    // CONTATO
    // init controller
    var ctrlContato = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.2"}});

    var tlContato = new TimelineMax({});
        tlContato
                  .to(".contato h1 ", 1, {opacity:1})
                  .to(".contato p", 1, {opacity:1})
                  .to(".contato .form-horizontal input.nome", 1, {opacity:1})
                  .to(".contato .form-horizontal input.email", 1, {opacity:1})
                  .to(".contato .form-horizontal textarea", 1, {opacity:1})
                  .to(".contato .btn", 1, {opacity:1});


    // create a scene
    new ScrollMagic.Scene({
            triggerElement: ".contato",
            duration: 50,    // the scene should last for a scroll distance of 100px
            //offset: 50        // start this scene after scrolling for 50px
        })
        //.setClassToggle(".publico", "visible")
        //.addIndicators()
        .setTween(tlContato)
        .addTo(ctrlContato); // assign the scene to the controller


})
