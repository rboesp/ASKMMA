@extends('Layouts.secondary')
@section('content')

@include('Partials.minihero', [

	'minihero_title' => 'About MMA',
	'minihero_desc' => 'We know that you are familiar with Medicare, but now let’s take a moment to help you be familiar with us.',
	'image_bg' => 'about/about_header.png',

])






<section class="whoarewe py-16 bg-gray-200">



<div class="container mx-auto">
 


	<div class="flex flex-row justify-start flexbox flex-wrap">
		<!-- Left -->



		 

		<div class="card-right flex flex-col lg:w-3/5 px-8 lg:px-16 my-auto pb-8 lg:pb-0">
			

			<div class="flex flex-row">

				<h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">Who Are We?</h3>
				
			</div>
			

			<div class="flex flex-row mt-6 lg:mt-4">

				<p class="lg:text-base text-lg w-full text-center lg:text-left">Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean Separated they live in Bookmarks right at the coast.</p>
				
			</div>

		

			<div class="flex flex-row justify-center mt-6 lg:mt-6 lg:justify-start">

				<button class="bg-mmared hover:bg-mmalightblue text-white font-medium py-3 px-4 rounded-lg w-full lg:w-1/2">
				  Have a Question?
				</button>

			</div>




		</div>

 


		<div class="card-left flex flex-col lg:w-2/5 ">

			<img src="/images/about/whoarewe.png">

		</div>

	</div>


	<!-- End Card -->

</div>



</section>




<section class="purpose py-16">


<div class="container mx-auto">

	<div class="flex flex-row">

		<h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">We Have A Purpose </h3>
		
	</div>


	<div class="flex flex-row mt-6 lg:mt-6">

		<p class="lg:text-base text-md w-full px-8 lg:px-0 lg:w-3/5 mx-auto text-center mb-4 lg:mb-8">“Our success will be measured by our clients and agents choosing us because of their belief in our ability to meet or exceed their expectations of service, expertise and care.”</p>
		
	</div>


	<div class="flex flex-row flex-wrap justify-around mt-6">


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-end">

			<img class="w-1/4 mb-4" src="/images/about/serv icon.png">

			<p class="font-bold mb-2">Serve Our Community</p>

			<p class="lg:text-md text-sm text-center">To serve our community with wisdom, responsibility and integrity.</p> 
			
		</div>


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-end">

			<img class="w-1/4 mb-4" src="/images/about/grow icon.png">

			<p class="font-bold mb-2">Grow Partnerships</p>

			<p class="lg:text-md text-sm text-center">To establish a successful partnership with our clients, our agents, and insurance providers who respect the interests and goals of each party.</p> 
			
		</div>


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-end">

			<img class="w-1/4 mb-4" src="/images/about/lead icon.png">

			<p class="font-bold mb-2">Lead Through Action</p>

			<p class="lg:text-md text-sm text-center">To provide education and demonstrate leadership through knowledge, kindness and respect.</p> 
			
		</div>
		



	</div>








</div>


		  


</section>





<section class="members py-16 bg-gray-200">


<div class="container mx-auto">

	<div class="flex flex-row">

		<h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">Our Leadership </h3>
		
	</div>


	<div class="flex flex-row mt-6 lg:mt-6">

		<p class="lg:text-base text-md w-full px-8 lg:w-3/5 lg:mx-auto text-center mb-4 lg:mb-8">Leadership is what makes a company stand above when it comes to Customer relations. Our core has been built around the best in Medicare to help our Customers.</p>
		
	</div>


	<div class="flex flex-row flex-wrap justify-around mt-6 w-3/4 mx-auto">


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Kirk Anderson</p>

			<p class="lg:text-md text-sm text-center">CEO</p> 
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			
		</div>


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Melissa Anderson</p>

			<p class="lg:text-md text-sm text-center">President</p> 
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			
		</div>



		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Danielle Phillips</p>

			<p class="lg:text-md text-sm text-center">Vice President</p> 
			<p class="lg:text-md text-sm text-center">Sales & Marketing</p> 
			<p>&nbsp;</p>
			
		</div>


		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Sabrina Mundy</p>
			<p class="lg:text-md text-sm text-center">Vice President</p> 

			<p class="lg:text-md text-sm text-center">Contracting, Compliance,<br>Cient Retention</p> 
			
		</div>

		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Darci Fleming</p>

			<p class="lg:text-md text-sm text-center">Vice President</p> 
			<p class="lg:text-md text-sm text-center">Operations</p> 
			<p>&nbsp;</p>
			
		</div>
		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Michael Packard</p>

			<p class="lg:text-md text-sm text-center">Regional Director</p> 
			<p class="lg:text-md text-sm text-center">Florida & Georgia</p> 
			<p>&nbsp;</p>
			
		</div>
		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Trent Purcell</p>

			<p class="lg:text-md text-sm text-center">Regional Director</p> 
			<p class="lg:text-md text-sm text-center">Eastern Missouri, SW Illinois &<br>New Markets</p> 
			
		</div>

		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Teresa Rodriguez</p>


			<p class="lg:text-md text-sm text-center">Regional Director</p> 
			<p class="lg:text-md text-sm text-center">Louisiana & Eastern Texas</p> 
			<p>&nbsp;</p>
			
		</div>

		<div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">

			<svg height="150" width="150">
			  <circle cx="75" cy="75" r="60" stroke="white" stroke-width="3" fill="white" />
			</svg>

			<p class="font-bold mb-2">Chris Jirgens</p>


			<p class="lg:text-md text-sm text-center">Regional Director</p> 
			<p class="lg:text-md text-sm text-center">SW Missouri, SE Kansas &<br>Oklahoma</p> 
			
		</div>




	

		



	</div>








</div>


		  


</section>

<!--
<section class="setsapart py-16">



<div class="container mx-auto">
 


	<div class="flex flex-row flexbox flex-wrap">
 

		<div class="card-left flex flex-col lg:w-1/2 lg:pr-8">

			<img src="/images/setsapart.png">

		</div>


		 

		<div class="card-right flex flex-col lg:w-1/2 lg:pl-8 py-6 px-8 justify-between">
			

			<div class="flex flex-row">

				<h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">Medicare Supplemental</h3>
				
			</div>
			

			<div class="flex flex-row mt-6 lg:mt-0">

				<p class="lg:text-base text-lg w-full text-center lg:text-left">A Medicare Supplement Insurance (Medigap) policy is sold by a private company, and can help pay certain health care costs that Original Medicare does not cover (co-payments, co-insurance, and deductibles).</p>
				
			</div>

			<div class="flex flex-row flex-wrap ">

				<div class="flex flex-col flex-wrap w-full lg:w-1/2 p-8 lg:p-0 lg:pr-8">

					<div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
						  
						Cover More Costs
						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">

						Covers some of the health care costs that original Medicare doesn't cover.
						
					</div>
					
				</div>
				<div class="flex flex-col flex-wrap w-full lg:w-1/2">

					<div class="w-full text-xl lg:text-base text-center lg:text-left font-black">

						Covered During Travel
						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">

						Medigap can also provide coverage while you are traveling out of the country.
						
					</div>
					
				</div>
				

			</div>

			<div class="flex flex-row justify-center mt-6 lg:mt-0 lg:justify-start">

				<button class="bg-mmared hover:bg-mmalightblue text-white font-medium py-3 px-4 rounded-lg w-full lg:w-1/3">
				  Check Plans
				</button>

			</div>




		</div>

	</div>
 

</div>



</section>
-->




  


@include('Partials/readytosee')

 




@stop

	


