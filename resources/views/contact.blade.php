<x-layout>

  <x-slot name='title'>{{('FastSales')}}</x-slot>
  
  <div class="container-fluid mt-5" style="width: 80%;">
    <h4 class="card-title titulo_letra text-center mb-4">{{__('Contacta con nosotros')}}</h4>
    <div class="card-body">

    
    <form method="post" class="mi_form">
        @csrf   {{--  componente de seguridad cuando tenemos post, hay que ponerlo siempre para el post --}}
      <div class="mb-3">
        <label for="name" class="form-label letra_dark">Tu nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu nombre" required>
        
      </div>
      <div class="mb-3">
        <label for="" class="form-label letra_dark">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required> 
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label letra_dark">Asunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder=" Qué nos quieres sugerir ?" required> 
      </div>
      <div class="mb-3">
        <label for="body" class="form-label letra_dark">Comentarios</label>
        <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="mi_boton mb-3">{{__('Enviar')}}</button>
    </div> 
    </form>
  </div>
</div>
</x-layout>