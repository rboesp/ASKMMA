<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="MMA Website">
	<meta name="keywords" content="">
	<meta name="author" content="Eliinova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
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
		.btn--loading {
			position: relative;
			color: transparent;
			pointer-events: none;

		}
		.btn--loading::after {
			content: '';
			animation: busy-indicator 500ms infinite linear;
			border: solid 3px white;
			border-radius: 50%;
			display: block;
			position: absolute;
			border-right-color: transparent;
			height: 1.4em;
			width: 1.4em;
			left: calc(50% - (1.4em / 2));
			top: calc(50% - (1.4em / 2));
			transform-origin: center;
		}
		@keyframes busy-indicator {
			from {
				transform: rotate(0deg);
			}
			to {
				transform: rotate(360deg);
			}
		}
	</style>
</head>
<body class="font-body">
	@include('partials.nav')
	@include('sections.hero')
	@include('sections.who-is-mma')
	@include('sections.long-haul')
	@include('sections.plans-cta')
	@include('sections.medicare-advantage')
	@include('sections.medicare-supplemental')
	@include('sections.additional-products')
	@include('sections.plans-cta')
	@include('sections.testimonials')
	@include('partials.ready-to-see')
	@include('partials.footer')
	@include('partials.copyright')

	<!-- begin olark code -->
<!-- 	<script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
		/* custom configuration goes here (www.olark.com/documentation) */
		olark.identify('1104-141-10-5325');
	</script> -->
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

		if (scrollpos > 10) {
            //header.classList.add("bg-mmablue");

            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-enspink");
                toToggle[i].classList.remove("text-white");
            }

            header.classList.add("shadow");
		} else {
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function()  {
    $('#contact-interest').change(function(){
      $('#contact-interest').removeClass('text-gray-400')
      $('#contact-interest').addClass('text-gray-700')
    });
    $('#contactForm').submit(function(e) {
      $('#contactFormSubmitButton').addClass('btn--loading')
      e.preventDefault();
      $.ajax({
        url:'https://medicaremedicaidadvisors.activehosted.com/proc.php',
        type:'post',
        data:$('#contactForm').serialize(),
        success:function(){
          Swal.fire({
            title: 'Thanks for contacting us!',
            text: '',
            type: 'success',
            timer: 3000
          })
          $('#contactForm')[0].reset()
          $('#contactFormSubmitButton').removeClass('btn--loading')
        },
        error: function (xhr) {
          if (xhr.status === 0) {
            Swal.fire({
              title: 'Thanks for contacting us!',
              text: '',
              type: 'success',
              timer: 3000
            })
            $('#contactForm')[0].reset()
            $('#contactFormSubmitButton').removeClass('btn--loading')
          } else {
            Swal.fire({
              title: 'Error!',
              text: 'Something went wrong please verify data or contact the MMA team.',
              type: 'error',
              timer: 3000
            })
            $('#contactFormSubmitButton').removeClass('btn--loading')
          }
        }
      });
    });
  });
</script>

</html>
