<section class="py-12 my-6 text-center">
    <h2 class="text-lg font-semibold mb-6" style="color: #058158;">
        {{$contact->subtitle->value}}
    </h2>

    <form action="#" method="POST" class="flex items-center justify-center gap-0 max-w-xl mx-auto">
        @csrf
        <input 
            type="text" 
            name="mensagem" 
            placeholder="Digite sua mensagem..." 
            class="flex-1 rounded-l-full px-6 text-sm outline-none border-none" 
            style="background-color: #6dec9e; color: #058158; padding-top: 0.85rem; padding-bottom: 0.85rem"
        />
        <button 
            type="submit" 
            class="rounded-full px-8 py-3 font-bold text-white"
            style="background-color: #055639; margin-left: -2rem"
        >
            Enviar
        </button>
    </form>
</section>
