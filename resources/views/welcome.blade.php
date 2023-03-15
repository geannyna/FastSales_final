<x-layout>

  
    <x-slot name='title'>{{__('FastSales')}}</x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center titulo_letra">{{__('Bienvenido a FastSales')}}</h1>
            </div>
        </div>
        <div class="row">
            @forelse($ads as $ad)
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <a href="{{route("ads.show",$ad)}}" class="card-title text-decoration-none text-dark">
                <div class="card mi_card" style="width: 43rem;">
                  @if ($ad->images()->count() > 0)
                     <img src="{{$ad->images()->first()->getUrl(400,300)}}" class="card-img-top mi_img" alt="...">
                  @else
                  <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                  @endif
                </a>
                    <div class="card-body">
                        <a href="{{route("ads.show",$ad)}}" class="card-title text-decoration-none text-dark"> {{($ad->title)}}</a>
                        <h6 class="card-subtitle mb-2 text fs-4">€<a href="{{route("ads.show",$ad)}}" class="card-title text-decoration-none text-dark"> {{$ad->price}}</a></h6>
                        {{-- <p class="card-text"> {{$ad->body}}</p> --}}
                        <div>
                            <a href="{{route("ads.show",$ad)}}" class="card-title text-decoration-none text-dark">
                                <p class="bi bi-geo-alt-fill"> {{$ad->location}}</p>
                            </a>
                        </div>
                        <div class="card-subtitle mb-2">
                            <a href="{{route('category.ads',$ad->category)}}" class="text-decoration-none nav_letra">#{{$ad->category->name}}</a>
                            <a href="{{route("ads.show",$ad)}}" class="card-title text-decoration-none text-dark">
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                            </a>
                        </div>
                        {{-- <div class="card-subtitle mb-2">
                            <small> Vendido por: {{ $ad->user->name }}</small>
                        </div>  --}}
                    </div>
                </div>
            
            </div>
            @empty
            <div class="col-12">
                  <h2>{{__('Uyy.. parece que no hay nada')}}</h2>
                  <a href="{{route('ads.create')}}" class="btn btn-success me-3">{{__('Vende tu primer objeto')}}</a> {{__('o')}} <a href="{{route('home')}}" class="mi_boton">{{__('Vuelve a la home')}}</a> 
              </div>
            @endforelse
        </div>
    </div>


</x-layout>