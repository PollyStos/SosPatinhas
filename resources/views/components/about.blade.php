<section class="py-12" style="background-color: #058158; color: #f0f8ff;">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <div class="flex items-center space-x-2 mb-4">
                <img src="{{ asset('images/colocarlogo') }}">
            </div>
            <p class="text-sm">
                No SOS Patinhas, nossa missão vai muito além de apenas encontrar pets perdidos. Queremos reunir famílias, restaurar lares e devolver a alegria que só um animal de estimação pode trazer. Sabemos que um pet não é apenas um animal: é um membro da família, um companheiro fiel e uma fonte inesgotável de amor. Por isso, trabalhamos para encurtar distâncias e criar pontes entre corações que nunca deveriam ter sido separados.Com o SOS Patinhas, cada reencontro é uma nova história de esperança, carinho e felicidade. Estamos aqui para garantir que nenhum latido ou miado de saudade fique sem resposta.
            </p>
        </div>

        <div>
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

        <div>
            <h3 class="text-lg font-semibold mb-4">Contato</h3>
            <p class="text-sm mb-4">Email: <a href="mailto:patinhas@gmail.com" class="underline">patinhas@gmail.com</a></p>
            <p class="text-sm font-semibold mb-2">Redes Sociais</p>
            <div class="flex space-x-3">
                @foreach (range(1, 4) as $i)
                    <div class="w-6 h-6 rounded-full bg-[#f0f8ff]"></div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-12 pt-4 text-sm text-center md:flex md:justify-between md:text-left border-t" style="border-color: #f0f8ff;">
        <p class="mb-2 md:mb-0">Direitos reservados para SOS Patinhas</p>
        <p>Desenvolvido por Polyana, João, Yago</p>
    </div>
</section>
