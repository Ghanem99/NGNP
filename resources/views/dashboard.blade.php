<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analytics Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Push Up</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $pushups }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Pull Up</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $pullups }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Squat</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $squats }}</p>
                        </div>
                        <div>
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Total Reps</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalReps }}</p>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
