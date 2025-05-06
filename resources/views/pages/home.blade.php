@extends('layouts.layout')

@section('title','Home')

@section('content')
    @include('components.about')
    @include('components.galery')
    @include('components.galery')
    @include('components.feature')
    @include('components.depoiment')
    @include('components.blog')
    @include('components.message')
@endsection
