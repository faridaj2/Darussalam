<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div>
                <span>Masukan Kategori</span>
                <br>
                <form method="post" action="/dashboard/penitipan-uang/tambah-kategori">
                    @csrf
                    <label for="price" class="block text-sm font-medium text-gray-700"></label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                        </div>
                        <input type="text" name="kategori" id="price"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <label for="currency" class="sr-only">Currency</label>
                            <input type="submit" value="Tambah" id="currency"
                                class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-slate-300 text-gray-500 sm:text-sm rounded-md cursor-pointer">

                            </input>
                        </div>
                    </div>
                </form>
            </div>


        </h2>
    </x-slot>

    <div class="p-2 flex flex-col md:flex-row gap-3">

        @foreach ($kategori as $k)
            <a href="/dashboard/penitipan-uang/{{ $k->slug }}" data-name="{{ $k->nama_penyimpanan }}" slug="{{ $k->slug }}"
                class="touch block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                {{ $k->nama_penyimpanan }}
            </a>
        @endforeach



    </div>








    <x-slot name="script">

        <script src="http://rawgit.com/ngryman/jquery.finger/v0.1.2/dist/jquery.finger.js"></script>
        <script src="{{ asset('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('.touch').on('press', function(e) {
                    var name = $(this).attr('data-name');
                    var slug = $(this).attr('slug');
                    if (window.confirm(
                            'Apakah Anda ingin menghapus Kategori '+name)) {
                        window.location.href = '/dashboard/penitipan-uang/'+slug+'/hapus';
                    };
                    // alert(this, e);
                    // this.prevetDefault();
                });


            });
        </script>
    </x-slot>


</x-app-layout>
