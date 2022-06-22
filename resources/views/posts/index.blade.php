@extends('layouts.admin-app')
@section('content')
    <section class="section">
        <div class="table-container">
            <ul>
                @if (Session::get('error'))
                    <li>{{ Session::get('error') }}</li>
                @endif
            </ul>

            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>area</th>
                        <th>Sale/buy</th>
                        <th>price</th>
                        <th>type</th>
                        <th>location</th>
                        <th>action</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                    <tbody>
                        <tr>
                            <td>
                                {{ $post->name }}
                            </td>
                            <td>
                                {{ $post->area }}
                            </td>
                            <td>
                                {{ $post->reason }}
                            </td>
                            <td>
                                {{ $post->price }}
                            </td>
                            <td>
                                {{ $post->category->name }}
                            </td>
                            <td>
                                {{ $post->location }}
                            </td>
                            <td>
                                <a class="button is-success is-light " href="{{ route('post.edit', $post) }}">
                                    <i class="material-icons">edit</i>
                                </a>
                                <form action="{{ route('post.delete', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="button">
                                        <button class="button is-small is-danger is-light">Delet</button>
                                    </div>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>
@endsection
