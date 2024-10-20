@props(['panel'])

<div class="h-full w-80 bg-transparent">
    <h4 class="font-bold text-white text-lg">{{$panel->name}}</h4>
    <div class="justify-between h-4/5" data-panel_id="{{$panel->id}}">
        <div class="space-y-0.5 overflow-y-scroll h-full scrollbar-hide taskContainer">
            @foreach ($panel->tasks as $task)
                <x-task :task="$task"></x-task>
            @endforeach
        </div>
        <x-new-databtn class="mt-2 newTaskBtn" width="w-full">Voeg taak toe</x-new-databtn>
    </div>
</div>