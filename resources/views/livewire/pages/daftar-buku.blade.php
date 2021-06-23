<div>
	<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
		Daftar Buku
	</h2>
	@if ($idnya)
	<a href="{{ route('ubah-buku', $idnya) }}" class="px-2 py-1 bg-blue-500 hover:bg-blue-700 rounded text-white"><i class="bi bi-pencil"></i> Edit</a>
	<button onclick="return confirm('Apakah anda yakin ingin menghapus buku???') || event.stopImmediatePropagation()" wire:click="hapusBuku()" class="px-2 py-1 bg-red-500 hover:bg-red-700 rounded text-white"><i class="bi bi-trash"></i> Hapus</button>
	<button wire:click="$set('idnya', 0)" class="px-2 py-1 bg-gray-500 hover:bg-gray-700 rounded text-white"><i class="bi bi-x-lg"></i> Batal</button>
		
	@endif

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
            Tidak Dapat Menghapus Buku
        </div>
    </div>
    @endif

	@if ($ada)	
	@livewire('components.table', [
		'key' => $key,
		'model' => $model,
		'param' => $param,
		'ev' => $ev
	])
	@else
	Data Kosong
	@endif
</div>