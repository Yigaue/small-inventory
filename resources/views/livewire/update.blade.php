<form>
    <input type="hidden" wire:model="postId">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" placeholder="enter title" wire:model="title"/>
        @error('title') <span class="text-danger"> {{$message}} </span> @enderror
    </div>

    <div>
        <label for="body"> Body:</label>
        <textarea class="form-control" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button class="btn btn-dark" wire:click.prevent="update()">Update</button>
    <button class="btn btn-danger" wire:click.prevent="cancel()">Cancel</button>
</form>
