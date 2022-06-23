@extends('layouts.app')
@section('title', 'Welcome')
@section('subtitle', 'Welcome')
@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                @foreach ($posts as $post)
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{ $post->photo }}" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            <a href="{{ route('post.show', $post) }}">{{ $post->name }}</a>
                                        </p>
                                        <p class="subtitle is-6">{{ $post->price }}</p>
                                    </div>
                                </div>

                                <div class="content">
                                    {{ $post->content }} <a>@bulmaio</a>.
                                    <a
                                        href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
                                    <a href="#">#responsive</a>
                                    <br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
