<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('images/electro ka.png') }}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style> 
    .nav-link {
        color:#ffff
    }
    .nav-link :hover{
        color: blue !important;
    }
        body {
            font-family: 'Epilogue', sans-serif;
        }

        body::-webkit-scrollbar {
            width: 5px;
            margin: 0% 2rem !important;
        }

        body::-webkit-scrollbar-track {
            display: none;
        }

        body::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 100px rgb(84, 83, 83);
        }
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .whatsapp-icon:hover {
            background-color: #128C7E;
        }
    </style>
    <title>S2PRO GAMING SHOP | @yield('title')</title>
</head>

<body>
    <!-- Your existing HTML content -->

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/0666666666" class="whatsapp-icon" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Your existing scripts -->
    @if (Auth::id())
        @if (Auth::user()->usertype == 'admin')
            @include('layouts.partials.admin.header')
            @yield('content')
            @include('layouts.partials.admin.footer')
        @else
            @include('layouts.partials.header')
            @yield('content')
            @include('layouts.partials.footer')
        @endif
    @else
        @include('layouts.partials.header')
        @yield('content')
        @include('layouts.partials.footer')
    @endif

</body>

</html>
