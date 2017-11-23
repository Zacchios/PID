@extends('layouts.app')
@section('content')

    @foreach($desktops as $desktop)
        {{$desktop->product->name}}<br>
    @endforeach

@endsection
