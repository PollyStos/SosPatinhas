@extends('layouts.layout')

@section('title','Home')

@section('content')
    @include('components.banner', ['banner' => $section->home->banner ?? null])
    @include('components.about', ['about' => $section->home->about ?? null,'size' => 'height: 70vh'])
    @include('components.galery', ['galery' => $section->home->lost ?? null, 'bg' => '#058158', 'font' => '#f0f8ff'])
    @include('components.galery', ['galery' => $section->home->found ?? null, 'bg' => '#f0f8ff', 'font' => '#058158'])
    @include('components.feature', ['feature' => $section->home->donate ?? null])
    @include('components.depoiment')
    @include('components.blog', ['blog' => $section->home->blog ?? null])
    @include('components.message', ['contact' => $section->home->contact ?? null])
@endsection
