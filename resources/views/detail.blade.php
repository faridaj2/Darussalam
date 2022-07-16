<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">



        </h2>
    </x-slot>
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="data:image/png;base64,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"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $siswa->nama }}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">
                        @if ($siswa->kelamin == 'P')
                            Santri Putri
                        @else
                            Santri Putra
                        @endif

                    </h3>

                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Tahun Daftar</span>
                            <span class="ml-auto">{{ $siswa->tahun_daftar }}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>

            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">
                            Tentang
                            @if ($siswa->kelamin == 'P')
                                Santri Putri
                            @else
                                Santri Putra
                            @endif

                        </span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nama</div>
                                <div class="px-4 py-2">{{ $siswa->nama }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Ibu</div>
                                <div class="px-4 py-2">{{ $siswa->ibu }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">
                                    @if ($siswa->kelamin == 'P')
                                        Santri Putri
                                    @else
                                        Santri Putra
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Hp Ayah</div>
                                <div class="px-4 py-2">{{ $siswa->hp_ayah }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Alamat</div>
                                <div class="px-4 py-2">{{ $siswa->alamat }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Hp Ibu</div>
                                <div class="px-4 py-2">{{ $siswa->hp_ibu }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Ayah</div>
                                <div class="px-4 py-2">
                                    {{ $siswa->ayah }}
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">NIS</div>
                                <div class="px-4 py-2">
                                    {{ $siswa->nis }}
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Tahun Kelahiran</div>
                                <div class="px-4 py-2">{{ $siswa->tgllahir }}</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>







</x-app-layout>
