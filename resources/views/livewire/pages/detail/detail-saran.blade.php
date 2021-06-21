<div class="py-5">
    <div class="bg-purple-800 text-white w-full md:w-1/2 p-3 rounded">
        <div class="">
            Nama : {{ $saran->nama }}
        </div>
        <div class="">
            Email : {{ $saran->email }}
        </div>
        <div class="">
            Saran : {{ $saran->pesan }}
        </div>
        <button wire:click="kembali" class="px-2 py-1 rounded bg-blue-500 hover:bg-blue-600 text-white">Kembali</button>
    </div>
</div>
