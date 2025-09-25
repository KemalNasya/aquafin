<x-filament-panels::page>
    <form wire:submit="save" class="space-y-6">
        <x-filament-forms::form
            :schema="$this->schema"
            :state="$this->data"
        />

        <x-filament-forms::form.actions
            :actions="$this->getFormActions()"
        />
    </form>
</x-filament-panels::page>
