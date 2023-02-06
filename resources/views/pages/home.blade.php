@extends('layouts.main-layout')

@section('main')
    <ul>
        @foreach ($saints as $saint)
            <li>
                <div>
                    <a href="/saint/{{ $saint -> id }}">
                        Saint: {{ $saint -> name}} -  {{$saint -> lastname}}
                    </a> 
                    -
                    <a href="{{ route('saint.destroy', ['id' => $saint -> id])}}">DELETE</a>

                </div>

            </li>
            <br>
        @endforeach
    </ul>
@endsection