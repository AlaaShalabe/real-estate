@extends('layouts.app')
@section('title', 'Login')
@section('subtitle', 'Welcome Admin')

@section('content')
    <section class="section">
        <div class="container">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        @error('email')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" name="password" type="password" placeholder="Password">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <button type="submit" class="button is-success">
                            Login
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>
@endsection
