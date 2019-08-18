@include('admin/sections/head')

@if(Session::has('MyApp'))
  @include('admin/sections/header')
@endif

@yield('content')

@include('admin/sections/footer')
