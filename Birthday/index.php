<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="img/instagram.ico" />
<title>Masuk • Instagram</title>
<link rel="stylesheet" href="css/login.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
    
</head>
<body>
    <div class="wrapper">
		<div class="top">
			<div class="top-login">
				<div class="logo">
					<img src="img/logo.png" class="img-logo">
				</div>
				<div class="account">
					<form class="form-account" method="post">
						<div class="account-username">
							<div class="username">
								<input id="input-username" class="effect-19" type="text" placeholder="" name="username">
								<label>Nomor telepon, nama pengguna, atau email</label>		
							</div>
						</div>
						<div class="account-password">
							<div class="password">
								<input id="input-password" class="effect-19" type="password" placeholder="" name="password">
								<label>Kata Sandi</label>		
							</div>
							<div class="password-show">
								<a id="password-toggle"class="show-pwd" href="javascript:;">Tampilkan</a>
							</div>
						</div>
						<span class="account-login">
							<button class="login-button disabled" disabled value="submit">Masuk</button>	
						</span>
						<div class="error-box">
							<p class="error-msg"></p>
						</div>
						<div class="account-forget">
							<a class="lupa-password" href="#"> Lupa Kata Sandi?</a>
						</div>
					</form>
				</div>
			</div>
			<div class="bottom-login">
				<p class="register">Tidak Punya Akun? <a class="create-account" href="#">Buat akun</a></p>
			</div>
			<div>
				<p class="get-app">Dapatkan Aplikasi</p>
				<div class="app">
					<a href="#" class="app-link">
						<img class="img-app" src="img/apple.png">
					</a>
					<a href="#" class="app-link">
						<img class="img-app" src="img/android.png">
					</a>
					<a href="#" class="app-link">
						<img class="img-app" src="img/microsoft.png">
					</a>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="content-footer">
				<nav class="nav-footer">
					<ul class="ul-footer">
						<li class="li-footer">
							<a class="main-footer" href="#">Tentang kami</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Dukungan</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Blog</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Pers</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">API</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Pekerjaan</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Privasi</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Ketentuan</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Direktori</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Profil</a>
						</li>
						<li class="li-footer">
							<a class="main-footer" href="#">Tagar</a>
						</li>
						<span class="copyright">© 2018 Instagram</span>
					</ul>
				</nav>
			</div>
		</footer>
	</div>
</body>
</html>