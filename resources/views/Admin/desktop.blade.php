
@extends('layouts.admin')

@section('nav')
    @include('Admin.navadmin')
@endsection

@section('left')
    @include('Admin.Leftpanel')
@endsection

@section('right')
    @include('Admin/desktopindex',compact('$desktops'));
@endsection
