<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{env('APP_NAME')}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{get_favicon_logo()}}" type="image/x-icon">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


  <!-- jquery ui css-->
  <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui/jquery-ui.css')}}">
  {{-- <link rel="icon" href="{{asset('img/SVG/fab.svg')}}"> --}}
  <!-- jquery js -->
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <!-- jquery ui js -->
  <!-- <script type="text/javascript" src="{{asset('plugins/jquery-ui/jquery-ui.js')}}"></script> -->

  <!-- toastr js -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
  <!-- toastr css -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> -->

  <!-- local css -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('css/custom-style.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}"> -->

  <!-- adminlte css -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}"> -->

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- fancy box -->
  <link rel="stylesheet" href="{{asset('fancybox/source/jquery.fancybox.css?v=2.1.7')}}" type="text/css" media="screen" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="{{ asset('dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image" width="20px"><span class="caret"></span> {{ucfirst(Auth::user()->name)}}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link" id="topSidebar">
      <img src="{{get_favicon_logo()}}" alt="" class="brand-image ">
      <span class="brand-text font-weight-light" class="hidden">Scouting Ohio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link ml-2" target="_blank">
              <i class="fas fa-globe"></i>
              <p>
                Website
              </p>
            </a>
          </li>


          <!-- Layout -->
          <li class="nav-item has-treeview">
            <li class="nav-item">
                <a href="{{route('logo.index')}}" class="nav-link">
                  <i class="nav-icon far fa-copyright "></i>
                  <p>
                    Logo Management
                  </p>
                </a>
              </li>
              {{-- <!-- Banner Management -->
              <li class="nav-item">
                <a href="{{route('banner.index')}}" class="nav-link">
                  <small>CMS Management</small>
                </a>
              </li> --}}
              <!-- Article Management -->
                      <!-- <li class="nav-item">
                        <a href="{{route('article.index')}}" class="nav-link ml-2">
                          <small>Article Management</small>
                        </a>
                      </li> -->
                  </li>
                  <!-- Article Management -->
                  <li class="nav-item">
                    <a href="{{route('article.index')}}" class="nav-link">
                      <i class="nav-icon far  fa fa-newspaper-o"></i>
                      <p>
                        Article Management
                      </p>
                    </a>
                  </li>



                  <!-- User management -->
                  <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-user "></i>
                      <p>
                        User management
                      </p>
                    </a>
                  </li>

                  <!-- Settings -->
                  <li class="nav-item">
                    <a href="{{route('video.index')}}" class="nav-link">
                      <i class="nav-icon fa fa-question-circle"></i>
                      <p>
                        Video managment
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('subscription.index')}}" class="nav-link">
                      <i class="nav-icon fa fa-question-circle"></i>
                      <p>
                        Subscription
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('terms-conditions.index')}}" class="nav-link">
                      <i class="nav-icon fa fa-question-circle"></i>
                      <p>
                        Terms and Conditions
                      </p>
                    </a>
                  </li>

                  <!-- Settings -->
                  <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-cogs "></i>
                      <p>
                        Configuration
                      </p>
                    </a>
                  </li>


                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                @yield('content_header')
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid" style="overflow-x: hidden; overflow-y: auto; max-height: 100%;">
                @yield('content_body')
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          <footer class="main-footer">

          </footer>
        </div>

        <!-- local js -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- <script src="{{asset('js/jquery.dataTables.min.js')}}" defer></script> -->
        <!-- <script src="{{asset('dist/js/adminlte.js')}}"></script> -->

        <!-- adminlte js -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <script src="{{asset('dist/js/demo.js')}}"></script>

        <!-- fancybox -->
        <script type="text/javascript" src="{{asset('fancybox/source/jquery.fancybox.pack.js?v=2.1.7')}}"></script>

        <!-- jquery ui js-->
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- pusher work -->

        <!-- pusher -->
        <!-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> -->


      </body>
      <script>
          $(document).ready( function () {
            $('#example1').DataTable();
} );
      </script>
      </html>
