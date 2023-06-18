// JavaScript Document


jQuery(document).ready(function() {
$('.dc_slider').slick({

  autoplay: true,
  autoplaySpeed: 0,
  speed:5000,
  //slidesToShow: 10, //表示するスライドの数
  //slidesToScroll: 1,
  //infinite: false,
        cssEase: 'linear',//動きの種類は等速に
        arrows:false,//左右に出る矢印を非表示
        swipe: false,//スワイプ禁止
        pauseOnFocus: false,//フォーカスが合っても止めない
        pauseOnHover: false,//hoverしても止めない
        variableWidth: true,//スライドの要素の幅をcssで設定できるようにする 
});
	});




