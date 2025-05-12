<section class="d-flex flex-column color_white bg_color_primary">
    <div class="d-flex justify-content-center container mt-5">
        
        <div class="col-12 col-md-4 p-4">
            <div class="d-flex align-items-center space-x-2 mb-4">
                <img src="{{ asset('img/logoSosPatinhas.png') }}" class="" style="width: 10rem">
            </div>
            <p class="text-sm">
                No SOS Patinhas, nossa missão vai muito além de apenas encontrar pets perdidos.
                Queremos reunir famílias, restaurar lares e devolver a alegria que só um animal de estimação pode trazer.
            </p>
        </div>

        <div class="col-12 col-md-4 px-4">
            <h3 class="text-lg font-semibold mb-4">Links Úteis</h3>
            <ul class="space-y-1 text-sm black">
                <li><a href="#" class="footer-a">Home</a></li>
                <li><a href="#" class="footer-a">Sobre</a></li>
                <li><a href="#" class="footer-a">Painel</a></li>
                <li><a href="#" class="footer-a">Blog</a></li>
                <li><a href="#" class="footer-a">Contato</a></li>
                <li><a href="#" class="footer-a">Termos de uso</a></li>
                <li><a href="#" class="footer-a">Responsabilidade Social</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-4 px-4">
            <h3 class="text-lg font-semibold mb-4">Contato</h3>
            <p class="text-sm mb-4">
                Email: <a href="mailto:patinhas@gmail.com" class="email-a">patinhas@gmail.com</a>
            </p>
            <p class="text-sm font-semibold mb-2">Redes Sociais</p>
            <div class="flex space-x-3">
                @foreach (range(1, 4) as $i)
                    <div class="w-6 h-6 rounded-full bg-[#f0f8ff]"></div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="mt-5" style="background-color:#055639;">
        <div class="container my-3 py-3 px-5 text-sm text-center d-md-flex justify-content-md-between align-items-center" >
            <p class="">Direitos reservados para SOS Patinhas</p>
            <p>Desenvolvido por João Guilherme, Polyana Santos, Yago Vieira</p>
        </div>
    </div>
</section>
