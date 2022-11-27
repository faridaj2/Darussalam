<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="px-10 md:px-20 mt-10">
        <x-alert />
        <form  class="w-full" method="POST" action="store">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">


                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="nama_pembayaran">
                            Nama Pembayaran
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="nama_pembayaran"
                            class=" bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('nama_pembayaran') border-red-900 @enderror"
                            id="nama_pembayaran" type="text" placeholder="SPP-2022/2023">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="bulan_awal_pembayaran">
                            Bulan Pembayaran Awal
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="bulan_awal_pembayaran"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('bulan_awal_pembayaran') border-red-900 @enderror"
                            id="bulan_awal_pembayaran" type="month" placeholder="Masukkan Bulan">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="bulan_akhir_pembayaran">
                            Bulan Pembayaran Akhir
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="bulan_akhir_pembayaran"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('bulan_akhir_pembayaran') border-red-900 @enderror"
                            id="bulan_akhir_pembayaran" type="month" placeholder="Masukkan Bulan">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="nilai_default">
                            Nilail Default Perbulan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="nilai_default"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('nilai_default') border-red-900 @enderror"
                            id="nilai_default" type="text" placeholder="Nilai default">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="status">
                            Status
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="status"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('status') border-red-900 @enderror"
                            id="status">
                            <option value="active">Aktif</option>
                            <option value="nonactive">Non Aktif</option>

                        </select>
                    </div>
                </div>


            </div>
            <div class="md:ml-52">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Tambah
                    </button>
                </div>
            </div>
        </form>





    </div>
    <x-slot name="script">

    </x-slot>
</x-app-layout>
