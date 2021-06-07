<div class="p-4">
    {{ $body }}
    <textarea wire:model="body" name="body"  rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    <div class="flex justify-end">
        <button wire:click="createPost" class="mt-1 px-4 py-2 bg-blue-600 text-white hover:bg-blue-500 rounded-md">Post</button>
    </div>
</div>
