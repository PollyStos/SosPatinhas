@extends('layouts.layout')

@section('title', $blog->title)
@php
    $banner = (object)[
    'title' => (object)['value' => $blog->title],
    'subtitle' => (object)['value' => $blog->subtitle],
    'image' => (object)['value' => $blog->img],
];
@endphp

@section('content')
@include('components.banner', ['banner' => $banner ?? null,'page' => 'blog'])
  <section class="d-flex justify-content-center align-items-center bg_color_white m-5">
    <div class="bg_color_light_transparent rounded-3 shadow w-100 container px-3 py-5">
      <div class="px-10 py-5">
        <p class="text-justify">
           {!! $blog->content !!}
        </p>
      </div>
    </div>
  </section>
@endsection
