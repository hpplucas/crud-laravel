@extends('layout.app', ['current' => 'home'])

@section('body')
    <div class="jumbotron border border-secondary mb-1">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus produtos.
                            Só não esqueça de cadastrar previamente as categorias.
                        </p>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card-text">
                            Aqui você cadastra todos as categorias.
                        </p>
                    <a href="{{route('categories.create')}}" class="btn btn-primary">Cadastrar categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection