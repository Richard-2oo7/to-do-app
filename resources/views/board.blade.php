@push('assets')
    @vite(['resources/js/board.js'])
@endpush

<x-layout>
    <div>
        <x-link href="/">terug</x-link>
    </div>
    
    <div class="flex flex-row h-full mt-auto mb-auto">
        <div class="flex flex-row space-x-5 h-full">
            @foreach($panels as $panel)
                <x-panel :panel="$panel"></x-panel>
            @endforeach
            <x-new-databtn class="mt-7">voeg niew paneel</x-new-databtn>
        </div>
    </div>


</x-layout>
