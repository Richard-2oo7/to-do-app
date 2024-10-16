<x-layout>
    <div>
        <x-link href="{{url()->previous()}}">terug</x-link>
    </div>

        <ul>
            @foreach($panels as $panel)
                <li>{{ $panel->id }}</li>
            @endforeach
        </ul>

</x-layout>