<x-dashboard>
    <main class="bg-[#fafafb] flex py-12">
        @vite(['resources/css/profile/index.scss', 'resources/js/profile/index.js'])

        <content>
            <article>
                <header>
                    <wallpaper>
                        <img src="{{ asset('assets/img/user/wallpaper.jpg') }}" alt="">
                        <action>Edit profile</action>
                    </wallpaper>
                    <profile>
                        <picture>
                            <img src="https://picsum.photos/id/1025/400/400" alt="">
                        </picture>
                        <information>
                            <name> <span class="user_firstname">-</span> <span class="user_lastname">-</span></name>
                            <wallet class="user_wallet">-</wallet>
                        </information>
                    </profile>
                </header>
                <dashboard>
                    <nav>
                        <widgect>
                            <card class="bg-primary">
                                <subject class="text-white border-white">Quick Start</subject>
                                <inside class="text-sm font-medium  text-white  px-6 flex flex-col gap-4 py-4">
                                    Complete your profile :
                                    <steps class="flex flex-col items-start justify-center  gap-4 ">
                                        <item class="flex items-center cursor-pointer">
                                            <div
                                                class="h-6 w-6 flex items-center justify-center rounded-full bg-white text-primary mr-2">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <p class="text-sm font-medium text-white">Write About me</p>
                                        </item>
                                        <item class="flex items-center cursor-pointer">
                                            <div
                                                class="h-6 w-6 flex items-center justify-center rounded-full border-white border text-white mr-2">
                                                2
                                            </div>
                                            <p class="text-sm font-medium text-white">Sign Contact Informatiln</p>
                                        </item>
                                        <item class="flex items-center cursor-pointer">
                                            <div
                                                class="h-6 w-6 flex items-center justify-center rounded-full border-white border text-white mr-2">
                                                3
                                            </div>
                                            <p class="text-sm font-medium text-white">Join Corporation</p>
                                        </item>
                                    </steps>
                                </inside>
                            </card>
                        </widgect>
                        <widgect data-id="invidual_explorer">
                            <card>
                                <subject>Invidual Explorer</subject>
                                <inside>
                                    <qrcode>
                                        <img src="{{ asset('assets/img/placeholder/qrcode.png') }}" alt="">
                                    </qrcode>
                                    <name><span class="user_firstname">-</span> <span class="user_lastname">-</span>
                                    </name>
                                    <address class="user_wallet">-</address>
                                </inside>
                            </card>
                        </widgect>
                        <widgect data-id="contact_me">
                            <card class="!hidden">
                                <subject>Contact Me</subject>
                                <inside>
                                    <motto>“Pushing pixels and experiences in digital products for Sebostudio”</motto>
                                    <list>
                                        <item v-for="i in 5">
                                            <icon><i class="fa fa-user"></i></icon>
                                            <label>Yogyakarta, ID</label>
                                        </item>
                                    </list>
                                </inside>
                            </card>
                        </widgect>
                    </nav>
                    <content class="w-full">
                        <widgect data-id="about_me">
                            <card>
                                <subject>About Me</subject>
                                <inside>
                                    <empty>
                                        <info
                                            class="bg-primary/10 text-primary w-full flex p-3 rounded-[10px] items-center gap-2">
                                            <span class="font-semibold">incomplete : </span> Please provide a brief
                                            description of your position here.
                                            <a class="bg-primary rounded-[10px] min-w-[200px] text-center text-white px-3 py-1 ml-auto"
                                                href="#"> Write About me </a>
                                        </info>
                                    </empty>
                                    <content class="!hidden">
                                        <p>
                                            Mailchimp is a company based on the GitLab open-source project, helping
                                            developers
                                            collaborate on code to build great things and ship on time. We are an active
                                            participant in our global community of customers and contributors, trying to
                                            serve
                                            their needs and lead by example. We have one vision: everyone can contribute
                                            to
                                            all
                                            digital content, and our mission is to change all creative work from
                                            read-only
                                            to
                                            read-write.
                                        </p>
                                        <p>
                                            We value results, transparency, sharing, freedom, efficiency, frugality,
                                            collaboration, directness, kindness, diversity, boring solutions, and
                                            quirkiness.
                                        </p>
                                        <p>
                                            <strong>Specalities</strong>
                                            Internet, Marketing, Digital Influencer, Design, Service, B2B
                                        </p>
                                    </content>
                                </inside>
                            </card>
                        </widgect>
                        <widgect data-id="user_case_categories">
                            <subject>Documents</subject>
                            <empty class="px-6 ">
                                <info class="bg-primary/10 text-primary w-full flex p-3 rounded-[10px] gap-2"> <span
                                        class="font-semibold">incomplete : </span> No document has been registered for
                                    your account yet
                                    <a class="bg-primary rounded-[10px] min-w-[200px] text-center text-white px-3 py-1 ml-auto"
                                        href="#">
                                        Register a document </a>
                                </info>
                            </empty>
                            <content class="!hidden">
                                <category v-for="i in 6">
                                    <card>
                                        <subject>Education Information</subject>
                                        <inside>
                                            <child v-for="i in 3">
                                                <icon><i class="fa fa-user"></i></icon>
                                                <label>Dashboard</label>
                                            </child>
                                        </inside>
                                    </card>
                                </category>
                            </content>
                        </widgect>
                        <widgect data-id="contact-card">
                            <subject>Contact</subject>
                            <empty class="px-6">
                                <info
                                    class="bg-primary/10 text-primary w-full flex p-3 rounded-[10px] items-center gap-2">
                                    <span class="font-semibold">incomplete : </span> Please provide a brief description
                                    of your position here.
                                    <a class="bg-primary rounded-[10px] min-w-[200px] text-center text-white px-3 py-1 ml-auto"
                                        href="#">How to be in touch? </a>
                                </info>
                            </empty>
                            <card class="!hidden">
                                <inside>
                                    <location>
                                        <img src="{{ asset('assets/img/placeholder/map.png') }}">
                                    </location>
                                    <information>
                                        <field>
                                            <label>Email Address</label>
                                            <value>Austinrobertson@gmail.com</value>
                                        </field>
                                        <field>
                                            <label>Bussiness Address</label>
                                            <value>
                                                MBS Residence number 28C, Depok
                                                Sleman, Yogyakarta, Indonesia</value>
                                        </field>
                                        <field>
                                            <label>email</label>
                                            <value>
                                                <phone>
                                                    +62 812 231 731
                                                </phone>
                                                <phone>
                                                    +62 811 984 312
                                                </phone>
                                            </value>
                                        </field>
                                        <field>
                                            <label>Social Accounts</label>
                                            <value>
                                                <icons>
                                                    <item v-for="i in 4">
                                                        <img src="{{ asset('assets/img/global/xd.png') }}">
                                                    </item>
                                                </icons>
                                            </value>
                                        </field>
                                    </information>
                                </inside>
                            </card>
                        </widgect>
                    </content>
                </dashboard>
            </article>
        </content>
        <script src="https://cdn.tiny.cloud/1/zlwo6cehutjq04syi71a7r4nxu722pmgbvfidlrrs66isbqg/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>

    </main>

    <modal_about class="fixed rounded-[10px] p-12 bg-red-200 m-auto z-50 inset-0 w-[80vw] h-[80vh]">
        <subject class="text-2xl semibold">Write about your self</subject>
        <textarea>
            Welcome to TinyMCE!
          </textarea>
    </modal_about>

</x-dashboard>
