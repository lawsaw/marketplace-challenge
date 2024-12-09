<header
    class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none"
>
    <div
        class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11"
    >
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button
                class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                @click.stop="sidebarToggle = !sidebarToggle"
            >
                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                  <span class="du-block absolute right-0 h-full w-full">
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
                        :class="{ '!w-full delay-300': !sidebarToggle }"
                    ></span>
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
                        :class="{ '!w-full delay-400': !sidebarToggle }"
                    ></span>
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
                        :class="{ '!w-full delay-500': !sidebarToggle }"
                    ></span>
                  </span>
                  <span class="du-block absolute right-0 h-full w-full rotate-45">
                    <span
                        class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
                        :class="{ '!h-0 delay-[0]': !sidebarToggle }"
                    ></span>
                    <span
                        class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
                        :class="{ '!h-0 dealy-200': !sidebarToggle }"
                    ></span>
                  </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->
            <div class="flex-shrink-0 lg:hidden">
                <x-logo></x-logo>
            </div>
        </div>

        <div class="flex items-center grow justify-end gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <li>
                    <!-- Dark Mode Toggler -->
                    <label
                        :class="darkMode ? 'bg-primary' : 'bg-stroke'"
                        class="relative m-0 block h-7.5 w-14 rounded-full"
                    >
                        <input
                            type="checkbox"
                            :value="darkMode"
                            @change="darkMode = !darkMode"
                            class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0"
                        />
                        <span
                            :class="darkMode && '!right-1 !translate-x-full'"
                            class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear"
                        >
                          <span class="dark:hidden">
                              @include('icons.dashboard.theme-light')
                          </span>
                          <span class="hidden dark:inline-block">
                              @include('icons.dashboard.theme-dark')
                          </span>
                        </span>
                    </label>
                    <!-- Dark Mode Toggler -->
                </li>
            </ul>

            <!-- User Area -->
            <div
                class="relative"
                x-data="{ dropdownOpen: false }"
                @click.outside="dropdownOpen = false"
            >
                <a
                    class="flex items-center gap-4"
                    href="#"
                    @click.prevent="dropdownOpen = ! dropdownOpen"
                >
                    <span class="hidden text-right lg:block">
                        <span class="block text-sm font-medium text-black dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block text-xs font-medium">admin</span>
                    </span>
                    <span>
                        @include('icons.dashboard.user')
                    </span>
                    <span
                        :class="dropdownOpen && 'rotate-180'"
                        class="hidden fill-current sm:block"
                    >
                        @include('icons.dashboard.chevron')
                    </span>
                </a>

                <!-- Dropdown Start -->
                <div
                    x-show="dropdownOpen"
                    class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <a
                        href="{{ route('logout') }}"
                        class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                    >
                        <span class="fill-current">
                            @include('icons.dashboard.logout')
                        </span>
                        Log Out
                    </a>
                </div>
                <!-- Dropdown End -->
            </div>
            <!-- User Area -->
        </div>
    </div>
</header>
