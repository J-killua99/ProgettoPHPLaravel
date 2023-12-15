<div>

    <h1 class="display-4">Crea il tuo annuncio!</h1>

    <form wire:submit.prevent='store'>
        @csrf

        <div>
            @if (session('messages'))
            <div class="alert alert-success">
                {{ session('messages') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="title">Titolo Gioco</label>
            <input wire:model="title" type="text" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="body">Descrizione</label>
            <input wire:model="body" type="text" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input wire:model="price" type="number" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea</button>
    </form>




</div>
