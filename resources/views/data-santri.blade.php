<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <label for="my-modal-4">Tambah via Excell</label>
                </button>
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <a href="/dashboard/data-santri/input-data/">Input Data Manual</a>
                </button>
                <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <a href="/dashboard/data-santri">Tampikan Semua</a>
                </button>

                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white"
                    type="button">Colom <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox"
                    class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownCheckboxButton">
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" id="checkbox-item-1" type="checkbox" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-1"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-2" type="checkbox"
                                    value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-2"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. KK</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-3" type="checkbox"
                                    value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-3"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. NIK</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-4" type="checkbox"
                                    value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-4"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. NISN</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-5" type="checkbox"
                                    value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-5"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kelamin</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-6" type="checkbox"
                                    value="6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-6"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                                    Lahir</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-7" type="checkbox"
                                    value="7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-7"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                    Lahir</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" id="checkbox-item-8" type="checkbox" value="8"
                                    checked
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-8"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" id="checkbox-item-9" type="checkbox" value="9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-9"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ayah</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-10" type="checkbox"
                                    value="10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-10"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ibu</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-11" type="checkbox"
                                    value="11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-11"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hp Ayah</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-12" type="checkbox"
                                    value="12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-12"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hp Ibu</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-13" type="checkbox"
                                    value="13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-13"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kelas
                                    Diniyah</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-14" type="checkbox"
                                    value="14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-14"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kelas
                                    Formal</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-15" type="checkbox"
                                    value="15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-15"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kamar</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" checked id="checkbox-item-16" type="checkbox"
                                    value="16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-16"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun
                                    Daftar</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input onchange="togle(this)" id="checkbox-item-17" type="checkbox" value="17"
                                    checked
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-17"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </h2>
    </x-slot>

    <x-alert />
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <div class="">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="border-b border-gray-200 prose">
                        <h2 class="font-Lato">Tambah Via Excell</h2>


                        <form method="POST" action="{{ route('add-from-excel') }}" enctype="multipart/form-data">

                            @csrf


                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="file_input">Upload file</label>
                            <input aria-describedby="file_input_help" id="file_input" type="file" name="sheet">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Upload File
                                Excell
                            </p>


                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                        </form>

                    </div>
                </div>
            </div>

        </label>
    </label>







    <form method="get" action=""
        class="flex gap-2 flex-col md:flex-row block p-6 m-3 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        @csrf
        <input name="data" type="text" class="hidden" id="data-array">
        <button type="submit" name="submit" type="submit" formaction="/dashboard/data-santri/mass/delete"
            class="btn btn-error text-white">Delete</button>

        <button id="dropdownDefault" data-dropdown-toggle="titipUang" class="btn btn-primary text-white"
            type="button">Penitipan Uang<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div id="titipUang"
            class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 block hidden"
            data-popper-reference-hidden="true" data-popper-escaped="" data-popper-placement="bottom"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(316.25px, 70px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                @foreach ($money_dep as $item)
                    <li>
                        <button type="submit" formaction="/dashboard/penitipan-uang/{{ $item->slug }}/insert"
                            class="block w-full text-left py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item->nama_penyimpanan }}
                        </button>
                    </li>
                @endforeach


            </ul>
        </div>

    </form>

    {{-- Data --}}



    <div class="p-2" id="">
        <div
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div id="data-filter"
                class="flex md:justify-between flex-col md:flex-row text-center justify-center gap-2 p-2">

            </div>
            <div class="overflow-x-auto w-full">
                <table id="yajra" class="gap-3 w-full">

                    <thead class="text-xs text-gray-700 uppercase ">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                No
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama
                            </th>
                            <th scope="col" class="py-3 px-6">
                                No. KK
                            </th>
                            <th scope="col" class="py-3 px-6">
                                No. NIK
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NISN
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Kelamin
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TEMPAT LAHIR
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TANGGAL LAHIR
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ALAMAT
                            </th>
                            <th scope="col" class="py-3 px-6">
                                AYAH
                            </th>
                            <th scope="col" class="py-3 px-6">
                                IBU
                            </th>
                            <th scope="col" class="py-3 px-6">
                                HP AYAH
                            </th>
                            <th scope="col" class="py-3 px-6">
                                HP IBU
                            </th>
                            <th scope="col" class="py-3 px-6">
                                KELAS DINIYAH
                            </th>
                            <th scope="col" class="py-3 px-6">
                                KELAS FORMAL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                KAMAR
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TAHUN DAFTAR
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NIS
                            </th>
                            <th scope="col" class="py-3 px-6">
                                STATUS
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit/Hapus</span>

                            </th>
                        </tr>
                    </thead>
                    <tbody class="">

                    </tbody>
                </table>
            </div>
            <div id="data-paginate" class="flex md:flex-row flex-col gap-3 md:justify-between justify-center p-2">
            </div>
        </div>
    </div>









    <x-slot name="script">
        <script src="{{ asset('js/datatable.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var selected = [];

                function getData(me) {
                    let id = $(me).attr('data-id');
                    let name = $(me).attr('data-name');

                    $('#namePlace').html(name);
                    $('#deleteBtn').attr('href', '/dashboard/data-santri/delete/' + id);
                }
                window.getData = getData;

                var table = $('#yajra').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('user.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'nama',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'no_kk',
                            name: 'no_kk'
                        },
                        {
                            data: 'no_nik',
                            name: 'no_nik'
                        },
                        {
                            data: 'nisn',
                            name: 'nisn'
                        },
                        {
                            data: 'kelamin',
                            name: 'kelamin'
                        },
                        {
                            data: 'tptlahir',
                            name: 'tptlahir'
                        },
                        {
                            data: 'tgllahir',
                            name: 'tgllahir'
                        },
                        {
                            data: 'alamat',
                            name: 'alamat'
                        },
                        {
                            data: 'ayah',
                            name: 'ayah'
                        },
                        {
                            data: 'ibu',
                            name: 'ibu'
                        },
                        {
                            data: 'hp_ayah',
                            name: 'hp_ayah'
                        },
                        {
                            data: 'hp_ibu',
                            name: 'hp_ibu'
                        },
                        {
                            data: 'kls_diniyah',
                            name: 'kls_diniyah'
                        },
                        {
                            data: 'kls_formal',
                            name: 'kls_formal'
                        },
                        {
                            data: 'kamar',
                            name: 'kamar'
                        },
                        {
                            data: 'tahun_daftar',
                            name: 'tahun_daftar'
                        },
                        {
                            data: 'nis',
                            name: 'nis'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                    drawCallback: function() {

                        $('#yajra_paginate').appendTo('#data-paginate');
                        $('#yajra_info').appendTo('#data-paginate');

                    },
                    rowCallback: function(row, data) {
                        if ($.inArray(data.id, selected) !== -1) {
                            $(row).addClass('selected');
                        }
                    }


                });

                function togle(me) {
                    var num = $(me).val();
                    if (table.column(num).visible() === true) {
                        table.column(num).visible(false);
                    } else {
                        table.column(num).visible(true);
                    }

                }

                window.togle = togle;
                var data = [2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 17];

                $.each(data, function(index, value) {
                    table.column(value).visible(false);
                });

                table.column(0).visible(true);
                $("#yajra > tbody").on('click', 'tr', function() {
                    var id = table.row(this).data().id;
                    var index = $.inArray(id, selected);

                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).toggleClass('terpilih');
                    $('#data-array').val(selected);
                });
                $('#yajra_length').appendTo('#data-filter');
                $('#yajra_filter').appendTo('#data-filter');

            });
        </script>

    </x-slot>


    </x-s>
