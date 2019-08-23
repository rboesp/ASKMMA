@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [
        'minihero_title' => 'Community',
        'minihero_desc' => 'We know that you are familiar with Medicare, but now let’s take a moment to help you be familiar with us.',
        'image_bg' => 'about/about_header.png',
    ])
    <section class="communityoutreach py-16 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-row justify-start flexbox flex-wrap">
                <!-- Left -->
                <div class="flex mx-10 lg:w-11/12 lg:mx-auto">
                    <div>
                        <div class="flex flex-row">
                            <h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">
                                Community Outreach</h3>
                        </div>
                        <div class="flex flex-row mt-6 lg:mt-4 lg:pr-20">
                            <p class="lg:text-base text-sm w-full text-center lg:text-left">Medicare Medicaid Advisors is
                                committed to the communities we serve.<br><br>We appreciate the opportunity to be involved
                                in community health fairs, events, and food/clothing drives. In addition, we have been
                                fortunate to participate in more personal events that benefit smaller organizations and
                                families. We are also very proud of our own agents who volunteer and donate time in their
                                own communities and churches.</p>
                        </div>
                        <div class="flex mt-6 lg:mt-6 lg:justify-start">
                            <button class="bg-mmared hover:bg-mmalightblue text-white font-medium p-3 rounded-lg font-semibold tracking-wider">
                                Have a Question?
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <img src="/images/communityoutreach/comout.png">
                        </div>                    
                    </div>
                </div>
            </div>
            <!-- End Left -->

            <!-- Cards -->
            <div class="flex flex-wrap flex-row pt-32 justify-around">
                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full"
                                 src="/images/communityoutreach/Harvesters crop.png">
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            ALaShaundra volunteers her help with Harvesters.
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full"
                                 src="/images/communityoutreach/Merri Teng2.png">
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            Merrie serving with Pastor Marcee at the Wesly House in Pittsburgh, KS.
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full"
                                 src="/images/communityoutreach/Scott.png">
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            Scott & Marcus serving their community.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="members py-16 bg-gray-200">
        <div class="container mx-auto">
            <div class="flex flex-row">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">
                    Our Leadership </h3>
            </div>
            <div class="flex flex-row flex-wrap justify-around mt-6 w-full mx-auto">
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City, MO</p>
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
