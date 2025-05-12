@php
    if(!isset($page)){
        if (isset($galery->lostPets)) {
        $pets = $galery->lostPets;
        
        } elseif (isset($galery->foundPets)) {
            $pets = $galery->foundPets;
        }
    }
    // dd($pets);
@endphp

<section class="py-5 text-center" style="background-color: {{$bg}}">
    <h1 class="font-bold text-center mb-1 pt-1" style="color: {{ $font }}">
    {{ $galery->title->value ?? 'Titulo' }}
    </h1>
    <h3 class="font-bold text-center mb-3 pt-3" style="color: {{ $font }}">
        {{ $galery->subtitle->value ?? 'Subtitulo' }}
    </h3>
    
    @if(isset($page))
        {{-- Filtro por tipo de ocorrência --}}
        <div class="my-5">
            <button class="btn_lost_found px-5 py-1 font-semibold mx-0 bg_color_light color_primary border-0" data-filter="all">Todos</button>
            <button class="btn_lost_found px-5 py-1 font-semibold mx-0 bg_color_primary color_white border-0" data-filter="found">Achados</button>
            <button class="btn_lost_found px-5 py-1 font-semibold mx-0 bg_color_primary color_white border-0" data-filter="lost">Perdidos</button>
        </div>

        {{-- Filtro por raça --}}
        <div class="my-5">
            <button class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-4 bg_color_primary color_white border-0" data-type="all">Todos</button>
            <button class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-4 bg_color_light color_primary border-0" data-type="cat">Gatos</button>
            <button class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-4 bg_color_light color_primary border-0" data-type="dog">Cachorros</button>
        </div>
    @endif

    <div class="container d-flex flex-wrap justify-content-center">

        @foreach ($pets as $item)  
        @if (isset($page))
            <div class="col-md-3 pb-4 galery_rounded my-5 mx-md-2 bg_color_light pet-card"
                data-lost="{{ $item->date_lost ? 'true' : 'false' }}"
                data-found="{{ $item->date_found ? 'true' : 'false' }}"
                data-type="{{ strtolower($item->pet_type) }}"
                style="max-width: 14rem">
        @else
            <div class="col-md-3 pb-4 galery_rounded my-5 mx-md-2 bg_color_light" style="max-width: 14rem">
        @endif
            <div class="flex items-center space-x-2 mb-4">
                <div class="overflow-hidden d-flex justify-content-center align-items-center galery_rounded_top">
                    <img src="{{ asset('img/'.$item->pet_img) }}" class=" object-cover" style="max-height: 14rem">
                </div>
            </div>
            <h4>{{$item->pet_name}}</h4>
            <div class="px-3">
                <p class="text-start m-0">
                    <i class="fas fa-calendar-alt me-2"></i>{{ $item->date_lost ?? $item->date_found }}
                  </p>
                  <p class="text-start m-0">
                    <i class="fas fa-paw me-2"></i>{{ $item->pet_breed }}
                  </p>
                  <p class="text-start m-0">
                    <i class="fas fa-map-marker-alt me-2"></i>{{ $item->last_view_locale ?? $item->found_locale }}
                  </p>
            </div>
        </div>
        @endforeach
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentType = 'all';
        let currenttype = 'all';

        const cards = document.querySelectorAll('.pet-card');

        const updateCards = () => {
            cards.forEach(card => {
                const isLost = card.dataset.lost === 'true';
                const isFound = card.dataset.found === 'true';
                const type = card.dataset.type;

                let show = true;

                // Filtro tipo
                if (currentType === 'lost' && !isLost) show = false;
                if (currentType === 'found' && !isFound) show = false;

                // Filtro raça
                if (currenttype !== 'all' && currenttype !== type) show = false;

                card.style.display = show ? 'block' : 'none';
            });
        };

        document.querySelectorAll('.btn_lost_found').forEach(btn => {
            btn.addEventListener('click', () => {
                currentType = btn.dataset.filter;
                updateCards();
            });
        });

        document.querySelectorAll('.btn_type_filter').forEach(btn => {
            btn.addEventListener('click', () => {
                currenttype = btn.dataset.type;
                updateCards();
            });
        });

        updateCards(); // Inicializa
    });
</script>

</section>
