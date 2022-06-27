@extends('layouts.app')
@section('title', $post->name)
@section('subtitle')
@section('content')
    <div class="container">
        <div class="block">
            <div class="image">
                <img src=" {{ $post->photo }}" alt="{{ $post->titel }}">
            </div>
        </div>
        <div class="block">
            <div class="content is-medium">
                <p> {{ $post->content }} </p>
            </div>
        </div>
        @auth

            <div class="field is-grouped">
                <p class="control">
                    <a class=" button is-success is-outlined" href="{{ route('post.edit', $post) }}">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span>Ediat post</span>
                        </span>
                    </a>
                </p>
                <form action="{{ route('post.delete', $post) }}" method="POST">
                    @csrf
                    @method('delete')
                    <p class="control">
                        <button class="button is-danger is-outlined" type="submit">
                            <span class="icon is-small">
                                <i class="fas fa-times"></i>
                            </span>
                            <span>Delete post</span>
                        </button>
                </form>
                </p>
            </div>
        @endauth
    </div>

@endsection
