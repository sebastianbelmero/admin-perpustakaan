<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Peminjaman
    </h2>
    @if ($err)
    <div class="my-5 flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            {{ $err }}
        </div>
    </div>
    @endif
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
            <td class="p-1"> : <input {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'readonly' : '' }} class="w-48 px-2 py-1 rounded" type="date" wire:model.defer="borrow.pinjam"></td>
        </tr>
        <tr>
            <th>Tanggal Pengembalian</th>
            <td class="p-1"> : <input {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'readonly' : '' }} class="w-48 px-2 py-1 rounded" type="date" wire:model.defer="borrow.kembali"></td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td class="p-1"> : <textarea {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'readonly' : '' }} class="w-48 px-2 py-1 rounded" wire:model.defer="borrow.keterangan"></textarea></td>
        </tr>
        <tr>
            <th>Denda</th>
            <td class="p-1"> : <input {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'readonly' : '' }} class="w-48 px-2 py-1 rounded" type="text" wire:model.defer="borrow.denda"></td>
        </tr>
        <tr>
            <th>Status</th>
            <td class="p-1"> : 
                <select class="w-48 px-2 py-1 rounded" wire:model.defer="borrow.status">
                    <option {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'disabled' : '' }} value="0">Pending</option>
                    <option {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'disabled' : '' }} value="1">Konfirmasi</option>
                    <option {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'disabled' : '' }} value="2">Sedang Dipinjam</option>
                    <option {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'disabled' : '' }} value="3">Selesai</option>
                    <option {{ $borrow['status'] == 3 || $borrow['status'] == 4 ? 'disabled' : '' }} value="4">Batal</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Simpan</th>
            <td class="p-1"> : 
                @if ($borrow['status'] == 3 || $borrow['status'] == 4)
                <button class="px-2 py-1 rounded bg-blue-400 focus:outline-none text-white">Selesai</button>
                @else
                <button wire:click="simpan" class="px-2 py-1 rounded bg-blue-500 hover:bg-blue-600 text-white">Selesai</button>
                @endif
            </td>
        </tr>
    </table>
</div>