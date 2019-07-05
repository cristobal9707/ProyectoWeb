@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#2ecc71">
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card style="padding: 10px;">
                    <h1>Nueva Atencion</h1>
                    <v-divider></v-divider>
                    <h3>Datos de la Atencion</h3>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/atencion" method="POST">
                        @csrf
                        <v-layout>
                            <v-flex xs5>
                                <label>Persona</label>
                                <select class="form-control btn-lg" type="text" id="persona_id" name="persona_id"
                                    label="Persona_id">
                                    @foreach ($Personas as $item)
                                    <option value="{{ $item->id}}"> {{ $item->id}} - {{ $item->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                            </v-flex>
                            <v-flex xs5>
                                <label>Nombre</label>
                                <input type="text" class="form-control btn-lg" id="nombre" 
                                name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs5>
                                <label>Area</label>
                                <select class="form-control btn-lg" type="text" id="recursoshumano_id" name="recursoshumano_id"
                                    label="Recursoshumano_id">
                                    @foreach ($Recursos as $item)
                                    <option value="{{ $item->id}}"> {{ $item->id}} - {{ $item->estamento }}
                                    </option>
                                    @endforeach
                                </select>
                            </v-flex>
                            <v-flex xs5>
                                <label>Descripcion</label>
                                <input type="text" class="form-control btn-lg" id="descripcion" 
                                name="descripcion" placeholder="Descripcion" value="{{old('descripcion')}}">
                            </v-flex>
                        </v-layout>

                        <v-btn color="success" type="submit">Agregar</v-btn>
                        <v-btn color="error" href="/atencion"> Cancelar </v-btn>
                    </form>
                </v-card>
            </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
