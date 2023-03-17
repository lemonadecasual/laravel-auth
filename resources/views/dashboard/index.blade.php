<x-dashboard>
    <main class="px-6 py-10 bg-[#fafafb]">
        <content class="flex flex-row gap-8 w-[1280px] mx-auto">
            <nav class="flex flex-col gap-10 basis-1/4">
                <header>
                    <subject class="font-semibold">Filter</subject>
                </header>
                @for ($i = 0; $i < 3; $i++)
                    <widgect class="flex flex-col gap-4">
                        <header class="flex items-center gap-4">
                            <subject class="font-semibold">Employee Type</subject>
                            <arrow class="text-xs ml-auto text-[#92929D]"><i class="fa-regular fa-chevron-down"></i>
                            </arrow>
                        </header>
                        <content class="flex flex-col gap-2 justify-center ">
                            <item class="flex flex-row gap-2 items-center">
                                <input type="checkbox" name="employee_type"
                                    class="w-4 h-4 accent-success rounded-sm border-[#B5B5BE]">
                                <label class="text-sm text-[#44444F]">Full Time</label>
                                <badge
                                    class="ml-auto bg-[#F1F1F5] text-[10px] rounded w-6 text-[#696974] h-6 items-center justify-center flex">
                                    32</badge>
                            </item>
                            <item class="flex flex-row gap-2 items-center">
                                <input type="checkbox" name="employee_type"
                                    class="w-4 h-4 accent-success rounded-sm border-[#B5B5BE]">
                                <label class="text-sm text-[#44444F]">Full Time</label>
                                <badge
                                    class="ml-auto bg-[#F1F1F5] text-[10px] rounded w-6 text-[#696974] h-6 items-center justify-center flex">
                                    32</badge>
                            </item>
                            <item class="flex flex-row gap-2 items-center">
                                <input type="checkbox" name="employee_type"
                                    class="w-4 h-4 accent-success rounded-sm border-[#B5B5BE]">
                                <label class="text-sm text-[#44444F]">Full Time</label>
                                <badge
                                    class="ml-auto bg-[#F1F1F5] text-[10px] rounded w-6 text-[#696974] h-6 items-center justify-center flex">
                                    32</badge>
                            </item>
                        </content>
                    </widgect>
                @endfor
            </nav>
            <jobs class="flex flex-col gap-10   basis-3/4">
                <header class="flex items-center justify-between ">
                    <subject class="text-2xl font-semibold">
                        Showing 125 Jobs
                    </subject>
                    <action>
                        <sort>
                            <label class="text-[#92929D]">Sort by :</label>
                            <select class="border-none">
                                <option value="new">Newest Post</option>
                            </select>
                        </sort>
                    </action>
                </header>
                <content class="w-full grid grid-cols-3  gap-6 flex-wrap">
                    @for ($i = 0; $i < 12; $i++)
                        <widgect class="flex flex-col gap-4 bg-white p-4 rounded-[10px]">
                            <header class="flex flex-row items-start justify-between">
                                <logo>
                                    <img src="{{ asset('/assets/img/corporation/logo.png') }}"
                                        class="w-16 h-16 rounded-[10px]">
                                </logo>
                                <action class="text-[#B5B5BE]">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </action>
                            </header>
                            <subject>
                                <text class="font-semibold">Lead Product Design</text>
                            </subject>
                            <info>
                                <text class="text-sm text-[#696974]">
                                    You will be responsible for the Visual design for multi-device. Understand basic
                                    design,
                                    User Journey, Ideation and Wireframing etc…
                                </text>
                            </info>
                            <people class="flex flex-row items-center gap-2">
                                <images class="flex flex-row">
                                    <person>
                                        <img src="http://placeimg.com/640/480/people" class="w-6 h-6 rounded-full">
                                    </person>
                                    <person class="-ml-2">
                                        <img src="http://placeimg.com/640/480/city" class="w-6 h-6  rounded-full">
                                    </person>
                                    <person class="-ml-2">
                                        <img src="http://placeimg.com/640/480/people" class="w-6 h-6  rounded-full">
                                    </person>
                                </images>
                                <counter class="text-xs text-[#92929D]">
                                    +5 People Work here
                                </counter>
                            </people>
                            <footer>
                                <actions class="flex flex-row gap-4 w-full">
                                    <button
                                        class="bg-primary text-xs font-semibold text-white rounded-[10px] h-[38px] flex-1 ">More
                                        detail</button>
                                    <button
                                        class="bg-[#F1F1F5] text-xs font-semibold text-[#696974] rounded-[10px] h-[38px] flex-1 ">Favorite</button>
                                </actions>
                            </footer>
                        </widgect>
                    @endfor

                </content>
            </jobs>
        </content>
    </main>
</x-dashboard>
