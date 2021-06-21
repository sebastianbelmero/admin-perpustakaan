<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        @foreach ($links as $key => $link)
        <div wire:click="pindah({{ $link['route'] }})" class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-{{ $link['color'] }}-500 bg-{{ $link['color'] }}-100 rounded-full dark:text-{{ $link['color'] }}-100 dark:bg-{{ $link['color'] }}-500">
                <i class="{{ $link['icon'] }} text-xl"></i>
            </div>
            <div>
                <a href="{{ route($link['route']) }}" class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ $key }}
                </a>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $link['data'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
