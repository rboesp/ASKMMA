@extends('layouts.secondary', [
    'title' => 'Careers',
])
@section('styles')
    html {
    scroll-behavior: smooth;
    }
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        // Add smooth scrolling to all links
        $('a').on('click', function (event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault()

            // Store hash
            var hash = this.hash

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function () {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash
            })
          } // End if
        })
      })
    </script>
@endsection

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Careers',
        'minihero_desc' => 'Whether you have been an agent for 20 years, or if you have been thinking about obtaining a license, we would like to talk with you! We offer a strong training program that includes classroom and field training with experienced, successful managers.',
        'image_bg' => 'careers/careers_header.jpg',
    ])

    <div class="w-full text-sm text-center lg:text-lg lg:text-left">
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
                            Medicare Medicaid Advisors is one of the leading insurance distribution agencies in the
                            senior market. We offer growth opportunities to both captive agents and independent brokers
                            through access to:
                        </p>
                    </div>
                    <div class="lg:w-1/2 flex items-center mt-3 lg:mt-0">
                        <img src="/images/careers/handshake.png" alt="handshake" class="h-auto w-full"/>
                    </div>
                </div>
                <div class="w-full xl:hidden">
                    <p class="mt-4 leading-relaxed">
                        Medicare Medicaid Advisors is one of the leading insurance distribution agencies in the senior
                        market. We offer growth opportunities to both captive agents and independent brokers through
                        access to:
                    </p>
                </div>
                <div class="w-full mt-8">
                    <h3 class="font-extrabold text-lg text-mmadescription">Ways We Set You Ahead</h3>
                    <ul class="mt-2 text-left">
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
                    <a
                            href="#top-current-openings"
                            class="w-4/5 md:w-2/3 lg:w-1/3 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-2 rounded-lg"
                    >
                        View Openings at MMA
                    </a>
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
                        <ul class="mt-4 text-left">
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
                        <img src="/images/careers/laptop.jpg" alt="laptop" class="h-auto w-full"/>
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
                            <img src="/images/careers/coverage_mma.png" alt="MMA Converage"
                                 class="h-auto w-4/5 mx-auto"/>
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
                            <img src="/images/careers/coverage_mmausa.png" alt="MMA USA Coverage"
                                 class="h-auto w-4/5 mx-auto mt-6"/>
                        </div>
                    </div>
                </div>
            </div>
            <span id="top-current-openings"></span>
        </section>

        <section class="text-left w-full bg-gray-200 py-10 lg:py-16">
            <div class="w-full">
                <career-list class="mx-10 lg:w-3/4 mx-auto"></career-list>
                <p class="mx-10 lg:w-3/4 mx-auto text-base mt-10">
                    Medicare Medicaid Advisors, Inc. does not discriminate in employment on the basis of race, color,
                    religion, sex (including pregnancy and gender identity), national origin, political affiliation,
                    sexual orientation, marital status, disability, genetic information, age, membership in an employee
                    organization, retaliation, parental status, military service, or other non-merit factor.
                </p>
            </div>
        </section>
    </div>

    @include('partials.ready-to-see')
@endsection
