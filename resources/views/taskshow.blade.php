@props(['task'])
<x-input placeholder="Taak naam">{{$task->title}}</x-input>
<x-textarea class="mt-3">{{$task->description}}</x-textarea>