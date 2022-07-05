<div>
    <form action="{{ route('login') }}" method="POST" id="contact-form" role="form">
        @csrf

        <div class="form-group">
            <input type="email" name="email" placeholder="Tu email..." class="form-control">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <input type="password" name="password" placeholder="Tu contraseña..." class="form-control">

            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- submit --}}
        <div id="cf-submit">
            <input type="submit" class="btn btn-transparent" value="Login">
        </div>
    </form>
</div>
