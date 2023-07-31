<x-layout>
<div class="row container-fluid col-12 mt-5">
  <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
    
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h3 class="mt-3 ms-3 me-3"> Elige un método de pago</h3>
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Paga con tarjeta de débito o crédito
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Número de tarjeta</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Guardar esta tarjeta
              </label>
            </div>

        <label for="">Fecha de caducidad</label>
        <div class="mb-3 container_pay">
              
            <select class="form-select select_1" aria-label="Default select example">
              <option selected>MM</option>
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
              <option value="6">06</option>
              <option value="7">07</option>
              <option value="8">08</option>
              <option value="9">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>

            <select class="form-select select_2" aria-label="Default select example">
              <option selected>YY</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
            </select>
          </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Código de seguridad</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              <p class="text_pay">El código de tres dígitos de la parte posterior de tu tarjeta</p>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre del títular de la tarjeta</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
          </div>
        </div>
      </div>
        
        
        
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Pagar con PayPal
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
           <button class="mi_pay"> Pagar con PayPal</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
segundo
  </div>
</div>
</x-layout>

