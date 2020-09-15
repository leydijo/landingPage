@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                
                <h2>Usuarios Registrados</h2>
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class=" container">
                       
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Cédula</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Tipo Identificación</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Comentarios</th>
                                {{-- <th scope="col">Last</th>
                                <th scope="col">Handle</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($mensajes as $user)
                                <tr>
                                    <td>{{$user->identification}}</td> 
                                    <td>{{$user->fullName}}</td>
                                    <td>{{$user->address}}</td> 
                                    <td>{{$user->type_identification}}</td>
                                    <td>{{$user->identification}}</td>
                                    <td>{{$user->phone}}</td> 
                                    <td>{{$user->email}}</td> 
                                    <td>{{$user->comments}}</td> 
                                    
                                    
                                   
                                </tr>  
                               
                                
                              @endforeach  
                              
                            </tbody>
                            
                        </table>
                        <a href="{{ url('export') }}" class="btn btn-info">Descargar</a> 

              

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
