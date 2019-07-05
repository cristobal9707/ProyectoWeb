@extends('layouts.app')
@section('content')

<div id="app">
        <v-app id="inspire" style="background-image: url(https://images2.alphacoders.com/102/1026253.jpg);">
            <v-container grid-list-lg>
                <v-layout align-space-around justify-center column class="form-contenedor">
                    <v-card style="padding: 10px; margin-bottom: 10px;">
                        <h2>Historial de Atencion</h2>
                        <v-divider></v-divider>
                        <a href="/atencion/create" class="btn btn-success btn-lg" role="button" aria-pressed="true">Solicitar Atencion</a>
                            <table class="table" style="margin-top: 10px;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Persona</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Area</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Atenciones as $item)
                                    <tr class="table-info">
                                        <td scope="row">{{ $item->created_at}}</td>
                                        <td>{{ $item->persona->nombre }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->recurso->estamento }}</td>
                                        <td>
                                            <form action="/atencion/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="/atencion/{{ $item->id }}" class="btn btn-primary" role="button" aria-pressed="true">Informacion</a>
                                                <button type="submit" class="btn btn-danger">Cancelar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </v-card>
                </v-layout>
            </v-container>
        </v-app>
    </div>
@endsection
