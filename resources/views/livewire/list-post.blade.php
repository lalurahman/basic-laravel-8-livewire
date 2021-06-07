<div class="bg-white p-4">
    @foreach ($posts as $post)
    
        @if ($updateStateId !== $post->id)
            {{ $post->user->name }}     
            {{ $post->body }}
            {{ $post->created_at->diffForHumans() }} 
            <button wire:click="showUpdateForm({{ $post->id }})" class="bg-blue-600 p-1 text-white rounded">edit</button>
        @else

        <textarea wire:model="body" name="body"  rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        <div class="flex justify-end">
            <button wire:click="update({{$post->id}})" class="mt-1 px-4 py-2 bg-blue-600 text-white hover:bg-blue-500 rounded-md">Save</button>
        </div>
        @endif
        <br>
    @endforeach

</div>
