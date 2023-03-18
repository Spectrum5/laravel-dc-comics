@extends('layout.main')

@section('content')
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{ $comic['title'] }}" type="text" class="form-control" name="title" id="title"
                placeholder="Inserire il titolo">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Thumb</label>
            <input value="{{ $comic['thumb'] }}" type="text" class="form-control" name="thumb" id="thumb"
                placeholder="Inserire la URL dell'immagine">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{ $comic['price'] }}" type="text" class="form-control" name="price" id="price"
                placeholder="prezzo">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input value="{{ $comic['type'] }}" type="text" class="form-control" name="type" id="type"
                placeholder="tipo di fumettto">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{ $comic['series'] }}" type="text" class="form-control" name="series" id="series"
                placeholder="Inserire la serie">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input value="{{ $comic['sale_date'] }}" type="text" class="form-control" name="sale_date" id="sale_date"
                placeholder="data di vendita">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $comic['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Modify</button>
    </form>
@endsection