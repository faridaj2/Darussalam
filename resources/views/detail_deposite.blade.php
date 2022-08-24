<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Okey') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    Nama : <a href="/dashboard/data-santri/detail/{{ $student->student->id }}" class="btn btn-link"> {{ $student->student->nama }}</a>
                </div>
            </div>
        </div>
    </div>


    <div class="lock p-6 mx-3 bg-white rounded-lg border border-gray-200 shadow-md ">
    <div class="overflow-x-auto relative ">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Tanggal
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Uang Masuk
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Uang Keluar
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $student->money_re as $item )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->created_at }}
                    </th>
                    <td class="py-4 px-6">
                       Rp. <span class="money">{{ $item->uang_masuk }}</span>
                    </td>
                    <td class="py-4 px-6">
                       Rp. <span class="money">{{ $item->uang_keluar }}</span>
                    </td>
                    <td class="py-4 px-6">
                       Rp. <span class="money">{{ $item->uang_total }}</span>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    </div>

    <x-slot name="script">
        <script src="{{ asset('simple.money.format.js') }}"></script>
        <script>
            jQuery(function($){
                $('.money').each(function(i, obj){
                    let money = parseInt($(obj).html());
                    $(obj).html(money);
                });
                $('.money').simpleMoneyFormat();
            });
        </script>

    </x-slot>
</x-app-layout>
