<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="flex justify-between p-8">
        <div class="text-lg">Pembayaran</div>
        <a href="{{ route('spp.create') }}" class="btn btn-info"><i class="fa-light fa-money-check-dollar-pen"></i> Buat Pembayaran</a>
    </div>

        {{-- List Nama Pembayaran Spp --}}
        <div class="flex flex-col gap-3 w-full px-2">
            @foreach ($nama_spp as $spp)
                <div class="card w-full @if($spp->status == 'active') bg-stone-100 @else bg-gray-300 @endif  shadow-xl">
                    <div class="card-body ">
                        <h2 class="card-title">{{ $spp->nama_pembayaran }}</h2>
                        <p>Dari Bulan {{ $spp->bulan_awal }} sampai {{ $spp->bulan_akhir }}</p>

                    </div>
                </div>
            @endforeach
        </div>

        <x-slot name="script">

        </x-slot>
</x-app-layout>
