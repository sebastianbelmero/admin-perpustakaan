<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Daftar Usulan
    </h2>
	id = {{  $idnya }}
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
