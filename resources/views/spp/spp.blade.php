<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="flex justify-between p-8">
        <div class="text-lg hidden sm:block">Pembayaran</div>
        <a href="{{ route('spp.create') }}" class="btn btn-sm btn-info"><i class="fa-light fa-money-check-dollar-pen"></i> Buat
            Pembayaran</a>
    </div>

    {{-- List Nama Pembayaran Spp --}}
    <div class="w-full px-2 grid md:grid-cols-2 lg:grid-cols-3 gap-2">
        @foreach ($nama_spp as $spp)
            <div class="w-full @if ($spp->status == 'active') bg-white @else bg-gray-100 @endif  shadow-xl rounded-lg">
                <div class="flex justify-between p-5">
                    <div>
                        <h2 class="card-title font-Lato">{{ $spp->nama_pembayaran }}</h2>
                        <p class="text-xs">Dari Bulan {{ $spp->bulan_awal }} sampai {{ $spp->bulan_akhir }}</p>
                    </div>
                    <div class="">
                        <div class="dropdown dropdown-top dropdown-end">
                            <label tabindex="0" class="btn btn-sm btn-primary rounded-full text-white m-1">Detail</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-white rounded-box w-52">
                              <li><a href="/dashboard/spp-kos/detail-spp">Detail</a></li>
                              <li><a>Item 2</a></li>
                            </ul>
                          </div>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

    <x-slot name="script">

    </x-slot>
</x-app-layout>
