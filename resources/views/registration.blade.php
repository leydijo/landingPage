@extends('layouts.app')

@section('content')


    <div class="container">
      <h2>Registro</h2>

      @if (count ($errors) >0)
      <div class="alert alert-danger">
           <ul>
              @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
              @endforeach
           </ul>
      </div>
  @endif

    <form action="{{url('/registrationsend')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="fullName">Nombres y Apellidos</label>
            <input type="text" class="form-control"  name="fullName" placeholder="Ingresa Nombres completos" >
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" placeholder="Ingresa Correo Electrónico">
            </div>

            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="number" class="form-control" name="phone"  placeholder="Ingresa Número de Celular">
            </div>

            
            <div class="form-group form-check-inline">
                <input class="form-check-input" type="checkbox" name="type_identification" id="inlineCheckbox1" value=">cedulaCiudadania">
                <label class="form-check-label" for="inlineCheckbox1">Cédula de Ciudadanía</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="type_identification" id="inlineCheckbox2" value="cedulaExtranjeria">
                <label class="form-check-label" for="inlineCheckbox2">Cédula de Extranjería</label>
            </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="type_identification"  id="inlineCheckbox3" value="pasaporte" >
                <label class="form-check-label" for="inlineCheckbox3">Pasaporte</label>
              </div>

            <div class="form-group">
                <label for="numberIdentification">Número de Documento</label>
                <input type="number" class="form-control" name="identification" placeholder="Ingrese Numero de identificación">
            </div>
            
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" name="address"  placeholder="Ingrese Dirección">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text"  for="comments">Como te enteraste de MDS</label>
                </div>
                <select class="custom-select" name="comments" id="comments">
                  <option selected>Escoge...</option>
                  <option id="linkedin"  name="comments"value="Linkedin">Linkedin</option>
                  <option id="elEmpleo"  name="comments" value="El Empleo">El Empleo</option>
                  <option id="google"  name="comments" value="Google">Google</option>
                  <option id="otro" name="comments" value="Otro">Otro</option>
                </select>
              </div>

              <input type="submit"  value="Enviar" class="btn btn-success" />
        </form>
       
    </div>
    
@endsection