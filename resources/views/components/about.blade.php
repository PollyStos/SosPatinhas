  <section class="d-flex justify-content-center align-items-center bg_color_white {{$margin?? null}}" style="{{$size ?? null}}">
    <div class="bg_color_light_transparent rounded-3 shadow w-100 container px-3 py-5">
      @if(isset($about->title))
        <h1 class="font-bold text-center mb-5 pt-5 color_primary">
          {{$about->title->value}}
        </h1>
      @endif
      <div class="px-10 py-5">
        <p class="text-justify">
          {!!$about->paragraph->value !!}
        </p>
      </div>
    </div>
  </section>
