<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="my-input">Nom</label>
        <input id="my-input" class="form-control" type="text" name="first_name" value="{{old('first_name')}}" >
    </div>
    @error('first_name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="form-group">
        <label for="my-input">Prénoms</label>
        <input id="my-input" class="form-control" type="text" name="last_name" value="{{old('last_name')}}" >
    </div>
    @error('last_name')
        <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="my-input">Nom d'anniversaire</label>
        <input id="my-input" class="form-control" type="text" name="birth_name" value="{{old('birth_name')}}" >
    </div>
    @error('birth_name')
        <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="my-input">Nom du millieu</label>
        <input id="my-input" class="form-control" type="text" name="middle_names" value="{{old('middle_names')}}" >
    </div>
    @error('middle_names')
        <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="my-input">Date d'anniversaire</label>
        <input id="my-input" class="form-control" type="date" max="{{date('Y-m-d',strtotime('-1 days'))}}" name="date_of_birth" value="{{old('date_of_birth')}}" >
    </div>
    @error('date_of_birth')
        <span class="text-danger">{{$message}}</span>
    @enderror

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
