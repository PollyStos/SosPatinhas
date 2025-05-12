@php
if(!isset($page)){
    $dataBanner = [];

    foreach ($banner->title as $index => $title) {
        $dataBanner[] = [
            'title' => $title->value,
            'subtitle' => $banner->subtitle[$index]->value ?? null,
            'image' => $banner->image[$index]->value ?? null,
        ];
    }
} else {
    $dataBanner[] = [
        'title' => $banner->title->value,
        'subtitle' => $banner->subtitle->value ?? null,
        'image' => $banner->image->value ?? null,
    ];
}
@endphp

<section class="testimonial-section d-flex align-items-center bg_color_light_transparent" style="height: 100vh; overflow: hidden;">
    <div class="d-flex flex-column w-100 h-100 rounded-3">
        <div id="testimonialCarousel" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner position-relative h-100">
                @foreach($dataBanner as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }} h-100">
                        <div class="w-100 h-100 text-center position-relative">
                            <img src="{{ asset('public/img/' . $item['image']) }}"
                                 alt="Banner {{ $key + 1 }}"
                                 class="w-100 h-100"
                                 style="object-fit: cover; opacity: 70%;">

                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center text-center w-100 h-100">
                                <h5 class="color_black">{{ $item['title'] }}</h5>
                                <p class="color_black">{{ $item['subtitle'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (!isset($page))
                
                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>

                <!-- Indicadores -->
                <div class="carousel-indicators">
                    @foreach($dataBanner as $key => $item)
                        <button type="button"
                                data-bs-target="#testimonialCarousel"
                                data-bs-slide-to="{{ $key }}"
                                class="{{ $key === 0 ? 'active' : '' }}"
                                aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $key + 1 }}">
                        </button>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
