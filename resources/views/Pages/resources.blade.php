@extends('Layouts.secondary')
@section('content')

    @include('Partials.minihero', [

        'minihero_title' => 'About MMA',
        'minihero_desc' => 'We know that you are familiar with Medicare, but now let’s take a moment to help you be familiar with us.',
        'image_bg' => 'products/about_header.png',

    ])

    @include('Partials/phonenumcta')

    <section class="feedback py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-full lg:w-2/3 mx-auto justify-between">
                    <div class="flex flex-row flex-wrap">
                        <accordion-component title="Hot Topics" sub-title="See Hot Topics" class="my-4">
                            <div class="w-full flex flex-wrap">
                                <span class="w-full lg:w-1/2 py-3">
                                    Welcome to Medicare <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Job-Based Insurance When You Turn 65 <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Medicare Benefits <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Medicare & The Health Insurance Marketplace <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Medicare Getting Started <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Medicare A Quick Look <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Medicare Medigap Getting Started <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    New Medicare Card 10 Things You Need To Know <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    2019 Medicare & You <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    New Medicare Card Change <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    2019 Medicare Costs <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Scammers Claim to be IRS Employees <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Apply for Medicare Online <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Scammers Masquerade as Health and Human Resource Officials <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Choosing a Medigap Policy <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Seniors Must Ask for a Discount <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Dealing with Dementia-Related Sleep Disorders <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Which Medical Alert Devices are Best for Seniors <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Guide to Safe Sleeping for Seniors <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    Women & Heard Disease <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>
                        <accordion-component title="Medicare & Medicaid"
                                             sub-title="See Medicare & Medicaid" class="my-4"></accordion-component>
                        <accordion-component title="Additional Links for Your Information"
                                             sub-title="See Additional Links" class="my-4"></accordion-component>
                        <accordion-component title="Financial Security"
                                             sub-title="See Financial Security" class="my-4"></accordion-component>
                        <accordion-component title="Community Resources & Services Available"
                                             sub-title="See Community Resources" class="my-4"></accordion-component>
                        <accordion-component title="Social Security"
                                             sub-title="See Social Security" class="my-4"></accordion-component>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('Partials/readytosee')
@stop

	


