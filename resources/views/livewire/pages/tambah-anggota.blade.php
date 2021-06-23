<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tambah Anggota
    </h2>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-wrap">
        <div class="p-1 mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="nomorInduk">
                <div>Nomor Induk </div> {!! $err['nomor'] ? '<div class="text-red-500">Nomor Induk Wajib Disisi</div>' : '' !!}
            </label>
            <input wire:model.defer="nomorInduk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nomorInduk" type="text" placeholder="Nomor Induk">
        </div>
        <div class="p-1 mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="nama">
                <div>Nama</div> {!! $err['nama'] ? '<div class="text-red-500">Nama Wajib Disisi</div>' : '' !!}
            </label>
            <input wire:model.defer="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Nama">
        </div>
        <div class="p-1 mb-4 {{ $tahun ? 'w-1/2' : 'w-full' }}">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="kelas">
                <div>Tahun Ajaran</div> {!! $err['tahun'] ? '<div class="text-red-500">Tahun Ajaran Wajib Disisi</div>' : '' !!}
            </label>
            <select wire:model="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Pilih Kelas</option>
                @foreach ($tahunAjaran as $item)
                <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                @endforeach
            </select>
        </div>
        @if ($tahun)    
        <div class="p-1 mb-4 {{ $tahun ? 'w-1/2' : 'w-full' }}">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="kelas">
                <div>Kelas</div> {!! $err['kelas'] ? '<div class="text-red-500">Kelas Wajib Disisi</div>' : '' !!}
            </label>
            <select wire:model="kelas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Pilih Kelas</option>
                @foreach ($collection as $item)
                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="p-1 mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="tanggalLahir">
                <div>Tanggal Lahir</div> {!! $err['lahir'] ? '<div class="text-red-500">Tanggal Lahir Wajib Disisi</div>' : '' !!}
            </label>
            <input wire:model.defer="tglLahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggalLahir" type="date" placeholder="Tanggal Lahir">
        </div>
        <div class="p-1 mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2 flex justify-between" for="jenisKelamin">
                <div>Jenis Kelamin</div> {!! $err['jk'] ? '<div class="text-red-500">Jenis Kelamin Wajib Disisi</div>' : '' !!}
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