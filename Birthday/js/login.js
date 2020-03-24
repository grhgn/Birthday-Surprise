	$(window).load(function(){
		var fail = 0;
		var open = 'show-pwd';
		var close = 'hide-pwd';
		var pwd = document.getElementById('input-password');
		
		$("#password-toggle").click(function() {
			if( this.classList.contains(open) ) {
				$(".password-show").css( "width", "31%" );
				$(".password").css( "width", "69%" );
				$("#input-password").css( "width", "176px" );
				$(this).html('Sembunyikan')
				pwd.type="text";
				this.classList.remove(open);
				this.className += ' '+close;
		    } else {
				$(".password-show").css( "width", "25%" );
				$(".password").css( "width", "75%" );
				$("#input-password").css( "width", "184px" );
				$(this).html('Tampilkan')
				pwd.type="password";
				this.classList.remove(close);
				this.className += ' '+open;
		    }
		});
		$(".username input").val("");
		
		$(".username input").focusout(function(){
			if($(this).val() !== ""){
				$(this).addClass("has-content");
				$('.login-button').removeClass("disabled");
				$('button').prop('disabled', false);
			}else{
				$(this).removeClass("has-content");
				$('.login-button').addClass("disabled");
				$('button').prop('disabled', true);
			}
		})
		
		$(".password input").focusout(function(){
			if($(this).val() !== ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
		
		$(".username input").on("change paste keyup", function() {
			if($(this).val() !== ""){
				$('.login-button').removeClass("disabled");
				$('button').prop('disabled', false);
			}else{
				$('.login-button').addClass("disabled");
				$('button').prop('disabled', true);
			}
		});
		$("button").click(function() {
			var username = $("#input-username").val();
			if (username === "") {
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Please Insert Your Username');	
				return false;
			}
			var password = $("#input-password").val();
			if (password === "") {
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Please Insert Your Password');	
				return false;
			}
			var dataString = 'username='+ username + '&password=' + password;
			$.ajax({
				type: "POST",
				url: 'asset/login.php',
				data: dataString,
				dataType: "html",
				success: function(data) {
					if (data === 0) {
						fail++;
						$(".error-box").css( "display", "block" );
						if(fail == 1){
							$('.error-msg').html('Yah salah, coba sekali lagi');
						}
						else if(fail == 2){
							$('.error-msg').html('Kok salah lagi.');
						} else {
							$('.error-msg').html('Yaudah deh coba tanya aku aja.');
						}
					} else {
						$(".error-box").css( "display", "block" );
						$('.error-msg').html('<b style="color:green;">you are logged. wait for redirection</b>');
						document.location.href = 'birthday.php';					  
					}
				}
			});
			return false;
		});
		$(".create-account").click(function() {

		});
		$("a").click(function() {
			if($(this).attr('class') == "lupa-password"){
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Kok lupa sih :(');
			}
			else if($(this).attr('class') == "create-account"){
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Engga bisa buat akun baru :(');
			}
			else if($(this).attr('class') == "app-link"){
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Udah pake ini aja');
			}
			else if($(this).attr('class') == "main-footer"){
				$(".error-box").css( "display", "block" );
				$('.error-msg').html('Udah disini aja');
			}
		});
	});