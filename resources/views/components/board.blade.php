@props(['boards'])
@foreach ($boards as $board)
<a href="boards/{{$board->id}}">
    <div class="h-40 w-60 bg-colorblack rounded-lg border-2 border-transparent text-white font-bold flex justify-center items-center hover:border-white">{{$board->name}}</div>
</a>
@endforeach