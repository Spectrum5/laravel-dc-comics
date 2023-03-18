@extends('layout.main')

@section('content')
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{ old('title', $comic['title']) }}" type="text"
                class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                placeholder="Inserire il titolo">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Thumb</label>
            <input value="{{ old('thumb', $comic['thumb']) }}" type="text"
                class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
                placeholder="Inserire la URL dell'immagine">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{ old('price', $comic['price']) }}" type="text"
                class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                placeholder="prezzo">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input value="{{ old('type', $comic['type']) }}" type="text"
                class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                placeholder="tipo di fumettto">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{ old('series', $comic['series']) }}" type="text"
                class="form-control @error('series') is-invalid @enderror" name="series" id="series"
                placeholder="Inserire la serie">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input value="{{ old('sale_date', $comic['sale_date']) }}" type="text"
                class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date"
                placeholder="data di vendita">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic['description']) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Modify</button>
    </form>
@endsection
