@extends('Layouts.secondary')
@section('content')

@include('Partials.minihero', [

	'minihero_title' => 'Services',
	'minihero_desc' => 'We know Medicare can be tricky and that’s why we are here to help, assist, guide, support, and give advice through your journey.',
	'image_bg' => 'services/index.png',

])



@include('Partials/phonenumcta')







 
<section class="services py-16">



<div class="container mx-auto">
 


	<div class="flex flex-row flexbox flex-wrap">
 
 
		 

		<div class="card-right flex flex-col w-2/3 mx-auto justify-between">
			

			<div class="flex flex-row">

				<h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">Our Services</h3>
				
			</div>
			
 

			<div class="flex flex-row flex-wrap ">

				<div class="flex flex-col flex-wrap w-full">

					<div class="w-full text-xl lg:text-base mt-8 font-black">
						  
						Medicare Medicaid Advisors (MMA) and our Agents strive to provide the best client service available in the marketplace today.
						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">

						We are always looking for better ways to serve our clients.
						
					</div>
					
				</div> 



				

				<div class="flex flex-col flex-wrap w-full mt-8">

					<div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
						  
						MMA believe our clients deserve quick responses to questions and problems.

						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">

						We are always looking for better ways to serve our clients.
						
					</div>
					
				</div> 
				



				<div class="flex flex-col flex-wrap w-full mt-8">

					<div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
						MMA believes our clients deserve the best products with the best prices.

						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">

						Each calendar year, we will review all new plans, changes, costs, and premiums for each county and State. We inform our clients about changes that may affect them, with options to consider. We represent our clients and have their best interests at heart.
						
					</div>
					
				</div> 




				<div class="flex flex-col flex-wrap w-full mt-8">

					<div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
						MMA believes our clients deserve an experienced, knowledgeable ADVOCATE.

						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-1">
Our biggest value to you is support. If a client runs into a problem, we become the client's advocate. No insurance company is perfect. No plan is perfect. No hospital or doctor is perfect. People make mistakes. If a problem, concern, or issue arises, simply call our MMA Agents!<br><br>

We have access to Broker Support services with each insurance company that are designed and dedicated to fix problems quickly. Our management team has seen countless problems and issues over the years, and we are confident that we will know how to fix the problems.
						
					</div>
					
				</div> 





@include('Partials/zipsearch')






		</div>

	</div>
 

</div>



</section>








@include('Partials/readytosee')



@stop

	


