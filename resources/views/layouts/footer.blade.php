<section class="pt-12" style="background-color: #058158; color: #f0f8ff;">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="px-4">
            <div class="flex items-center space-x-2 mb-4">
                <img src="{{ asset('img/logoSosPatinhas.png') }}" class="h-8 w-auto">
            </div>
            <p class="text-sm">
                No SOS Patinhas, nossa missão vai muito além de apenas encontrar pets perdidos.
                Queremos reunir famílias, restaurar lares e devolver a alegria que só um animal de estimação pode trazer.
            </p>
        </div>

        <div class="px-4">
            <h3 class="text-lg font-semibold mb-4">Links Úteis</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Sobre</a></li>
                <li><a href="#" class="hover:underline">Painel</a></li>
                <li><a href="#" class="hover:underline">Blog</a></li>
                <li><a href="#" class="hover:underline">Contato</a></li>
                <li><a href="#" class="hover:underline">Termos de uso</a></li>
                <li><a href="#" class="hover:underline">Responsabilidade Social</a></li>
            </ul>
        </div>

        <div class="px-4">
            <h3 class="text-lg font-semibold mb-4">Contato</h3>
            <p class="text-sm mb-4">
                Email: <a href="mailto:patinhas@gmail.com" class="underline">patinhas@gmail.com</a>
            </p>
            <p class="text-sm font-semibold mb-2">Redes Sociais</p>
            <div class="flex space-x-3">
                @foreach (range(1, 4) as $i)
                    <div class="w-6 h-6 rounded-full bg-[#f0f8ff]"></div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="mt-12 py-6 px-12 text-sm text-center md:flex md:justify-between md:text-left" style="background-color:#055639">
        <p class="">Direitos reservados para SOS Patinhas</p>
        <p>Desenvolvido por João Guilherme, Polyana Santos, Yago Vieira</p>
    </div>
</section>
