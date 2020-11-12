@extends('layout.master')
@section('content')
<form method="POST" action="{{ url("catalog/{$pelis['id']}") }}">
    @csrf
    @method('PUT')
    <h3 class="text-center" >Modificar película</h3>
    <div class="col-sm-12 d-flex align-items-center d-flex justify-content-center">           
        <img src="{{($pelis['poster'])}}"  alt="Responsive image" style="max-width: 200px; " >   
    </div> 
    <div class="form-row">        
        <div class="form-group col-md-6">
            <label for="inputEmail4">Título</label>
            <input type="text" class="form-control" value="{{($pelis['title'])}}" name="title">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Año</label>
            <input type="text" class="form-control" value="{{($pelis['year'])}}" name="year">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Director </label>
            <input type="text" class="form-control" value="{{($pelis['director'])}}" name="director">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Poster</label>
            <input type="text" class="form-control" value="{{($pelis['poster'])}}" name="poster">

        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Alquilada</legend>
          <div class="col-sm-10">
            @if ($pelis['rented']=="true")
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rented" id="rented1" value="true" checked>
                <label class="form-check-label" for="rented1">
                  Sí
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rented" id="rented2" value="false">
                <label class="form-check-label" for="rented2">
                  No
                </label>
              </div>
            @else
           

            <div class="form-check">
              <input class="form-check-input" type="radio" name="rented" id="rented1" value="true" >
              <label class="form-check-label" for="rented1">
                Sí
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rented" id="rented2" value="false" checked>
              <label class="form-check-label" for="rented2">
                No
              </label>
            </div>
                       
            @endif
           
          </div>
        </div>
      </fieldset>
    <div class="form-row">       
        <div class="form-group col-md-6">
            <label for="inputPassword4">Resumen</label>
            <input type="textarea" class="form-control" value="{{($pelis['synopsis'])}}" name="synopsis">
        </div>
    </div>     
    <button type="submit" class="btn btn-primary">Modificar película</button>
</form>
@endsection
