@extends('layouts.admin-app')
@section('title', 'Welcome')
@section('subtitle', 'categories')
@section('content')
    <section class="section">
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Name" name="name"
                        value="{{ old('name', $category->name) }}">
                    @error('name')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Create</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancel</button>
                </div>
            </div>
        </form>
    </section>
@endsection
