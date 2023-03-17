<x-layout>
    <main class="relative min-h-screen overflow-hidden">

        <background__left class="h-screen min-w-[50vw] pointer-events-none -z-50 absolute left-0 top-0 max-h-screen"><img
                class="block h-screen pointer-events-none" src="{{ asset('assets/img/auth/register.webp') }}" />
        </background__left>
        <background__right
            class="h-screen
                min-w-[50vw] pointer-events-none -z-50 absolute right-0 top-0 max-h-screen">
            <img class="block h-screen pointer-events-none -z-50 absolute right-0 top-0 max-h-screen"
                src="{{ asset('assets/img/auth/register-right.webp') }}" />
        </background__right>
        <aside class="flex flex-col justify-center items-center absolute right-0 top-0 w-[50vw] h-screen">



            <form class="flex  flex-col gap-4 relative ">
                <error class="rounded hidden w-full absolute -top-56 bg-error text-white p-8">
                    <span class="text-error-text font-semibold">
                        Register Faild :
                    </span>
                    <error_msg>
                    </error_msg>
                </error>

                <form__title class="flex flex-col items-center justify-center gap-2">
                    <form__title__suptitle class="text-[#B5B5BE]">
                        GET STARTED</form__title__suptitle>
                    <form__title__main class="font-semibold text-2xl text-center w-72">
                        Apply for Million Chance to Get Dreams Job</form__title__main>
                </form__title>
                <form__fields class="flex flex-col gap-4 mt-4">
                    <form__fields__row class="grid grid-cols-2 gap-4">
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__icon class="absolute block h-max left-2 top-0 bottom-0 my-auto"><i
                                    class="fa-regular fa-user text-[#92929d]"></i></form__fields__row__col__icon>
                            <form__fields__row__col__input>
                                <input
                                    class="border-[#E2E2EA] w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-10"
                                    name="firstname" placeholder="First name" />
                            </form__fields__row__col__input>
                        </form__fields__row__col>
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__icon class="absolute block h-max left-2 top-0 bottom-0 my-auto"><i
                                    class="fa-regular fa-user text-[#92929d]"></i></form__fields__row__col__icon>
                            <form__fields__row__col__input></form__fields__row__col__input>
                            <input
                                class="border-[#E2E2EA] w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-10"
                                name="lastname" placeholder="Last Name" />
                        </form__fields__row__col>
                    </form__fields__row>
                    <form__fields__row class="grid grid-cols-1 gap-4">
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__icon class="absolute block h-max left-2 top-0 bottom-0 my-auto"><i
                                    class="fa-regular fa-envelope text-[#92929d]"></i>
                            </form__fields__row__col__icon>
                            <form__fields__row__col__input>
                                <input
                                    class="border-[#E2E2EA] w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-10"
                                    name="email" placeholder="Your Email" />
                            </form__fields__row__col__input>
                        </form__fields__row__col>
                    </form__fields__row>
                    <form__fields__row class="grid grid-cols-4 gap-4">
                        <form__fields__row__col class="relative  flex items-center"><span
                                class=" text-[#B5B5BE] flex gap-4 px-2"> <i
                                    class="fa-regular fa-calendar text-[#92929d]"></i>Bitrhday </span>
                        </form__fields__row__col>
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__input>
                                <select name="year"
                                    class="border-[#E2E2EA] bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-10">
                                    <option value="2022">2022</option>
                                </select>
                            </form__fields__row__col__input>
                        </form__fields__row__col>
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__input></form__fields__row__col__input>
                            <select name="month"
                                class="border-[#E2E2EA] bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-0">
                                <option value="January">January</option>
                            </select>
                        </form__fields__row__col>
                        <form__fields__row__col class="relative">
                            <form__fields__row__col__input></form__fields__row__col__input>
                            <select name="day"
                                class="border-[#E2E2EA] bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-0">
                                <option valune="18">18</option>
                            </select>
                        </form__fields__row__col>
                    </form__fields__row>
                    <form__fields__row class="grid grid-cols-4 gap-4">
                        <form__fields__row__col class="relative  flex items-center"><span
                                class=" text-[#B5B5BE] flex gap-4 px-2"> <i
                                    class="fa-regular fa-venus-mars text-[#92929d]"></i>Gendar </span>
                        </form__fields__row__col>

                        <form__fields__row__col class="relative">
                            <label
                                class="flex items-center gap-2 cursor-pointer  w-full justify-center border-b-2 px-4 py-4 border-[#E2E2EA]  "><span
                                     class="block text-sm">Male</span>
                                <form__fields__row__col__input>
                                    <input
                                        class="border-[#E2E2EA]   h-max bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 flex items-center px-0"
                                        type="radio" checked  name="gendar" value="male" />
                                </form__fields__row__col__input>
                            </label>
                        </form__fields__row__col>

                        <form__fields__row__col class="relative">
                            <label
                                class="flex items-center gap-2 cursor-pointer  w-full justify-center border-b-2 px-4 py-4 border-[#E2E2EA]  "><span
                                    class="block text-sm">Female</span>
                                <form__fields__row__col__input>
                                    <input
                                        class="border-[#E2E2EA]   h-max bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 flex items-center px-0"
                                        type="radio"    name="gendar" value="female" />
                                </form__fields__row__col__input>
                            </label>
                        </form__fields__row__col>
                     
                        <form__fields__row__col class="relative">
                            <label
                                class="flex items-center gap-2 cursor-pointer  w-full justify-center border-b-2 px-4 py-4 border-[#E2E2EA]  "><span
                                    class="block text-sm">Other</span>
                                <form__fields__row__col__input>
                                    <input
                                        class="border-[#E2E2EA]   h-max bg-white w-full placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 flex items-center px-0"
                                        type="radio" name="gendar" value="other" />
                                </form__fields__row__col__input>
                            </label>
                        </form__fields__row__col>
                    </form__fields__row>

                    <form__fields__row class="grid grid-cols-4 gap-4  items-center">
                        <form__fields__row__col__input>
                            <div class="px-6 flex items-center text-[#92929d] opacity-80"> Your wallet : </div>
                        </form__fields__row__col__input>
                        <form__fields__row__col__input class="col-span-3">
                            <input name="wallet" readonly id="wallet_address"
                                class="border-[#E2E2EA] w-full  cursor-not-allowed text-gray-400 placeholder:text-[#B5B5BE] border-l-none border-r-none border-t-none border-b-2 h-12 flex items-center px-10"
                                placeholder="Your Email" />
                        </form__fields__row__col__input>
                    </form__fields__row>

                </form__fields>
                <form__button id="submit"
                    class="h-12 mt-12 bg-[#5956E9] cursor-pointer text-white rounded-[10px] flex items-center justify-center w-full">
                    <span class="block text-sm font-semibold">Get Started</span>
                </form__button>
                <form__terms class="mt-4 text-center text-sm w-full block text-[#92929D]">By clicking "Get Started"
                    I
                    agree to Square’s Terms of Service</form__terms>
            </form>
        </aside>
    </main>
    @vite(['resources/js/auth/register.js'])
</x-layout>
