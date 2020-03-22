@extends('layout.app', ['current' => 'products'])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nome do produto: </label>
              <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Ex: Calculadora">
            </div>
            <div class="form-group">
              <label for="stock">Quantidade: </label>
              <input type="number" class="form-control  mb-2" name="stock" id="stock" placeholder="Quantidade">
            </div>
            <div class="form-group">
              <label for="price">Preço: </label>
              <input type="number" class="form-control  mb-2" name="price" id="price" placeholder="Preço">
            </div>
            <div class="form-group">
              <label for="category">Categoria: </label>
              <select class="form-control" name="category" id="category">
                  <option>Selecione</option>
                  @foreach ($categories as $c)
                      <option value="{{$c['id']}}">{{$c['name']}}</option>
                  @endforeach
              </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>
</div>
  @endsection