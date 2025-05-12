<section class="testimonial-section py-5 d-flex align-items-center bg_color_light_transparent" style="height: 100vh">
  <div class="d-flex flex-column w-100 h-75 rounded-3  py-5">
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner mx-auto ">
        @foreach($depoiments as $index => $dep)
          <div class="carousel-item mx-5 {{ $index === 0 ? 'active' : '' }}">
            <div class="row align-items-center mx-5">
              
              <!-- Coluna da Imagem -->
              <div class="col-md-4 text-center position-relative mb-4 mb-md-0">
                <div class="owner-img-wrapper position-relative d-inline-block">
                  <img src="{{ asset('img/' . $dep->owner->img) }}" alt="Dono do Pet" class="rounded-circle owner-img" style="width: 200px; height: 200px; object-fit: cover;">
                  <img src="{{ asset('img/' . $dep->pet_img) }}" alt="Imagem do Pet" class="rounded-circle pet-img position-absolute" style="width: 65px; height: 65px; bottom: 0; right: 0; object-fit: cover; border: 3px solid white;">
                </div>
              </div>

              <!-- Coluna de Texto -->
              <div class="col-md-6">
                <h4 class="font-weight-bold">{{ $dep->pet_name }} foi encontrado!</h4>
                <h6 class="text-muted mb-3">Por {{ $dep->owner->name }}</h6>
                <p class="lead">{{ $dep->depoiment }}</p>
              </div>

            </div>
          </div>
        @endforeach
      </div>
      <!-- Indicadores -->
      
      <ol class="carousel-indicators custom-indicators text-center mt-4">
        @foreach($depoiments as $index => $dep)
          <li data-target="#testimonialCarousel" data-slide-to="{{ $index }}" class="dot {{ $index === 0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>

      <a class="carousel-control-prev color_primary" href="#testimonialCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only fs-1"><</span>
      </a>
      <a class="carousel-control-next color_primary" href="#testimonialCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only fs-1">></span>
      </a>
    </div>
  </div>
</section>
