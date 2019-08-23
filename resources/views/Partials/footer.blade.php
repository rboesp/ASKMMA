<section class="footer py-16">
    <div class="container mx-auto">
        <div class="flex flex-row flex-wrap">
            <div class="flex flex-col mx-auto w-3/4 lg:w-1/3 pb-8">
                <img class="w-3/4 lg:w-4/6 mx-auto" src="images/Left.png">
                <div class="flex flex-row">
                    <div class="flex-col flex w-1/2">
                        <div class="flex flex-row justify-center mt-6 lg:mt-6 lg:pl-6 mx-auto lg:mx-0 w-full">
                            <div class="flex flex-col w-1/12 justify-center">
                                <img class="w-full" src="/images/Facebook.png" />
                            </div>

                            <div class="flex flex-col justify-start">
                                <p class="pl-2 text-mmalightblue">Facebook</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col flex w-1/2">
                        <div class="flex flex-row justify-center mt-6 lg:mt-6 mx-auto lg:mx-0 w-full">
                            <div class="flex flex-col w-1/12 justify-center">
                                <img class="w-full" src="/images/Twitter.png" />
                            </div>

                            <div class="flex flex-col justify-start">
                                <p class="pl-2 text-mmalightblue">Twitter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full lg:w-1/3 pb-8 mx-auto">
                <div class="flex flex-row flex-wrap justify-between text-left font-bold">
                    <a href="/planfinder" class="w-1/2 lg:w-1/3 py-2">Plan Finder</a>
                    <a href="/services" class="w-1/2 lg:w-1/3 py-2">Services</a>
                    <a href="/contact" class="w-1/2 lg:w-1/3 py-2">Contact</a>
                    <a href="/products" class="w-1/2 lg:w-1/3 py-2">Products</a>
                    <a href="/feedback" class="w-1/2 lg:w-1/3 py-2">Feedback</a>
                    <a href="/resources" class="w-1/2 lg:w-1/3 py-2">Resources</a>
                    <a href="/about" class="w-1/2 lg:w-1/3 py-2">About MMA</a>
                    <a href="/careers" class="w-1/2 lg:w-1/3 py-2">Careers</a>
                    <a href="/communityoutreach" class="w-1/2 lg:w-1/3 py-2">Outreach</a>
                </div>
            </div>

            <div class="flex flex-col w-full lg:w-1/3 px-8">
                <p class=" text-gray-700  text-center lg:text-left">
                    Join our newsletter to stay up to date on features and releases
                </p>

                <form
                    class="w-full mx-auto max-w-sm pt-6"
                    method="POST"
                    action="https://medicaremedicaidadvisors.activehosted.com/proc.php"
                >
                    <input type="hidden" name="u" value="3" />
                    <input type="hidden" name="f" value="3" />
                    <input type="hidden" name="s" />
                    <input type="hidden" name="c" value="0" />
                    <input type="hidden" name="m" value="0" />
                    <input type="hidden" name="act" value="sub" />
                    <input type="hidden" name="v" value="2" />
                    <div class="flex items-center border-b border-b-2 border-teal-500 py-2 bg-white pl-2 pr-4">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            name="email"
                            type="email"
                            placeholder="Enter Your Email Address"
                            aria-label="Email Address"
                            required
                        />
                        <button class="flex-shrink-0 text-lg font-strong text-mmablue hover:text-blue" type="submit">
                            >
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
