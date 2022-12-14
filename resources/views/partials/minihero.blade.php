<section class="minihero h-64 md:h-112 mt-20" style="background:url('/images/{{ isset($image_bg) ? $image_bg : '' }}'); background-position: no-repeat; background-size: cover;">
	<div class="mx-auto h-full flex flex-col justify-around">
		<div class="flex flex-wrap flex-row justify-start mt-10">
			<div class="flex flex-wrap w-4/5 mx-auto lg:mx-32 lg:w-1/2 justify-center lg:justify-start">
				<h1 class="w-full text-3xl md:text-4xl font-extrabold lg:text-6xl text-center lg:text-left text-mmablue font-futura leading-tight"> {{ isset($minihero_title) ? $minihero_title : '' }}
				</h1>			
				<p class="w-full pt-4 text-center lg:text-left text-gray-900 text-base md:text-lg"> {{ isset($minihero_desc) ? $minihero_desc : '' }} </p>
			</div>
		</div>
	</div>
</section>