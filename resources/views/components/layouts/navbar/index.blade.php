<nav id="navbar">
    <div class="max-w-[85rem] w-full mx-auto px-4 lg:px-16 lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
            <a class="flex-none font-bold text-primary text-3xl" href="/#">Turu API</a>
            <div class="lg:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2 inline-flex justify-between items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50"
                    data-hs-collapse="#navbar-collapse-with-animation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="navbar-collapse-with-animation"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 px-4 lg:block">
            <div
                class="flex flex-col gap-5 mt-5 text-sm md:text-base lg:flex-row lg:items-center lg:justify-start lg:mt-0 lg:ps-5 text-secondary">
                <x-layouts.navbar.nav-link id="nav-link" href="/#home">Home</x-layouts.navbar.nav-link>
                <x-layouts.navbar.nav-link id="nav-link" href="/#about">About</x-layouts.navbar.nav-link>
                <x-layouts.navbar.nav-link id="nav-link" href="/#features">Features</x-layouts.navbar.nav-link>
                <x-layouts.navbar.nav-link id="nav-link" href="/#projects">Projects</x-layouts.navbar.nav-link>
                <x-layouts.navbar.nav-link id="nav-link" href="/#price-list">Price list</x-layouts.navbar.nav-link>
                <x-layouts.navbar.nav-link id="nav-link" href="/#contact">Contact</x-layouts.navbar.nav-link>

                <div class="border-t border-secondary/50 lg:border-none pt-8 mt-4 lg:mt-0 lg:pt-0 lg:ml-8">
                    <a href="/login"
                        class="text-sm flex text-white font-semibold justify-center items-center py-2 lg:px-8 bg-primary rounded-lg hover:bg-hover duration-300">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
