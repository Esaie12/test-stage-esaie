<form method="POST" action="{{ route('register') }}">
    @csrf



    <div class="form-group">
        <label for="my-input">Code d'invitation</label>
        <input id="my-input" class="form-control" type="text" name="code" value="{{$code}}" readonly >
    </div>


    <div class="form-group row">
        <label for="pseudo" class="col-md-4 col-form-label text-md-right">Pseudo</label>

        <div class="col-md-6">
            <input id="pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo">

            @error('pseudo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
