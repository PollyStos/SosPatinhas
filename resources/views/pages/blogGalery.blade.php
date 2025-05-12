@extends('layouts.layout')

@section('title', 'Blog')

@section('content')
    @include('components.banner', ['banner' => $section->blog->banner ?? null, 'page' => 'blog'])

    <section class="py-5 text-center bg_color_white">
        <div class="container d-flex flex-wrap justify-content-center">
            @foreach ($blogs as $item)
                <div class="col-md-3 pb-4 galery_rounded my-5 mx-md-2 bg_color_light d-flex flex-column justify-content-between" style="max-width: 14rem">
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="overflow-hidden d-flex justify-content-center align-items-center galery_rounded_top">
                                <img src="{{ asset('img/' . $item->img) }}" class="object-cover" style="max-height: 14rem">
                            </div>
                        </div>
                        <h4>{{ $item->title }}</h4>
                    </div>

                    <div class="mt-auto text-center">
                        <a href="{{ route('blog.show', $item->id) }}" class="btn bg_color_primary color_white mt-3">Ler
                            artigo</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
