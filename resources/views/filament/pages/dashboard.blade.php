<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($this->getWidgets() as $widget)
            @livewire($widget, key($widget))
        @endforeach
    </div>
</x-filament-panels::page>
