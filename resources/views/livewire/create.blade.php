<form>
    <div class="form-group">
        <label for="title"> Title:</label>
        <input type="text" class="form-control" placeholder="enter title" wire:model="title">
        @error('title') <span class="text-danger">{{$message}} </span> @enderror
    </div>

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea class="form-control" wire:model="body"> </textarea>
        @error('title') <span class="text-danger">{{$message}} </span> @enderror
    </div>
    <div class="form-group">
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </div>
</form>
