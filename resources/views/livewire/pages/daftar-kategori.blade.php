<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Daftar Anggota
    </h2>
    id = {{  $idnya }}
    @if ($idnya)
	<a href="#" class="px-2 py-1 bg-blue-500 hover:bg-blue-700 rounded text-white"><i class="bi bi-pencil"></i> Edit</a>
	<button onclick="return confirm('Apakah anda yakin ingin menghapus kategori???') || event.stopImmediatePropagation()" wire:click="hapusKategori({{ $idnya }})" class="px-2 py-1 bg-red-500 hover:bg-red-700 rounded text-white"><i class="bi bi-trash"></i> Hapus</button>
	<button wire:click="$set('idnya', 0)" class="px-2 py-1 bg-gray-500 hover:bg-gray-700 rounded text-white"><i class="bi bi-x-lg"></i> Batal</button>
		
	@endif
    @livewire('components.table', [
		'key' => $key,
		'model' => $model,
		'param' => $param,
		'ev' => $ev
	])
</div>