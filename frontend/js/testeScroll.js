jQuery(document).ready(function($) {
  // scroll


  var scrollTarget = $('.target'),
      secao1 = $('.secao'),//secao 1 *copirar desde aqui para crir um o próximo
      s1fotoH = $('.secao .foto').height(),
      s1PosTop = secao1.offset().top,
      s1PosLeft = secao1.offset().left,
      s1Times = 3,
      s1TimesPoint1 = s1PosTop,
      s1TimesPoint2 = s1PosTop+s1fotoH,
      s1TimesPoint3 = s1PosTop+s1fotoH*(s1Times-1),
      s1MargimBottom = s1fotoH*(s1Times-1),//espaco da primeira animaocao
      secao2 = $('.secao2'),//secao 1 *copirar desde aqui para crir um o próximo
      s2fotoH = $('.secao2 .foto').height(),
      s2PosTop = secao2.offset().top,
      s2PosLeft = secao2.offset().left,
      s2Times = 3,
      s2TimesPoint1 = s2PosTop,
      s2TimesPoint2 = s2PosTop+s2fotoH,
      s2TimesPoint3 = s2PosTop+s2fotoH*(s2Times-1),
      s2MargimBottom = s2fotoH*(s2Times-1);//espaco da primeira animaocao

      function construir(){
        secao1.css('position','absolute');
        secao1.css('top',s1PosTop);
        secao1.css('left',s1PosLeft);
        secao2.css('position','absolute');
        secao2.css('top',s2PosTop+s1MargimBottom);//ajudar para ter o tempo da animacao anterior
        secao2.css('left',s2PosLeft);
      }
      construir();

      $(window).bind('scroll resize', function(event) {
        var scrollTargetPosTop = scrollTarget.offset().top;
        console.log(s1TimesPoint3);
        if(scrollTargetPosTop>=s1TimesPoint1 && scrollTargetPosTop<=s1TimesPoint3){
          secao1.css('top',scrollTargetPosTop);
        }
      });

  // end scroll

});
jQuery(document).load(function($){

});
