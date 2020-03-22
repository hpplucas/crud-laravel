@extends('layout.app', ['current' => 'categories'])

@section('body')
    <h3 class="d-flex justify-content-center py-3 my-1 border border-secondary">Categorias</h3>

    <div class="d-flex justify-content-end">
        <a href="{{route('categories.create')}}" class="btn btn-success mr-1 mb-1">Nova categoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($categories as $c)
        <tr>
            <th scope="row">{{$c['id']}}</th>
            <td>{{$c['name']}}</td>
            <td>
                <a href="" class="btn btn-warning mr-1">Editar</a>
                <a href="" class="btn btn-danger">Excluír</a>
            </td>
        </tr>
        @endforeach

        </tbody>
      </table>


@endsection