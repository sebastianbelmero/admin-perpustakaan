<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Anggota
    </h2>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Nama : {{ $member->name }}
        </label>
    </div>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Nomor Induk : {{ $member->nomor_induk }}
        </label>
    </div>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Email : {{ $member->email }}
        </label>
    </div>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Kelas : {{ $member->nama_kelas }}
        </label>
    </div>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Tanggal Lahir : {{ $member->tgl_lahir }}
        </label>
    </div>
    <div class="p-1 w-full">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
            Jenis Kelamin : {{ $member->jenis_kelamin }}
        </label>
    </div>
</div>