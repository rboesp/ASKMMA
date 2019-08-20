@extends('Layouts.secondary')
@section('content')
<section
    class="minihero h-112 mt-20"
    style="background: url('/images/products/about_header.png') no-repeat;background-size: cover;"
>
    <div class="container mx-auto h-full flex flex-col justify-around">
        <div class="w-full flex flex-wrap justify-start">
            <div class="flex flex-wrap flex-row w-4/5 mx-auto lg:mx-0 lg:w-2/5 justify-center lg:justify-start">
                <h1 class="text-4xl lg:text-5xl text-center lg:text-left font-black text-mmablue font-futura leading-tight">
                    Our Products
                </h1>
                <p class="pt-4 lg:text-left">
                    We know that you are familiar with Medicare, but now let's tale a moment to help you be familiar with us
                </p>
            </div>
            <div class="flex flex-wrap justify-between w-3/5">
                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Medicare Advantage</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>
                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Medicare Supplements</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>
                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Hospital Indemity Plans</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>

                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Life Insurance Plans</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>
                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Final Expense Plans</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>
                <div class="w-1/3 text-center my-5">
                    <h2 class="text-lg font-bold">Cancer Idemnity Plans</h2>
                    <a href="#" class="text-gray-700">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="w-full">
    <section class="container mx-auto">
        <h1 class="w-1/3 text-3xl text-center font-black text-mmablue font-futura leading-tight mx-auto my-16">
            Multiple Products Across Many Providers
        </h1>
        <p class="mx-auto w-2/3 text-center text-base">
            Every calendar year Medicare and Medicaid Advisors review existing and new products. We make adjustments
            to our product line so MMA can offer the best value and best benefit plans available. Because insurance
            plans can be somewhat confusing and overwhelming, we recommend easy to understand solutions with options
            and choices. This means we match the right product to the right client.
        </p>
        <div class="w-full">
            <section class="pt-16">
                <div class="container mx-auto">
                    <div class="flex flex-wrap flex-row justify-around lg:flex sm:hidden justify-around">
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/aetna.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/allwell.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/amerigroup.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/anthem.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/blue_medicare.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/bright-idea.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-16">
                <div class="container mx-auto">
                    <div class="flex flex-wrap flex-row justify-around lg:flex sm:hidden justify-around">
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/careplus.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/healthspring.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/cigna.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/global-health.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/gtl.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/health_sun.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-16">
                <div class="container mx-auto">
                    <div class="flex flex-wrap flex-row justify-around lg:flex sm:hidden justify-around">
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/humana.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/molina-healthcare.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/mutualof_omaha.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/simply.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/vantage.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                        <div class="w-1/3 lg:w-1/12 flex justify-center">
                            <img src="/images/logos/wellcare.png" class="self-center mb-16 mx-auto w-1/2 lg:w-full">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="w-full bg-gray-200 mt-16 py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Medicare Advantage
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">
                            What are Medicare Advantage Plans?
                        </h3>
                        <p class="mt-4 text-base">
                            Medicare Advantage is type of Medicare health plan offered by a private company that
                            contracts with Medicare to provide all Part A and Part B benefits. Medicare Advantage
                            Plans include Health Maintenance Organizations, Preferred Provider Organizations, Private
                            Fee-for-Service Plans, Special Needs Plans, and Medicare Medical Savings Account Plans.
                            If you are enrolled in a Medicare Advantage Plan, most Medicare services are covered
                            through that plan, and are not paid for under Original Medicare. Most Medicare Advantage
                            Plans offer prescription drug coverage.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/medad.png" alt="medad" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full">
                    <h3 class="font-extrabold text-lg">
                        How do Medicare Advantage Plans Work?
                    </h3>
                    <p class="mt-4 text-base">
                        Medicare Advantage Plans, sometimes called "Part C" or "MA Plans," are offered by private
                        companies approved by Medicare. If you join a Medicare Advantage Plan, you still have Medicare,
                        however your Medicare Part A (Hospital Insurance) and Medicare Part B (Medical Insurance)
                        coverage come from the Medicare Advantage Plan and not Original Medicare.
                    </p>
                </div>
                <div class="w-full mt-10">
                    <h3 class="font-extrabold text-lg">Covered Services in Medicare Advantage Plans</h3>
                    <p class="mt-4 text-base">
                        Medicare Advantage Plans cover all Medicare services. Most Medicare
                        Advantage Plans also offer extra coverage, such as vision, hearing, and dental coverage.
                    </p>
                </div>
                <div class="w-full mt-10">
                    <h3 class="font-extrabold text-lg">Rules for Medicare Advantage Plans</h3>
                    <p class="mt-4 text-base">
                        Medicare pays a fixed amount for your care each month to the companies
                        offering Medicare Advantage Plans. These companies must follow rules set by Medicare.
                    </p>
                    <p class="mt-4 text-base">
                        Each Medicare Advantage Plan can charge different out-of-pocket costs and can also have
                        different rules for how you get services. These rules can change each year and include:
                    </p>
                    <ul class="mt-4 text-base">
                        <li>Whether you need a referral to see a specialist</li>
                        <li>
                            If doctors, facilities, or suppliers within the plan are required for
                            non-emergency/non-urgent care
                        </li>
                    </ul>
                </div>
                <div class="w-full mt-10">
                    <h3 class="font-extrabold text-lg">What do Medicare Advantage Plans Cost?</h3>
                    <p class="mt-4 text-base">
                        Your out-of-pocket costs in a Medicare Advantage Plan depend on:
                    </p>
                    <ul class="mt-4 text-base list-disc">
                        <li>Monthly premiums charged by the plan</li>
                        <li>Monthly Medicare Part B premium paid by the plan</li>
                        <li>Yearly or additional deductibles</li>
                        <li>Co-payment or co-insurance you are required to pay</li>
                        <li>
                            <ul class="list-disc">
                                <li>The plan may charge a co-payment every time you see a doctor</li>
                                <li>These amounts can be different than those under Original Medicare</li>
                            </ul>
                        </li>
                        <li>The type of health care services you need and how often you get them</li>
                        <li>Whether or not the doctor or supplier accept assignment (if you are in a PPO, PFFS, or
                            MSA
                            plan and you go out-of-network)
                        </li>
                        <li>Do you follow plan rules, such as using network providers?</li>
                        <li>Do you need extra benefits? Does the plan charge for them?</li>
                        <li>Yearly limit on your out-of-pocket costs for all medical services</li>
                        <li>Do you have Medicaid or get help from your state?</li>
                    </ul>
                    <p class="mt-4 text-base">Each year plans establish the amount charged for premiums,
                        deductibles,
                        and services. The plan (rather than Medicare) decides how much you pay for the covered
                        services
                        you get. What you pay the plan may change only once a year, on January 1.</p>
                    <p class="mt-4 text-base">If you're in a Medicare plan, review the "Evidence of Coverage" (EOC)
                        and
                        "Annual Notice of Change" (ANOC) your plan sends out each fall.</p>
                    <ul class="mt-4 text-base list-disc">
                        <li>The EOC gives you details about what the plan covers, how much you pay, and more</li>
                        <li>The ANOC includes any changes in coverage, costs, or service area that will be effective
                            in
                            January
                        </li>
                    </ul>
                </div>
                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Medicare Advantage Plans'
                ])
            </div>
        </div>
    </section>

    <section class="w-full py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Medicare Supplements
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">
                            What's Medicare Supplement Insurance (Medigap)?
                        </h3>
                        <p class="mt-4 text-base">
                            A Medicare Supplement Insurance (Medigap) policy is sold by a private company,
                            and can help pay certain health care costs that Original Medicare does not cover
                            (co-payments, co-insurance, and deductibles).
                        </p>
                        <p class="mt-4 text-base">
                            Some Medigap policies also offer coverage for services not included in Original
                            Medicare, such as medical care when traveling outside the United States. If you
                            have Original Medicare and you buy a Medigap policy, Medicare will pay its share
                            of the Medicare-approved amount for covered health care costs, and your Medigap
                            policy pays its share.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/medsupp.png" alt="medsupp" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full mt-10">
                    <p class="mt-4 text-base">
                        A Medigap policy is different from a Medicare Advantage Plan. Medicare Advantage Plans are
                        ways to get Medicare benefits, while a Medigap policy only supplements your existing
                        Original Medicare benefits.
                    </p>
                </div>

                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Medicare Supplement Plans'
                ])
            </div>
        </div>
    </section>

    <section class="w-full bg-gray-200 py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Hospital Indemnity Plans
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">What is a Hospital Indemnity Plan?</h3>
                        <p class="mt-4 text-base">
                            Hospital indemnity plans provide completely separate benefits from your main medical
                            insurance plan, regardless of the actual cost of the service. When covered medical
                            expenses resulting from hospitalization, surgery, chemotherapy and radiation services
                            build up, your Hospital Indemnity Plan (HIP) will pay a fixed amount. That amount may be
                            per day, per week, per month, per visit or per event, depending on the plan and the
                            benefit that applies. HIP policies are standalone, which means they do not coordinate
                            with your other health insurance coverage.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/hosbed.png" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full">
                    <p class="mt-4 text-base">
                        The options and benefits available to you will vary by plan. Some HIP
                        cover additional services such as ambulance trips, second surgical opinions, and even
                        chemotherapy and radiation. Optional health maintenance and diagnostic testing benefits that
                        pay a fixed amount for preventive care, X-rays, urgent care and other services may also be
                        available with some plans.
                    </p>
                </div>

                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Medicare Supplement Plans'
                ])
            </div>
        </div>
    </section>

    <section class="w-full py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Final Expense Plans
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">
                            What are Final Expense Plans?
                        </h3>
                        <p class="mt-4 text-base">
                            Final expense insurance is a type of life insurance designed to cover the costs of an
                            individual’s “final expenses,” such as funeral services, loans, legacy planning needs,
                            and other outstanding bills.
                        </p>
                        <p class="mt-4 text-base">
                            There are 2 main types of coverage an individual can qualify for
                            based on a short health interview.
                        </p>
                        <p class="mt-4 text-base">
                            Level Benefit: <br>
                            This is the type of coverage that will pay the full life insurance benefit starting
                            immediately upon approval.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/families.png" alt="Family" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full mt-10">
                    <p class="mt-4 text-base">
                        Graded Benefit: <br>
                        "Graded benefit" means there were some concerns with the health interview over pre-existing
                        conditions, and that the life insurance benefit will pay out on a reduced basis the first 2
                        years. For example, if you have a $10,000 final expense policy approved, many companies will
                        pay out 30% of the 10,000 if you die in year one, 70% in year two and 100% in year three.
                        Different companies have different payout schedules, so it’s important to fully understand
                        before making any purchase decisions.
                    </p>
                    <p class="mt-4 text-base">
                        Both types of plans listed above offer up to $25,000 in final expense coverage. Some final
                        expense companies have age restrictions that would reduce the total amount you can apply
                        for. For example, many companies will not allow graded benefits to exceed $15,000 for
                        applicants over the age of 70. So, it’s important to have detailed discussions with your
                        final expense agent or final expense company representative.
                    </p>
                    <p class="mt-4 text-base">
                        The average cost of a final expense policy depending on your age is around $40-$50 per month
                        for roughly $10,000-$12,000 in coverage. Due to the low monthly premiums, some people often
                        refer to final expense as “affordable end-of-life insurance”.
                    </p>
                </div>

                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Life Insurance Plans'
                ])
            </div>
        </div>
    </section>

    <section class="w-full bg-gray-200 py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Life Insurance Plans
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">
                            What are Life Insurance Plans?
                        </h3>
                        <p class="mt-4 text-base">
                            Life insurance is a contract to provide a measure of financial security for your family
                            after you die. The three main components of the life insurance contract are a death
                            benefit, a premium payment and, in the case of permanent life insurance, a cash value
                            account. You pay now so after your death, your dependents can continue with their lives
                            comfortably without the burden of the loss of household income. When purchasing a life
                            insurance policy, consider your financial situation and the standard of living you want
                            to maintain for your dependents or survivors.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/granpa.png" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full">
                    <p class="mt-4 text-base">
                        For example, who will be responsible for your funeral costs and final medical bills? Would
                        your family have to relocate? Will there be adequate funds for future or ongoing expenses
                        such as daycare, mortgage payments and college? It is prudent to re-evaluate your life
                        insurance policies annually or when you experience a major life event like marriage,
                        divorce, the birth or adoption of a child, or purchase of a major item such as a house or
                        business.
                    </p>
                </div>

                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Life Insurance Plans'
                ])
            </div>
        </div>
    </section>

    <section class="w-full py-10">
        <div class="container mx-auto">
            <div class=" w-2/3 mx-auto">
                <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                        <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight pt-16">
                            Cancer Indemnity Plans
                        </h1>
                        <h3 class="mt-4 font-extrabold text-lg">
                            What is Cancer Indemnity Insurance?
                        </h3>
                        <p class="mt-4 text-base">
                            Cancer Insurance is an insurance policy that pays only after cancer is diagnosed. Cancer
                            insurance is supplemental insurance, and most types pay policyholders a lump sum upon
                            diagnosis with a covered cancer, while others offer supplemental payments for healthcare
                            costs.
                        </p>
                        <p class="mt-4 text-base">
                            Lump-Sum Payment:<br>
                            Many cancer insurance policies provide a one-time payment, up to the policy limits, upon
                            cancer diagnosis. Typically, this money can be used for whatever the policyholder
                            chooses, whether for travel expenses (such as for traveling to a specialist or cancer
                            center), co-payments, experimental treatments, or living expenses.
                        </p>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <img src="/images/hosp.png" class="h-auto w-full" />
                    </div>
                </div>
                <div class="w-full mt-10">
                    <p class="mt-4 text-base">
                        Supplemental Payments for Healthcare: <br>
                        These payments follow a schedule listed with the policy, rather than paying in one go. . It
                        does not pay a percent of your bill; it pays a certain dollar amount for each covered
                        category such as radiation treatment, x-rays, surgery, or hospice care. The expenses paid by
                        a cancer insurance policy depend on the terms of the policy, which should be reviewed
                        carefully before purchasing a policy.
                    </p>
                </div>

                @include('Partials/zipsearch', [
                    'zip_search_desc' => 'Enter Your Zip Code to See Your Cancer Indemnity Plans'
                ])
            </div>
        </div>
    </section>
</div>

@include('Partials/readytosee')
@endsection
