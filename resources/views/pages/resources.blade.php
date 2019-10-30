@extends('layouts.secondary', [
    'title' => 'Tools & Resources',
])

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Tools and Resources',
        'minihero_desc' => 'If you don’t have the time or means to call, but still want to learn, Medicare Medicaid Advisors still offers a wealth of knowledge.',
        'image_bg' => 'resources/resources_header.jpg',
    ])

    @include('partials.phonenumcta')

    <section class="feedback py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-full lg:w-4/5 mx-auto justify-between">
                    <div class="flex flex-row flex-wrap px-2">

                        <div class="w-full bg-white rounded px-8">
                            <div class="w-full flex flex-wrap justify-between cursor-pointer">
                                <h3 class="w-full font-extrabold text-2xl text-center md:text-left pt-8 md:w-5/6 text-gray-800 pt-4">
                                    Integrity Pharmacy
                                </h3>
                                <span class="text-base text-mmablue font-semibold w-full md:w-1/6 text-right">
                                  <img src="/images/resources/integrity_logo.jpg" class="w-1/2 md:w-4/5 h-auto mx-auto">
                                </span>
                            </div>
                            <div class="w-full border-mmablue text-sm lg:text-base pb-6 flex flex-wrap">
                                <p class="w-full lg:w-5/6 text-base font-semibold text-mmadescription">
                                    Integrity Pharmacy specializes in medication management for patients with multiple
                                    disease states who are taking multiple medications. We are committed to reducing
                                    medication errors through comprehensive pharmacy services. Our comprehensive
                                    pharmacy services include an in-home patient assessment; medication reconciliation;
                                    customized adherence packaging; monthly refill management and home delivery. Our
                                    medication management program helps eliminate duplicate medications through
                                    medication reconciliation and helps reduce hospitalizations and readmissions that
                                    result from medication errors. Our medication management program helps to ensure
                                    medication challenges are minimized and the highest outcomes for each patient we
                                    serve are achieved.
                                </p>
                                <div class="w-full lg:w-1/6"></div>
                                <div class="w-full mt-10 flex flex-wrap">
                                    <a
                                        target="_top"
                                        href="/resources/integrity-pharmacy-rack-card.pdf"
                                        class="w-full md:w-1/3 mx-2 hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-4 rounded-lg"
                                        style="background-color: #d22131;"
                                    >
                                        Integrity Pharmacy Rack Card
                                    </a>

                                    <a
                                        target="_top"
                                        href="/resources/integrity-FAQ-flyer-final.pdf"
                                        class="w-full md:w-1/3 mx-2 mt-2 md:mt-0 hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-4 rounded-lg"
                                        style="background-color: #66c8c7;"
                                    >
                                        Integrity FAQ Flyer
                                    </a>


                                </div>
                            </div>
                        </div>


                        <accordion-component title="Hot Topics" sub-title="View Hot Topics"
                                             class="my-4 box-blue-shadow">
                            <div class="w-full flex flex-wrap font-semibold">
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11095-Welcome-to-Medicare.pdf" target="_blank"
                                       class="resource-link"> Welcome to Medicare</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/2019-your-medicare-benefits.pdf" target="_blank"
                                       class="resource-link"> Medicare Benefits</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Getting Started 9.2018.pdf" target="_blank"
                                       class="resource-link"> Medicare Getting Started</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11575-Medigap-Getting-Started.pdf" target="_blank"
                                       class="resource-link"> Medicare Medigap Getting Started</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/2019 Medicare and You.pdf" target="_blank"
                                       class="resource-link">2019 Medicare &amp; You</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Costs 2019.pdf" target="_blank" class="resource-link">2019 Medicare Costs</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Soc-Sec-Apply-Online-for-Medicare.pdf" target="_blank"
                                       class="resource-link">Apply for Medicare Online </a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Choosing a Medigap Policy.pdf" target="_blank"
                                       class="resource-link">Choosing a Medigap Policy</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.tuck.com/dementia/" target="_blank" class="resource-link">Dealing with Dementia-Related Sleep Disorders</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.tuck.com/safe-sleeping-guide-for-seniors/" target="_blank"
                                       class="resource-link">Guide to Safe Sleeping for Seniors</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Job-Based Insurance When You Turn 65.pdf" target="_blank"
                                       class="resource-link">Job-Based Insurance When You Turn 65</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11694-Medicare-and-Marketplace.pdf" target="_blank"
                                       class="resource-link">Medicare &amp; the Health Insurance Marketplace</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Quick Look.pdf" target="_blank" class="resource-link">Medicare A Quick Look</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare 10 things to know about your New Medicare Card.pdf"
                                       target="_blank" class="resource-link">New Medicare Card 10 things You Need to Know</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/New Medicare Card What you need to know.pdf" target="_blank"
                                       class="resource-link">New Medicare Card Change</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Missouri CLAIM February 2018 Fraud Fact by Missouri SMP.pdf"
                                       target="_blank" class="resource-link">Scammers Claim to be IRS Employees ✤</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Scammers Masquerade as Health and Human Resource Officials.pdf"
                                       target="_blank" class="resource-link">Scammers Masquerade as Health and Human Resource Officials ✤</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Seniors-Must-Ask-for-Discount-.pdf" target="_blank"
                                       class="resource-link">Seniors Must Ask for a Discount ✤</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.tuck.com/best-medical-alert-systems/" target="_blank"
                                       class="resource-link">Which Medical Alert Devices are Best for Seniors</a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Women Heart Disease 9.2018.pdf" target="_blank"
                                       class="resource-link">Women &amp; Heart Disease</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>

                        <accordion-component title="Medicare & Medicaid" sub-title="View Medicare & Medicaid"
                                             class="my-4 box-blue-shadow">
                            <div class="w-full flex flex-wrap font-semibold">
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11409-Medicaid.pdf" target="_blank" class="resource-link">Medicaid Overview</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicaid-Spend-Down-CMS-Revised-March-2014.pdf" target="_blank"
                                       class="resource-link">Medicaid Spend Down</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/medicare-medicaid 2.1.19.pdf" target="_blank"
                                       class="resource-link">Medicaid vs. Medicare Basics CMS</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Advantage Plans 10.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Advantage Plan</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Medicare-Advantage-vs-MediGap-Supplement.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare Advantage vs MediGap Supplement</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Ambulance Services.pdf" target="_blank"
                                       class="resource-link">Medicare Ambulance Services</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Annual Yearly Review 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Annual Review</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Appeals Document 7.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Appeals</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Are-you-an-inpatient-or-outpatient.pdf" target="_blank"
                                       class="resource-link">Medicare Are you an Inpatient or an Outpatient</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-CMS-Authorization-Form-to-disclose-personal-information.pdf"
                                       target="_blank" class="resource-link">Medicare Authorization Form to disclose personal information</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/2019-your-medicare-benefits.pdf" target="_blank"
                                       class="resource-link">Medicare Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11368-N Bringing_Better_Heal_Care 8 2016.pdf" target="_blank"
                                       class="resource-link">Medicare Better Healthcare to Native Communities</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Blue-Button-card.pdf" target="_blank"
                                       class="resource-link">Medicare Blue Button Card</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11931-Cancer-Treatment-Services.pdf" target="_blank"
                                       class="resource-link">Medicare Cancer Treatment Services</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Children with ESRD 7.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Children with Kidney Disease</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Choosing a Medigap Policy 2019.pdf" target="_blank"
                                       class="resource-link">Medicare Choosing a Medigap Policy</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/nursing-home-other-long-term-services.pdf" target="_blank"
                                       class="resource-link">Medicare Choosing a Nursing Home</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Clinical Research Studies.pdf" target="_blank"
                                       class="resource-link">Medicare Clinical Research Studies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Coverage Gap 10.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Closing the Coverage Gap</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11163-Compare-Medicare-Drug-Coverage.pdf" target="_blank"
                                       class="resource-link">Medicare Compare Drug Coverage</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Comparing-Medicare-Options.pdf" target="_blank"
                                       class="resource-link">Medicare Comparing Options</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/12032-DMEPOS-Temporary-Gap-Period 10.18.pdf" target="_blank"
                                       class="resource-link">Medicare Competitive Bidding Program</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/02179-medicare-coordination-benefits-payer 12.1.18.pdf"
                                       target="_blank" class="resource-link">Medicare Coordination of Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11022-Medicare-Diabetes-Coverage.pdf" target="_blank"
                                       class="resource-link">Medicare Coverage Diabetes Supples &amp; Services</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11045-Medicare-Coverage-of-DME.pdf" target="_blank"
                                       class="resource-link">Medicare Coverage Durable Medical Equipment</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Coverage Outside United States.pdf" target="_blank"
                                       class="resource-link">Medicare Coverage Outside The United States</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Covered-Equipment-Supplies.pdf" target="_blank"
                                       class="resource-link">Medicare Covered Equipment &amp; Supplies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11333-How-Medicare-Covers-Self-Administered-Drugs-in-Hospital-Outpatient12.17.pdf"
                                       target="_blank" class="resource-link">Medicare Covers Self-Administered Drugs in Hosp Outpatient</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Diabetes Coverage Card 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Diabetes Coverage Card</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10128-medicare-coverage-esrd 9.18.pdf" target="_blank"
                                       class="resource-link">Medicare Dialysis &amp; Kidney Transplant Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11376-discharge-planning-checklist.pdf" target="_blank"
                                       class="resource-link">Medicare Discharge Planning Checklist</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11136-pharmacies-formularies-coverage-rules6.1.19.pdf"
                                       target="_blank" class="resource-link">Medicare Drug Plan Pharmacies &amp; Formularies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11382-Electronic-Prescribing.pdf" target="_blank"
                                       class="resource-link">Medicare Electronic Prescribing</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11036-Enrolling-Medicare-Part-A-Part-B.pdf" target="_blank"
                                       class="resource-link">Medicare Enrolling in Part A &amp; Part B</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Enrolling-in-Part-B-and-Still-Working.pdf" target="_blank"
                                       class="resource-link">Medicare Enrolling in Part B and Still Working</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Coverage ESRD 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare ESRD Coverage</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11215-no-longer-automatically-qualify-extra-he 11.18.pdf"
                                       target="_blank" class="resource-link">Medicare Extra Help If You No Longer Qualify</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11324-if-you-get-extra-help.pdf" target="_blank"
                                       class="resource-link">Medicare Extra Help Paying the Right Amount</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11445-4-programs-that-can-help-you-pay-your 12.18.pdf"
                                       target="_blank" class="resource-link">Medicare Four Programs that help pay you Medicare Expenses</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Fighting-Fraud.pdf" target="_blank"
                                       class="resource-link">Medicare Four Rs for Fighting Fraud</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11417-4-ways-lower-prescription-costs 12.18.pdf" target="_blank"
                                       class="resource-link">Medicare Four Ways to Help Lower Your Drug Costs</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Get Your Questions Answered 7.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Get Your Questions Answered</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Getting a Second Opinion Before Surgery.pdf"
                                       target="_blank" class="resource-link">Medicare Getting a Second Opinion Before Surgery</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Getting Medical Care in a Disaster or Emergency Area.pdf"
                                       target="_blank" class="resource-link">Medicare Getting Help in a Disaster or Emergency Area</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10126-Getting-Help-With-Your-Medicare-Costs.pdf" target="_blank"
                                       class="resource-link">Medicare Getting Help with Medicare Costs</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Dialysis Kidney Transplant.pdf" target="_blank"
                                       class="resource-link">Medicare Getting Started with Dialysis &amp; Kidney Transplant</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11361-Medicare-Hospice-Getting-Started 3.18.pdf" target="_blank"
                                       class="resource-link">Medicare Getting Started with Hospice</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11358-Medicare-Mental-Health-Getting-Started 3.16.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare Getting Started with Mental Health</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Guide to Choosing a Hospital.pdf" target="_blank"
                                       class="resource-link">Medicare Guide to Choosing a Hospital</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/nursing-home-other-long-term-services.pdf" target="_blank"
                                       class="resource-link">Medicare Guide to Choosing a Nursing Home</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Guide to Diagbetes Supplies and Services.pdf"
                                       target="_blank" class="resource-link">Medicare Guide to Diabetes Supplies and Services</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11461-Medicares-DMEPOS-Program.pdf" target="_blank"
                                       class="resource-link">Medicare Guide to Durable Medical Equipment &amp; Supplies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Durable Medical Equipment Bidding 10.2018.pdf"
                                       target="_blank" class="resource-link">Medicare Guide to Durable Medical Equipment Bidding</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Hospice Getting Started.pdf" target="_blank"
                                       class="resource-link">Medicare Guide to Hospice Getting Started</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Guide-to-Medical-Savings-Account-Plans.pdf"
                                       target="_blank" class="resource-link">Medicare Guide to Medical Savings Account Plans</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11109-Your-Guide-to-Medicare-Prescrip-Drug 6.18.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare Guide to Prescription Drugs</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Help-Prevent-Fraud.pdf" target="_blank"
                                       class="resource-link">Medicare Help Prevent Fraud</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Home-Health-Benefit.pdf" target="_blank"
                                       class="resource-link">Medicare Home Health Benefit</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10969-Medicare-and-Home-Health-Care.pdf" target="_blank"
                                       class="resource-link">Medicare Home Health Care</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/02154-medicare-hospice-benefits 2.1.19.pdf" target="_blank"
                                       class="resource-link">Medicare Hospice Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Hospital-Benefits getting started 3.16.pdf"
                                       target="_blank" class="resource-link">Medicare Hospital Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Hospital-Discharge-Planning-Checklist.pdf"
                                       target="_blank" class="resource-link">Medicare Hospital Discharge Planning Checklist</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-How-Advantage-Plans-Use-Pharmacies-1.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare How Advantage Plans Use Pharmacies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11469-income-affects-drug-premiums 6.18.pdf" target="_blank"
                                       class="resource-link">Medicare How Income Affects Drug Premiums</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11173-Medicare-Beneficiary-Ombudsman.pdf" target="_blank"
                                       class="resource-link">Medicare How Ombudsman Works for You</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-How-to-Join-a-Prescription-Drug-Plan.pdf"
                                       target="_blank" class="resource-link">Medicare How to Join a Prescription Drug Plan</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10128-Medicare-Coverage-ESRD.pdf" target="_blank"
                                       class="resource-link">Medicare Kidney Dialysis &amp; Kidney Transplant</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Kidney-Disease1.pdf" target="_blank"
                                       class="resource-link">Medicare Kidney Disease Education</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11871-Welcome-to-Medicare-Living-Abroad.pdf" target="_blank"
                                       class="resource-link">Medicare Living Abroad</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11347-Long-Term-Care-Hospitals.pdf" target="_blank"
                                       class="resource-link">Medicare Long Term Care Hospitals</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Mail-Order-for-Diabetic-Testing-Supplies.pdf"
                                       target="_blank" class="resource-link">Medicare Mail-Order for Diabetic Testing Supplies</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11575-Medigap-Getting-Started Supplemental INsurance 4.17.pdf"
                                       target="_blank" class="resource-link">Medicare Medigap Getting Stared Supplemental Insurance</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10184-Medicare-Mental-Health-Bene.pdf" target="_blank"
                                       class="resource-link">Medicare Mental Health Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/02118-Part B-Outpatient-Services.pdf" target="_blank"
                                       class="resource-link">Medicare Outpatient Services</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Quick Facts About All-Inclusive Care (PACE).pdf"
                                       target="_blank" class="resource-link">Medicare PACE Program</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Part C and Part D Enrollment Periods 10.2018.pdf"
                                       target="_blank" class="resource-link">Medicare Part C &amp; Part D Enrollment Periods</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Patient-Request-Form-for-Medical-Payment.pdf"
                                       target="_blank" class="resource-link">Medicare Patient Request Form for Medical Payment</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Premium-Notice-Payment-Due.pdf" target="_blank"
                                       class="resource-link">Medicare Premium Notice Payment Due</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Prescription-Drug-Coverage-with-MA 5.18.pdf" target="_blank"
                                       class="resource-link">Medicare Prescription Drug Coverage with MAPD</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Guide to Prescription Drug Coverage 6.2018.pdf"
                                       target="_blank" class="resource-link">Medicare Prescription Drug Guide</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Preventive Services-Card 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Preventive Services Chart</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Preventive Services 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Preventive Services Guide</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Preventive Services Questions 9.2018.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare Preventive Services Questions</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Preventative Services Staying Healthy.pdf"
                                       target="_blank" class="resource-link">Medicare Preventive Services Staying Healthy</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Prior Authorization Power Wheelchairs 9.2018.pdf"
                                       target="_blank" class="resource-link">Medicare Prior Authorization for Power Wheelchairs</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Protect Yourself From Fraud Committed by Dishonest Suppliers.pdf"
                                       target="_blank" class="resource-link">Medicare Protect Yourself from Dishonest Suppliers</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Protecting-Your-Personal-Information-1.pdf"
                                       target="_blank" class="resource-link">Medicare Protecting Your Personal Information</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Protecting-Yourself-from-Fraud.pdf" target="_blank"
                                       class="resource-link">Medicare Protecting Yourself From Fraud</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11534-Medicare-Rights-and-Protections.pdf" target="_blank"
                                       class="resource-link">Medicare Rights &amp; Protections</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-return-to-the-community 3.1.19.pdf" target="_blank"
                                       class="resource-link">Medicare Rights When Returning to the Community</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Skilled-Nursing-Benefits1.pdf" target="_blank"
                                       class="resource-link">Medicare Skilled Nursing Benefits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Skilled Nursing Facility Care.pdf" target="_blank"
                                       class="resource-link">Medicare Skilled Nursing Facililty Care</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11441-speaking-with-doctor-during-office 1.1.19.pdf"
                                       target="_blank"
                                       class="resource-link">Medicare Speaking with a Friend's Doctor</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Staying Healthy 9.2018.pdf" target="_blank"
                                       class="resource-link">Medicare Staying Healthy</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-Supplement-Insurance-Getting-Started.pdf"
                                       target="_blank" class="resource-link">Medicare Supplement Insurance Getting Started</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Helping provide financial security Medicare Supplement Insurance.pdf"
                                       target="_blank" class="resource-link">Medicare Supplemental Insurance</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/10988-medicare-limits-therapy-services 12.1.18.pdf"
                                       target="_blank" class="resource-link">Medicare Therapy Service Limits</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11941-Understanding-Your-Medicare-Advantage-Pl.pdf"
                                       target="_blank" class="resource-link">Medicare Understanding A MAPD Provider Network</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare-What-it-Covers-What-You-Pay.pdf" target="_blank"
                                       class="resource-link">Medicare What it Covers &amp; What You Pay</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11046-Medicare-Wheelchair-Scooter.pdf" target="_blank"
                                       class="resource-link">Medicare Wheelchair &amp; Scooter Benefit</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Medicare Who Pays First.pdf" target="_blank"
                                       class="resource-link">Medicare Who Pays First</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/11400-Withholding-Medicare-Drug-Premium.pdf" target="_blank"
                                       class="resource-link">Medicare Witholding Plan Premiums from Soc Sec</a></a>
                                    <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>

                        <accordion-component title="Additional Links for Your Information"
                                             sub-title="View Additional Links" class="my-4 box-blue-shadow">

                            <div class="w-full flex flex-wrap font-semibold">

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.agingcare.com" target="_blank"
                                       class="resource-link">Aging Care</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.benefitsapplication.com/" target="_blank" class="resource-link">Benefits Application.com (by state)</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.benefitscheckup.org/" target="_blank" class="resource-link">Benefits Check Up</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.blinkhealth.com" target="_blank" class="resource-link">Blink Health Rx Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.care.com/" target="_blank" class="resource-link">Care.com</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.cms.gov/" target="_blank" class="resource-link">CMS.gov</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://health.gov/" target="_blank" class="resource-link">Health.gov</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.healthcarebluebook.com/" target="_blank" class="resource-link">Healthcare Bluebook</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.healthcare.gov/" target="_blank" class="resource-link">Healthcare.gov</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.lillycares.com" target="_blank" class="resource-link">Lilly Patient Rx Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.medicaremadeclear.com/" target="_blank" class="resource-link">Medicare Made Clear</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.medicarerights.org/" target="_blank" class="resource-link">Medicare Rights Center</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.medicare.gov/" target="_blank" class="resource-link">Medicare.gov</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://medlineplus.gov/" target="_blank" class="resource-link">Medline Plus</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.needymeds.org" target="_blank" class="resource-link">Needy Meds Rx Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.prescriptionassistance123.com" target="_blank"
                                       class="resource-link">Prescription Assistance Program 123</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://qlinkwireless.com/" target="_blank" class="resource-link">QLink Wireless Government Phone</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.rxassist.org" target="_blank"
                                       class="resource-link">Rx Assist</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://rxoutreach.org" target="_blank" class="resource-link">Rx Outreach Prescription Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.safelinkwireless.com" target="_blank" class="resource-link">SafeLink Wireless for Low Income</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.sanofipatientconnection.com" target="_blank"
                                       class="resource-link">Sanofi Lantus Rx Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.ssa.gov/" target="_blank" class="resource-link">Social Security.gov</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="http://www.tevacares.org" target="_blank" class="resource-link">Teva Cares Rx Assistance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="https://www.tuck.com/" target="_blank" class="resource-link">Tuck: Advancing Better Sleep - Everything you need to know.</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>

                        <accordion-component title="Financial Security" sub-title="View Financial Security"
                                             class="my-4 box-blue-shadow">
                            <div class="w-full flex flex-wrap font-semibold">
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Benefits of Financial Planning.pdf" target="_blank"
                                       class="resource-link">Benefits of Financial Planning</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Cancer Insurance.pdf" target="_blank" class="resource-link">Cancer Insurance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/College-Funding.pdf" target="_blank" class="resource-link">College Funding</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Cost-of-Waiting.pdf" target="_blank" class="resource-link">Cost of Waiting</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/07-157-1-11-08-Final-Wishes-Guide.pdf" target="_blank"
                                       class="resource-link">Final Wishes Guide</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Helping-Provide-Finacial-Security-Medicare-Supplement.pdf"
                                       target="_blank" class="resource-link">Helping Provide Financial Security Medicare Supplement</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Helping-Provide-Peace-of-Mind-Final-Expense.pdf" target="_blank"
                                       class="resource-link">Helping Provide Peace of Mind Final Expense</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Home-Care-Protection.pdf" target="_blank" class="resource-link">Home Care Protection</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Hospital-Indemity-Plans.pdf" target="_blank"
                                       class="resource-link">Hospital Indemity Plans</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Income-and-Growth-with-Annuities.pdf" target="_blank"
                                       class="resource-link">Income and Growth with Annuities</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Leave-My-Grandchildren-an-Everlasting-Legacy.pdf"
                                       target="_blank" class="resource-link">Leave My Grandchildren an Everlasting Legacy</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Long-Term-Care-HealthCare.pdf" target="_blank"
                                       class="resource-link">Long-Term Care HealthCare</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Making Financial Plans After a Diagnoisis of Dementia.pdf"
                                       target="_blank" class="resource-link">Making Financial Plans After a Diagnosis of Dementia</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Pre-Planning-guide-for-Final-Arrangements.pdf" target="_blank"
                                       class="resource-link">Pre-Planning guide for Final Arrangements</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/The-Risks-of-Cancer.pdf" target="_blank" class="resource-link">The Risks of Cancer</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Using Life Insurance to Help Pay for College.pdf"
                                       target="_blank" class="resource-link">Using Life Insurance to Help Pay for College</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/What-Insurance-Coverage-is-Right-for-You.pdf" target="_blank"
                                       class="resource-link">What Insurance Coverage is Right for You?</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/What-Type-of-Life-Insurance.pdf" target="_blank"
                                       class="resource-link">What Type of Life Insurance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/What-You-Need-to-Know-About-Long-Term-Care-Insurance.pdf"
                                       target="_blank" class="resource-link">What You Need to Know About Long Term Care Insurance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Whole-Life-Final-Expense-Presentation.pdf" target="_blank"
                                       class="resource-link">Whole Life-Final Expense Presentation</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Childrens-Whole-Life-Insurance.pdf" target="_blank"
                                       class="resource-link">Why Children's &amp; Grandchildren's Insurance</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>

                        <accordion-component title="Community Resources & Services Available"
                                             sub-title="View Community Resources" class="my-4 box-blue-shadow">
                            <div class="w-full flex flex-wrap font-semibold">

                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Cleaning-Services-for-Woman-with-Cancer.pdf" target="_blank"
                                       class="resource-link">Cleaning Services for Women with Cancer</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Dementia Directive.pdf" target="_blank" class="resource-link">Dementia Directive</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Donated-Dental-Service-for-Low-Income.pdf" target="_blank"
                                       class="resource-link">Donated Dental Service for Low-Income</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Pillpack-Pharmacy.pdf" target="_blank" class="resource-link">Pillpack Pharmacy</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/AgingCare.com Questions to Ask a Home Care Company.pdf"
                                       target="_blank" class="resource-link">Questions to Ask a Home Care Company</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/SafeLink Wireless for Low Income.pdf" target="_blank"
                                       class="resource-link">Safelink Wireless for Low Income </a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/Seniors-Must-Ask-for-Discount-.pdf" target="_blank"
                                       class="resource-link">Seniors Must Ask for A Discount ✤</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                                <span class="w-full lg:w-1/2 py-3">
                                    <a href="/resources/When to Call, Text or Not Use 911 Emergency Service.pdf"
                                       target="_blank" class="resource-link">When to Call, Text or Not Use 911 Emergency Service</a>
                                    <arrow-icon></arrow-icon>
                                </span>
                            </div>
                        </accordion-component>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
