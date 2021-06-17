<div>
    <form wire:submit.prevent="tambahTahunAjaran">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-3/4 p-1">
                <input wire:model.defer ="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nama Kategori">
            </div>
            <div class="w-full lg:w-1/4 p-1">
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Tambah Tahun Ajaran
                </button>
            </div>
        </div>
    </form>
</div>