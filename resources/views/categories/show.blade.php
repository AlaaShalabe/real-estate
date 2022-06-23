@extends('layouts.app')
{{-- @section('title', $category->post->name) --}}
@section('subtitle')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ $category->name }}'s Posts
            </h1>
            <div class="columns is-multiline">
                @foreach ($category->posts as $post)
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="{{ $post->photh }}" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4"><a
                                                href="{{ route('post.show', $post) }}">{{ $post->name }}</a></p>
                                        <p class="subtitle is-6">{{ $post->name }}</p>
                                    </div>
                                </div>

                                <div class="content">
                                    {{ $post->content }}
                                    <br>
                                    <time datetime="2016-1-1">{{ $post->created_at }}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
