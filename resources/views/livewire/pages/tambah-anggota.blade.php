<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tambah Anggota
    </h2>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nomorInduk">
                Nomor Induk
            </label>
            <input wire:model.defer ="nomorInduk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nomorInduk" type="text" placeholder="Nomor Induk">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                Nama
            </label>
            <input wire:model.defer="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Nama">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                Kelas
            </label>
                <select wire:model.defer="kelas" class="form-control">
                    <option value="">Pilih Kelas</option>
                    @foreach ($collection as $item)
                        <option value="{{ $item->nama_kelas }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
            
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggalLahir">
                Tanggal Lahir
            </label>
            <input wire:model.defer="tglLahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggalLahir" type="date" placeholder="Tanggal Lahir">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="jenisKelamin">
                Jenis Kelamin
            </label>
                <select wire:model.defer="jenisKelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            
        </div>
        <div class="flex items-center justify-between">
            <button wire:click="tambahAnggota" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Tambah Anggota
            </button>
        </div>
    </form>
</div>