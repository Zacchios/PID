
@extends('layouts.admin')

@section('nav')
    @include('Admin.navadmin')
@endsection

@section('left')
    @include('Admin.Leftpanel')
@endsection

@section('right')
    @include('Front/productindex',compact('$products'));
@endsection
