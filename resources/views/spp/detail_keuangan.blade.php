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
            <tr>
              <th>1</th>
              <td>Cy Ganderton</td>
              <td>Quality Control Specialist</td>
              <td>Blue</td>
            </tr>
            <!-- row 2 -->
            <tr>
              <th>2</th>
              <td>Hart Hagerty</td>
              <td>Desktop Support Technician</td>
              <td></td>
              <td></td>
              <td>Purple</td>
            </tr>
            <!-- row 3 -->
            <tr>
              <th>3</th>
              <td>Brice Swyre</td>
              <td>Tax Accountant</td>
              <td>Red</td>
            </tr>
          </tbody>
        </table>
      </div>
</x-app-layout>