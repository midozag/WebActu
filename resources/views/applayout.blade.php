<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @include('layout.script')
    @include('layout.style')
    <title>@yield('title')</title>
</head>
<body class="text-gray-800 font-inter">
    
    <!-- start: Sidebar -->
    @include('layout.sidebar')
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layout.header')
        <div class="p-6">
          @yield('content')   
        </div>
    </main>
    <!-- end: Main -->
    
   @if (session()->get('error'))
     <script>
        iziToast.error({
            title:'Error',
            position:'topRight',
            message:'{{ session()->get('error') }}'
        })
     </script>
       
   @endif
   
   @if (session()->get('success'))
     <script>
        iziToast.success({
            title:'succès',
            position:'topRight',
            message:'{{ session()->get('success') }}'
        })
     </script>
       
   @endif
   

   
</body>
</html>
