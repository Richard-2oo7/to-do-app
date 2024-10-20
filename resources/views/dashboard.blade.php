@push('assets')
    @vite(['resources/js/dashboard.js'])
@endpush

<x-layout docTitle="Boards">
    <h1 class="text-white text-4xl font-bold mb-10">Mijn Borden:</h1>
    
    <div class="flex gap-4 flex-wrap">
        <x-board :boards="$boards"></x-board>
        <x-new-databtn>Nieuw bord</x-new-databtn>
    </div>

</x-layout>