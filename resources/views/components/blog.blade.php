<section class="py-5 text-center bg_color_primary d-flex flex-column">
    <h1 class="font-bold text-center mb-1 pt-5 color_white">
        {{ $blog->title->value }}
    </h1>
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($blog->blogs as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4 galery_rounded my-5 mx-2 bg_color_light d-flex flex-column justify-content-between" style="max-width: 14rem">
                <div>
                    <div class="flex items-center space-x-2 mb-4 rounded-3">
                        <div class="overflow-hidden d-flex justify-content-center align-items-center">
                            <img src="{{ asset('public/img' . $article->img) }}" class="object-cover" style="max-height: 12rem">
                        </div>
                    </div>
                    <h4>{{ $article->title }}</h4>
                </div>

                <div class="mt-auto text-center">
                    <a href="{{ route('blog.show', $article->id) }}" class="btn bg_color_primary color_white mt-3">Ler artigo</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
