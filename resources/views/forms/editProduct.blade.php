@extends('layout.app', ['current' => 'products'])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('products.update', $product['id']) }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nome do produto: </label>
              <input type="text" class="form-control mb-2" 
              name="name" id="name" placeholder="Ex: Calculadora"
              value="{{$product['name']}}">
            </div>
            <div class="form-group">
              <label for="stock">Quantidade: </label>
              <input type="number" class="form-control  mb-2" 
              name="stock" id="stock" placeholder="Quantidade"
              value="{{$product['stock']}}"
              >
            </div>
            <div class="form-group">
              <label for="price">Preço: </label>
              <input type="number" class="form-control  mb-2" 
              name="price" id="price" placeholder="Preço"
              value="{{$product['price']}}">
            </div>
            <div class="form-group">
              <label for="category">Categoria: </label>
              <select class="form-control" name="category" id="category">
                  @foreach ($categories as $c)
                        @if ($c['id'] === $product['id'])
                            <option selected value="{{$c['id']}}">{{$c['name']}}</option>
                        @else
                            <option value="{{$c['id']}}">{{$c['name']}}</option>
                       @endif
                  @endforeach
              </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>
  @endsection