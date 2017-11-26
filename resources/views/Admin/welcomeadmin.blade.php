
@extends('layouts.master')

@section('nav')
    @include('Admin.navadmin')
@endsection

@section('left')
    @include('Admin.Leftpanel')
@endsection

@section('right')
    @include('Admin.user-index')
@endsection
