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

            <div class="flex flex-row items-start flex-wrap justify-around mt-6 w-3/4 mx-auto">
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
                    <img src="/images/team/Scott_Anderson.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2"> Scott Anderson</p>
                    <p class="lg:text-md text-sm text-center">Sr. Vice President</p>
                    <p class="lg:text-md text-sm text-center">&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Matt_Ely.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Matt Ely</p>
                    <p class="lg:text-md text-sm text-center">Sr. Vice President</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Sabrina_Mundy.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Sabrina Mundy</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Compliance & Client Retention</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/James_Cisneros.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">James Cisneros</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Sales</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Darci_Fleming.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Darci Fleming</p>
                    <p class="lg:text-md text-sm text-center">Vice President</p>
                    <p class="lg:text-md text-sm text-center">Operations</p>
                    <p>&nbsp;</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Trent_Purcell.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Trent Purcell</p>
                    <p class="lg:text-md text-sm text-center">Vice President </p>
                    <p class="lg:text-md text-sm text-center">Business Development and Carrier Relations</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Carletha_Rogers.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Carletha Rogers</p>
                    <p class="lg:text-md text-sm text-center">Director</p>
                    <p class="lg:text-md text-sm text-center">Training and Compliance</p>
                </div>

                <div class="flex flex-col w-3/4 mt-1 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Rachel_Williams.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Rachel Williams</p>
                    <p class="lg:text-md text-sm text-center">Asst. Sales Director</p>
                    <p class="lg:text-md text-sm text-center">St. Louis, Missouri & Memphis, <br /> Tennessee</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Shelia_Woods.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Shelia Woods</p>
                    <p class="lg:text-md text-sm text-center">Manager</p>
                    <p class="lg:text-md text-sm text-center">National Recruiting</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Eli_Balsley.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Eli Balsley</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Jacksonville, FL</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Denese_Adel.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Denese Adel</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Sarasota, FL</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Rickey_Brooks.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Rickey Brooks</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Jackson, MS</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Chris_Seoane.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Chris Seoane</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Lenexa, KS</p>
                </div>

                <div class="flex flex-col mt-1 w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Merrie_Tang.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Merrie Tang</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Springfield, MO</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Steve_Hawley.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Steve Hawley</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Oklahoma City, OK</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Stephanie_Paulsmeyer.jpeg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Stephanie Paulsmeyer</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Louisville, KY</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10">
                    <img src="/images/team/Lavette_Owens.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">LaVette Owens</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Des Moines, IA</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Ramona_Warren.jpg" class="w-32 h-36 rounded-full mb-2">

                    <p class="font-bold mb-2">Ramona Warren</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Baton Rouge, LA</p>
                </div>

                <div class="flex flex-col w-3/4 mx-auto lg:mx-0 lg:w-1/3 items-center mb-10 justify-end">
                    <img src="/images/team/Celena_Ganey.jpg" class="w-32 h-36 rounded-full mb-2">
                    <p class="font-bold mb-2">Celena Ganey</p>
                    <p class="lg:text-md text-sm text-center">Area Manager</p>
                    <p class="lg:text-md text-sm text-center">Shreveport, LA</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
