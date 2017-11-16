@extends('layouts.master')
@section('content')

@foreach($products as $product)
{{$product->name}}
@endforeach

@endsection
