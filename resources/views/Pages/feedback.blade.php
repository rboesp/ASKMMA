@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [
        'minihero_title' => 'Feedback',
        'minihero_desc' => 'We strive to be the best at what we do, and that is why we cherish your feedback. That way we can grow better for you.',
        'image_bg' => 'services/index.png',
    ])

    @include('Partials/phonenumcta')

    <section class="feedback py-16">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-2/3 mx-auto justify-between">
                    <div class="flex flex-row">
                        <h3 class="text-3xl lg:text-4xl text-left lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">
                            Feedback Form
                        </h3>
                    </div>
                    <div class="flex flex-row flex-wrap font-openSans">
                        <div class="flex flex-col flex-wrap w-full">
                            <div class="w-full text-base lg:text-xl mt-4 font-extrabold">
                                If you would like to provide feedback or file a complaint, please complete and submit.
                                Please provide a detailed description of your complaint.
                            </div>

                        </div>
                        <p>
                            This is an anonymous platform, therefore we are not able to respond directly to you
                            regarding your concerns or suggestions unless you provide your contact information as part
                            of your message.
                        </p>
                        <form method="POST" action="https://medicaremedicaidadvisors.activehosted.com/proc.php"
                              class="w-full py-6">
                            <input type="hidden" name="u" value="1"/>
                            <input type="hidden" name="f" value="1"/>
                            <input type="hidden" name="s"/>
                            <input type="hidden" name="c" value="0"/>
                            <input type="hidden" name="m" value="0"/>
                            <input type="hidden" name="act" value="sub"/>
                            <input type="hidden" name="v" value="2"/>
                            <div class="flex">
                                <div class="flex flex-wrap relative w-full">
                                    <div class="w-full md:w-1/2 flex relative">
                                        <select
                                                id="feedback"
                                                name="field[5]"
                                                class=" w-full bg-white appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                        >
                                            <option value="General Feedback" selected>General Feedback</option>
                                            <option value="File A Compliant">File A Compliant</option>
                                        </select>
                                        <i class="fa fa-caret-down absolute right-0 pt-3 pr-4 text-blue-400"></i>
                                    </div>
                                    <div class="w-full md:w-1/2 mt-2 md:mt-0 md:pl-2">
                                        <input
                                                class="w-full bg-white appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                                type="email"
                                                name="email"
                                                placeholder="Type your email"
                                                required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-wrap justify-center lg:justify-end">
                                <textarea
                                        rows="10"
                                        name="field[6]"
                                        class="w-full my-2 appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                ></textarea>
                                <button
                                        type="submit"
                                        class="w-4/5 sm:w-3/5 lg:w-2/5 mt-2 self-end bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-3 px-10 rounded-lg"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Partials/readytosee')
@stop
