@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <h2 class="text-center mb-4">Cadastro de Novo Pet</h2>

        <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="pet_name">Nome do Pet</label>
                <input type="text" class="form-control" id="pet_name" name="pet_name" required>
            </div>

            <div class="form-group mb-3">
                <label for="pet_img">Imagem do Pet</label>
                <input type="file" class="form-control" id="pet_img" name="pet_img" accept="image/*" required>
            </div>

            <div class="form-group mb-3">
                <label for="pet_type">Tipo de Pet</label>
                <select class="form-control" id="pet_type" name="pet_type" required>
                    <option value="dog">Cachorro</option>
                    <option value="cat">Gato</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="pet_breed">Raça do Pet</label>
                <input type="text" class="form-control" id="pet_breed" name="pet_breed" required>
            </div>
            <div class="form-group mb-3">
                <label for="locale">Ultimo local visto ou local achado</label>
                <input type="text" class="form-control" id="local" name="locale" required>
            </div>

            <div class="form-group mb-3">
                <label for="date">Data de Encontro/Perda</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group mb-3">
                <label for="status">Status do Pet</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="lost">Perdido</option>
                    <option value="found">Achado</option>
                </select>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="px-5 py-1 rounded-pill font-semibold mx-1 mb-2 bg_color_primary color_white border-0">Cadastrar Pet</button>
            </div>
        </form>
    </div>
@endsection
