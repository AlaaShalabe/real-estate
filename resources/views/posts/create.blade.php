@extends('layouts.admin-app')
@section('title', 'Welcome')
@section('subtitle', 'Welcome')
@section('content')
    <section class="section">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Name" name="name">
                    @error('name')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label">Area </label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="number" placeholder="200m" name="area">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                    @error('price')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Sale/Buy..</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="reason" value="sale">
                        Sale
                    </label>
                    <label class="radio">
                        <input type="radio" name="reason" value="buy">
                        Buy
                    </label>
                </div>

            </div>
            <div class="field">
                <label class="label">Price</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input " type="text" placeholder="2000$" name="price">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @error('price')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label">Type</label>
                <div class="control">
                    <div class="select">
                        <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id') ? 'selscted' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Location..</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" name="location">
                    @error('location')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Photo</label>
                <div class="file">
                    <input class="input" name="photo" value=" {{ old('photo') }}" type="text"
                        placeholder="Text input">
                    {{-- <label class="file-label">
                        <input class="file-input" type="file" name="photo">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                {{ __('Choose a file…') }}
                            </span>
                        </span>
                        </span>
                    </label> --}}
                    @error('photo')
                        <div class="help is-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Other..</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea" name="content"></textarea>
                    @error('content')
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
