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

    

    <div id="data-filter" class="flex justify-between p-2">

    </div>
    <div class="overflow-x-auto relative">
        <table id="yajra" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

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
            <tbody class="body-table">

            </tbody>
        </table>
    </div>
    <div id="data-paginate" class="flex justify-between p-2"></div>

    <div id="m1" class="modal p-3">
        <h1 class="text-center">Anda yakin akan menghapus?</h1>
        <div id="namePlace" class="text-center font-semibold mb-3 mt-3"></div>
        <div class="flex justify-center">
            <a href="#" rel="modal:close"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</a>
            <a href="/dashboard/data-santri/delete/" id="deleteBtn"
                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tetap
                Hapus</a>
        </div>
    </div>
    



    <x-slot name="script">
        <script src="{{ asset('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                function getData(me) {
                    let id = $(me).attr('data-id');
                    let name = $(me).attr('data-name');

                    $('#namePlace').html(name);
                    $('#deleteBtn').attr('href', '/dashboard/data-santri/delete/' + id);
                }
                window.getData = getData;

                $('#yajra').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('user.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'nis',
                            name: 'nis'
                        },
                        {
                            data: 'ayah',
                            name: 'ayah'
                        },
                        {
                            data: 'kelamin',
                            name: 'kelamin'
                        },
                        {
                            data: 'kamar',
                            name: 'kamar'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                    drawCallback: function(){
                        $('#yajra_length').appendTo('#data-filter');
                        $('#yajra_filter').appendTo('#data-filter');
                        $('#yajra_paginate').appendTo('#data-paginate');
                        $('#yajra_info').appendTo('#data-paginate');
                        $('#yajra_filter > label > input').focus();
                    }


                });

                
            });

            
        </script>
    </x-slot>


</x-app-layout>
