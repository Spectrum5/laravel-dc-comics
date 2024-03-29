@extends('layout.main')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">type</th>
                <th scope="col">price</th>
                <th scope="col">actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <button type="submit"><a href="{{ route('comics.show', $comic) }}">detail</a></button>
                        <button><a href="{{ route('comics.edit', $comic) }}">edit</a></button>
                        <form  onsubmit="return confirm('Sei sicuro di voler cancellare?')" class="my-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete">delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('comics.create') }}" class="button">add</a>
@endsection
