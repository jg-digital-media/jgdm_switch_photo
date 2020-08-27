<!DOCTYPE html>
<html lang="en">

<!-- head-->
@include('head')

<!-- body -->
<body>

    
    <!-- MASTER TEMPLATE-->

    <!-- Unique content goes here! -->
    @yield('content') 

    @include('footer')    
    
    <script src="{{asset('js/jquery.js', true)}}"></script>
    <script src="{{asset('js/app.js', true)}}"></script>
</body>
</html>