  <section class="flex justify-center items-center min-h-screen" style="background-color: #fff">
    <div class="bg-[#f0f8ff] rounded-2xl shadow-md w-full max-w-6xl px-6 py-12">
      <h1 class="text-4xl font-bold text-center mb-10 pt-12" style="color: #058158;">
        {{$about->title->value}}
      </h1>
      
      <div class="px-10 py-6">
        <p class="text-justify text-base leading-relaxed">
          {{$about->paragraph->value}}
        </p>
      </div>
    </div>
  </section>
