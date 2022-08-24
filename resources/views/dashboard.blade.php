<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Okey' }}
        </h2>
    </x-slot>
    <div class="mx-2">

        <div class="py-12 w-full md:max-w-md rounded-md">
            <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
                <div class="card-body flex flex-row">

                    <!-- image -->
                    <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/87f1d34d-2002-4608-b166-a5c6fac0f344/df3fxo9-3c395ae5-0106-4da5-aec6-ac9bfce66a5c.png/v1/fill/w_900,h_507,strp/beatrix_strarlight_skin_mlbb_png_transparan_by_dechunf_df3fxo9-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTA3IiwicGF0aCI6IlwvZlwvODdmMWQzNGQtMjAwMi00NjA4LWIxNjYtYTVjNmZhYzBmMzQ0XC9kZjNmeG85LTNjMzk1YWU1LTAxMDYtNGRhNS1hZWM2LWFjOWJmY2U2NmE1Yy5wbmciLCJ3aWR0aCI6Ijw9OTAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.NV1m3milemLYg-M62zAbFcmQT8M4EKAbZ-tgSjakzqY" alt="img title">
                    </div>
                    <!-- end image -->

                    <!-- info -->
                    <div class="py-2 ml-10">
                        <h1 class="h6">Good Job, Farid Anjali!</h1>
                        <p class="text-white text-xs">Anda sudah Menyelesaikan Website ini</p>

                        <ul class="mt-4">
                            <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Finish
                                Dashboard Design</li>
                            <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Fix Issue #74
                            </li>
                            <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Publish version
                                1.0.6</li>
                        </ul>
                    </div>
                    <!-- end info -->

                </div>
            </div>
        </div>
    </div>
        <x-slot name="script">

        </x-slot>
</x-app-layout>
