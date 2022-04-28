@extends('layouts.app')

@section('content')
@include('home.hero')
@include('home.formacion')
@include('home.habilidades')
@include('home.herramientas')

@endsection

@section('content-2')
@include('home.tarjeta')

{{--hola--}}

@endsection