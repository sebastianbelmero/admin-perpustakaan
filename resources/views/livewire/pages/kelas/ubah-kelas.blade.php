<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Ubah Kelas 
    </h2>
    <form wire:submit.prevent="simpan">
        <div class="flex flex-wrap">
            <div class="w-1/2 idTahun p-3">
                <label class="pl-2 block w-full" for="idTahun">Tahun Ajaran :</label>
                <select wire:model="idTahunPelajaran" class="{{ $class }}">
                    @foreach ($tahun as $item)
                    <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="w-1/2 jumlah p-3">
                <label class="pl-2 block w-full" for="kelas">Kelas :</label>
                <input class="{{ $class }}" wire:model.defer="kelas" id="kelas" type="text">
            </div>
    
            <div class="w-1/2 idKategori p-3 flex items-end p-3">
                <button type="submit" class="px-2 py-1 bg-blue-600 hover:bg-blue-700 rounded text-white w-full">Simpan</button>
            </div>
    
        </div>
    </form>
</div>
