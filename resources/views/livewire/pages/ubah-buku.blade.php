<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Ubah Buku
    </h2>
    <form wire:submit.prevent="simpan">
        <div class="flex flex-wrap">
            <div class="w-1/2 judul p-3">
                <label class="pl-2 block w-full" for="judul">Judul :</label>
                <input class="{{ $class }}" wire:model.defer="judul" id="judul" type="text">
            </div>
    
            <div class="w-1/2 isbn p-3">
                <label class="pl-2 block w-full" for="isbn">ISBN :</label>
                <input class="{{ $class }}" wire:model.defer="isbn" id="isbn" type="text">
            </div>
    
            <div class="w-1/2 penerbit p-3">
                <label class="pl-2 block w-full" for="penerbit">Penerbit :</label>
                <input class="{{ $class }}" wire:model.defer="penerbit" id="penerbit" type="text">
            </div>
    
            <div class="w-1/2 pengarang p-3">
                <label class="pl-2 block w-full" for="pengarang">Pengarang :</label>
                <input class="{{ $class }}" wire:model.defer="pengarang" id="pengarang" type="text">
            </div>
    
            <div class="w-1/2 tahun p-3">
                <label class="pl-2 block w-full" for="tahun">Tahun :</label>
                <input class="{{ $class }}" wire:model.defer="tahun" id="tahun" type="text">
            </div>
    
            <div class="w-1/2 tglMasuk p-3">
                <label class="pl-2 block w-full" for="tglMasuk">Tanggal Masuk :</label>
                <input class="{{ $class }}" wire:model.defer="tglMasuk" id="tglMasuk" type="date">
            </div>
    
            <div class="w-1/2 edisi p-3">
                <label class="pl-2 block w-full" for="edisi">Edisi :</label>
                <input class="{{ $class }}" wire:model.defer="edisi" id="edisi" type="text">
            </div>
    
            <div class="w-1/2 website p-3">
                <label class="pl-2 block w-full" for="website">Website :</label>
                <input class="{{ $class }}" wire:model.defer="website" id="website" type="text">
            </div>
    
            <div class="w-1/2 email p-3">
                <label class="pl-2 block w-full" for="email">Email :</label>
                <input class="{{ $class }}" wire:model.defer="email" id="email" type="text">
            </div>
    
            <div class="w-1/2 jumlah p-3">
                <label class="pl-2 block w-full" for="jumlah">Jumlah :</label>
                <input class="{{ $class }}" wire:model.defer="jumlah" id="jumlah" type="text">
            </div>
    
            <div class="w-1/2 idKategori p-3">
                <label class="pl-2 block w-full" for="idKategori">Kategori :</label>
                <select wire:model.defer="idKategori" id="idKategori" class="{{ $class }}">
                    @foreach ($kategori as $item)
                    <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="w-1/2 idKategori p-3 flex items-end p-3">
                <button type="submit" class="px-2 py-1 bg-blue-600 hover:bg-blue-700 rounded text-white w-full">Simpan</button>
            </div>
    
        </div>
    </form>
</div>
