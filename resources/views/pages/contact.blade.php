@extends('layouts.layout')

@section('title','Contact')

@section('content')
    @include('components.banner', ['banner' => $section->contato->banner ?? null,'page' => 'contact'])
   
    <section class="container py-5">
    <div class="row">
        <!-- Coluna Esquerda -->
        <div class="col-md-5 d-flex flex-column justify-content-center bg_color_light p-4">
            <h2 class="mb-4 font-bold">Entre em Contato</h2>

            <p><i class="fas fa-envelope me-2"></i>contato@seudominio.com</p>
            <p><i class="fas fa-phone me-2"></i>(11) 99999-9999</p>

            <div class="mt-4">
                <a href="https://facebook.com" target="_blank" class="me-3">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="me-3">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://whatsapp.com" target="_blank">
                    <i class="fab fa-whatsapp fa-lg"></i>
                </a>
            </div>
        </div>

        <!-- Coluna Direita -->
        <div class="col-md-7 bg_color_white p-4">
            <h2 class="mb-4 font-bold">Fale Conosco</h2>

            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Seu nome" required>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
                </div>

                <div class="mb-3">
                    <textarea name="message" class="form-control" rows="5" placeholder="Mensagem" required></textarea>
                </div>

                <button type="submit" class="btn bg_color_primary color_white px-4 py-2">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection
