<x-layout>
    <script>
        if (localStorage.getItem("user_account")) {
            window.location.href = `{{ route('auth-register') }}`;
        }
    </script>
    <main class="relative min-h-screen overflow-hidden">
        <div class="absolute w-full -z-50 h-full pointer-events-none background">
            <div class="absolute right-0 top-0 max-w-[50vw] max-h-screen background__right">
                <img class="block max-w-[50vw] max-h-[100vh]"
                    src="{{ asset('assets/img/auth/auth-background-right.png') }}" />
            </div>
            <div class="absolute bottom-0 left-0 w-[50vw] max-h-screen background__left">
                <img class="block max-w-[50vw] max-h-[100vh]"
                    src="{{ asset('assets/img/auth/auth-background-left.svg') }}" />
            </div>
        </div>
        <aside class="py-16 px-24 max-w-[1512px] mx-auto flex flex-col justify-center h-screen gap-16 3xl:gap-32">
            <header class="mb-auto">
                <div class="header__logo">
                    <img class="h-10 block" src="{{ asset('assets/img/global/logo-dark.svg') }}" />
                </div>
            </header>
            <div class="flex flex-col mb-auto gap-8 3xl:gap-10 content">
                <div class="text-8xl font-extrabold content__title">
                    <span class="text-[#292930] block">Manage your</span>
                    <span id="5956E9" class="block text">Decentral<br />Identity</span>
                </div>
                <div class="text-xl max-w-[30vw] block content__subtitle">
                    Create your Decentral identity and unlock new opportunities in the
                    digital world.
                </div>
                <div class="flex content__buttons">
                    <div class="rounded-[20px] cursor-pointer bg-[#5956E9] text-white gap-2 h-20 w-64 flex items-center justify-center text-lg font-medium content__buttons_primary"
                        id="wallect_connect_button_on_click">
                        <i class="fa-regular fa-wallet"></i>Connect Wallet
                    </div>
                    <div
                        class="rounded-[20px] cursor-pointer text-[#999FAE] hover:text-[#5956E9] gap-2 h-20 w-64 flex items-center justify-center text-lg font-medium content__buttons_primary">
                        <i class="fa-regular fa-circle-play"></i>Getting to know
                    </div>
                </div>
            </div>
        </aside>
    </main>
    @vite(['resources/js/auth/index.js'])
    <script>
        const connected = (user) => {
            if (localStorage.getItem("user_account")) {
                window.location.href = `{{ route('auth-register') }}`;
            } else {
                if (user.hasOwnProperty("account")) {
                    localStorage.setItem("user_account", user.account);
                }
            }
        };
    </script>
</x-layout>
