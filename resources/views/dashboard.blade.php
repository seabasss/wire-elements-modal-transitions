<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center space-x-2">
                <x-jet-button onclick="Livewire.emit('modal.open', 'small-modal')">
                    {{ __('Open Small Modal') }}
                </x-jet-button>
                <x-jet-button onclick="Livewire.emit('modal.open', 'big-modal')">
                    {{ __('Open Big Modal') }}
                </x-jet-button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
