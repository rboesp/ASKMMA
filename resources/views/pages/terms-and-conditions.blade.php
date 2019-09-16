@extends('layouts.secondary')

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Terms and Conditions',
        'minihero_desc' => 'You can read here our terms and conditions to be part of the Medicare',
        'image_bg' => 'about/about_header.jpg',
    ])

    <section class="container mx-auto flex flex-wrap text-base text-center px-3 md:px-0 lg:text-left">
        <span class="w-full text-right text-xs">Last updated: September 04, 2019</span>

        <div class="w-full">
            <p class="mt-4">
                Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the
                <a href="/" class="underline"> www.askmma.com website</a> (the "Service") operated by Medicare
                Medicaid Advisors ("us", "we", or "our").
            </p>
            <p class="mt-4">Your access to and use of the Service is conditioned upon your acceptance of and compliance
                with these Terms. These Terms apply to all visitors, users and others who wish to access or use the
                Service.</p>
            <p class="mt-4">By accessing or using the Service you agree to be bound by these Terms. If you disagree with
                any part of the terms then you do not have permission to access the Service.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900"> Intellectual Property</h3>
            <p class="mt-4">The Service and its original content, features and functionality are and will remain the
                exclusive property of Medicare Medicaid Advisors and its licensors. The Service is protected by
                copyright, trademark, and other laws of both the United States and foreign countries. Our trademarks and
                trade dress may not be used in connection with any product or service without the prior written consent
                of Medicare Medicaid Advisors.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900"> Links To Other Web Sites</h3>
            <p class="mt-4">Our Service may contain links to third party web sites or services that are not owned or
                controlled by Medicare Medicaid Advisors</p>
            <p class="mt-4">Medicare Medicaid Advisors has no control over, and assumes no responsibility for the
                content, privacy policies, or practices of any third party web sites or services. We do not warrant the
                offerings of any of these entities/individuals or their websites.</p>
            <p class="mt-4">You acknowledge and agree that Medicare Medicaid Advisors shall not be responsible or
                liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in
                connection with use of or reliance on any such content, goods or services available on or through any
                such third party web sites or services.</p>
            <p class="mt-4">We strongly advise you to read the terms and conditions and privacy policies of any third
                party web sites or services that you visit.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Indemnification</h3>
            <p class="mt-4">You agree to defend, indemnify and hold harmless Medicare Medicaid Advisors and its licensee
                and licensors, and their employees, contractors, agents, officers and directors, from and against any
                and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but
                not limited to attorney's fees), resulting from or arising out of a) your use and access of the Service,
                or b) a breach of these Terms.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Limitation Of Liability</h3>
            <p class="mt-4">In no event shall Medicare Medicaid Advisors, nor its directors, employees, partners,
                agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or
                punitive damages, including without limitation, loss of profits, data, use, goodwill, or other
                intangible losses, resulting from (i) your access to or use of or inability to access or use the
                Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from
                the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether
                based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we
                have been informed of the possibility of such damage, and even if a remedy set forth herein is found to
                have failed of its essential purpose.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Disclaimer</h3>
            <p class="mt-4">Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS
                AVAILABLE" basis. The Service is provided without warranties of any kind, whether express or implied,
                including, but not limited to, implied warranties of merchantability, fitness for a particular purpose,
                non-infringement or course of performance.</p>
            <p class="mt-4">Medicare Medicaid Advisors its subsidiaries, affiliates, and its licensors do not warrant
                that a) the Service will function uninterrupted, secure or available at any particular time or location;
                b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful
                components; or d) the results of using the Service will meet your requirements.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Exclusions</h3>
            <p class="mt-4">Some jurisdictions do not allow the exclusion of certain warranties or the exclusion or
                limitation of liability for consequential or incidental damages, so the limitations above may not apply
                to you.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Governing Law</h3>
            <p class="mt-4">These Terms shall be governed and construed in accordance with the laws of Kansas, United
                States, without regard to its conflict of law provisions.</p>
            <p class="mt-4">Our failure to enforce any right or provision of these Terms will not be considered a waiver
                of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the
                remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement
                between us regarding our Service, and supersede and replace any prior agreements we might have had
                between us regarding the Service.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Changes</h3>
            <p class="mt-4">We reserve the right, at our sole discretion, to modify or replace these Terms at any time.
                If a revision is material we will provide at least 60 days notice prior to any new terms taking effect.
                What constitutes a material change will be determined at our sole discretion.</p>
            <p class="mt-4">By continuing to access or use our Service after any revisions become effective, you agree
                to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to
                use the Service.</p>
        </div>

        <div class="w-full mt-8 mb-4">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Contact Us</h3>
            <p class="mt-4">If you have any questions about these Terms, please contact us.</p>
        </div>
    </section>
    <!--
    <the-copywrite></the-copywrite>
    -->
    @include('partials.ready-to-see')

@endsection
