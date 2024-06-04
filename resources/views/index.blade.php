<h1>
    The list of tasks
</h1>

{{-- @isset($name)
    <div>The name is : {{ $name }}</div>
@endisset --}}

<div>
    {{-- @if (count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task->title }}</div>
        @endforeach
    @else
        <div>There are no tasks!</div>
    @endif --}}
    
    @forelse ($tasks as $task)
        {{-- <div>{{ $task->title }}</div> --}}
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
        
</div>