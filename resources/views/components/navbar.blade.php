
<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ $current == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ $current == 'products' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('products.index') }}">Produtos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ $current == 'categories' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">Categorias <span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>