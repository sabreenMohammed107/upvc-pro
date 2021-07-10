@include('layouts.admin.header')
@yield('admin-links')
    


@include('layouts.admin.menu')
      @yield('admin-content')
  
      @include('partials._session')

  @include('layouts.admin.footer')

    @yield('admin-scripts')

</body>

</html>