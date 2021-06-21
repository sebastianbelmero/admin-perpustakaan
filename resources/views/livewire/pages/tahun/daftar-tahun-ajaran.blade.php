<div>
	<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
		Daftar Tahun Ajaran
	</h2>
	@if ($idnya)
	<button wire:click="showFormTahun({{$idnya}})" class="px-2 py-1 bg-blue-500 hover:bg-blue-700 rounded text-white"><i class="bi bi-pencil"></i> Edit</button>
	{{-- <button onclick="return confirm('Apakah anda yakin ingin menghapus kategori???') || event.stopImmediatePropagation()" wire:click="hapusKategori({{ $idnya }})" class="px-2 py-1 bg-red-500 hover:bg-red-700 rounded text-white"><i class="bi bi-trash"></i> Hapus</button> --}}
	<button wire:click="$set('idnya', 0)" class="px-2 py-1 bg-gray-500 hover:bg-gray-700 rounded text-white"><i class="bi bi-x-lg"></i> Batal</button>
	@endif

	@if ($idnya !== $updateId)
	@livewire('pages.tahun.tambah-tahun-ajaran')
	@endif
	@if ($idnya === $updateId)
	<div>
		<form wire:submit.prevent="ubahTahun({{ $idnya }})">
			<div class="flex flex-wrap items-center">
				<div class="w-full lg:w-3/4 p-1">
					<input wire:model.defer="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">
				</div>
				<div class="w-full lg:w-1/4 p-1">
					<button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
						Ubah Tahun Ajaran
					</button>
				</div>
			</div>
		</form>
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