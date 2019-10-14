<section class="footer py-16">
    <div class="container mx-auto">
        <div class="flex flex-row flex-wrap justify-between">
            <div class="flex flex-col w-full lg:w-1/3 pb-8">
                <div class="flex flex-row flex-wrap justify-around text-center font-bold">
                    <a href="/services" class="w-1/2 lg:w-1/2 py-2">Services</a>
                    <a href="/contact" class="w-1/2 lg:w-1/2 py-2">Contact</a>
                    <a href="/products" class="w-1/2 lg:w-1/2 py-2">Products</a>
                    <a href="/feedback" class="w-1/2 lg:w-1/2 py-2">Feedback</a>
                    <a href="/resource" class="w-1/2 lg:w-1/2 py-2">Resources</a>
                    <a href="/about" class="w-1/2 lg:w-1/2 py-2">About MMA</a>
                    <a href="/careers" class="w-1/2 lg:w-1/2 py-2">Careers</a>
                    <a href="/community-outreach" class="w-1/2 lg:w-1/2 py-2">Outreach</a>
                </div>
            </div>

            <div class="flex flex-col w-full lg:w-1/3 px-8">
                <p class=" text-gray-700  text-center lg:text-left">
                    Join our newsletter to stay up-to-date on features and releases
                </p>

                <form
                    method="POST"
                    id="newsletterForm"
                    name="newsletterForm"
                    class="w-full mx-auto max-w-sm pt-6"
                >
                    @csrf

                    <input type="hidden" name="u" value="3"/>
                    <input type="hidden" name="f" value="3"/>
                    <input type="hidden" name="s"/>
                    <input type="hidden" name="c" value="0"/>
                    <input type="hidden" name="m" value="0"/>
                    <input type="hidden" name="act" value="sub"/>
                    <input type="hidden" name="v" value="2"/>

                    <div class="flex items-center border-b border-b-2 border-teal-500 py-2 bg-white pl-2 pr-4">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            name="email"
                            type="email"
                            placeholder="Enter Your Email Address"
                            aria-label="Email Address"
                            required
                        />
                        <button id="newsletterSubmitButton" class="flex-shrink-0 text-lg font-strong text-mmablue hover:text-blue" type="submit">
                            <svg width="10" height="10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M.7045 1.7955L1.76517.73483 6.2955 5.26517 1.76517 9.7955.7045 8.73483l3.46967-3.46967z" fill="currentColor" fill-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
