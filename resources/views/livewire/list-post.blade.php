<div class="bg-white p-4">
    @foreach ($posts as $post)
        {{ $post->user->name }}     
        {{ $post->body }}
        {{ $post->created_at->diffForHumans() }} 
        <button wire:click="showUpdateForm({{ $post->id }})" class="bg-blue-600 p-1 text-white rounded">edit</button>
        <br>
    @endforeach
</div>
