<form action="{{ route('auth.store') }}" method="POST">
    @csrf
    <div class="field">

        <p class="control has-icons-left has-icons-right">
            <input class="input" type="name" placeholder="Name" name="name">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
            @error('name')
            <div class="help is-danger">{{ $message }}</div>
        @enderror
        </p>
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email" name="email">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
            @error('email')
            <div class="help is-danger">{{ $message }}</div>
        @enderror
        </p>
    </div>
    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password" name="password">
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
            @error('password')
            <div class="help is-danger">{{ $message }}</div>
        @enderror
        </p>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Login
            </button>
        </p>
    </div>
</form>
