<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="p-2">



        <div class="bg-white shadow-lg rounded-lg mb-4 p-4 sm:p-6 h-full">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900">Daftar Penitip</h3>
                {{-- <a href="#"
                    class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                    View all
                </a> --}}
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($student as $item)
                        <li data-modal-toggle="modalIni" class="press py-3 sm:py-4 cursor-pointer">
                            <div class="flex items-center space-x-4">
                                <div class="shrink-1 text-lg">
                                    <i class="fad fa-claw-marks"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ $item->student->nama }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                        <a href="/dashboard/deposite/detail/{{ $item->id  }}" onclick="prevent()" class="text-blue-700 underline">Detail</a>
                                        <a href="/dashboard/deposite/{{ $item->id }}/delete" class="text-blue-700 underline">Hapus</a>
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Rp.
                                        <span class="aneh">
                                        @if (count($money = $item->money_re) > 0)
                                            {{ $money->last()->uang_total }}
                                        @else
                                            0
                                        @endif
                                        </span>
                                    </span>

                                </div>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>




        <!-- Main modal -->
        <div id="modalIni" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden bg-white fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
            aria-modal="true" role="dialog">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="max-w-md relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Aksi
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="modalIni">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="flex justify-between mb-3">
                            <button data-modal-toggle="storeMoney"
                                class="text-white flex items-center py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ">
                                <ion-icon name="caret-up-sharp"></ion-icon> Titip Uang
                            </button>
                            <button data-modal-toggle="getMoney"
                                class="flex items-center text-white py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0">
                                <span>
                                    <ion-icon name="caret-down-sharp"></ion-icon> Ambil Uang
                                </span>
                            </button>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="modalIni" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main modal -->
        <form id="getMoney" method="POST" action="/dashboard/money" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden bg-white fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
            aria-modal="true" role="dialog">
            @csrf
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="max-w-md relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Pengambilan Uang
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="getMoney">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="money-place text-center font-bold">

                        </div>
                        <div class="flex ">
                            <input type="number" name="_get" placeholder="Jumlah disimpan"
                                class="st_get input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <input type="hidden" name="_put" value="0"
                                class="st_put hidden" value="0">
                            <input type="hidden" name="_total"
                                class="st_total hidden">
                            <input class="st_id" type="hidden" name="id">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="getMoney" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ambil</button>
                        <button data-modal-toggle="getMoney" type="button"
                            class=" text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Main modal -->
        <form method="POST" action="/dashboard/money" id="storeMoney" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden bg-white fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
            aria-modal="true" role="dialog">
            @csrf
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="max-w-md relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Simpan Uang
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="storeMoney">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <div class="text-center font-bold">
                            Rp.
                            <span class="money-place"></span>

                        </div>
                        <div class="flex ">
                            <input type="number" name="_put" placeholder="Jumlah disimpan"
                                class="st_put input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <input type="hidden" name="_get" value="0"
                                class="st_get hidden">
                            <input type="hidden" name="_total"
                                class="st_total hidden">
                            <input class="st_id" type="hidden" name="id">

                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button data-modal-toggle="storeMoney" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                    </div>
                </div>
            </div>
        </form>



    </div>
    <x-slot name="script">
        <script src="http://rawgit.com/ngryman/jquery.finger/v0.1.2/dist/jquery.finger.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.min.js"></script>
        <script src="{{ asset('simple.money.format.js') }}"></script>
        <script src="{{ asset('jquery.formula.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                let data = {!! $student->toJson() !!};
                $('.press').on('press', function(e) {
                    var index = $(".press").index(this);
                    let ask = confirm('Hapus');
                    console.log(data[index]['id']);
                    if (ask) {
                        window.open("/md_list/"+data[index]['id'], "_self")
                    }

                });
                let uang;
                // `this` is the DOM element that was clicked
                $(".press").click(function() {
                    var index = $(".press").index(this);
                    let array = data[index]['money_re'];

                    if (array.length > 0) {
                        uang = array[array.length - 1]['uang_total'];
                    } else {
                        uang = 0;
                    }
                    $('.money-place').html(uang);
                    $('.money-place').simpleMoneyFormat();

                    $('.st_id').val(data[index]['id']);




                });

                $('.st_put').on('keyup', function() {
                        let input = $(this).val();
                        input = Number(input);


                        $('.money-place').html(uang + input);
                        $('.money-place').simpleMoneyFormat();
                        $('.st_total').val(uang + input);
                });
                $('.st_get').on('keyup', function() {
                        let input = $(this).val();
                        input = Number(input);


                        $('.money-place').html(uang - input);
                        $('.money-place').simpleMoneyFormat();
                        $('.st_total').val(uang - input);
                });

                $('.aneh').each(function(i, obj){

                    $(obj).html(parseInt($(obj).html()));
                });
                $('.aneh').simpleMoneyFormat();

                function prevent(){

                }







            });
        </script>
    </x-slot>
</x-app-layout>
