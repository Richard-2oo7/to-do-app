@props(['task'])
@php
    $checked = '';
    if($task->completed){
        $checked = 'checked';
    }
@endphp
<div class="bg-colorblack w-full px-4 py-3 flex items-center space-x-3 rounded-lg text-colorlightgray cursor-pointer border border-transparent hover:border-white task" data-taskId="{{$task->id}}">
    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded-full focus:ring-0" {{$checked}}>    
    <p>{{$task->title}}</p>
</div>