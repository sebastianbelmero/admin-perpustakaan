<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Peminjaman
    </h2>
    <table class="text-left">
        <tr>
            <th>Nama Peminjam</th>
            <td class="p-1"> : {{ $borrow['nama'] }}</td>
        </tr>
        <tr>
            <th>Judul Buku</th>
            <td class="p-1"> : {{ $borrow['judul'] }}</td>
        </tr>
        <tr>
            <th>Tanggal Peminjaman</th>
            <td class="p-1"> : <input class="w-48 px-2 py-1 rounded" type="date" wire:model.defer="borrow.pinjam"></td>
        </tr>
        <tr>
            <th>Tanggal Pengembalian</th>
            <td class="p-1"> : <input class="w-48 px-2 py-1 rounded" type="date" wire:model.defer="borrow.kembali"></td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td class="p-1"> : <textarea class="w-48 px-2 py-1 rounded" wire:model.defer="borrow.keterangan"></textarea></td>
        </tr>
        <tr>
            <th>Denda</th>
            <td class="p-1"> : <input class="w-48 px-2 py-1 rounded" type="text" wire:model.defer="borrow.denda"></td>
        </tr>
        <tr>
            <th>Status</th>
            <td class="p-1"> : 
                <select class="w-48 px-2 py-1 rounded" wire:model.defer="borrow.status">
                    <option value="0">Pending</option>
                    <option value="1">Konfirmasi</option>
                    <option value="2">Sedang Dipinjam</option>
                    <option value="3">Selesai</option>
                    <option value="4">Batal</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Simpan</th>
            <td class="p-1"> : 
                <button wire:click="simpan" class="px-2 py-1 rounded bg-blue-500 hover:bg-blue-600 text-white">Selesai</button>
            </td>
        </tr>
    </table>
</div>
