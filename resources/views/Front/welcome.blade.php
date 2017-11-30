<!--<!doctype html>-->
@extends('layouts.master')

@section('nav')
    @include('Front.nav')
@endsection

@section('left')
    @include('Front.Left')
@endsection

@section('right')
    @include('Front/productindex',compact('$products'));
@endsection

