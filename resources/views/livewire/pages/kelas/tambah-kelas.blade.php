<div>
    <form wire:submit.prevent="tambahTahunAjaran">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/4 p-1">
                <select wire:model.defer="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Pilih Kelas</option>
                    @foreach ($collection as $item)
                    <option value="{{ $item -> id }}">{{ $item -> tahun }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_tahun_pelajaran'))
                <p class="text-red-500">{{ $errors->first('id_tahun_pelajaran') }}</p>
                @endif
            </div>
            <div class="w-full lg:w-2/4 p-1">
                <input wire:model.defer="kelas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nama Kelas">
                @if($errors->has('nama_kelas'))
                <p class="text-red-500">{{ $errors->first('nama_kelas') }}</p>
                @endif
            </div>
            <div class="w-full lg:w-1/4 p-1">
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Tambah Kelas
                </button>
            </div>
        </div>
    </form>
</div>