
<!DOCTYPE html>
<html>


	<head>

		<meta charset="UTF-8">
		<meta name="description" content="MMA Website">
		<meta name="keywords" content="">
		<meta name="author" content="Eliinova">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<title>@yield('title')</title>
	</head>
	<body>

			@include('partials.nav')

			@yield('content')

			@include('partials.footer')

			@include('partials.copyright')

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

    if(scrollpos > 10){
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
	function check(e){
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
