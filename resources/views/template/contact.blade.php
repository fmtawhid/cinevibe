@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class=" text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Contact</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Contact</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#FFFFFF]">
        <div class=" max-w-screen-xl mx-auto px-4 md:py-20 py-10 grid lg:grid-cols-5 grid-cols-1 gap-5">
            <div class="col-span-3">
                <h2 class="text-[45px] font-bold">Get In Touch</h2>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                        <input type="text" name="name" placeholder="Name"
                            class="border p-3 w-full outline-none focus:border-black bg-[#F7F7F7]" required />
                        <input type="email" name="email" placeholder="Email"
                            class="border p-3 w-full outline-none focus:border-black bg-[#F7F7F7]" required />
                    </div>
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                        <input type="tel" name="phone" placeholder="Phone"
                            class="border p-3 w-full outline-none focus:border-black bg-[#F7F7F7]" required />
                        <input type="text" name="subject" placeholder="Subject"
                            class="border p-3 w-full outline-none focus:border-black bg-[#F7F7F7]" required />
                    </div>
                    <textarea name="message" placeholder="Message" rows="6"
                        class="border p-3 w-full outline-none focus:border-black resize-none bg-[#F7F7F7]" required></textarea>
                    <button type="submit" class="bg-black text-white px-6 py-3 hover:bg-gray-800 transition">
                        Send Message
                    </button>
                </form>

            </div>
            <div class="col-span-2">
                <h2 class="text-[45px] font-bold">Know More</h2>
                <div class="space-y-6 text-gray-700">
                    <div class="flex items-start">
                        <span class="mr-4">
                            <svg class="fill-[#C1AB65] h-5 w-5" viewBox="0 0 512 512">
                                <path
                                    d="M256 0c17.7 0 32 14.3 32 32l0 10.4c93.7 13.9 167.7 88 181.6 181.6l10.4 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-10.4 0c-13.9 93.7-88 167.7-181.6 181.6l0 10.4c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-10.4C130.3 455.7 56.3 381.7 42.4 288L32 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l10.4 0C56.3 130.3 130.3 56.3 224 42.4L224 32c0-17.7 14.3-32 32-32zM107.4 288c12.5 58.3 58.4 104.1 116.6 116.6l0-20.6c0-17.7 14.3-32 32-32s32 14.3 32 32l0 20.6c58.3-12.5 104.1-58.4 116.6-116.6L384 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l20.6 0C392.1 165.7 346.3 119.9 288 107.4l0 20.6c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-20.6C165.7 119.9 119.9 165.7 107.4 224l20.6 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-20.6 0zM256 224a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-bold">Address:</p>
                            <p class="text-sm">Mohanagar Project
                                Road 3, Block D, House 34
                                1st Floor (Flat 202)
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="mr-4">
                            <svg class="fill-[#C1AB65] h-5 w-5" viewBox="0 0 512 512">
                                <path
                                    d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-bold">Phone:</p>
                            <p class="text-sm">+880 1792095788</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="mr-4">
                            <svg class="fill-[#C1AB65] h-5 w-5" viewBox="0 0 512 512">
                                <path
                                    d="M64 208.1L256 65.9 448 208.1l0 47.4L289.5 373c-9.7 7.2-21.4 11-33.5 11s-23.8-3.9-33.5-11L64 255.5l0-47.4zM256 0c-12.1 0-23.8 3.9-33.5 11L25.9 156.7C9.6 168.8 0 187.8 0 208.1L0 448c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-239.9c0-20.3-9.6-39.4-25.9-51.4L289.5 11C279.8 3.9 268.1 0 256 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-bold">Email:</p>
                            <p class="text-sm">info@cinevibemedia.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="mr-4">
                            <svg class="fill-[#C1AB65] h-5 w-5" viewBox="0 0 512 512">
                                <path
                                    d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z" />
                            </svg>
                        </span>
                        <div class="flex flex-col gap-2">
                            <p class="font-bold">Support:</p>
                            <div class="flex space-x-3">
                                <a class="bg-[#C1AB65] hover:bg-black p-2 rounded-full transition-all duration-300"
                                    href="#"><svg class="h-4 w-4 fill-white" viewBox="0 0 320 512">
                                        <path
                                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                    </svg></a>
                                <a class="bg-[#C1AB65] hover:bg-black p-2 rounded-full transition-all duration-300"
                                    href="#"><svg class="h-4 w-4 fill-white" viewBox="0 0 512 512">
                                        <path
                                            d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                                    </svg></a>
                                <a class="bg-[#C1AB65] hover:bg-black p-2 rounded-full transition-all duration-300"
                                    href="#"><svg class="h-4 w-4 fill-white" viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg></a>
                                <a class="bg-[#C1AB65] hover:bg-black p-2 rounded-full transition-all duration-300"
                                    href="#"><svg class="h-4 w-4 fill-white" viewBox="0 0 576 512">
                                        <path
                                            d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1824.916536814323!2d90.36458245581598!3d23.824534190540376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1751516063054!5m2!1sen!2sbd"
            class="w-full h-80" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
