<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Log Buku
    </h2>
    <table class="border-collapse w-full">
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300"></th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Lama</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Baru</th>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">ISBN</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_isbn }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_isbn }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Judul</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_judul }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_judul }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Penerbit</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_penerbit }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_penerbit }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Pengarang</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_pengarang }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_pengarang }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Tahun</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_tahun }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_tahun }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Tanggal Masuk</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_tgl_masuk }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_tgl_masuk }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Edisi</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_edisi }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_edisi }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Website</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_website }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_website }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Emai</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_email }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_email }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Jumlah</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_jumlah }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_jumlah }}</td>
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Id Kategori</th>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->old_id_kategori }}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b">{{ $buku->new_id_kategori }}</td>
        </tr>
    </table>
</div>
