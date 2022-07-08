<div>
    <form wire:submit.prevent="store" id="contact-form" role="form">

        <div class="form-group">
            <input type="text" placeholder="Nombre del trabajo..." class="form-control" @error('title')
                style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror wire:model="title"
                name="title">
            @error('title') <span style="color: #f35353">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <textarea rows="6" placeholder="Puedes escribir hasta 200 caracteres..." class="form-control" @error('text')
                style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror id="text"
                wire:model="text" name="text"></textarea>
            @error('text') <span style="color: #f35353">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <input type="file" wire:model="photo" name="photo">

            @error('photo') <span style="color:#f35353">{{ $message }}</span> @enderror

            @if ($photo)

            <img src="{{ $photo->temporaryUrl() }}" class="img-thumbnail">

            <input type="reset" value="Cancelar" wire:click="res" class="btn btn-danger"
                style="width: 100%; margin-top: 5px;">
            @endif
        </div>


        {{-- success message --}}
        @if(session()->has('success'))
        <div style=" color: #57cbcc;" class="text-center">
            <strong>{{ session('success') }}</strong>
            <a href="{{ route('welcome').'/#portfolio' }}"> Ver trabajos posteados</a>
        </div>
        @endif




        <div id="cf-submit">
            <input type="button" id="contact-submit" class="btn btn-transparent" value="Publicar" wire:click="store"
                wire:loading.attr="disabled">

        </div>
    </form>
</div>
@livewireScripts
