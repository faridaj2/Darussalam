<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ '' }}
        </h2>
    </x-slot>
    <div class="p-10">

        <form method="POST" action="{{ route('edit-data-siswa') }}">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ $siswa->id }}" name="id">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="nama" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->nama }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Santri/Santri Wati</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="kk" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->no_kk }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No KK</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="nik" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->no_nik }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No NIK</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="nisn" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->nisn }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Nisin</label>
            </div>
            <div class="relative z-0 mb-6 full full-group">
                Jenis Kelamin <select name="kelamin" id="" class="bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0">
                    <option value="L" @php echo $siswa->kelamin == 'L'? 'selected': ''@endphp>Laki-Laki</option>
                    <option value="P" @php echo $siswa->kelamin == 'P'? 'selected': ''@endphp>Perempuan</option>
                </select>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="tptlahir" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->tptlahir }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat Lahir</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="date" name="tgllahir" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->tgllahir }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tangg Lahir</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text " name="alamat" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->alamat }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text " name="ayah" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->ayah }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Ayah</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text " name="ibu" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->ibu }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Ibu</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="hpayah" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->hp_ayah }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. HP Ayah</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="hpibu" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->hp_ibu }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. HP Ibu</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                Kelas Diniyah <select name="klsdiniyah" id="" class="bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0">
                    <option value="1 ULA" @php echo $siswa->kls_diniyah   == '1 ULA'? 'selected': ''@endphp>1 ULA</option>
                    <option value="2 ULA" @php echo $siswa->kls_diniyah   == '2 ULA'? 'selected': ''@endphp>2 ULA</option>
                    <option value="3 ULA" @php echo $siswa->kls_diniyah   == '3 ULA'? 'selected': ''@endphp>3 ULA</option>
                    <option value="4 ULA" @php echo $siswa->kls_diniyah   == '4 ULA'? 'selected': ''@endphp>4 ULA</option>
                    <option value="1 WUSTHO" @php echo $siswa->kls_diniyah   == '1 WUSTHO'? 'selected': ''@endphp>1 WUSTHO</option>
                    <option value="2 WUSTHO" @php echo $siswa->kls_diniyah   == '2 WUSTHO'? 'selected': ''@endphp>2 WUSTHO</option>
                    <option value="1 ULYA" @php echo $siswa->kls_diniyah   == '1 ULYA'? 'selected': ''@endphp>1 ULYA</option>
                    <option value="2 ULYA" @php echo $siswa->kls_diniyah   == '2 ULYA'? 'selected': ''@endphp>2 ULYA</option>
                </select>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                Kelas Formal <select name="klsformal" id="" class="bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0">
                    <option value="1 SMP"  @php echo $siswa->kls_formal   == '1 SMP'? 'selected': ''@endphp>1 SMP</option>
                    <option value="2 SMP" @php echo $siswa->kls_formal   == '2 SMP'? 'selected': ''@endphp>2 SMP</option>
                    <option value="3 SMP" @php echo $siswa->kls_formal   == '3 SMP'? 'selected': ''@endphp>3 SMP</option>
                    <option value="1 SMK" @php echo $siswa->kls_formal   == '1 SMK'? 'selected': ''@endphp>1 SMK</option>
                    <option value="2 SMK" @php echo $siswa->kls_formal   == '2 SMK'? 'selected': ''@endphp>2 SMK</option>
                    <option value="3 SMK" @php echo $siswa->kls_formal   == '3 SMK'? 'selected': ''@endphp>3 SMK</option>
                </select>    
            </div>
            <div class="relative z-0 mb-6 w-full group">
                Kamar <select name="kamar" id="" class="bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0">
                    <option value="A. 1" @php echo $siswa->kamar   == 'A. 1'? 'selected': ''@endphp>A. 1</option>
                    <option value="A. 2" @php echo $siswa->kamar   == 'A. 2'? 'selected': ''@endphp>A. 2</option>
                    <option value="PUTRI" @php echo $siswa->kamar   == 'PUTRI'? 'selected': ''@endphp>PUTRI</option>
                    <option value="PENGURUS" @php echo $siswa->kamar   == 'PENGURUS'? 'selected': ''@endphp>PENGURUS</option>
                    <option value="EMBEL" @php echo $siswa->kamar   == 'A. 1'? 'EMBEL': ''@endphp>EMBEL</option>
                   </select>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="date" name="thndaftar" id="floating_email" 
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->tahun_daftar }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tahun Daftar</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="nis" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $siswa->nis }}">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nis</label>
            </div>
            

            
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
    <x-slot name="script">
        Oke gen
    </x-slot>
</x-app-layout>
