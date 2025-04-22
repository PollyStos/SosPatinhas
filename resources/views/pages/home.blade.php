@extends('layouts.layout')

@section('title','Home')

@section('content')
    @include('component.about')
    @include('component.galery')
    @include('component.galery')
    @include('component.feature')
    @include('component.depoiment')
    @include('component.blog')
    @include('component.message')
@endsection
