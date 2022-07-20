<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <a href="#ex1" rel="modal:open">Tambah via Excell</a>
                </button>
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <a href="/dashboard/data-santri/input-data/">Input Data Manual</a>
                </button>
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <a href="/dashboard/data-santri">Tampikan Semua</a>
                </button>

            </div>

        </h2>
    </x-slot>

    <div class="py-12 modal" id="ex1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200 prose">
                    <h2>Tambah Via Excell</h2>


                    <form method="POST" action="/dashboard/data-santri/store" enctype="multipart/form-data">

                        @csrf


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            for="file_input">Upload file</label>
                        <input aria-describedby="file_input_help" id="file_input" type="file" name="sheet">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Upload File Excell
                        </p>


                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                    </form>

                </div>
            </div>
        </div>
    </div>



    {{-- Data --}}

    <form class="bg-white rounded-lg p-10" method="GET" action="/dashboard/data-santri/cari">
        <div class="flex px-3">


            <label for="countries" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Select an
                option</label>
            <select name="type"
                class="w-20 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected="nama" value="nama">nama</option>
                <option value="nis">NIS</option>

            </select>

            <div class="relative w-full">
                <input name="text" type="search" id="search-dropdown"
                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                    placeholder="Cari Siswa" required="">
                <button type="submit"
                    class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>


    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Data Siswa/Siswi
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NIS
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Ayah
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        kamar
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit/Hapus</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ ($siswa->currentPage() - 1) * $siswa->perPage() + $loop->iteration }}
                        </td>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/dashboard/data-santri/detail/{{ $data->id }}">{{ $data->nama }}</a>
                        </th>
                        <td class="py-4 px-6">
                            {{ $data->nis }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->ayah }}
                        </td>
                        <td class="py-4 px-6">
                            @if ($data->kelamin == 'P')
                                Santri Putri
                            @else
                                Santri Putra
                            @endif
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->kamar }}
                        </td>
                        <td class="py-4 px-6 text-right">
                            <a href="/dashboard/data-santri/edit/{{ $data->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#m1" onclick="getData(this)" data-id="{{ $data->id }}" data-name="{{ $data->nama }}" rel="modal:open"
                                class="font-medium text-warning-600 dark:text-blue-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="bg-white rounded-lg p-10">
        {{ $siswa->links() }}
    </div>
    <div id="m1" class="modal p-3">
        <h1 class="text-center">Anda yakin akan menghapus?</h1>
        <div id="namePlace" class="text-center font-semibold mb-3 mt-3"></div>
        <div class="flex justify-center">
            <a href="#" rel="modal:close" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</a>
            <a href="/dashboard/data-santri/delete/" id="deleteBtn" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tetap Hapus</a>
        </div>
    </div>

<script>
    function getData(me){
            let id = me.getAttribute('data-id');
            let name = me.getAttribute('data-name');

            document.getElementById('namePlace').innerHTML = name;
            document.getElementById('deleteBtn').setAttribute('href', '/dashboard/data-santri/delete/'+id);
        }
    $(document).ready(function(){
        
    });
</script>


</x-app-layout>
