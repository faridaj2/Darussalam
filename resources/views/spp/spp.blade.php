<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="px-20">

        <div class="card mt-2">
            {{-- make spp --}}
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">
                            <i class="fas fa-file-invoice-dollar"></i>
                            SPP
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <a href="{{ route('spp.create') }}" class="text-white shadow-lg btn btn-primary">
                                <i class="fas fa-plus"> </i> 
                                Tambah SPP
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <x-slot name="script">

        </x-slot>
</x-app-layout>
