@extends('layouts.layout')

@section('title','userGallery')

@section('content')
    @include('components.galery', [ 'bg' => '#f0f8ff', 'font' => '#058158','page'=>'userGallery'])
@endsection
