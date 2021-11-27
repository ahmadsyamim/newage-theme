@include('Newage.partials.meta')
@include('Newage.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('Newage.partials.footer')
