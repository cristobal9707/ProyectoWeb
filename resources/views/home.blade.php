@extends('layouts.app')
@section('content')
<div id="app">
        <v-app id="inspire" style="background-color:#2ecc71">
            <v-container grid-list-lg>
                <v-layout align-space-around justify-center column class="form-contenedor">
                    <v-card style="padding: 10px; margin-bottom: 10px;">
                        <v-carousel hide-delimiters>
                            <v-carousel-item v-for="carrusel in carruseles" v-bind:key="carrusel.id" :src="carrusel.src">
                            </v-carousel-item>
                        </v-carousel>
                    </v-card>
                </v-layout>
            </v-container>
        </v-app>
    </div>
@endsection
