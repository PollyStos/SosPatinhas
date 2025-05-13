@extends('layouts.layout')

@section('title','Galery')

@section('content')
    @include('components.banner', ['banner' => $section->galeria->banner ?? null,'page' => 'galery'])
    @include('components.galery', ['bg' => '#f0f8ff', 'font' => '#058158','page'=>'galery'])
@endsection
