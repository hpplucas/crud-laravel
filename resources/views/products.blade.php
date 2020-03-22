@extends('layout.app', ['current' => 'products'])

@section('body')
    <h3 class="d-flex justify-content-center py-3 my-1 border border-secondary">Produtos</h3>

    <div class="d-flex justify-content-end">
        <a href="{{route('products.create')}}" class="btn btn-success mr-1 mb-1">Novo produto</a>
    </div>
    <table class="table">
        <thead class="thead-dark col-12">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($products as $p)
        <tr>
            <th scope="row">{{$p['id']}}</th>
            <td>{{$p['name']}}</td>
            <td>{{$p['stock']}}</td>
            <td>R$ {{$p['price']}}</td>
            <td>{{$p['category_id']}}</td>
            <td>
                <a href="{{route('products.edit', $p['id'])}}" class="btn btn-warning mr-1">Editar</a>
                <a href="" class="btn btn-danger">Excluír</a>
            </td>
        </tr>
        @endforeach

        </tbody>
      </table>


@endsection