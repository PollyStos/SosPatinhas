@extends('layouts.layout')

@section('title','About')

@section('content')
    @include('components.banner', ['banner' => $section->sobre->banner ?? null,'page' => 'about'])
    @include('components.about', ['about' => $section->sobre->about ?? null,'size' => 'height: auto','margin' => 'my-5'])
@endsection
