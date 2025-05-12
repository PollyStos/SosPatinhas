<section class="py-5 my-5 text-center">
    <h2 class="text-lg font-semibold mb-6 color-primary">
        {{$contact->subtitle->value}}
    </h2>

    <form action="{{ route('contact.send') }}" method="POST" class="d-flex align-items-center justify-content-center mt-3">
        @csrf
        <input 
            type="text" 
            name="email" 
            placeholder="Digite seu email" 
            class="d-flex rounded-pill px-5 text-sm border-0 color_primary bg_color_light " 
            style="padding-top: 0.85rem; padding-bottom: 0.85rem"
        />
        <button 
            type="submit" 
            class="rounded-pill px-5 py-3 font-bold text-white border-0 bg_color_primary"
            style="margin-left: -3rem"
        >
            Enviar
        </button>
    </form>
</section>
