<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div>

            </div>


        </h2>
    </x-slot>

    <div class="md:grid grid-cols-4 gap-2 ">
        <div class="rounded-md card m-2 mt-6 p-5 bg-white rounded-lg border shadow-lg">
            <form method="post" action="/dashboard/penitipan-uang/tambah-kategori">
                @csrf
                <h1 class="font-bold mx-2 w-full">Tambah Kategori</h1>
                <div class="border-b border-gray-200 my-5"></div>
                <input type="text" name="kategori"
                    class="mt-2 mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full"
                    placeholder="Nama Kategori">
                <input type="submit"
                    class="py-2 mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full"
                    name="" id="">
            </form>
        </div>

        <div class="p-2 grid gap-3 col-span-3 w-full md:grid-cols-3 mx-auto mt-2 rounded-md">

            @foreach ($kategori as $k)
                <a href="/dashboard/penitipan-uang/{{ $k->slug }}" data-name="{{ $k->nama_penyimpanan }}"
                    slug="{{ $k->slug }}"
                    class="touch text-sk-600 md:h-20 bg-white rounded-lg border shadow-lg p-3 mt-2 w-full flex items-center">

                    <div class="flex items-center">

                        <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
                            <i class="fad fa-user"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold">{{ $k->nama_penyimpanan }}</h1>
                        </div>

                    </div>
                </a>
            @endforeach




        </div>

    </div>





    {{-- make a web pakeg --}}


    <x-slot name="script">

        <script src="http://rawgit.com/ngryman/jquery.finger/v0.1.2/dist/jquery.finger.js"></script>
        <script src="{{ asset('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('.touch').on('press', function(e) {
                    var name = $(this).attr('data-name');
                    var slug = $(this).attr('slug');
                    if (window.confirm(
                            'Apakah Anda ingin menghapus Kategori ' + name)) {
                        window.location.href = '/dashboard/penitipan-uang/' + slug + '/hapus';
                    };
                    // alert(this, e);
                    // this.prevetDefault();
                });




            });
        </script>
    </x-slot>


</x-app-layout>
//make layout
