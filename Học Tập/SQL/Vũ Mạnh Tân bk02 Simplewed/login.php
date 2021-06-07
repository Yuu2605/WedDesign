<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
	<style>
	div.container{
		background-image: url("https://www.bing.com/images/search?view=detailV2&ccid=aFhZA9nP&id=34C0D44C6B530A10C86CC1E626A24F805493066C&thid=OIP.aFhZA9nP9bvcpVheJjMIJgHaEK&mediaurl=https%3a%2f%2fmobalytics.gg%2fwp-content%2fuploads%2f2019%2f11%2fTFT-Rise-of-the-Elements-splash-1920x1080.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR68585903d9cff5bbdca5585e26330826%3frik%3dbAaTVIBPoibmwQ%26pid%3dImgRaw&exph=1080&expw=1920&q=LOL+TFT+Wallpaper&simid=608012909312492065&ck=5688BD19654643DFBE384BD03966A1A4&selectedIndex=0&FORM=IRPRST&ajaxhist=0&ajaxserp=0");
		text-align : center;
		
	}
	
	</style>
</head>
<body>
	<header></header>
	<main>
		<div class="container">
			<form action="login-process.php" method="POST">
				<div class="mb-3">
			    <label class="form-label">Email address</label>
			    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
			  <div class="mb-3">
			    <label class="form-label">Password</label>
			    <input type="password" class="form-control" name="password">
			  </div>
			  <div class="mb-3 form-check">
			    <input type="checkbox" class="form-check-input" name="rememberMe">
			    <label class="form-check-label">Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
			</form>
		</div>
	</main>
	<footer></footer>
</body>
</html>