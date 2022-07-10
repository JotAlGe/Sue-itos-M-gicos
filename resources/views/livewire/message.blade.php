<div>
    <form id="contact-form" role="form">

        <div class="form-group">
            <input type="text" placeholder="Tu nombre..." class="form-control" @error('name_mess')
                style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror
                wire:model="name_mess">
            @error('name_mess') <span style="color: #f35353">{{ $message }}</span> @enderror
        </div>


        <div class="form-group">
            <input type="email" placeholder="Tu Email..." class="form-control" @error('email_mess')
                style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror id="email"
                wire:model="email_mess">
            @error('email_mess') <span style="color:#f35353">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <input type="text" placeholder="Asunto..." class="form-control" @error('subject')
                style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror id="subject"
                wire:model="subject">
            @error('subject') <span style="color: #f35353">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <textarea rows="6" placeholder="Puedes escribir hasta 200 caracteres..." class="form-control"
                @error('message') style="border: 1px solid #f35353" @else style="border: 1px solid #57cbcc" @enderror
                id="message" wire:model="message"></textarea>
            @error('message') <span style="color: #f35353">{{ $message }}</span> @enderror
        </div>

        {{-- success message --}}
        @if(session()->has('success'))
        <div style="color: #57cbcc;" class="text-center">
            <strong>{{ session('success') }}</strong>
        </div>
        @endif




        <div id="cf-submit">
            <input type="button" id="contact-submit" class="btn btn-transparent" value="Enviar" wire:click="store"
                wire:loading.attr="disabled">

        </div>
    </form>
</div>
