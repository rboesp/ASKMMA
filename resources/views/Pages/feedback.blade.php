@extends('Layouts.secondary')
@section('content')

@include('Partials.minihero', [

	'minihero_title' => 'Services',
	'minihero_desc' => 'We know Medicare can be tricky and that’s why we are here to help, assist, guide, support, and give advice through your journey.',
	'image_bg' => 'services/index.png',

])



@include('Partials/phonenumcta')







 
<section class="feedback py-16">



<div class="container mx-auto">
 


	<div class="flex flex-row flexbox flex-wrap">
 
 
		 

		<div class="card-right flex flex-col w-2/3 mx-auto justify-between">
			

			<div class="flex flex-row">

				<h3 class="text-3xl lg:text-4xl text-left lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">Feedback Form</h3>
				
			</div>
			
 

			<div class="flex flex-row flex-wrap ">

				<div class="flex flex-col flex-wrap w-full">

					<div class="w-full text-xl lg:text-base mt-4 font-black">
						  
						If you would like to provide feedback or file a complaint, please complete and submit. Please provide a detailed description of your complaint.
						
					</div>

					<div class="lg:text-base text-l text-center lg:text-left mt-2">

						This is an anonymous platform, therefore we are not able to respond directly to you regarding your concerns or suggestions unless you provide your contact information as part of your message.
						
					</div>
					
				</div> 

 


@include('Partials/zipsearch')






		</div>

	</div>
 

</div>



</section>








@include('Partials/readytosee')



@stop

	


