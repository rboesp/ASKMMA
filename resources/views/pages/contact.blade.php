@extends('layouts.secondary')

@section('content')

    <section
        class="minihero h-64 mt-20"
        style="background: url('/images/contact/contact_header.jpg') no-repeat;background-size: cover;"
    >
        <div class="container mx-auto h-full flex flex-col justify-around">
            <div class="flex flex-wrap w-full">
                <div class="flex flex-col justify-center w-4/5 mx-auto lg:mx-0 lg:w-2/5 text-center lg:text-left">
                    <div class="text-4xl lg:text-6xl font-black text-mmablue my-4">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('partials.phonenumcta')

    <section class="services py-16 text-sm lg:text-base">
        <div class="container mx-auto">
            <div class="flex flex-row w-full">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-full leading-none lg:leading-normal text-mmared">
                    Dedicated Customer Service
                </h3>
            </div>
            <p class="w-full mt-4 text-center">
                We are here for you beyond the sale. Call us first if you have any questions or need help.
            </p>
            <div class="w-full flex flex-wrap mt-6 mb-10">
                <span class="w-full"> Phone: <a href="tel:8772797070" class="font-semibold">(877) 279-7070</a></span>
                <span class="w-full"> Email: <a href="mailto:customerservice@askmma.com" class="font-semibold">customerservice@askmma.com</a></span>
                <span class="w-full"> Fax: <span class="font-semibold">(855) 662-0330</span> Tool Free Tax</span>
            </div>

            <div class="flex flex-row w-full">
                <h3 class="text-3xl lg:text-4xl text-center font-black w-full leading-none lg:leading-normal text-mmablue">
                    Our Locations
                </h3>
            </div>
            <div class="flex flex-row flex-wrap w-full justify-around">
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:9136490300">(913) 649-0300</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:3142758200">(314) 275-8200</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:4173501459">(417) 350-1459</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:4058494346">(405) 849-4346</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"><a class="hover:font-semibold" href="tel:8772797070">(877) 279-7070</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:3187161421">(318) 716-1421</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:8772797070">(877) 279-7070</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:2056376330">(205) 637-6330</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"> <a class="hover:font-semibold" href="tel:9047753875">(904) 775-3875</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
                <!--Card-->
                <div class="w-full lg:w-1/3 py-6 px-2">
                    <div class="rounded overflow-hidden box-blue-shadow border border-blue-100 mx-4">
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
                                    <p class="text-sm"><a class="hover:font-semibold" href="tel:8772797070">(877) 279-7070</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card-->
            </div>
        </div>
    </section>
    @include('partials.ready-to-see')
@stop
