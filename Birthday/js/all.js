jssor_1_slider_init = function() {
	var jssor_1_SlideshowTransitions = [
	  {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	  {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
	];

	var jssor_1_options = {
	  $AutoPlay: 1,
	  $SlideshowOptions: {
		$Class: $JssorSlideshowRunner$,
		$Transitions: jssor_1_SlideshowTransitions,
		$TransitionsOrder: 1
	  },
	  $BulletNavigatorOptions: {
		$Class: $JssorBulletNavigator$
	  },
	  $ThumbnailNavigatorOptions: {
		$Class: $JssorThumbnailNavigator$,
		$Orientation: 2
	  }
	};

	var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	/*#region responsive code begin*/

	var MAX_WIDTH = 980;

	function ScaleSlider() {
		var containerElement = jssor_1_slider.$Elmt.parentNode;
		var containerWidth = containerElement.clientWidth;

		if (containerWidth) {

			var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

			jssor_1_slider.$ScaleWidth(expectedWidth);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
	}

	ScaleSlider();

	$Jssor$.$AddEvent(window, "load", ScaleSlider);
	$Jssor$.$AddEvent(window, "resize", ScaleSlider);
	$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
	/*#endregion responsive code end*/
	
};

$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    
$( document ).ready(function() {
	String.prototype.filename=function(extension){
		var s= this.replace(/\\/g, '/');
		s= s.substring(s.lastIndexOf('/')+ 1);
		return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
	}

	jssor_1_slider_init();
	$( function() {
		$( "#tabs" ).tabs();
	} );
	$( "body" ).keydown(function( event ) {
		if ( event.which === 116 ) {
			$(window).scrollTop(0);
		}
	});
	$('.timeline-photo').click(function(){
		var btn = document.getElementById(this.id);
		var id = "Modal-" + $(btn).attr('src').filename();
		var modal = document.getElementById(id);
		
		var span = document.getElementsByClassName("close")[$(btn).attr('src').filename() - 1];
		modal.style.display = "block";
		btn.onclick = function() {
			modal.style.display = "block";
		}		
		span.onclick = function() {
			modal.style.display = "none";
		}

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	});
	$('#tabs .ui-widget-header').css('display','inline-block');
	$('.image1').fadeIn(500, 'swing');
	$('.image2').delay(500).fadeIn(500, 'swing');
	$('.image3').delay(1000).fadeIn(500, 'swing');
	$('.image4').delay(1500).fadeIn(500, 'swing');
	$('.image5').delay(2000).fadeIn(500, 'swing');
	$('.image6').delay(2500).fadeIn(500, 'swing');
	if ($(".gift").one( "click", function() {
		var foryou = document.getElementById("foryou");
		foryou.pause(); 
		var river = document.getElementById("river");
		river.play(); 
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		var together = new Date();
		together.setFullYear(1998,6, 27);
		together.setHours(7);
		together.setMinutes(0);
		together.setSeconds(0);
		together.setMilliseconds(0);
		
		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
			document.body.appendChild(msg);
			$("#code").css("display", "none");
			document.execCommand("stop");
		}
		else if ($(window).width() <= 600 ){
			$(".msg").css("display", "block");
			$("#content").remove();
		}
		else {
			myVar = setTimeout(function () {
				startHeartAnimation();
			}, 5000);

			timeElapse(together);
			myVar2 = setInterval(function () {
				timeElapse(together);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	}));
	$('.story').click(function(){
		var foryou = document.getElementById("foryou");
		foryou.pause();
		var river = document.getElementById("river");
		river.pause();
		$('.quotes').removeClass("quotes-anim");
	});
	$('.gift').click(function(){
		var foryou = document.getElementById("foryou");
		foryou.pause();
		var river = document.getElementById("river");
		river.currentTime = 0;
		river.play();
	});
	$('.memories').click(function(){
		$(window).scrollTop(0);
		var foryou = document.getElementById("foryou");
		foryou.currentTime = 0;
		foryou.play();
		var river = document.getElementById("river");
		river.pause();
	});
	$('.btn-login').click(function(){
		alert("Hello! I am an alert box!!");
	});
});