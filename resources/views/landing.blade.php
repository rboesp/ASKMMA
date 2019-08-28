
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="MMA Website">
	<meta name="keywords" content="">
	<meta name="author" content="Eliinova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MMA Demo App</title>
	<style>
        .card-image {
          width: 60px;
          height: 60px;
		}
		
        .box-blue-shadow {
            box-shadow: 0 3px 7px -1px rgba(0, 101, 242, 0.32)
        }
	</style>
</head>
<body class="font-body">
	@include('Partials.nav')
	@include('sections/hero')
	@include('sections/logos') 
	@include('sections/whosmma') 
	@include('sections/longhaul') 
	@include('sections/planscta') 

	@include('sections/medicareadvantage') 
	
	@include('sections/medicaresupplemental') 
	@include('sections/additionalproducts') 
	@include('sections/questionscta') 
	@include('sections/testimonials') 
	@include('Partials.readytosee') 
	@include('Partials.footer') 
	@include('Partials.copyright') 

	<!-- begin olark code -->
	<script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
		/* custom configuration goes here (www.olark.com/documentation) */
		olark.identify('1104-141-10-5325');
	</script>
	<!-- end olark code -->
</body> 

<script>
	var scrollpos = window.scrollY;
	var header = document.getElementById("header");
	var navcontent = document.getElementById("nav-content"); 
	var brandname = document.getElementById("brandname");
	var toToggle = document.querySelectorAll(".toggleColour");

	document.addEventListener('scroll', function() {
		/*Apply classes for slide in bar*/
		scrollpos = window.scrollY;

		if(scrollpos > 10) {
		//header.classList.add("bg-mmablue");  
	
		//Use to switch toggleColour colours
		for (var i = 0; i < toToggle.length; i++) {
			toToggle[i].classList.add("text-enspink");
			toToggle[i].classList.remove("text-white");
		}

		header.classList.add("shadow"); 
		}
		
		else {
		header.classList.remove("bg-ensblue"); 
	
		//Use to switch toggleColour colours
		for (var i = 0; i < toToggle.length; i++) {
			toToggle[i].classList.add("text-enspink");
			toToggle[i].classList.remove("text-gray-800");
		}
		
		header.classList.remove("shadow");

		navcontent.classList.remove("bg-white"); 
		}
	});
</script>
<script>
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	function check(e) {
	  var target = (e && e.target) || (event && event.srcElement);
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	}
	
	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}
</script>














</html>



