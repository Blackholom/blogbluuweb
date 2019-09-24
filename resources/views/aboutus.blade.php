@extends('template')

@section('section')

    <h1>This my work team</h1>

    @foreach($team as $member)
        <a href="#" class="h4 text-danger">{{ $member }}</a><br>
    @endforeach

@endsection
