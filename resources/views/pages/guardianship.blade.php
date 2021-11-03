@extends('layouts.secondary', [
    'title' => 'Guardianship',
])

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Guardianship',
        'minihero_desc' => '',
        'image_bg' => 'resources/resources_header.jpg',
    ])

    @include('partials.phonenumcta')

    <section class="feedback py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-full lg:w-4/5 mx-auto justify-between">
                    <div class="flex flex-row flex-wrap px-2">

                        <div class="w-full bg-white rounded px-8">
                            <div class="w-full flex flex-wrap justify-between cursor-pointer">
                                <h3 class="w-full font-extrabold text-2xl text-center md:text-left pt-8 md:w-5/6 text-gray-800 pt-4">
                                    Integrity Pharmacy
                                </h3>
                                <span class="text-base text-mmablue font-semibold w-full md:w-1/6 text-right">
                                  <img src="/images/resources/integrity_logo.jpg" class="w-1/2 md:w-4/5 h-auto mx-auto">
                                </span>
                            </div>
                            <div class="w-full border-mmablue text-sm lg:text-base pb-6 flex flex-wrap">
                                <iframe class="w-full h-150" src="https://www.youtube.com/embed/-bon9fxboBY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
