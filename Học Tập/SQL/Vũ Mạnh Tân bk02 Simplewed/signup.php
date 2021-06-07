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
        <h2>Get Started</h2>
        <h4>It's free to signup and only takes a minute.</h4>

        <form action="index.php">
            <div class="form-group">
                <label>Firstname &amp; Lastname</label>
                <input type="text" class="form-control" placeholder="Enter your firstname and lastname">
            </div>
            <!-- form-group -->
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email">
            </div>
            <!-- form-group -->
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password">
            </div>
            <!-- form-group -->
            <button class="btn btn-az-primary btn-block" a href="signup.php"   >Create Account</button>
            <div class="row row-xs">
                <div class="col-sm-6"><button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button></div>
                <div class="col-sm-6 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button></div>
            </div>
            <!-- row -->
        </form>
		</div>
	</main>
	<footer></footer>
</body>
</html>