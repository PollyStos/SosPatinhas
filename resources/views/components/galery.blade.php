@php
    if (!isset($page)) {
        if (isset($galery->lostPets)) {
            $pets = $galery->lostPets;
        } elseif (isset($galery->foundPets)) {
            $pets = $galery->foundPets;
        }
    }
@endphp

<section class="py-5 text-center" style="background-color: {{ $bg }}">
    <h1 class="font-bold text-center mb-1 pt-1" style="color: {{ $font }}">
        {{ $galery->title->value ?? 'Titulo' }}
    </h1>
    <h3 class="font-bold text-center mb-3 pt-3" style="color: {{ $font }}">
        {{ $galery->subtitle->value ?? 'Subtitulo' }}
    </h3>

    @if (isset($page))
        {{-- Filtro por tipo de ocorrência --}}
        <div class="my-5 d-flex flex-wrap justify-content-center">
            <button class="btn_lost_found px-5 py-1 font-semibold mx-1 mb-2 bg_color_light color_primary border-0"
                data-filter="all">Todos</button>
            <button class="btn_lost_found px-5 py-1 font-semibold mx-1 mb-2 bg_color_primary color_white border-0"
                data-filter="found">Achados</button>
            <button class="btn_lost_found px-5 py-1 font-semibold mx-1 mb-2 bg_color_primary color_white border-0"
                data-filter="lost">Perdidos</button>
        </div>

        {{-- Filtro por raça --}}
        <div class="my-5 d-flex flex-wrap justify-content-center">
            <button
                class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_primary color_white border-0"
                data-type="all">Todos</button>
            <button
                class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_light color_primary border-0"
                data-type="cat">Gatos</button>
            <button
                class="btn_type_filter px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_light color_primary border-0"
                data-type="dog">Cachorros</button>
        </div>
    @endif

    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($pets as $item)
            @if (isset($page))
            <div class="col-md-3 pb-4 galery_rounded my-5 mx-md-2 bg_color_light pet-card"
                    data-lost="{{ $item->date_lost ? 'true' : 'false' }}"
                    data-found="{{ $item->date_found ? 'true' : 'false' }}"
                    data-type="{{ strtolower($item->pet_type) }}" style="max-width: 14rem">
            @else
            <div class="col-md-3 pb-4 galery_rounded my-5 mx-md-2 bg_color_light" style="max-width: 14rem">
            @endif
                <div class="flex items-center space-x-2 mb-4">
                    <div class="overflow-hidden d-flex justify-content-center align-items-center galery_rounded_top">
                        <img src="{{ asset('img/' . $item->pet_img) }}" class="object-cover" style="max-height: 14rem">
                    </div>
                </div>
                <h4>{{ $item->pet_name }}</h4>
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
                @if (isset($page) && $page == 'userGallery')
                    <div class="text-center mt-3">
                        <button
                            class="px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_primary color_white border-0 btn-editar-pet"
                            data-bs-toggle="modal" data-bs-target="#editPetModal" data-id="{{ $item->id }}"
                            data-owner="{{ $item->owner_id }}" data-finder="{{ $item->finder_id }}">
                            Editar
                        </button>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    @if (isset($page))
        <div class="container">
            <!-- Botão para cadastro -->
            <button class="px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_primary color_white border-0"
                id="btnCadastroPet">Cadastrar Pet Perdido</button>
        </div>
    @endif

    <!-- Modal de alerta -->
    <div class="modal fade" id="modalNotLogged" tabindex="-1" aria-labelledby="modalNotLoggedLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title w-100" id="modalNotLoggedLabel">Atenção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    Você não está logado.
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="{{ route('login') }}"
                        class="px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_primary color_white border-0">Ir
                        para Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editPetModal" tabindex="-1" aria-labelledby="editPetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{ route('updatePetInfo') }}"> {{-- ajuste essa rota --}}
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="editPetModalLabel"> Editar Informações do Pet - {{ $item->owner_id ? 'Perdido' : 'Achado' }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body">
                    <!-- CAMPOS OCULTOS -->
                    <input type="hidden" name="pet_id" id="petId">
                    <input type="hidden" name="status" id="petStatus">

                    <div class="d-flex">
                        <div class="col-5 mb-3 me-3 text-start">
                            <label for="userName" class="form-label">{{ !$item->owner_id ? 'Dono' : 'Quem encontrou' }}</label>
                            <input type="text" id="userName" class="form-control" autocomplete="off">
                            <input type="hidden" name="user_id" id="userId">
                            <ul class="list-group mt-1" id="userSuggestions"></ul>
                        </div>
                        <div class="mb-3 col-4 me-3 text-start">
                            <label for="editLocale" class="form-label">Local</label>
                            <input type="text" class="form-control" name="locale" id="editLocale">
                        </div>
                        <div class="col-2 mb-3 text-start">
                            <label for="editDate" class="form-label">Data</label>
                            <input type="date" class="form-control" name="date" id="editDate">
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="editTestimony" class="form-label">Depoimento</label>
                        <textarea class="form-control" name="testimony" id="editTestimony" rows="3"></textarea>
                    </div>
                </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (isset($page) && $page == 'userGallery')
        <script>
            const users = @json($users);

            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('editPetModal'));
                const userInput = document.getElementById('userName');
                const userIdInput = document.getElementById('userId');
                const suggestionBox = document.getElementById('userSuggestions');

                // Abrir modal e preencher dados
                document.querySelectorAll('.btn-editar-pet').forEach(button => {
                    button.addEventListener('click', () => {
                        const status = !button.dataset.owner ? 'perdido' : (!button.dataset.finder ? 'achado' : '');
                        
                        document.getElementById('petStatus').value = status;
                        document.getElementById('petId').value = button.dataset.id;                        
                        modal.show();
                    });
                });

                // Autocomplete usuários
                userInput.addEventListener('input', function() {
                    const query = this.value.toLowerCase();
                    suggestionBox.innerHTML = '';

                    if (query.length < 2) return;

                    const results = users.filter(u => u.name.toLowerCase().includes(query));

                    results.forEach(user => {
                        const item = document.createElement('li');
                        item.classList.add('list-group-item');
                        item.textContent = user.name;
                        item.style.cursor = 'pointer';

                        item.addEventListener('click', () => {
                            userInput.value = user.name;
                            userIdInput.value = user.id;
                            suggestionBox.innerHTML = '';
                        });

                        suggestionBox.appendChild(item);
                    });
                });
            });
        </script>
    @endif

     <script>
        document.getElementById('btnCadastroPet').addEventListener('click', function () {
            @auth
                // Redireciona se o usuário estiver autenticado
                window.location.href = "{{ route('formCadrastoPet') }}";
            @else
                // Abre o modal se não estiver logado
                var modal = new bootstrap.Modal(document.getElementById('modalNotLogged'));
                modal.show();
            @endauth
        });
        
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