<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="p-2">
        <div
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
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
