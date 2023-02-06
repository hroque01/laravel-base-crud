@extends('layouts.main-layout')

@section('main')
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="/saint/{{ $saint -> id }}">
                    <div>
                        Saint: {{ $saint -> name}} -  {{$saint -> lastname}}
                    </div>
                    <div>
                        Place of birth: {{ $saint -> place_of_birth }}
                    </div>
                    <div>
                        Benedition: {{ $saint -> benedition}}
                    </div>
                    <div>
                        Miracles: {{ $saint -> miracles}}
                    </div>
                </a>    
            </li>
        @endforeach
    </ul>
@endsection