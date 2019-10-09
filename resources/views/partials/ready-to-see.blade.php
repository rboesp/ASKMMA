<span id="contactcta"></span>
<section class="ready-to-see py-16">
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
                    id="contactForm"
                    method="POST"
                    class="flex flex-row flex-wrap w-full pt-6 lg:pt-2"
                >

                    @csrf
                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 rounded-sm border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="first_name"
                            type="text"
                            placeholder="First Name*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 rounded-sm border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="last_name"
                            type="text"
                            placeholder="Last Name*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 rounded-sm border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="email"
                            type="email"
                            placeholder="Email*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <input
                            class="bg-gray-100 appearance-none border-2 rounded-sm border-gray-100 w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="zip_code"
                            type="text"
                            placeholder="Zip Code*"
                            required
                        />
                    </div>

                    <div class="flex flex-col w-full px-4 py-2 lg:px-0">
                        <div class="w-full relative bg-gray-100 rounded-sm ">
                        <select id="contact-interest"
                                name="interest" required
                                class="relative z-10 w-full bg-transparent cursor-pointer appearance-none border-2 rounded-sm border-gray-100 py-2 px-4 text-base text-gray-500 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        >
                            <option value="" disabled selected id="disabled-option" class="text-gray-400">Interested In*</option>
                            <option value="Learn More About Plans" class="text-gray-700">Learn More About Medicare Plans</option>
                            <option value="Learn More About Products" class="text-gray-700">Learn More About Insurance Products</option>
                            <option value="Get Contracted" class="text-gray-700">Agents Get Contracted</option>
                        </select>
                        <i id="contact-icon-select" class="fa fa-caret-down absolute right-0 pt-3 pr-4 text-blue-400 cursor-pointer z-0"></i>
                        </div>
                    </div>

                    <div class="flex items-center px-4 mb-2 lg:px-0 mt-2">
                        <label class="w-full block text-white ">
                            <input
                                class="mr-2 leading-tight"
                                type="checkbox"
                                name="receive_newsletter"
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
                            id="contactFormSubmitButton"
                            type="submit"
                            class="bg-mmared hover:bg-white text-white hover:text-mmalightblue font-bold text-base py-3 px-4 rounded-lg w-full"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <span class="fixed bottom-0" style="right: 3%;">
        <a
            href="#contactcta"
            class="py-4 px-4 flex items-center justify-center w-full bg-red-custom rounded-t text-center text-base text-white font-bold font-openSans">
            <span class="mr-2">
                <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="MMA_Landing-Desktop" transform="translate(-1199.000000, -729.000000)" stroke="#FFFFFF" stroke-width="1.5">
                            <g id="click-to-chat" transform="translate(1184.000000, 712.000000)">
                                <g id="chat-icon" transform="translate(16.000000, 18.000000)">
                                    <path d="M14,12 L7,12 L3,15 L3,12 L1,12 C0.447333333,12 0,11.552 0,11 L0,1 C0,0.447333333 0.447333333,0 1,0 L14,0 C14.552,0 15,0.447333333 15,1 L15,11 C15,11.552 14.552,12 14,12 Z" id="Stroke-1"></path>
                                    <path d="M3,4 L12,4" id="Stroke-3"></path>
                                    <path d="M3.5,8 L10.5,8" id="Stroke-5"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span>Talk with an Agent</span>
        </a>
    </span>
</section>