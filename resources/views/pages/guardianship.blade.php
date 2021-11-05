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

                        <div class="w-full bg-white rounded p-8">
                            <div class="w-full border-mmablue text-sm lg:text-base flex flex-wrap">
                                <iframe class="h-150 w-full" src="https://www.youtube.com/embed/4jiq2Cb0r7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
