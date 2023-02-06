@extends('layouts.main-layout')

@section('main')
    <h1>SAINT: {{ $saint -> name}} - {{ $saint -> lastname}}</h1>
    <div>
        <h3>Place of birth: {{ $saint -> place_of_birth }}</h3>
        <h3>Miracles: {{ $saint -> miracles }}</h3>
    </div>
@endsection