<x-global>
    <dashboard>
        <header>
            <nav>
                <inside class=" flex flex-row border-b border-[#e2e2ea] px-6 justify-between items-center">
                    <a href="{{ route('dashboard-index') }}">
                        <brand class="flex items-center">
                            <logo>
                                <img src="{{ asset('assets/img/global/logo-dark.svg') }}" alt="logo">
                            </logo>
                        </brand>
                    </a>
                    <links class="flex flex-row gap-10 ice">
                        <a href="{{ route('dashboard-index') }}"
                            class="@if (Route::currentRouteName() == 'dashboard-index') border-primary text-primary @else border-transparent @endif border-b-2 py-5  ">
                            <icon><i class="fa-solid fa-table-columns"></i></icon>
                            <text>Dashboard</text>
                        </a>
                    </links>
                    <actions>
                        <a href="{{ route('profile-index') }}">
                            <profile class="flex flex-row gap-2 items-center  ">
                                <avatar>
                                    <img src="https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/140.jpg"
                                        class="rounded-full block w-8 h-8">
                                </avatar>
                                <name class="font-semibold">
                                    Austin Robertson
                                </name>
                                <arrow class="text-gray">
                                    <i class="fa-solid fa-caret-down"></i>
                                </arrow>
                            </profile>
                        </a>
                    </actions>
                </inside>
            </nav>
        </header>
        <content>
            {{ $slot }}
        </content>
    </dashboard>
</x-global>
