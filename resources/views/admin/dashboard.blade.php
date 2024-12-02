@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bienvenido al Panel de Administración</h5>
                    <p class="card-text">Desde aquí puedes gestionar los posts de tu blog.</p>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection