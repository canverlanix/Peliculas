
    @extends('layout.master')
    @section('content')
    <div class="row">

    
        <div class="row">       
            <div class="col-sm-4">           
                <img src="{{($pelis['poster'])}}"  alt="Responsive image" style="max-width: 200px; " >   
            </div>     
            <div class="col-sm-8"> 
                
                <h5 class="card-title">{{($pelis['title'])}}</h5> 
                <p class="card-text"><small class="text-muted">Año: {{($pelis['year'])}}</small></p>        
                <p class="card-text"> Director: {{($pelis['director'])}}</p>
                <p class="card-text"><strong>Resumen:</strong>  {{($pelis['synopsis'])}}</p> <br>   
                
                     @if ($pelis['rented']=="false")
                     <p class="card-text"><strong>Estado:</strong> Película disponible  </p><br> 
                    @else
                    <p class="card-text"><strong>Estado:</strong>  Película actualmente alquilada</p><br>           
                    @endif  
                    
                    @if ($pelis['rented']=="false")                    
                    
                    <form method="POST" action="{{ url("catalog/devolver/".$pelis['rented'],$pelis['id']) }}">
                        @csrf                       
                        <button type="submit" class="btn btn-primary">Alquilar película</button>  
                      </form>
                    @else

                    <form method="POST" action="{{ url("catalog/devolver/".$pelis['rented'],$pelis['id']) }}">
                        @csrf                       
                        <button type="submit" class="btn btn-danger">Devolver película</button>  
                      </form>

                              
                    @endif
                    
                    
                    <a href="{{url('catalog/edit', $pelis['id'])}}" class="btn btn-warning">
                        <i class="fas fa-pen"></i> Editar Pelicula
                    </a>

                    <br><br>
                    <form method="POST" action="{{ url("catalog/{$pelis['id']}") }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>  
                      </form>


                 
            </div> 
        </div>

    </div>
    @endsection

        
{{-- 
        <div class="card mb-3">
            <img class="card-img-top" src="{{($pelis['poster'])}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{($pelis['title'])}}</h5>
                <p class="card-text">{{($pelis['synopsis'])}}</p>
                <p class="card-text"> Director: {{($pelis['director'])}}</p>
                <p class="card-text"><small class="text-muted">Año: {{($pelis['year'])}}</small></p>
            </div>

          

        </div>
        @if ($pelis['rented']==false)
        <button type="button" class="btn btn-success">Alquilar película</button>  
        @else
        <button type="button" class="btn btn-danger">Devolver película</button>            
        @endif

        <a href="{{url('catalog/edit', $id)}}" class="btn btn-primary">
            <i class="fas fa-edit"></i> Editar Pelicula
        </a>
        <button type="button" class="btn btn-light">Volver</button>
       
         --}}
     

