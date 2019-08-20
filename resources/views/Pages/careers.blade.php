@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [
        'minihero_title' => 'Careers',
        'minihero_desc' => 'Whether you have been an agent for 20 years, or if you have been thinking about obtaining a license, we would like to talk with you! We offer a strong training program that includes classroom and field training with experienced, successful managers.',
        'image_bg' => 'about/about_header.png',
    ])

    <div class="w-full">
        <section class="w-full py-10">
            <div class="container mx-auto">
                <div class=" w-2/3 mx-auto">
                    <div class="w-full flex flex-wrap items-center">
                        <div class="w-1/2">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                                Opportunity
                            </h1>
                            <h3 class="mt-4 font-extrabold text-lg">Some of our Advantages</h3>
                            <p class="mt-4 text-base">
                                AWith 10,000 baby boomers turning 65 each day, opportunities in the senior market are
                                expanding at an unprecedented rate. Our service-oriented approach can help you increase
                                your income potential while helping seniors protect their health and overall financial
                                well-being.
                            </p>
                            <p class="mt-4 text-base">
                                We are currently looking for licensed agents interested in Medicare Advantage,
                                supplements, and health-related product sales to represent highly-rated and
                                nationally-recognized carriers.
                            </p>
                        </div>
                        <div class="w-1/2">
                            <img src="/images/careers/handshake.png" alt="handshake" class="h-auto w-full" />
                        </div>
                    </div>
                    <div class="w-full mt-10">
                        <h3 class="font-extrabold text-lg">Ways We Set You Ahead</h3>
                        <ul class="mt-4 text-base">
                            <li>Insurance carriers nationwide</li>
                            <li>A diverse portfolio including an array of Medicare Advantage and supplements</li>
                            <li>Year-round selling opportunities</li>
                            <li>A support team to provide you with the level of assistance you deserve</li>
                            <li>100% high-quality leads</li>
                            <li>Competitive compensation package: commissions, incentive trips, renewal income</li>
                            <li>On-going product training and field training</li>
                            <li>Marketing support</li>
                            <li>State-of-the-art technology</li>
                        </ul>
                    </div>
                    <div class="w-full mt-10">
                        <button class="w-1/3 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-2 px-2 rounded">
                            View Openings at MMA
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-200 py-10">
            <div class="container mx-auto">
                <div class=" w-2/3 mx-auto">
                    <div class="w-full flex flex-wrap">
                        <div class="w-1/2">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                                Requirements
                            </h1>
                            <h3 class="mt-4 font-extrabold text-lg">
                                We are Looking for Individuals Who Are:
                            </h3>
                            <ul class="mt-4 text-base">
                                <li>Professional, driven, disciplined, resilient, and coachable</li>
                                <li>Licensed to sell health insurance or willing to obtain proper licensing</li>
                                <li>Outgoing and positive, and enjoy building relationships</li>
                                <li>In possession of a valid driver’s license, a reliable vehicle, and vehicle
                                    insurance
                                </li>
                                <li>Dynamic personality with an engaging telephone presence</li>
                            </ul>
                        </div>
                        <div class="w-1/2">
                            <img src="/images/careers/laptop.png" alt="laptop" class="h-auto w-full" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full py-10">
            <div class="container mx-auto">
                <div class=" w-2/3 mx-auto">
                    <div class="w-full flex flex-wrap">
                        <div class="w-1/2">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16 text-center">
                                Coverage Area Supported by MMA
                            </h1>
                            <img src="/images/careers/coverage_mma.png" alt="MMA Converage" class="h-auto w-4/5 mx-auto" />
                        </div>
                        <div class="w-1/2">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16 text-center">
                                Coverage Area Supported by MMAUSA
                            </h1>
                            <img src="/images/careers/coverage_mmausa.png" alt="MMA USA Coverage" class="h-auto w-4/5 mx-auto mt-6" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-200 py-10">
            <div class="container mx-auto">
                <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                    Current Openings <span class="ml-3 text-gray-400">(3)</span>
                </h1>

                <div class="bg-white rounded shadow flex flex-wrap p-6 mt-10 items-center">
                    <div class="w-1/5">
                        <span class="text-gray-400">Job Title</span><br>
                        Area Manager
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Location</span><br>
                        Birmingham, AL
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Department</span><br>
                        Sales
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Salary</span><br>
                        Salary + Commission
                    </div>
                    <div class="w-1/5 text-red-700 text-right">
                        View More
                    </div>
                </div>

                <div class="bg-white rounded shadow flex flex-wrap p-6 mt-10 items-center">
                    <div class="w-full flex justify-between mb-6">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight">
                            Area Manager <span class="ml-3 text-gray-400">Shreveport Branch Office</span>
                        </h1>
                        <div class="w-1/5 text-red-700 text-right">
                            View Less
                        </div>
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Location</span><br>
                        Shreveport, LA
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Department</span><br>
                        Sales
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Salary</span><br>
                        Salary + Commission
                    </div>
                    <div class="w-full border-t border-red-600 mt-12 pt-12">
                        <h3 class="font-extrabold text-lg">
                            Responsibilities
                        </h3>
                        <p class="mt-4 text-base">
                            Direct and oversee the organization's sales policies, objectives and initiatives. Achieve
                            growth and meet sales targets by successfully managing the sales team. Manage recruiting,
                            coaching and performance monitoring of sales agents. Maximizes sales force effectiveness by
                            determining and solving training needs. Effective teaching and training ability to promote
                            individual and team growth. This position requires relocation to the Shreveport, LA Area.
                        </p>
                        <h3 class="mt-10 font-extrabold text-lg">
                            Requirements
                        </h3>
                        <ul class="mt-4 text-base">
                            <li>Work in the office Monday and Friday. Work in the field Tuesday, Wednesday, Thursday.
                            </li>
                            <li>Meet or exceed production and recruiting goals and initiatives.</li>
                            <li>Teach classroom training and field train.</li>
                            <li>Coordinate new agent classroom training and field training.</li>
                            <li>One-on-one agent mentoring.</li>
                            <li>Unit Manager coaching and instruction.</li>
                            <li>Develop unit teams through goal setting and monthly performance review.</li>
                            <li>Maintain & analyze weekly reports to manage production and growth.</li>
                            <li>Understand and review monthly commission and income statements.</li>
                            <li>Actively recruit and conduct interviews to promote team growth.</li>
                            <li>Understand and manage area Z account.</li>
                            <li>Collaborate with Product Development and Training manager.</li>
                            <li>Coordinate with Director of Resource and Agent Development.</li>
                            <li>Work closely with contracting and compliance departments to meet company objectives.
                            </li>
                            <li>Lead all weekly team sales meetings.</li>
                            <li>Understand and teach all application and dropbox functions.</li>
                            <li>Manage inventory of Sales applications field materials</li>
                            <li>Communicate and collaborate with administrative personnel to meet company objectives.
                            </li>
                        </ul>

                        <h3 class="mt-10 font-extrabold text-lg">
                            Core Competencies
                        </h3>
                        <ul class="mt-4 text-base">
                            <li>Lead by example/demonstrate good business practices.</li>
                            <li>Motivated and enthusiastic disposition.</li>
                            <li>Required to submit a minimum of six (6) applications per week on average (312
                                applications/year).
                            </li>
                            <li>Required attendance for all company meetings and team building event.</li>
                            <li>Maintain company mission statement and positive code of conduct.</li>
                        </ul>

                        <h3 class="mt-12 font-bold text-lg">
                            If You are interested in this position, please email your resume to <span
                                    class="font-extrabold font-black text-mmablue font-futura">danielle@askmma.com</span>
                            or click on the link to send an email.
                        </h3>
                        <div class="w-full mt-6">
                            <button class="w-1/3 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-2 px-2 rounded">
                                Apply for This Position
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded shadow flex flex-wrap p-6 mt-10 items-center">
                    <div class="w-1/5">
                        <span class="text-gray-400">Job Title</span><br>
                        Area Manager
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Location</span><br>
                        Overland Park, KS
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Department</span><br>
                        Sales
                    </div>
                    <div class="w-1/5">
                        <span class="text-gray-400">Salary</span><br>
                        Salary + Commission
                    </div>
                    <div class="w-1/5 text-red-700 text-right">
                        View More
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('Partials/readytosee')
@endsection
