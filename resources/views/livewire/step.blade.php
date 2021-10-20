<div>
    <h2 class="text-lg mb-3">
        Add steps if required.
        <button type="button" class="bg-blue-500 text-white px-2 rounded-full font-black" wire:click="increment">&plus;</button>
    </h2>

    @foreach ($steps as $step)
    <div wire:key="{{ $step }}">
        <input type="text" name="steps[][name]" class=" p-2 my-1 border rounded" placeholder="Describe step {{ $step + 1 }}">
        <span class="px-2 text-2xl font-black text-red-500 cursor-pointer" wire:click="remove({{ $step }})">
            &cross;
        </span>
    </div>
    @endforeach
</div>
