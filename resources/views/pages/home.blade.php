@extends('layouts.main-layout')

@section('main')
    <ul>
        @foreach ($saints as $saint)
            <li>
                <div>
                    <a href="/saint/{{ $saint -> id }}">
                        Saint: {{ $saint -> name}} -  {{$saint -> lastname}}
                    </a> 
                </div>
            </li>
            <br>
        @endforeach
    </ul>
@endsection