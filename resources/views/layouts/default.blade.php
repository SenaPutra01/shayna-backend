<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin</title>
    <meta name="description" content="ShaynaAdmin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @stack('before-style')
    @include('./includes/style')
    @stack('after-style')
  </head>

  <body>
    <aside id="left-panel" class="left-panel">
      @include('./includes/sidebar')
    </aside>

    <div id="right-panel" class="right-panel">
      <!-- Header-->
      @include('./includes/header')
      
      <div class="content">
        @yield('content')
      </div>
      <!-- /.content -->
      <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    @stack('before-script')
    @include('./includes/script')
    @stack('after-script')
  </body>
</html>
