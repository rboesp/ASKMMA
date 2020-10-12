@extends('layouts.secondary', [
    'title' => 'About Us',
])

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'About Medicare Medicaid Advisors',
        'minihero_desc' => 'We are here to help you become familiar with Medicare, but let’s take a moment to help you become familiar with us.',
        'image_bg' => 'about/about_header.jpg',
    ])

    <section class="purpose py-16 text-sm lg:text-base">
        <div class="container mx-auto">
            <div class="flex flex-row">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">
                    We Have A Purpose </h3>
            </div>
            <div class="flex flex-row mt-6 lg:mt-6">
                <p class="lg:text-base text-md w-full px-8 lg:px-0 lg:w-3/5 mx-auto text-center mb-4 lg:mb-8">“Our
                    success will be measured by our clients and agents choosing us because of their belief in our
                    ability to meet or exceed their expectations of service, expertise and care.”
                </p>
            </div>
        </div>
        <div class="flex flex-row flex-wrap mt-6 justify-around">
            <div class="flex flex-row flex-wrap mt-6 justify-around">
                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-start">
                    <a href="/community-outreach">
                        <img class="success-path-image" src="/images/about/serv icon.png">
                    </a>
                    <div class="my-3">
                        <span class="font-black text-lg text-gray-800">Serve Our Community</span>
                    </div>
                    <div class="text-center">
                        <span class="lg:text-md text-sm">
                            To serve our community with wisdom, responsibility and integrity
                        </span>
                    </div>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-start">
                    <a href="/community-outreach">
                        <img class="success-path-image" src="/images/about/grow icon.png">
                    </a>
                    <div class="my-3">
                        <span class="font-black text-lg text-gray-800">Grow Partnerships</span>
                    </div>
                    <div class="text-center">
                        <span class="lg:text-md text-sm">
                            To establish a successful partnership with our clients, our agents, and insurance providers who
                            respect the interests and goals of each party.
                        </span>
                    </div>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/4 items-center mb-10 justify-start">
                    <a href="/community-outreach">
                        <img class="success-path-image" src="/images/about/lead icon.png">
                    </a>
                    <div class="my-3">
                        <span class="font-black text-lg text-gray-800">Lead Through Action</span>
                    </div>
                    <div class="text-center">
                        <span class="lg:text-md text-sm">
                            To provide education and demonstrate leadership through knowledge, kindness and respect.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="members py-16 bg-gray-200 text-sm lg:text-base">
        <div class="container mx-auto">
            <div class="flex flex-row">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">
                    Our Leadership
                </h3>
            </div>

            <div class="flex flex-row mt-6 lg:mt-6">
                <p class="lg:text-base text-md w-full px-8 lg:w-3/5 lg:mx-auto text-center mb-4 lg:mb-8">
                    Leadership is what makes a company stand above when it comes to Customer relations. Our core has
                    been built on the best in Medicare to help our customers.
                </p>
            </div>

            <div class="flex flex-row flex-wrap justify-around mt-6 w-3/4 mx-auto">
                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Kirk_Anderson.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Kirk Anderson</p>
                    <p class="lg:text-md text-sm text-center">CEO</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Melissa_Anderson.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Melissa Anderson</p>
                    <p class="lg:text-md text-sm text-center">President</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Sabrina_Mundy.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Sabrina Mundy</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Contracting, Compliance,<br>Client Retention</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Darci_Fleming.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Darci Fleming</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Operations</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Teresa_Rodriguez.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Teresa Rodriguez</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Sales</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Scott_Anderson.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2"> Scott Anderson</p>
                    <p class="lg:text-md text-sm text-center">National Strategies Manager</p>
                    <p class="lg:text-md text-sm text-center">&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Michael_Packard.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Michael Packard</p>
                    <p class="lg:text-md text-sm text-center">Regional Director</p>
                    <p class="lg:text-md text-sm text-center">Florida & Georgia</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Trent_Purcell.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Trent Purcell</p>
                    <p class="lg:text-md text-sm text-center">Regional Director</p>
                    <p class="lg:text-md text-sm text-center">Eastern Missouri, SW Illinois &<br>New Markets</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Chris_Jirgens.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Chris Jirgens</p>
                    <p class="lg:text-md text-sm text-center">Regional Director</p>
                    <p class="lg:text-md text-sm text-center">SW Missouri, SE Kansas &<br>Oklahoma</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
