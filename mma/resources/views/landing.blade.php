
<!DOCTYPE html>
<html>


	<head>

		<meta charset="UTF-8">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="John Doe">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
				



		<title></title>
	</head>
	<body>

			@include('nav')
			@include('sections/logos') 
			@include('sections/longhaul') 
			@include('sections/medicareadvantage') 
			@include('sections/medicaresupplemental') 

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
      header.classList.add("bg-ensblue"); 
 
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



</html>



