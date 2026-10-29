@extends('layouts.app')

@section('contenido')

    <h2>Listado de libros</h2>

    @if($libros->isEmpty())

        <p>No hay libros registrados en la base de datos.</p>

    @else

        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicación</th>
                </tr>
            </thead>

            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

@endsection