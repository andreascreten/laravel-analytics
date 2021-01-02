<div class="shadow-sm bg-white rounded-lg overflow-hidden">
    <div class="px-4 sm:px-6 py-5 flex flex-col">
        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $stat['key'] }}</h3>
        <div class="mt-2 flex items-center">
            <div class="text-3xl font-extrabold leading-none text-gray-700">{{ $stat['value'] }}</div>
            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                @include(sprintf('analytics::stats.%s-icon', $stat['increase'] ? 'increase' : 'decrease'))
            </div>
        </div>
    </div>
</div>