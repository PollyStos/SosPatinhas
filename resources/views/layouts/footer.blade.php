<section class="d-flex flex-column color_white bg_color_primary">
    <div class="container mt-5">
        <div class="d-flex flex-column flex-md-row justify-content-center">
            
            <div class="col-12 col-md-4 p-4">
                <div class="d-flex align-items-center space-x-2 mb-4">
                    <img src="{{ asset('public/img/logoSosPatinhas.png') }}" style="width: 10rem">
                </div>
                <p class="text-sm">
                    No SOS Patinhas, nossa missão vai muito além de apenas encontrar pets perdidos.
                    Queremos reunir famílias, restaurar lares e devolver a alegria que só um animal de estimação pode trazer.
                </p>
            </div>

            <div class="col-12 col-md-4 p-4">
                <h3 class="text-lg font-semibold mb-4">Links Úteis</h3>
                <ul class="space-y-1 text-sm black p-0 m-0" style="list-style: none;">
                    <li><a href="/" class="footer-a">Home</a></li>
                    <li><a href="/about" class="footer-a">Sobre</a></li>
                    <li><a href="/galery" class="footer-a">Galeria</a></li>
                    <li><a href="/blog" class="footer-a">Blog</a></li>
                    <li><a href="/contact" class="footer-a">Contato</a></li>
                    <li><a href="/terms" class="footer-a">Termos de uso</a></li>
                    <li><a href="/responsability" class="footer-a">Responsabilidade Social</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4 p-4">
                <h3 class="text-lg font-semibold mb-4">Contato</h3>
                <p class="text-sm mb-4">
                    Email: <a href="mailto:patinhas@gmail.com" class="email-a">patinhas@gmail.com</a>
                </p>
                <p class="text-sm font-semibold mb-2">Redes Sociais</p>
                <div class="d-flex gap-2">
                    @foreach (range(1, 4) as $i)
                        <div class="rounded-circle" style="width: 24px; height: 24px; background-color: #f0f8ff;"></div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div class="mt-5" style="background-color:#055639;">
        <div class="container my-3 py-3 px-5 text-sm text-center d-md-flex justify-content-md-between align-items-center">
            <p class="mb-2 mb-md-0">Direitos reservados para SOS Patinhas</p>
            <p class="mb-0">Desenvolvido por João Guilherme, Polyana Santos, Yago Vieira</p>
        </div>
    </div>
</section>
