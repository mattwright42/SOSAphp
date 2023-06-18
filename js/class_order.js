// JavaScript Document

/////////スライドアップNEW///////////
jQuery(window).on('load',function($){
  $=jQuery;
  setTimeout(function(){ //⑤開いてからカウントするｍ秒
	var _window = $(window), //文字置き換え
	_classname = $('.sup'), //文字置き換え「①このクラスが」
	_wBottom;
	
	_window.on('scroll',function(){
		_wBottom = _window.scrollTop()+_window.height()*0.85;//「②ここに来たら」
		_classname.each(function(){
			if(_wBottom > $(this).offset().top){
				$(this).addClass('on');//「③このクラスにこれを加える」
			}
			else{//外れると戻る動き
			}
		});
	});
	_window.trigger('scroll');
  },0//⑤経過したら表示される動き始める
            );
});


/////////スライドアップ２///////////
jQuery(window).on('load',function($){
  $=jQuery;
  setTimeout(function(){ //⑤開いてからカウントするｍ秒
	var _window = $(window), //文字置き換え
	_classname = $('.sup2'), //文字置き換え「①このクラスが」
	_wBottom;
	
	_window.on('scroll',function(){
		_wBottom = _window.scrollTop()+_window.height()*0.85;//「②ここに来たら」
		_classname.each(function(){
			if(_wBottom > $(this).offset().top){
				$(this).addClass('on');//「③このクラスにこれを加える」
			}
			else{//外れると戻る動き
			}
		});
	});
	_window.trigger('scroll');
  },0//⑤経過したら表示される動き始める
            );
});


/////////menuフィックス///////////
jQuery(function($){
	var _window = $(window), //文字置き換え
	_fix = $('.fix_key'), //文字置き換え「①このクラスが」
	_scrollBottom;
  
  if(_fix.length > 0){//これが無かったら動かさない
	
	_window.on('scroll',function(){
		_scrollBottom = _window.scrollTop(); //+_window.height()/1.5;//「②ここに来たら」
		_fix.each(function(){
			if(_scrollBottom > $(this).offset().top){
				$('.h_top').addClass('on');//「③このクラスにこれを加える」
			}
			else{//外れると戻る動き
        $('.h_top').removeClass('on');   
			}
		});
	});
  
	_window.trigger('scroll');

  }
    
  });

/////////to top btnフィックス///////////
jQuery(function($){
	var _window = $(window), //文字置き換え
	_fix = $('.fix_key'), //文字置き換え「①このクラスが」
	_scrollBottom;
  
  if(_fix.length > 0){//これが無かったら動かさない
	
	_window.on('scroll',function(){
		_scrollBottom = _window.scrollTop(); //+_window.height()/1.5;//「②ここに来たら」
		_fix.each(function(){
			if(_scrollBottom > $(this).offset().top){
				$('.btn_totop').addClass('on');//「③このクラスにこれを加える」
			}
			//else{//外れると戻る動き
      //  $('.btn_totop').removeClass('on');   
			//}
		});
	});
  
	_window.trigger('scroll');

  }
    
  });
