@extends('layouts.secondary', [
    'title' => 'Guardianship',
])

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Guardianship',
        'minihero_desc' => 'Our objective is to share our expertise in navigating state and federal programs by partnering together to enable individuals under guardianship to receive additional benefits and services at no added cost.',
        'image_bg' => 'resources/resources_header.jpg',
    ])

        <section class="feedback py-16 bg-gray-100">
            <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-full lg:w-4/5 mx-auto justify-between">
                <div class="flex flex-row flex-wrap px-2">
                    <div class="w-full bg-white rounded p-8">
                    <div class="w-full border-mmablue text-sm lg:text-base flex flex-wrap">
                        <iframe
                        class="h-150 w-full"
                        src="https://www.youtube.com/embed/4jiq2Cb0r7A"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        ></iframe>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <section class="guardianship py-16 text-center text-ms lg:text-base lg:text-left">
            <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-1/2">
                <div>
                    <p class="underline font-semibold">Who is MMA?</p>
                    <p class="w-11/12 pt-2">
                    We’ve recognized the needs throughout our communities in the Medicare and Medicaid arena and have continued to reach out to those who need our help. We have partnered with over 800
                    Guardians, churches, service organizations, and food pantries throughout the states we work in. We have a dedicated team of licensed and certified insurance specialist who have a heart for
                    serving our communities.
                    </p>
                    <p class="w-11/12 pt-4 font-semibold">Many of the adults under guardianship are Medicare and Medicaid beneficiaries.</p>
                </div>

                <div class="mt-8">
                    <p class="underline font-semibold">Potential Additional Benefits Available (In select areas)</p>
                    <div class="flex justify-between">
                    <ul class="ml-3">
                        <li>Comprehensive dental (dentures)</li>
                        <li>Vision coverage (glasses/contacts)</li>
                        <li>Hearing coverage (hearing aids)</li>
                        <li>Medical Transportation</li>
                        <li>Life alert “Help I’ve fallen”</li>
                    </ul>

                    <ul class="w-1/2 ml-3">
                        <li>Gym memberships</li>
                        <li>Monthly OTC (over the counter) credits</li>
                        <li>Healthy food/grocery cards</li>
                        <li>Prescription Drug Coverage</li>
                        <li>Other quality of life benefits</li>
                    </ul>
                    </div>
                </div>
                </div>

                <div class="w-1/2">
                    <div>
                        <p class="underline font-semibold">MMA’s Customer Service</p>
                        <p class="pt-2">
                        Our goal is to provide you with a totally “hands free” experience when dealing with your Wards health needs. We have set up an 800-phone number that is specific to you and your program.
                        This will bump you to the front of the line whenever you or your Wards need assistance.
                        </p>
                    </div>

                    <div class="mt-4">
                        <ul class="ml-3">
                            <li>A dedicated Customer Service line</li>
                            <li>Real time availability and response</li>
                            <li>Team with a …” whatever you need we’ve got you covered” attitude.</li>
                            <li>Quick efficient answers to your questions</li>
                        </ul>
                    </div>

                    <div class="w-1/2 mt-8">
                        <p class="underline font-semibold">Ward Identifiers</p>
                        <ul class="ml-3">
                            <li>Medicare</li>
                            <li>Medicare + Medicaid</li>
                            <li>Medicare + Prescription Drug Plan only</li>
                            <li>Medicare + paid premiums for dental, vision, hearing or medical</li>
                        </ul>
                    </div>
                </div>
            </div>

            </div>
        </section>

        <section class="guardianship py-16 text-center text-ms lg:text-base lg:text-left">
            <div class="container mx-auto w-3/4">
            <div class="flex flex-row items-start w-full pt-12">
                <div class="flex flex-col w-full lg:w-1/2 text-2xl lg:pl-0 font-extrabold text-mmablue leading-tight text-center lg:text-left justify-center">Contact Us to learn about</div>
                <div class="flex flex-row lg:flex-col w-full flex-wrap lg:w-1/2 pt-6 lg:pt-2">
                <div class="flex flex-row lg:flex-col w-full items-center justify-center lg:justify-start">
                    <a href="#contactcta"
                    ><button
                        type="button"
                        class="
                        bg-mmared
                        hover:bg-mmalightblue
                        focus:shadow-outline focus:outline-none
                        text-white
                        hover:text-white
                        border border-mmared
                        hover:border-mmalightblue
                        font-bold
                        w-full
                        py-2
                        px-4
                        rounded-lg
                        "
                    >
                        Contact Us
                    </button></a
                    >
                </div>
                </div>

                <div class="flex flex-col">
                    <p>(913) 649.0300</p>
                    <p class="mt-2">(844) 649.0300 toll free</p>
                    <p class="mt-2">Dedicated Customer Service Line (844) 769 0330</p>
                </div>
            </div>
            </div>
        </section>


    @include('partials.ready-to-see')
@stop
