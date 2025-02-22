<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center mb-4">
                        <!-- Gambar SIG Pemetaan Sekolah -->
                        <img src="{{ asset('image.png') }}"
                            alt="SIG Pemetaan Sekolah"
                            class="w-full max-w-2xl h-auto">
                    </div>
                    <p>{{ __('Haii siswa!') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
