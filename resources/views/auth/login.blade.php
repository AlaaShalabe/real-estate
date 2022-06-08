{{-- {{ Auth::user()->name }} --}}
<form action="{{ route('auth.login') }}" method="POST">
    @csrf
    <div class="field">


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
    <p class="control has-icons-left has-icons-right">
        <input class="input" type="password" placeholder="password" name="password">
        <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
        </span>
        @error('password')
        <div class="help is-danger">{{ $message }}</div>
    @enderror
    </p>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Login
            </button>
        </p>
    </div>
</form>
<form action="{{ route('auth.logout') }}" method="POST">
    @csrf
    <button type="submit" class="button is-danger">
        Logout
    </button>
</form>
