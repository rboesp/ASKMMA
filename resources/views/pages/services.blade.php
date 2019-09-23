@extends('layouts.secondary')

@section('content')
    <section
            class="minihero h-64 mt-20"
            style="background: url('/images/services/services_header.jpg') no-repeat;background-size: cover;"
    >
        <div class="container mx-auto h-full flex flex-col justify-around">
            <div class="flex flex-wrap w-full">
                <div class="flex flex-col justify-center w-4/5 mx-auto lg:mx-0 lg:w-3/5 text-center lg:text-left">
                    <div class="my-4">
                        <h1 class="w-full text-4xl font-extrabold lg:text-6xl text-center lg:text-left text-mmablue font-futura leading-tight"> Services</h1>
                        <p class="w-full pt-4 lg:text-left text-gray-900 text-lg font">
                            Our management team has been working over years focused on helping people quickly find
                            solutions and solve their problems.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('partials.phonenumcta')

    <section class="services py-16 text-center text-ms lg:text-base lg:text-left">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-2/3 mx-auto justifyedium,-between">
                    <div class="flex flex-row">
                        <h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">
                            Our Services
                        </h3>
                    </div>
                    <div class="flex flex-row flex-wrap text-gray-900">
                        <div class="flex flex-col flex-wrap w-full">
                            <div class="w-full text-xl lg:text-base mt-4 font-black">
                                Medicare Medicaid Advisors (MMA) and our Agents strive to provide the best client
                                service available in the marketplace today.
                            </div>
                            <div class="lg:text-base text-l text-center lg:text-left mt-2">
                                We are always looking for better ways to serve our clients.
                            </div>
                        </div>
                        <div class="flex flex-col flex-wrap w-full mt-8">
                            <div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
                                MMA believe our clients deserve quick responses to questions and problems.
                            </div>
                            <div class="lg:text-base text-l text-center lg:text-left mt-2">
                                Our clients want timely responses when they are in need of assistance. Our Agents make
                                every effort to return phone calls as soon as possible, and and make themselves
                                available as clients need them. If it is important to our clients, it is important to
                                us.
                            </div>
                        </div>
                        <div class="flex flex-col flex-wrap w-full mt-8">
                            <div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
                                MMA believes our clients deserve the best products with the best prices.
                            </div>
                            <div class="lg:text-base text-l text-center lg:text-left mt-2">
                                Each calendar year, we will review all new plans, changes, costs, and premiums for each
                                county and State. We inform our clients about changes that may affect them, with options
                                to consider. We represent our clients and have their best interests at heart.
                            </div>
                        </div>
                        <div class="flex flex-col flex-wrap w-full mt-8">
                            <div class="w-full text-xl lg:text-base text-center lg:text-left font-black">
                                MMA believes our clients deserve an experienced, knowledgeable ADVOCATE.
                            </div>
                            <div class="lg:text-base text-l text-center lg:text-left mt-2">
                                Our biggest value to you is support. If a client runs into a problem, we become the
                                client's advocate. No insurance company is perfect. No plan is perfect. No hospital or
                                doctor is perfect. People make mistakes. If a problem, concern, or issue arises, simply
                                call our MMA Agents!<br><br>
                                We have access to Broker Support services with each insurance company that are designed
                                and dedicated to fix problems quickly. Our management team has seen countless problems
                                and issues over the years, and we are confident that we will know how to fix the
                                problems.
                            </div>
                        </div>
                        @include('partials.zipsearch', [
                            'zip_search_desc' => 'Contact Us to learn about'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.ready-to-see')
@stop
