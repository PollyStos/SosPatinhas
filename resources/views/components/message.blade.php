<section class="py-12 text-center" style="background-color: #f0f8ff;">
    <h2 class="text-lg font-semibold mb-6" style="color: #058158;">
        Nos envie uma mensagem!
    </h2>

    <form action="#" method="POST" class="flex items-center justify-center gap-0 max-w-xl mx-auto">
        @csrf
        <input 
            type="text" 
            name="mensagem" 
            placeholder="Digite sua mensagem..." 
            class="flex-1 rounded-l-full px-6 py-3 text-sm outline-none border-none" 
            style="background-color: #6dec9e; color: #058158;"
        />
        <button 
            type="submit" 
            class="rounded-r-full px-8 py-3 font-bold text-white"
            style="background-color: #058158;"
        >
            Enviar
        </button>
    </form>
</section>
