$(function() {
	
	//前へ・次へボタンの状態を切り替える関数
	function toggleChangeBtn() {
	  //変数slideIndexを定義し、スライドの「active」クラスがついた要素のインデックス番号を取得して代入
	  var slideIndex = $('.slide').index($('.active'));
	  $('.change-btn').fadeIn();
	  //最初に1枚目のスライドが表示されるので、「前へ」ボタンは初期状態では非表示
	  if (slideIndex == 0) {
		$('.prev-btn').fadeOut();
		$('[name="nextBtn"]').prop('disabled', true);
		radioChange1();
	  } else if(slideIndex == 1) {
		$('[name="nextBtn"]').prop('disabled', true);
		radioChange2();
	  //最後のスライドが表示されるので、「次へ」ボタンは非表示
	  } else if(slideIndex == 2) {
		$('[name="nextBtn"]').prop('disabled', false);
	  //最後のスライドが表示されるので、「次へ」ボタンは非表示
	  } else if (slideIndex == $('.slide').length - 1) {
		$('.next-btn').fadeOut();
	  }
	}

	//ラジオボタンの状態を判定する関数（スライド1枚目）
	function radioChange1() {
	  if($('[value="FULL"]').prop('checked')){
	  	$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="PART"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="TEMP"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="PERM"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="NONE"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } 
	}

	//ラジオボタンの状態を判定する関数（スライド2枚目）
	function radioChange2() {
	  if($('[value="ALL"]').prop('checked')){
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="3MO"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="6MO"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="12MO"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  } else if ($('[value="1YR"]').prop('checked')) {
		$('[name="nextBtn"]').prop('disabled', false);
	  }
	}
	
	$('.index-btn').click(function() {
	  //「.active」要素からactiveクラスを取り除く
	  $('.active').removeClass('active');
	  //「.current」要素からcurrentクラスを取り除く
	  $('.current').removeClass('current');
	  //変数clickedIndexを定義し、クリックしたボタンのインデックス番号を代入
	  var clickedIndex = $('.index-btn').index($(this));
	  //変数clickedIndexを用いて、クリックした数字に対応する「.slide」要素を取得し「active」クラスを付与
	  $('.slide').eq(clickedIndex).addClass('active');
	  //変数clickedIndexを用いて、クリックした数字に対応する「.index-btn」要素を取得し「current」クラスを付与
	  $('.index-btn').eq(clickedIndex).addClass('current');
	  toggleChangeBtn();
	  console.log(clickedIndex);
	});
	
	$('.change-btn').click(function() {
	  //変数$displaySlideを定義し、現在表示されているスライド要素を変数に代入
	  var $displaySlide = $('.active');
	  //変数$displaySlideから「active」クラスを取り除く
	  $displaySlide.removeClass('active');
	  //変数$pagerIndexを定義し、現在表示されている「.index-btn」要素を変数に代入
	  var $pagerIndex = $('.current');
	  //「.current」要素からcurrentクラスを取り除く
	  $pagerIndex.removeClass('current');
	  //クリックした要素が「next-btn」クラスを持っていたとき、変数$displaySlideの次の要素に「active」クラスを付与
	  if ($(this).hasClass('next-btn')) {
		$displaySlide.next().addClass('active');
		//クリックした要素が「next-btn」クラスを持っていたとき、変数$pagerIndexの次の要素に「current」クラスを付与
		$pagerIndex.next().addClass('current');		  
	  //next-btnクラスを持っていなかったとき、変数$displaySlideの前の要素に「active」クラスを付与
	  } else {
		$displaySlide.prev().addClass('active');
		//next-btnクラスを持っていなかったとき、変数$pagerIndexの前の要素に「current」クラスを付与
		$pagerIndex.prev().addClass('current');
	  }
	  toggleChangeBtn();
	});

	//1枚目のスライドが有効になったボタンのクリック処理
	$('[name="q1"]').click(function(){
		radioChange1();
	});
	//2枚目のスライドが有効になったボタンのクリック処理
	$('[name="q2"]').click(function(){
		radioChange2();
	});
	
  });
  