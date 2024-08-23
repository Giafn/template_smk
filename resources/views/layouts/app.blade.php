<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- style -->
    {{-- icon --}}
    {{-- /img/logo.png --}}
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @include('layouts.navbar')
    
    <div id="appContent" class="min-h-screen bg-putih">
        @yield('content')
    </div>
    
    @include('layouts.footer')
    
    <script>
        // otomatis buka modal
        $(document).ready(function(){
            // $('.modal').addClass('hidden');
        })
        
        // close modal
        function closeModal(){
            $('.modal').addClass('hidden');
        }
    </script>
    
</body>
</html>