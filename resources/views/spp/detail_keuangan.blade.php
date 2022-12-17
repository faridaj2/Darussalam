<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <x-slot name="script">
    </x-slot>

    <div class="flex justify-between py-4 px-3">
        <div>
            <a href="/dashboard/spp/detail-spp/kelola-daftar" class="btn btn-info btn-sm">Kelola Daftar</a>
        </div>
        <div>
          <a href="/dashboard/spp/detail-spp/buat-pembayaran" class="btn btn-info p-2 rounded-lg btn-sm">Buat Pembayaran</a>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-zebra w-full">
          <!-- head -->
          <thead>
            <tr>
                <th>Nama</th>
              @foreach ($tb->bulan_spp as $month)
                  <th>{{ $month->bulan }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($tb->tb_spp_list_student as $item)
              <tr>
                <th>{{ $item->student->nama }}</th>
              </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>
    </x-app-layout>