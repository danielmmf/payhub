<!DOCTYPE html>
<html lang="en-US" ng-app="myapp">
<head>
	<title>.:: PayHub @ Brasil ::.</title>
	<base href="/">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.png">
</head>

<body>

<div id="main" ng-controller="MainController">

	<!-- LEFT SIDEBAR -->
	<div id="slide-out-left" class="side-nav">
		
		<!-- Form Search -->
		<div class="top-left-nav">
			<div class="pic-thumb">
				<img src="images/profile-image-1.png" alt="">
			</div>

			<a href="#" class="dropdown-button" data-activates="dropdown2">
				Juano Tinhoso
				<span class="icon"><i class="fa fa-caret-down"></i></span>
			</a>				
			<ul id="dropdown2" class="dropdown-content">
				<li><a href="panel-account.html"><i class="material-icons">mail_outline</i> Inbox</a></li>
			
				<li class="divider"></li>
				<li><a href="tracking-order.html"><i class="material-icons">exit_to_app</i> Signout</a></li>
			</ul>
		</div>
		<!-- End Form Search -->
		
		<!-- App/Site Menu -->
		<div id="main-menu">
			<ul>
				<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li class="has-sub"><a href="#"><i class="fa fa-th-list"></i> Negociação</a>
					<ul>
						<li>
							<a href="category.html">Ativas</a>
						</li>
						
						<li>
							<a href="#">Em andamento</a>
						</li>
							
						<li class="has-sub"><a href="#">Concluidas</a>
						</li>
			
						
					</ul>
				</li>
				<li class="has-sub"><a href="#"><i class="fa fa-briefcase"></i> Dividas</a>
					<ul>
						<li><a href="product-list.html">Pendentes</a></li>
						
					</ul>
				</li>
				
				<li class="has-sub"><a href="#"><i class="fa fa-file"></i> Pages</a>
					<ul>
						<li><a href="standard-page.html">Standard Page</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">404</a></li>
						<li><a href="styling-guide.html">Styling Guide</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
					</ul>
				</li>
				<li><a href="contact.html"><i class="fa fa-envelope"></i> Contato</a></li>
			</ul>
		</div>
		<!-- End Site/App Menu -->

	</div>
	<!-- END LEFT SIDEBAR -->

	<!-- RIGHT SIDEBAR -->
	<div id="slide-out-right" class="side-nav">

		<!-- Search form -->
		<form class="search">
			<div class="input-field">
				<input id="search" type="search" placeholder="Search" autocomplete="off">
				<label for="search"><i class="fa fa-search"></i></label>
			</div>
		</form>
		<!-- End Search form -->

		<!-- TABS -->
		<div class="sidebar-tabs">
			
			<!-- Tabs Menu -->
			<ul class="tabs">
				<li class="tab"><a class="active" href="#yourcart">Suas negociações</a></li>
				<li class="tab"><a href="#latestblog">Ultimas dicas</a></li>
			</ul>
			<!-- End Tabs Menu -->

		</div>

		<!-- Right Sidebar Tabs Content -->
		<div class="sidebar-tabs_content">
			
			<!-- Your Cart Tabs -->
			<div id="yourcart">
				
				<ol class="cart-item">
					<li>
						<div class="thumb">
							<img src="images/shop8_80x80.png" alt="">
						</div>
						<div class="cart-delete">
							<a href="#">
								<i class="fa fa-times"></i>
							</a>
						</div>
						<div class="cart-detail">
							<h3 class="product-name"><a href="product.html">Tablet Mini 2</a></h3>
							<div class="price">
								<span>Price</span> $ 472.5
							</div>
							<div class="qty">
								<span>Qty</span> <input type="number" value="1">
							</div>
						</div>
					</li>
					<li>
						<div class="thumb">
							<img src="images/shop3_65x65.png" alt="">
						</div>
						<div class="cart-delete">
							<a href="#">
								<i class="fa fa-times"></i>
							</a>
						</div>
						<div class="cart-detail">
							<h3 class="product-name"><a href="product.html">Modern Watch</a></h3>
							<div class="price">
								<span>Price</span> $ 260.9
							</div>
							<div class="qty">
								<span>Qty</span> <input type="number" value="1">
							</div>
						</div>
					</li>
					<li>
						<div class="thumb">
							<img src="images/shop2_65x65.png" alt="">
						</div>
						<div class="cart-delete">
							<a href="#">
								<i class="fa fa-times"></i>
							</a>
						</div>
						<div class="cart-detail">
							<h3 class="product-name"><a href="product.html">Camping Tent</a></h3>
							<div class="price">
								<span>Price</span> $ 102.8
							</div>
							<div class="qty">
								<span>Qty</span> <input type="number" value="1">
							</div>
						</div>
					</li>
				</ol>

				<div class="cart-action">
					<div class="subtotal">
						<span class="title">Subtotal</span>
						<span class="price">$ 835.2</span>
					</div>
					<div class="subtotal">
						<span class="title">Tax</span>
						<span class="price">$ 4.0</span>
					</div>
					<div class="total">
						<span class="title">Total</span>
						<span class="price">$ 839.2</span>
					</div>
					<a href="#" class="btn green btn-block">Proceed to checkout</a>
				</div>

			</div>
			<!-- End Your Cart Tabs -->

			<!-- Latest Blog Tabs -->
			<div id="latestblog">
				
				<div class="latest-blog-featured">
					<div class="thumb">
						<img src="images/feat1.jpg" alt="">
					</div>
					<span class="meta">05.10.2017 - Natalie Amyllia</span>
					<h3 class="blog-title"><a href="#">End of year great discount at SELLi</a></h3>
					<p>Until we open the shop, we always loose and like nothing to win...</p>
				</div>

				<ol class="latest-blog">
					<li>
						<span class="meta">05.10.2017 - Natalie Amyllia</span>
						<h3 class="blog-title"><a href="#">End of year great discount at SELLi</a></h3>
					</li>
					<li>
						<span class="meta">05.10.2017 - Natalie Amyllia</span>
						<h3 class="blog-title"><a href="#">Happy Discount For All Our Customer</a></h3>
					</li>
					<li>
						<span class="meta">05.10.2017 - Natalie Amyllia</span>
						<h3 class="blog-title"><a href="#">Buy 1 Get 1 Free for all electronics product</a></h3>
					</li>
				</ol>
			</div>
			<!-- End Latest Blog Tabs -->

		</div>
		<!-- End Right Sidebar Tabs Content -->

	</div>
	<!-- END RIGHT SIDEBAR -->

	<!-- MAIN PAGE -->
	<div id="page">
		
		<!-- FIXED Top Navbar -->
		<div class="top-navbar">
			<div class="top-navbar-left">
				<a href="#" id="menu-left" data-activates="slide-out-left">
					<i class="fa fa-bars"></i>
				</a>
			</div>
			<div class="top-navbar-right">
				<a href="#" class="dropdown-button" data-activates="dropdown1">
					<i class="fa fa-user-circle-o"></i>
				</a>				
				<ul id="dropdown1" class="dropdown-content">
					<li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
					<li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
					<li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
					<li class="divider"></li>
					<li><a href="tracking-order.html"><i class="fa fa-search"></i> Tracking Order</a></li>
				</ul>

				<a href="#" id="menu-right" data-activates="slide-out-right">
					<span class="cart-badge">3</span>
					<i class="fa fa-shopping-basket"></i>
				</a>
			</div>
			<div class="site-title">
				<h1>SELLi</h1>
			</div>
		</div>
		<!-- End FIXED Top Navbar -->

		
		 <ui-view></ui-view>

		<!-- FOOTER -->
		<div class="footer">
			
			<!-- Footer main Section -->
			<div class="footer-main">
				<p>
					<span class="block text-small">Secure shopping at SELLi via</span>
					<i class="fa fa-cc-amex"></i>
					<i class="fa fa-cc-mastercard"></i>
					<i class="fa fa-credit-card"></i>
					<i class="fa fa-cc-paypal"></i>
					<i class="fa fa-cc-visa"></i>
					<i class="fa fa-google-wallet"></i>
					<i class="fa fa-cc-discover"></i>
					<i class="fa fa-cc-jcb"></i>
				</p>
				<p>
					<span class="block text-small">Having problem? Contact us</span>
					+44 567 89 | ours@example.com | <a href="#">Live Chat</a>
				</p>

				<div class="social-footer">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="gplus"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<!-- End Footer main Section -->

			<!-- Copyright Section -->
			<div class="copyright">
				<span class="block">&copy; 2017 SELLi Inc - Ecommerce Mobile Template</span>
				<div class="navigation">
					<a href="#">Term & Condition</a>
					<a href="#">Privacy Policy</a>
				</div>
			</div>
			<!-- End Copyright Section -->

		</div>
		<!-- End FOOTER -->

		<!-- Back to top Link -->
		<div id="to-top" class="main-bg">
			<i class="fa fa-chevron-up"></i>
		</div>

	</div>
	<!-- END MAIN PAGE -->

</div><!-- #main -->

<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/firebase.js"></script>
<script type="text/javascript" src="js/angularfire.min.js"></script>
<script src="//unpkg.com/@uirouter/angularjs/release/angular-ui-router.min.js"></script>


<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript">
	

	var app = angular
	  .module('myapp', [
	    'ui.router' , 'firebase'
	  ]);

	app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

	  $urlRouterProvider.otherwise('/');

	  $stateProvider
	    .state('home', {
	      url: '/',
	      templateUrl: 'views/blank.html',
	      controller: 'HomeController'
	    })
	    .state('about', {
	      url: '/about',
	      templateUrl: 'about.html',
	      controller: 'AboutController'
	    })
	    .state('contact', {
	      url: '/contact',
	      templateUrl: 'contact.html',
	      controller: 'ContactController'
	    });

	    // Utilizando o HTML5 History API
	    $locationProvider.html5Mode(true);
	});


	app.controller('MainController', function($scope , $firebaseAuth ,$firebaseArray ,$firebaseObject, $state) {
	    $scope.logado = false;
	    $scope.logado = localStorage.getItem("logado");
	    if($scope.logado){
	      $scope.usuario = localStorage.getItem("usuario");
	      $scope.access_token = localStorage.getItem("access_token");
	      $scope.usuario_logado = JSON.parse($scope.usuario);
	      $scope.usuario_uid = $scope.usuario_logado.providerData[0].uid;
	      $scope.foto_logado = localStorage.getItem("foto");
	      $scope.nome_logado = $scope.usuario_logado.displayName;
	    }


    $scope.logoff = function(){
      localStorage.setItem("logado",false);
      localStorage.setItem("usuario" ,{});
      localStorage.setItem("foto", "");
      localStorage.clear();
      $scope.logado = false;
      $scope.foto_logado = '';
      $scope.nome_logado = "visitante";
      var auth = $firebaseAuth();
      auth.$signOut();
      $state.go("/");
    }

    $scope.login = function(){
      var auth = $firebaseAuth();
      var provider = new firebase.auth.FacebookAuthProvider();
      provider.addScope("public_profile");
      //provider.addScope("age_range");
      provider.addScope("user_location");
      provider.addScope('user_photos');
      provider.addScope('user_friends');
      provider.addScope('user_posts');
      provider.addScope('publish_actions');
      auth.$signInWithPopup(provider).then(function(firebaseUser) {
        $scope.usuario_logado = firebaseUser.user;
        console.log("Logado como :", firebaseUser.user.displayName);
        console.log(firebaseUser);
        localStorage.setItem("usuario" , JSON.stringify(firebaseUser.user));
        localStorage.setItem("foto" , firebaseUser.user.photoURL);
        localStorage.setItem("access_token" , firebaseUser.credential.accessToken);
        $scope.foto_logado = firebaseUser.user.photoURL;
        $scope.nome_logado = firebaseUser.user.displayName;
        localStorage.setItem("logado" , true);
        $scope.logado = true;
        console.log($scope.usuario_logado);
        var meu_profile = firebase.database().ref().child("profile/"+$scope.usuario_logado.providerData[0].uid);
       var profile = $firebaseArray(meu_profile);

              $scope.profile = profile;

              $scope.profile.$loaded(function() {
                if($scope.profile.length == 0){
                    $scope.profile.$add({
                      nome : firebaseUser.user.displayName,
                      firebase_uid:firebaseUser.user.uid,
                      fb_uid:$scope.usuario_logado.providerData[0].uid,
                      equipe:{},
                      manager:0,
                      criado : new Date().getTime()
                    });
                }else{
                  alert("Bem vindo de Volta !");
                }
                 
              });

      }).catch(function(error) {
        console.log("Authentication failed:", error);
      });

    }

	  alert('Main!');
	});


	app.controller('HomeController', function($scope) {
	  alert('Routing pages with ngRoute is damn awesome!');
	});

</script>


</body>
</html>