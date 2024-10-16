<x-layout docTitle="Boards">

<div class="grid grid-cols-5">
    @foreach ($boards as $board)
    <a href="boards/{{$board->id}}">
        <x-board>{{$board->name}}</x-board>
    </a>
    @endforeach
</div>
</x-layout>