<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tambah Buku
    </h2>
    <div wire:loading wire:target="cari" class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
        <div class="flex flex-wrap items-end">
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelJudul">Judul</label>
                    <input type="text" wire:model.defer="judul" class="w-full rounded px-2 py-1" id="labelJudul" placeholder="Input Judul" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelKategori">Kategori</label>
                    <select wire:model.defer="kategori" class="w-full rounded px-2 py-1">
                        <option value="">Pilih Kategori</option>
                        @foreach ($collection as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelISBN">ISBN</label>
                    <input type="text" wire:model.defer="isbn" class="w-full rounded px-2 py-1" id="labelISBN" placeholder="Input ISBN" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelPenerbit">Penerbit</label>
                    <input type="text" wire:model.defer="penerbit" class="w-full rounded px-2 py-1" id="labelPenerbit" placeholder="Input Penerbit" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelPengarang">Pengarang</label>
                    <input type="text" wire:model.defer="pengarang" class="w-full rounded px-2 py-1" id="labelPengarang" placeholder="Input Pengarang" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelTahun">Tahun</label>
                    <input type="text" wire:model.defer="tahun" class="w-full rounded px-2 py-1" id="labelTahun" placeholder="Input Tahun Penerbitan Buku" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelTgl-masuk">Tanggal Masuk</label>
                    <input type="date" wire:model.defer="tglMasuk" class="w-full rounded px-2 py-1" id="labelTgl-masuk" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelEdisi">Edisi</label>
                    <input type="text" wire:model.defer="edisi" class="w-full rounded px-2 py-1" id="labelEdisi" placeholder="Input Edisi Buku" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelWebsite">Website</label>
                    <input type="text" wire:model.defer="website" class="w-full rounded px-2 py-1" id="labelWebsite" placeholder="Input Website Buku" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelEmail">Email</label>
                    <input type="email" wire:model.defer="email" class="w-full rounded px-2 py-1" id="labelEmail" placeholder="Input Email" />
                </div>
            </div>

            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label for="labelJumlah">Jumlah</label>
                    <input type="number" wire:model.defer="jumlah" class="w-full rounded px-2 py-1" id="labelJumlah" placeholder="Input Jumlah Buku" />
                </div>
            </div>
            <div class="w-full md:w-1/2 p-1">
                <div>
                    <label class="text-white">.</label>
                    <button wire:click="tambahBuku" class="bg-blue-500 hover:bg-blue-600 rounded px-1 py-1 w-full text-white">
                        Tambah Buku
                    </button>
                </div>
            </div>
        </div>
</div>