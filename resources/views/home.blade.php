<x-layout_base>

    <x-menu></x-menu>

    <div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_667836-MLA74349586053_022024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_806000-MLA75393863908_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_859602-MLA75368444934_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_922106-MLA75377276862_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide5" class="btn btn-circle">❯</a>
</div>
    </div>
    <div id="slide5" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_997780-MLA75425140714_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
</div>

    <div class="bg-white rounded-md shadow-md m-6 p-6">
      <div claa="font-bold text-lg">
          Ofertas do dia
      </div>
      <div class="grid grid-cols-4 gap-3">
        {{-- for(variavel = inicio; até onde; de quanto aumenta) --}}
        @for ($i = 0; $i < 76; $i++)
        <div class="card bg-base-100 shadow-xl">
          <figure><img src="https://picsum.photos/400?randow{{$i}}" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">{{fake()->company()}}</h2>
            <p>{{fake()->realText(100, 1)}}</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary">Compre já</button>
            </div>
          </div>
        </div>
        @endfor
      </div>

    </div>

</x-layout_base>