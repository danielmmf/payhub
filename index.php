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
				<img ng-src="{{foto_logado}}" alt="{{nome_logado}}">
			</div>

			<a href="#" class="dropdown-button" data-activates="dropdown2">
				{{nome_logado}}
				<span class="icon"><i class="fa fa-caret-down"></i></span>
			</a>				
			<ul id="dropdown2" class="dropdown-content">
				<li><a href="panel-account.html"><i class="material-icons">mail_outline</i> Inbox</a></li>
			
				<li class="divider"></li>
				<li><a href="#" ng-click="logoff()" ng-show='logado'><i class="material-icons">exit_to_app</i> Signout</a></li>
		
				<li ng-hide=logado>
					<a href="#" ng-click="login()"><i class="fa fa-sign-in"></i>Login</a>
				</li>
			</ul>
		</div>
		<!-- End Form Search -->
		
		<!-- App/Site Menu -->
		<div id="main-menu">
			<ul>
				<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="/acordos"><i class="fa fa-th-list"></i> Negociação</a></li>
				<li><a href="/dividas"><i class="fa fa-briefcase"></i> Dividas</a></li>
				
				<li class="has-sub"><a href="#"><i class="fa fa-file"></i> Pages</a>
					<ul>
						<li><a href="standard-page.html">Standard Page</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">404</a></li>
						<li><a href="styling-guide.html">Styling Guide</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
					</ul>
				</li>
				<li><a href="/contato"><i class="fa fa-envelope"></i> Contato</a></li>
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
					<li ng-repeat="propostas in minhas_propostas">
						<div class="thumb">
							<img src="images/shop8_80x80.png" alt="">
						</div>
						<div class="cart-delete">
							<a href="#">
								<i class="fa fa-times"></i>
							</a>
						</div>
						<div class="cart-detail">
							<h3 class="product-name"><a href="product.html">{{propostas.contrato}}</a></h3>
							<div class="price">
								<span>valor</span> $ {{propostas.valor}}
							</div>
							<div class="qty">
								<span>Parcela : {{propostas.parcela}}</span> 
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
						<span class="title">Taxas</span>
						<span class="price">$ 4.0</span>
					</div>
					<div class="total">
						<span class="title">Total</span>
						<span class="price">$ 839.2</span>
					</div>
					<a href="#" class="btn green btn-block">Validar todas</a>
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
				<h1>PayHub</h1>
			</div>
		</div>
		<!-- End FIXED Top Navbar -->

		
		 <ui-view></ui-view>

		<!-- FOOTER -->
			<div class="footer">
			
			<!-- Footer main Section -->
			<div class="footer-main">
				<p>
					<span class="block text-small">Pagamento Seguro PayHub via</span>
					<i class="fa fa-cc-mastercard"></i>
					<i class="fa fa-credit-card"></i>
					<i class="fa fa-cc-paypal"></i>
					<i class="fa fa-cc-visa"></i>
					<i class="fa fa-google-wallet"></i>
				</p>
				<p>
					<span class="block text-small">Tendo problemas? Fale conosco</span>
					payhub@gmail.com | <a href="#">Live Chat</a>
				</p>

				<div class="social-footer">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
			<!-- End Footer main Section -->

			<!-- Copyright Section -->
			<div class="copyright">
				<span class="block">&copy; 2017 Payhub - PAYHUB Payment</span>
				<div class="navigation">
					<a href="#">Termos & Condições</a>
					<a href="#">Politica de privacidade</a>
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
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/firebase.js"></script>
<script type="text/javascript" src="js/angularfire.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script src="//unpkg.com/@uirouter/angularjs/release/angular-ui-router.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.2/angular-materialize.min.js"></script>


<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript">
	

	var app = angular
	  .module('myapp', [
	    'ui.router' , 'firebase' , 'ui.materialize'
	  ]);

	app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

	  $urlRouterProvider.otherwise('/');

	  $stateProvider
	    .state('home', {
	      url: '/',
	      templateUrl: 'views/home.html',
	      controller: 'HomeController'
	    })
	    .state('acordos', {
	      url: '/acordos',
	      templateUrl: 'views/acordos.html',
	      controller: 'AcordosController'
	    })
	    .state('dividas', {
	      url: '/dividas',
	      templateUrl: 'views/dividas.html',
	      controller: 'DividasController'
	    })
	    .state('nova_divida', {
	      url: '/nova_divida',
	      templateUrl: 'views/nova_divida.html',
	      controller: 'NovaDividaController'
	    })
	     .state('empresa', {
	      url: '/empresa/:nome_empresa',
	      templateUrl: 'views/empresa.html',
	      controller: 'EmpresaController'
	    })
	    .state('contact', {
	      url: '/contact',
	      templateUrl: 'contact.html',
	      controller: 'ContactController'
	    });

	    // Utilizando o HTML5 History API
	    $locationProvider.html5Mode(true);
	});


	var config = {
        apiKey: "AIzaSyBT43GcLxCj7gFv_ffEsH8tRCX3c8LoquY",
	    authDomain: "falamebolsa.firebaseapp.com",
	    databaseURL: "https://falamebolsa.firebaseio.com",
	    projectId: "falamebolsa",
	    storageBucket: "falamebolsa.appspot.com",
	    messagingSenderId: "332037027307"
    };
    firebase.initializeApp(config);

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

	  $scope.minhas_propostas = $firebaseArray(firebase.database().ref().child("profile/"+$scope.usuario_logado.providerData[0].uid+"/propostas"));   


	$(function() {
			//alert("carregou");
	
	'use strict';

	/*======================SIDEBAR========================*/
	// Left Sidebar
	$('#menu-left').sideNav({
		menuWidth: 240, // Default is 240
		edge: 'left',
		closeOnClick: false // Closes side-nav on <a> clicks
	});
	// Right Sidebar
	$('#menu-right').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'right',
		closeOnClick: false // Closes side-nav on <a> clicks
	});
	/*------------------------------------------------------*/

	/*======================LEFT MENU========================*/
	$('#main-menu li.has-sub > a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		} else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	$('#main-menu > ul > li.has-sub > a').append('<span class="fa fa-angle-right"></span>');
	$('#main-menu > ul > li.has-sub > ul > li.has-sub > a').append('<span class="fa fa-angle-double-right"></span>');
	/*------------------------------------------------------*/

	/*======================SLIDER========================*/
	// Featured slider
	$('.featured-slider').slick({
		dots: true,
		arrows: false,
		autoplay: true,
		fade: true,
		speed: 500,
		cssEase: 'linear'
	});

	// Product (thumb) slider
	$('.product-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        slide: 'li',
        cssEase: 'linear',
        centerMode: true,
        slidesToShow: 1,
        variableWidth: true,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true

            }
        }],
        customPaging: function (slider, i) {
            return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
        }
    });
	
	// Product list slider
	$('.product-list-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		prevArrow: '<span class="prev-arr"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="next-arr"><i class="fa fa-angle-right"></i></span>',
		responsive: [
		{
			breakpoint: 401,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 1025,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		}]
	});
	/*------------------------------------------------------*/

	/*======================SCROLL TO TOP========================*/
	var winScroll = $(window).scrollTop();
	if (winScroll > 1) {
		$('#to-top').css({bottom:"50px"});
	} else {
		$('#to-top').css({bottom:"-100px"});
	}
	$(window).on("scroll",function(){
		winScroll = $(window).scrollTop();

		if (winScroll > 1) {
			$('#to-top').css({opacity:1,bottom:"30px"});
		} else {
			$('#to-top').css({opacity:0,bottom:"-100px"});
		}
	});
	$('#to-top').on("click", function() {
		$('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});
	/*------------------------------------------------------*/
	
	// Swipebox gallery
	//$(document).swipebox({ selector: '.swipebox' });
	
	// Right sidebar tabs
	$('ul.tabs').tabs();

	/* A materialize framework trigger for open modal by 
	   button class (checkout-shipping.html line 73) */
	$('.modal-trigger').leanModal();

	// An initialize for select element in a form
	$('select').material_select();

});
    


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
      /*provider.addScope("user_location");
      provider.addScope('user_photos');
      provider.addScope('user_friends');
      provider.addScope('user_posts');
      provider.addScope('publish_actions');*/
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


	});


	app.controller('HomeController', function($scope) {
	 // alert('Routing pages with ngRoute is damn awesome!');
	});

	app.controller('NovaDividaController', function($scope , $state , $firebaseArray) {
	 // alert('Routing pages with ngRoute is damn awesome!');

	 	$scope.adiciona = function(){


	 		$scope.propostas = $firebaseArray(firebase.database().ref().child("propostas/"+$scope.nome_empresa));

            var nova_proposta = {
	            criador_uid:$scope.usuario_logado.providerData[0].uid,
	            criador_nome:$scope.nome_logado,
	            proposta:$scope.proposta,
	            nome_empresa:$scope.nome_empresa,
	            criado : new Date().getTime()
            };

            $scope.propostas.$add(nova_proposta).then(function(essa_proposta) {
                //nova_equipe.equipe_key = essa_equipe.key;
                console.log(essa_proposta.key);


                $scope.minhas_propostas = $firebaseArray(firebase.database().ref().child("profile/"+$scope.usuario_logado.providerData[0].uid+"/propostas"));

            var nova_proposta = {
	            criador_uid:$scope.usuario_logado.providerData[0].uid,
	            criador_nome:$scope.nome_logado,
	            proposta:$scope.proposta,
	            proposta_key : essa_proposta.key,
	            nome_empresa:$scope.nome_empresa,
	            criado : new Date().getTime()
            };
            $scope.minhas_propostas.$add(nova_proposta);
            $state.go("dividas");

            });



	 	}
	});


	app.controller('DividasController', function($scope, $firebaseArray) {
		//alert('Dividas');
	 // alert('Routing pages with ngRoute is damn awesome!');

                $scope.minhas_propostas = $firebaseArray(firebase.database().ref().child("profile/"+$scope.usuario_logado.providerData[0].uid+"/propostas"));

	});

	app.controller('AcordosController', function($scope, $firebaseArray) {
		   $scope.minhas_propostas = $firebaseArray(firebase.database().ref().child("profile/"+$scope.usuario_logado.providerData[0].uid+"/propostas"));
	});


	app.controller('EmpresaController', function($scope , $stateParams, $firebaseArray) {
    	//alert($stateParams.nome_empresa);
		//alert('Dividas');
	 // alert('Routing pages with ngRoute is damn awesome!');
	 $scope.minhas_propostas = $firebaseArray(firebase.database().ref().child("propostas/"+$stateParams.nome_empresa));
      $scope.minhas_propostas.$loaded(function() {
      	console.log($scope.minhas_propostas);

      });


      $scope.atualizar = function(proposta){
      	console.log(proposta);
      	$scope.minhas_propostas.$save(proposta).then(function(essa_proposta) {


      	 $scope.propostas_cliente = $firebaseArray(firebase.database().ref().child("profile/"+proposta.criador_uid+"/propostas"));

      	 $scope.propostas_cliente.$loaded(function() {

	      	for (var i = 0; i < $scope.propostas_cliente.length; i++) {
	      		if(essa_proposta.key == $scope.propostas_cliente[i].proposta_key){
	      			console.log($scope.propostas_cliente[i]);
	      			console.log(essa_proposta);
	      			$scope.propostas_cliente[i].contrato = proposta.contrato;
	      			$scope.propostas_cliente[i].valor = proposta.valor;
	      			$scope.propostas_cliente[i].parcela = proposta.parcela;
	      			$scope.propostas_cliente[i].aceita = 1;


	      			$scope.propostas_cliente.$save($scope.propostas_cliente[i]);

	      		}
	      	}

	      });

      	   });


      }

	});

</script>


</body>
</html>