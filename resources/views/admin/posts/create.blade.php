@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="excerpt" class="form-label">Extracto</label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required>{{ old('excerpt') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Estado</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="draft">Borrador</option>
                        <option value="published">Publicado</option>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Guardar Post</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection