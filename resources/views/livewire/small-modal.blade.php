<x-wire-elements-pro::tailwind.modal on-submit="save" :content-padding="false">
    <x-slot name="title">Small Modal</x-slot>

    <!-- No padding will be applied because the component attribute "content-padding" is set to false -->
    <div>
        <label>Your email</label>
        <input type="email" placeholder="demo@wire-elements.dev">
    </div>

    <x-slot name="buttons">
        <button type="submit">
            Save Changes
        </button>
        <button type="button" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-wire-elements-pro::tailwind.modal>
