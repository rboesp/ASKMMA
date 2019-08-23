@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [
        'minihero_title' => 'Contact Us',
        'minihero_desc' => 'We know Medicare can be tricky and that’s why we are here to help, assist, guide, support, and give advice through your journey.',
        'image_bg' => 'services/index.png',
    ])
    @include('Partials/phonenumcta')
    <section class="services py-16 text-sm lg:text-base">
        <div class="container mx-auto">
            <div class="flex flex-row w-full">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-full leading-none lg:leading-normal text-mmablue">
                    Our Locations</h3>
            </div>
            <div class="flex flex-row flex-wrap w-full justify-around">
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Kansas City Home Office</div>
                            <p class="text-gray-700 text-md">
                                9800 Metcalf Ave Suite 100<br>
                                Overland Park, KS 66212
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (913) 649-0300</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(855) 662-0330 <span class="text-gray-500">Toll Free</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">St. Louis Branch Office</div>
                            <p class="text-gray-700 text-md">
                                1750 S. Brentwood Blvd Suite 511<br>
                                St. Louis, MO 63144
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (314) 275-8200</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(866) 204-6565 <span class="text-gray-500">Toll Free</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Springfield Branch Office</div>
                            <p class="text-gray-700 text-md">
                                2104 E Sunshine St. Suite A<br>
                                Springfield , MO 65804
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (417) 350-1459</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(417) 889-0211 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Oklahoma City Branch Office</div>
                            <p class="text-gray-700 text-md">
                                9636 N. May Suite 270<br>
                                Oklahoma City, OK 73120
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (405) 849-4346</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(855) 662-0330 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Memphis Branch Office</div>
                            <p class="text-gray-700 text-md">
                                1331 Union Ave Ste 926<br>
                                Memphis, TN 38104
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm">New Office</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">New Office</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Shreveport Branch Office</div>
                            <p class="text-gray-700 text-md">
                                6425 Youree Drive Suite 150<br>
                                Shreveport, LA 71105
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (318) 716-1421</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(318) 716-1427 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Baton Rouge Branch Office</div>
                            <p class="text-gray-700 text-md">
                                8550 United Plaza Blvd. Ste 702<br>
                                Baton Rouge, LA 70809
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> New Office</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">New Office</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Birmingham Branch Office</div>
                            <p class="text-gray-700 text-md">
                                300 Cahaba Park Circle Suite 118<br>
                                Birmingham, AL 35242
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (205) 637-6330</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(205) 637-6377 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Jacksonville Branch Office</div>
                            <p class="text-gray-700 text-md">
                                501 Riverside Ave Suite 711<br>
                                Jacksonville, FL 32202
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> (904) 775-3875</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">(904) 253-3396</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
                        <img class="w-full" src="images/location.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-lg text-mmablue mb-2">Sarasota Branch Office</div>
                            <p class="text-gray-700 text-md">
                                6151 Lake Osprey Drive 3rd Floor<br>
                                Sarasota, FL 34240
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/phone.png">
                                </div>
                                <div>
                                    <p class="text-sm"> New Office</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="py-1 pr-2">
                                    <img src="images/answer-machine-paper.png">
                                </div>
                                <div>
                                    <p class="text-sm">New Office</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
            </div>
        </div>
    </section>
    @include('Partials/readytosee')
@stop
	
