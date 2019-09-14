<section id="contactcta" class="readytosee py-16">
    <div class="container mx-auto">
        <div class="flex flex-row justify-around flex-wrap">
            <div class="flex flex-col w-full lg:w-2/5 lg:pl-0 px-8  justify-center">
                <p class="text-3xl lg:text-4xl font-bold text-white leading-tight text-center lg:text-left">
                    Ready to See What
                    <br class="hidden lg:inline">
                    We Can Do For You?
                </p>
                <p class="text-white pt-6 text-center lg:text-left">
                    We are uniquely qualified to offer some of the best insurance products on the market, and we are
                    constantly searching for ways to improve the services we offer. From Health Insurance to Life
                    Insurance, Hospital Indemnity Plans to Medicare Supplements and Medicare Advantage Plans, we work
                    with our clients to identify their needs and find the plans that will work best for them.
                </p>
            </div>

            <div class="flex flex-col w-full lg:w-2/5 flex-wrap pt-0 lg:pt-6 lg:pt-2 lg:pl-8 ">
                <form
                    method="POST"
                    action="https://medicaremedicaidadvisors.activehosted.com/proc.php"
                    class="flex flex-row flex-wrap w-full pt-6 lg:pt-2"
                >
                    <input type="hidden" name="u" value="5" />
                    <input type="hidden" name="f" value="5" />
                    <input type="hidden" name="s" />
                    <input type="hidden" name="c" value="0" />
                    <input type="hidden" name="m" value="0" />
                    <input type="hidden" name="act" value="sub" />
                    <input type="hidden" name="v" value="2" />

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="firstname"
                            type="text"
                            placeholder="First Name*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="lastname"
                            type="text"
                            placeholder="Last Name*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="email"
                            type="email"
                            placeholder="Email*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="field[6]"
                            type="text"
                            placeholder="Zip Code*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <select name="field[1]" required class="w-full bg-gray-100 appearance-none border-2 border-gray-100 py-2 px-4 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            <option value="" disabled selected class="text-gray-400">Interested In*</option>
                            <option value="Learn More About Plans" class="text-gray-700">Learn More About Medicare Plans</option>
                            <option value="Learn More About Products" class="text-gray-700">Learn More About Insurance Products</option>
                            <option value="Get Contracted" class="text-gray-700">Agents Get Contracted</option>
                        </select>
                    </div>

                    <div class="flex items-center px-4 mb-2 lg:px-0 mt-2">
                        <label class="w-full block text-white ">
                            <input
                                class="mr-2 leading-tight"
                                type="checkbox"
                                name="field[4][]"
                                value="I would like to receive the Newsletter"
                            />
                            <span class="text-sm">
                                Subscribe to the newsletter!
                            </span>
                        </label>
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <p class="text-xs text-white">
                            I understand that by completing this form I am giving permission for a licensed agent to contact me about our health plan options, services, and/or educational information related to health care.
                            I understand I am not required to provide this consent as a condition of purchase and that my consent can be revoked at any time.
                        </p>
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <button
                            type="submit"
                            class="bg-mmared hover:bg-white text-white hover:text-mmalightblue font-bold text-base py-3 px-4 rounded-lg w-full"
                        >
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
