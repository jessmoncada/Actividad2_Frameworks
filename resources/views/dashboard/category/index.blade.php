@extends('layouts.app')

@section('content')
    <a class="btn btn-warning my-3" href="{{ route('categories.create') }}">Crear categoría</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre categoría</th>
                <th>Slug</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->slug }}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-info edit" href="{{ route('categories.edit', $c) }}">Editar</a>
                        <a class="btn btn-primary btn-purple" href="{{ route('categories.show', $c) }}">Ver</a>
                        <form action="{{ route('categories.destroy', $c) }}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-action delete" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
