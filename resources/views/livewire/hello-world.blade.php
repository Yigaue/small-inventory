
<div class="container">
    {{-- <input type="text" wire:model.lazy="name"/>
    <input type="checkbox" wire:model="loud"/>
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adieu</option>
    </select>

    {{implode(', ', $greeting)}} {{strtoupper($name)}} @if ($loud) ! @endif

    <button wire:click="resetName($event.target.innerText)"> Reset Name </button>
    <button wire:click="$set('name', 'Bingo')"> Reset Name </button> --}}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Small Inventory</h2>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message')}}
                        </div>
                    @endif
                    @livewire('posts')
                </div>
            </div>
        </div>
    </div>

</div>
