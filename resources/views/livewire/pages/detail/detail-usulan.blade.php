<div class="py-5">
    <div class="">
        Judul : {{ $usulan->judul }}
    </div>
    <div class="">
        Penerbit : {{ $usulan->penerbit }}
    </div>
    <div class="">
        Pengarang : {{ $usulan->pengarang }}
    </div>
    <button wire:click="kembali" class="px-2 py-1 rounded bg-blue-500 hover:bg-blue-600 text-white">Kembali</button>
</div>
