@extends('layout.master')
@section('content')
<form action="/catalog/createCatalog" method="POST">
    @csrf
    <h3 class="text-center">Añadir película</h3>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Título</label>
            <input type="text" class="form-control" placeholder="Título" name="title">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Año</label>
            <input type="text" class="form-control" placeholder="Año" name="year">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Director </label>
            <input type="text" class="form-control" placeholder="Director" name="director">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Poster</label>
            <input type="text" class="form-control" placeholder="Url Poster" name="poster">

        </div>
    </div>

    <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Alquilada</legend>
          <div class="col-sm-10">
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
           
          </div>
        </div>
      </fieldset>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputPassword4">Resumen</label>
            <input type="textarea" class="form-control" placeholder="Resumen" name="synopsis">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Añadir película</button>
</form>
@endsection
