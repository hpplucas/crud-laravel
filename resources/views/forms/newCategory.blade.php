
@extends('layout.app', ['current' => 'categories'])

@section('body')

<div class="card border ">
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nome da categoria: </label>
              <input type="text" class="form-control col-6 mb-2" name="name" id="name" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
  @endsection