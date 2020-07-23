<nav id="header"
     class="flex items-center justify-between flex-wrap shadow px-2 md:py-4 bg-white fixed w-full top-0 z-50">
    <div class="flex items-center justify-between w-full lg:w-1/3 py-3">
        <div id="nav-toggle" class="block lg:hidden flex justify-start flex-col w-1/4">
            <button class="flex items-center px-3 py-2 rounded text-black border-teal-400 hover:text-mmablue hover:border-white">
                <svg class="fill-current w-6 h-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="flex justify-center lg:justify-start text-white lg:mr-6 lg:pl-8 lg:mx-0 w-full mx-auto w-3/4">
            <a href="/" class="flex w-full sm:w-2/3">
                <img class="h-12 md:h-16" src="images/MMA_logo.png" />
            </a>
        </div>
    </div>
    <div id="nav-content"
         class="w-full block flex-grow lg:flex lg:items-end justify-end lg:w-2/3 pr-8 hidden font-semibold mb-4 md:mb-0">
        <div class="text-sm">
            <a href="/products"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                Products
            </a>
            <a href="/resource"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                Resources
            </a>
            <a href="/about"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                About

            </a>
            <a href="/services" class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue">
                Services
            </a>
            <a href="/community-outreach"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue">
                Outreach
            </a>
            <a href="/careers"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                Careers
            </a>
            <a href="/contact"
               class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                Contact
            </a>
            @if (auth()->check())
                <user-dropdown>
                    <template slot="username">
                        Hi, {{ ucfirst(auth()->user()->name) }}
                    </template>

                    <div class="font-normal px-4 py-2">
                        Signed in as <span class="font-semibold">{{ auth()->user()->email }}</span>
                    </div>

                    @if(auth()->check() && auth()->user()->isAdmin())
                        <a href="/dashboard"
                            class="block pl-4 border-t py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                            Admin Dashboard
                        </a>
                    @endif

                    @if(! empty($thirdPartyLinks = auth()->user()->getUserThirdPartyLink()))
                        @foreach($thirdPartyLinks as $link)
                            <a href="/redirect?client_id={{$link->id}}&redirect_uri={{$link->redirect}}&response_type=code&scope="
                               class="block pl-4 border-t py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                            >
                                {{ $link->name }}
                            </a>
                        @endforeach
                        <a href="/logout"
                           class="block pl-4 border-t py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                            Logout
                        </a>
                    @endif
                </user-dropdown>
            @else
                <a href="/login"
                   class="block mt-4 mx-3 text-base lg:inline-block lg:mt-0 text-black hover:text-mmablue mr-4">
                    Login
                </a>
            @endif
        </div>
    </div>
</nav>
