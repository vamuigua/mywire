<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Good Morning</option>
        <option>Goodbye</option>
    </select>

    {{ implode(", ", $greeting) }} {{ $name }} @if($loud) ! @endif

    <form action="#" wire:submit.prevent="$set('name', 'Krabs')">
        <button>Reset Name</button>
    </form>

</div>