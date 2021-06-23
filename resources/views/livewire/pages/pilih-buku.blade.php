<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Pilih Buku
    </h2>
    <form wire:submit.prevent="cari">
        <div class="form-group text-center">
            <label for="cari" class="text-4xl">Masukkan Judul/ISBN</label>
            <h1 class="text-center {{ isset($isbn) ? '' : 'd-none' }}">{{$isbn}}</h1>
            <div class="mb-3">
                <a href="{{ route('tambah-buku', ['isbn' => $isbn])}}" class="btn btn-primary {{ isset($isbn) ? '' : 'd-none' }}">lanjutkan <i class="fas fa-arrow-right"></i></a>
            </div>
            {{-- <h1 class="text-center d-none" wire:loading wire:loading.class="block" wire:loading.class.remove=hidden" wire:target="pilih()">Loading...</h1> --}}
            <input wire:model="judul" type="text" class="w-full rounded px-2 py-1" id="cari">
        </div>
        <div class="flex justify-center">
            <div class="w-1/2 p-1 text-right">
                <div class="form-check">
                    <input wire:model="pilihan" class="form-check-input" name="sama" type="radio" value="judul" id="judul">
                    <label class="form-check-label" for="judul">
                        Judul
                    </label>
                </div>
            </div>
            <div class="w-1/2 p-1 text-left">
                <div class="form-check">
                    <input wire:model="pilihan" class="form-check-input" name="sama" type="radio" value="isbn" id="isbn" checked>
                    <label class="form-check-label" for="isbn">
                        ISBN
                    </label>
                </div>
            </div>
        </div>
    </form>
    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Judul</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ISBN</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Penerbit</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Pengarang</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">#</th>
            </tr>
        </thead>
        <tbody class="flex-1 sm:flex-none">
            @if (isset($data))
            @forelse ($data as $book)    
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{ $book['Judul'] }}</td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{ $book['ISBN'] }}</td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{ $book['Penerbit'] }}</td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{ $book['Pengarang'] }}</td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static"><button wire:click="pilih('{{ $book['ISBN'] }}')" class="btn btn-primary btn-sm rounded-pill"><i class="fas fa-check"></i></button></td>
            </tr>
            @empty
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td colspan="5" class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Data Kosong</td>
            </tr> 
            @endforelse
            @else
            <tr>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b lg:table-cell relative lg:static" colspan="5">
                    <span class="hidden" wire:loading.class="block" wire:loading wire:target="cari">Loading...</span>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>