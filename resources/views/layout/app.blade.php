<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Cadastro de produtos</title>

</head>
<body>
    <div class="container mt-2">
        @component('components.navbar', ['current' => $current])
        @endcomponent
        <main role="main">
            @hasSection ('body') 
                @yield('body')
            @endif

        </main>
        @component('components.footer')
            
        @endcomponent
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>