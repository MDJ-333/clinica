<!DOCTYPE html>
<html lang="es">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="imagen/icapp.png">
</head>
<body class="text-center">
    <header class="header">
        <div class="container logo-nav-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475ZM.879 8C-2.426 1.68 4.41-2 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z"/>
        </svg>
        <nav class="Barra">
                    @auth
                    
                    <a href="/inicio">Clínica</a>
                    
                    @endauth
                    @guest
                    <a href="/">Clínica</a>
                    @endguest
            
        </div> 
</header> 
</body> 
<br><br><br><br><br><br>

    <div>
        @yield('content')
    </div>




