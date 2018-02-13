<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>

<div class="container">
    <div class="row">
        @include('includes.mainMenu')
    </div>
    <div class="row">
        <!-- Displays main content -->
        @yield('content')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</div>
@include('includes.jsfooter')

</body>
</html>