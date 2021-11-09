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
                                <iframe class="h-150 w-full" src="https://www.youtube.com/embed/4jiq2Cb0r7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <p class="w-11/12">We’ve recognized the needs throughout our communities in the Medicare and Medicaid arena and have continued to reach out to those who need our help.
                        We have partnered with our 800 Guardians, churches, service organizations, and food pantries throughout the states we work in.
                        We have a dedicated team of licensed and certified insurance specialist who have a heart for serving our communities. </p>
                        <p class="w-11/12 font-semibold">Many of the adults under guardianship are Medicare and Medicaid beneficiaries. </p>
                    </div>

                    <div class="mt-8">
                        <p class="underline font-semibold">Ward Identifiers</p>
                        <ul>
                            <li>Medicare</li>
                            <li>Medicare + Medicaid</li>
                            <li>Medicare + Prescription Drug Plan only</li>
                            <li>Medicare + paid premiums for dental, vision, hearing or medical</li>
                        </ul>
                    </div>

                </div>

                <div class="w-1/2">
                    <div>
                        <p class="underline font-semibold">MMA’s Customer Service</p>
                        <p> Our goal is to provide you with a totally “hands free” experience when dealing with your Wards health needs. We have set up an 800-phone number that is specific to you and your program. This will bump you to the front of the line whenever you or your Wards need assistance.</p>
                    </div>

                    <div class="mt-8">
                        <ul>
                            <li>A dedicated Customer Service line</li>
                            <li>Real time availability and response</li>
                            <li>Team with a …” whatever you need we’ve got you covered” attitude.</li>
                            <li>Quick efficient answers to your questions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-between mt-16">
                <div class="w-1/2">
                    <div>
                        <p class="underline font-semibold">Potential Benefits</p>
                        <div class="flex justify-between">
                            <ul>
                                <li>Up to $3,500 on dental (dentures) </li>
                                <li>Up to $400 on vision (glasses)</li>
                                <li>Hearing coverage (hearing aids)</li>
                                <li>Medical Transportation</li>
                                <li>Life alert “Help I’ve fallen”</li>
                            </ul>

                            <ul>
                                <li>Gym memberships </li>
                                <li>Up to $310 OTC (over the counter)</li>
                                <li>Select Wards could receive $50 food cards</li>
                                <li>Prescription Drug Coverage </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="guardianship py-16 text-center text-ms lg:text-base lg:text-left bg-gray-100">
        <div class="container mx-auto w-3/4">
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-2xl text-blue-800">Contact Us to Learn</h2>
                </div>
                <div>
                    <a href="tel:+9136490300" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Contact Us
                    </a>
                </div>
                <div>
                    <p>(913) 649.0300</p>
                    <p>(844) 649.0300 toll free</p>
                    <p>Dedicated Customer Service Line (844) 769 0330</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
