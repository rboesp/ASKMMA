@extends('layouts.secondary')

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Community',
        'minihero_desc' => 'Our work allows us to help people by giving them an affordable way to live their lives with a peace of mind. But selling the right plans to the right people is not the only way we help people.',
        'image_bg' => 'community-outreach/community_header.jpg',
    ])

    <section class="communityoutreach py-16 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-row justify-start flexbox flex-wrap">
                <!-- Left -->
                <div class="flex mx-10 lg:w-11/12 lg:mx-auto">
                    <div>
                        <div class="flex flex-row">
                            <h3 class="text-3xl lg:text-4xl text-center lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">
                                Community Outreach
                            </h3>
                        </div>
                        <div class="flex flex-row mt-6 lg:mt-4 lg:pr-20">
                            <p class="lg:text-base text-sm w-full text-center lg:text-left">
                                Medicare Medicaid Advisors is committed to the communities we serve.We appreciate the
                                opportunity to be involved in community health fairs, events, and food/clothing drives.
                                In addition, we have been fortunate to participate in more personal events that benefit
                                smaller organizations and families. We are also very proud of our own agents who
                                volunteer and donate time in their own communities and churches.
                            </p>
                        </div>
                        <div class="flex mt-6 lg:mt-6 justify-center lg:justify-start">
                            <button class="bg-mmared hover:bg-mmalightblue text-white font-medium p-3 rounded-lg font-semibold tracking-wider">
                                Have a Question?
                            </button>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="/images/community-outreach/comout.png" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Left -->

            <!-- Cards -->
            <div class="flex flex-wrap flex-row pt-32 justify-around">
                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="/images/community-outreach/Harvesters crop.png">
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            ALaShaundra volunteers her help with Harvesters.
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="/images/community-outreach/Merri Teng2.png">
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            Merrie serving with Pastor Marcee at the Wesly House in Pittsburgh, KS.
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 p-8">
                    <div class="overflow-hidden rounded-lg shadow-lg relative">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="/images/community-outreach/Scott.png" />
                        </a>
                        <div class="flex w-full leading-none p-3 absolute bottom-0 card-bg-transparent-black text-white font-medium leading-normal">
                            Scott & Marcus serving their community.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="members py-16 bg-gray-200">
        <div class="container mx-auto">
            <div class="flex flex-row">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-3/4 mx-auto lg:w-full leading-none lg:leading-normal text-mmablue">
                    Community Partners
                </h3>
            </div>
            <div class="flex flex-row flex-wrap justify-around mt-6 w-full mx-auto">
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Food Distribution West/Central</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Appleton City MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Heart of the Hills</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Ava MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Good Samaritan Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Lamar MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Crosslines</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Anderson MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Salvation Army</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Bolivar MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Noel Pharmacy</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Noel MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Mustang Drug Pharmacy</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Anderson MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">First Baptist Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Greenfield MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Helping Hands Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Odessa MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">West Central Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Belton MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">OCAC</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Greenfield MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Housing Authority</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Noel MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Community Service League</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Food Distribution</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Blue Springs MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">United Methodist Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Monett MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">First Presbyterian Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Lexington MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Seventh Day Advent Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Harvester’s Mobile Soup</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Clinton MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Free Store</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Lebanon MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">United Methodist</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Harvester’s Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Lexington MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">West Central Community Services</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Clinton MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Crosslines</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Lebanon MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">St. Clair County Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Osceola MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Church of Christ Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">El Dorado Springs MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Monarch Baptist Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Neosho MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Hometown Pharmacy</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Peculiar MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Community Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Eldon MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">The Help Center</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Neosho MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Fishes &amp; Loaves Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Raymore MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Christian Help Center Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Grove OK</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">The Least of These</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Nixa MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Housing Authority</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Savanah MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Englewood Church Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Independence MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Stone County North</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Crane MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Housing Authority</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Southwest City MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Sheffield Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Keenager’s Function</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Kansas City MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Share The Harvest</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Camdenton MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Sheffield Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Senior Boxes</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Kansas City MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Sheffield Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Mobile Harvester’s Distribution</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Kansas City MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Victory Mission</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Springfield MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Hickory County Cares Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Wheatland MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">S.A.M.A. Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Stockton MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Harvest Church</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Aurora MO</p>
                </div>
                <div class="flex flex-wrap w-full p-2 mx-auto lg:mx-0 lg:w-1/6 items-center mb-10 justify-end">
                    <p class="font-bold mb-2 text-center w-full">Body of Christ Food Pantry</p>
                    <p class="lg:text-md text-sm mx-auto text-center w-full">Wheaton MO</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
