@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>action</th>
                    </tr>
                </thead>
                @foreach ($categories as $category)
                    <tbody>
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                <a class="button is-success is-light " href="{{ route('categories.edit', $category) }}">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('categories.delete', $category) }}" method="POST">
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
