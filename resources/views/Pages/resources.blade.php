@extends('Layouts.secondary')
@section('content')

@include('Partials.minihero', [

	'minihero_title' => 'Services',
	'minihero_desc' => 'We know Medicare can be tricky and that’s why we are here to help, assist, guide, support, and give advice through your journey.',
	'image_bg' => 'services/index.png',

])



@include('Partials/phonenumcta')







 
<section class="feedback py-16 bg-gray-100">



<div class="container mx-auto">
 


	<div class="flex flex-row flexbox flex-wrap">
 
 
		 

		<div class="card-right flex flex-col w-full lg:w-2/3 mx-auto justify-between">
			

			<div class="flex flex-row flex-wrap">
 

                <article class="border-b w-full">
                    <div class="border-l-2 bg-white border-indigo">
                        <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                            <span class="text-indigo font-thin text-xl">
                                Hot Topics
                            </span>
                            <div class="rounded-full border border border-indigo w-7 h-7 flex items-center justify-center bg-indigo">
                                <!-- icon by feathericons.com -->
                                <svg aria-hidden="true" data-reactid="281" fill="none" height="24" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="18 15 12 9 6 15">
                                    </polyline>
                                </svg>
                            </div>
                        </header>
                        <div>
                            <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                <ul class="pl-4"> Data will go here
                                </ul>
                            </div>
                        </div>
                    </div>
                </article> 




                <article class="border-b w-full pt-8">
                    <div class="border-l-2 bg-white border-indigo">
                        <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                            <span class="text-indigo font-thin text-xl">
                                Hot Topics
                            </span>
                            <div class="rounded-full border border border-indigo w-7 h-7 flex items-center justify-center bg-indigo">
                                <!-- icon by feathericons.com -->
                                <svg aria-hidden="true" data-reactid="281" fill="none" height="24" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="18 15 12 9 6 15">
                                    </polyline>
                                </svg>
                            </div>
                        </header>
                        <div>
                            <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                <ul class="pl-4"> Data will go here
                                </ul>
                            </div>
                        </div>
                    </div>
                </article> 

			
 



			</div>




 


@include('Partials/zipsearch')






		</div>

	</div>
 

</div>



</section>








@include('Partials/readytosee')



@stop

	


