<div>
    <h1>Tasks</h1>
    <form wire:submit='add'>
        <input type="text" wire:model="task">

        <button class="bg-green-500 p-2 rounded">Add</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>