@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [
        'minihero_title' => 'Careers',
        'minihero_desc' => 'Whether you have been an agent for 20 years, or if you have been thinking about obtaining a license, we would like to talk with you! We offer a strong training program that includes classroom and field training with experienced, successful managers.',
        'image_bg' => 'about/about_header.png',
    ])

    <div class="w-full">
        <section class="w-full pt-10 pb-8 lg:pt-12 lg:pb-20">
            <div class="mx-10 lg:w-2/3 lg:mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-full">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pb-4">
                            Opportunity
                        </h1>
                    </div>
                    <div class="lg:w-1/2 lg:pr-8">
                        <h3 class="font-extrabold text-lg text-mmadescription">Some of our Advantages</h3>
                        <p class="mt-4 leading-relaxed">
                            With 10,000 baby boomers turning 65 each day, opportunities in the senior market are
                            expanding at an unprecedented rate. Our service-oriented approach can help you increase
                            your income potential while helping seniors protect their health and overall financial
                            well-being.
                        </p>
                        <p class="mt-2 leading-relaxed">
                            We are currently looking for licensed agents interested in Medicare Advantage,
                            supplements, and health-related product sales to represent highly-rated and
                            nationally-recognized carriers.
                        </p>
                        <p class="mt-2 leading-relaxed hidden xl:block">
                            Medicare Medicaid Advisors is one of the leading insurance distribution agencies in the senior market. We offer growth opportunities to both captive agents and independent brokers through access to:
                        </p>
                    </div>
                    <div class="lg:w-1/2 flex items-center mt-3 lg:mt-0">
                        <img src="/images/careers/handshake.png" alt="handshake" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full xl:hidden">
                    <p class="mt-4 leading-relaxed">
                        Medicare Medicaid Advisors is one of the leading insurance distribution agencies in the senior market. We offer growth opportunities to both captive agents and independent brokers through access to:
                    </p>
                </div>
                <div class="w-full mt-8">
                    <h3 class="font-extrabold text-lg text-mmadescription">Ways We Set You Ahead</h3>
                    <ul class="mt-2 text-base">
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
                <div class="flex justify-center lg:justify-start w-full mt-10">
                    <button class="w-4/5 md:w-2/3 lg:w-1/3 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-3 px-2 rounded-lg">
                        View Openings at MMA
                    </button>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-200 py-10 lg:py-16">
            <div class="mx-10 lg:w-2/3 lg:mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-full">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pb-4">
                            Requirements
                        </h1>
                    </div>
                    <div class="lg:w-1/2 lg:pr-8 text-mmadescription">
                        <h3 class="font-extrabold text-lg">
                            We are Looking for Individuals Who Are:
                        </h3>
                        <ul class="mt-4">
                            <li>Professional, driven, disciplined, resilient, and coachable</li>
                            <li>Licensed to sell health insurance or willing to obtain proper licensing</li>
                            <li>Outgoing and positive, and enjoy building relationships</li>
                            <li>In possession of a valid driver’s license, a reliable vehicle, and vehicle
                                insurance
                            </li>
                            <li>Dynamic personality with an engaging telephone presence</li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 mt-4 lg:mt-0">
                        <img src="/images/careers/laptop.png" alt="laptop" class="h-auto w-full" />
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full py-5 lg:py-16">
            <div class="w-full">
                <div class="w-full flex flex-wrap justify-center px-10 lg:px-24">
                    <div class="flex flex-col w-full lg:w-5/12 mb-10">
                        <div class="mb-4 lg:mb-12">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight text-center">
                                Coverage Area Supported by MMA
                            </h1>
                        </div>
                        <div>
                            <img src="/images/careers/coverage_mma.png" alt="MMA Converage" class="h-auto w-4/5 mx-auto" />
                        </div>
                    </div>
                    <div class="border-l hidden mx-12 xl-mx-16 lg:block"></div>
                    <div class="flex flex-col w-full lg:w-5/12">
                        <div class="mb-4 lg:mb-12">
                            <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight text-center">
                                Coverage Area Supported by MMAUSA
                            </h1>
                        </div>
                        <div>
                            <img src="/images/careers/coverage_mmausa.png" alt="MMA USA Coverage" class="h-auto w-4/5 mx-auto mt-6" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-200 py-10 lg:py-16">
            <div class="w-full">
                <div class="mx-10 lg:mx-24">
                    <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight ">
                        Current Openings <span class="ml-3 text-gray-400">(3)</span>
                    </h1>

                    <div class="flex flex-wrap bg-white rounded-lg py-5 px-8 mt-10 items-center box-blue-shadow">
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Job Title</span><br>
                            <span class="font-semibold text-mmadescription">Area Manager</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Location</span><br>
                            <span class="font-semibold text-mmadescription">Birmingham, AL</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Department</span><br>
                            <span class="font-semibold text-mmadescription">Sales</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Salary</span><br>
                            <span class="font-semibold text-mmadescription">Salary + Commission</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5 text-red-700 text-right">
                            <span>View More</span>
                            <span><i class="la la-angle-down"></i></span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow flex flex-wrap py-5 px-8 mt-10 items-center box-blue-shadow">
                        <div class="w-full flex justify-between mb-6">
                            <div class="flex flex-col lg:flex-row lg:items-center w-1/2 lg:w-full">
                                <div>
                                    <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight">
                                        Area Manager
                                    </h1>
                                </div>
                                <h1 class="ml-0 lg:ml-3 font-semibold text-mmagray lg:text-3xl">
                                    Shreveport Branch Office
                                </h1>
                            </div>
                            <div class="mt-2 w-1/2 lg:m-0 lg:w-1/5 text-red-700 text-right">
                                <span>View Less</span>
                                <span><i class="la la-angle-up"></i></span>
                            </div>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Location</span><br>
                            <span class="font-semibold text-mmadescription">Shrevport, LA</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Department</span><br>
                            <span class="font-semibold text-mmadescription">Sales</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-mmagray">Salary</span><br>
                            <span class="font-semibold text-mmadescription">Salary + Commission</span>
                        </div>
                        <div class="w-full border-t border-red-600 mt-12 pt-12 text-mmadescription">
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

                            <h3 class="mt-12 font-bold text-lg text-mmadescription">
                                If You are interested in this position, please email your resume to <span
                                        class="font-extrabold font-black text-mmablue font-futura">danielle@askmma.com</span>
                                or click on the link to send an email.
                            </h3>
                            <div class="flex justify-center lg:justify-start w-full mt-6">
                                <button class="w-4/5 md:w-2/3 lg:w-1/3 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-3 px-2 rounded-lg">
                                    Apply for This Position
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded shadow flex flex-wrap p-6 mt-10 items-center">
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-gray-400">Job Title</span><br>
                            <span class="font-semibold text-mmadescription">Area Manager</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-gray-400">Location</span><br>
                            <span class="font-semibold text-mmadescription">Overland Park, KS</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-gray-400">Department</span><br>
                            <span class="font-semibold text-mmadescription">Sales</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5">
                            <span class="text-gray-400">Salary</span><br>
                            <span class="font-semibold text-mmadescription">Salary + Commission</span>
                        </div>
                        <div class="w-full mt-2 lg:m-0 lg:w-1/5 text-red-700 text-right">
                            <span>View More</span>
                            <span><i class="la la-angle-down"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('Partials/readytosee')
@endsection
