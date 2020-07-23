@extends('layouts.secondary', [
    'title' => 'Nondiscrimintation Notice',
])

@section('content')
    @include('partials.minihero', [
        'minihero_title' => 'Nondiscrimintation Notice',
        'minihero_desc' => 'The plans we represent do not discriminate on the basis of race, color, national origin, age, disability,
        or sex. To learn more about a plan’s nondiscrimination policy, please select the applicable insurance carrier below. ',
        'image_bg' => 'about/about_header.jpg',
    ])

    <section class="container md:w-4/5 mx-auto flex flex-wrap text-base text-center px-3 md:px-0 lg:text-left">
        <div class="w-full py-16">
            <div class="w-full mx-auto flex justify-center flex-wrap text-base">
                <div class="flex flex-col w-full md:w-1/2">
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/aetna-nds-2020.pdf" class="text-custom-blue py-2">Aetna Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/anthemflorida-nds-2020.pdf" class="text-custom-blue py-2">Anthem Florida Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/anthem-nds-2020.pdf" class="text-custom-blue py-2">Anthem Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/careplus-nds-2020.pdf" class="text-custom-blue py-2">Careplus Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/cignahealthspringaz-nds-2020.pdf" class="text-custom-blue py-2">Cigna Health Spring AZ Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/cignahealthspring-nds-2020.pdf" class="text-custom-blue py-2">Cigna Health Spring Nondiscrimination</a>
                </div>
                <div class="flex flex-col w-full md:w-1/2">
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/humana-nds-2020.pdf" class="text-custom-blue py-2">Humana Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/silverscript-nds-2020.pdf" class="text-custom-blue py-2">Silverscript Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/uhc-nds.pdf" class="text-custom-blue py-2">UHC Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/wellcare-nds-2020.pdf" class="text-custom-blue py-2">Wellcare Nondiscrimination</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/its_important_we_treat_you_fairly_en.pdf" class="text-custom-blue py-2">Simply Healthcare Nondiscrimination (English)</a>
                    <a target="_blank" href="/pdfs/nondiscrimination-notices/its_important_we_treat_you_fairly_sp.pdf" class="text-custom-blue py-2">Simply Healthcare Nondiscrimination (Spanish)</a>
                </div>
            </div>
        </div>
    </section>
    @include('partials.ready-to-see')

@endsection