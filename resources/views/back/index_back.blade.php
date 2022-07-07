<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Planting Seeds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="/back/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/back/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/back/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/back/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/back/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/back/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/back/assets/css/typography.css">
    <link rel="stylesheet" href="/back/assets/css/default-css.css">
    <link rel="stylesheet" href="/back/assets/css/styles.css">
    <link rel="stylesheet" href="/back/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/back/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        @include('back.navs.sidebar')
        <div class="main-content">
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Admin</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="/admin">Home</a></li>
                                <li><span>Admin</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" class="hidden" method="POST" action="{{ route('logout') }}">
                                  @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" style="display: inline-block;">Users </h4>
                                <a href="#"><button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target=".modalcreate" style="padding: 1px 7px;margin: 0px;padding-top: 4px;border-radius: 5px;font-size: 16px;background: #3a7863;"><i class="ti-plus"></i></button></a>
                                <div class="row">
                                    <div class="col-12">
                                      <div class="mb-2 mt-3">
                                      @if(count($errors) > 0)
                                        @foreach( $errors->all() as $message )
                                        <div class="alert alert-danger display-hide">
                                        <span>{{ $message }}</span>
                                        </div>
                                        @endforeach
                                      @endif
                                      @if(Session::has('exito'))
                                        <div class="alert alert-success display-hide">
                                        <span>{!! Session::get('exito') !!}</span>
                                        </div>
                                      @endif
                                      </div>
                                    </div>
                                </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary" style="background-color: #3a7863 !important;">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{$user->id}}</th>
                                                    <td>Admin</td>
                                                    <td>{{$user->name}} {{$user->lastname}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    @if($user->id == Auth::user()->id)
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target=".modaledit" onclick="loadData('{{$user->id}}')" style="color: #3551dc;font-size: 18px;"><i class="ti-pencil"></i></a>
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                    @else
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target=".modaledit" onclick="loadData('{{$user->id}}')" style="color: #3551dc;font-size: 18px;"><i class="ti-pencil"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="/admin/user/delete/{{$user->id}}" style="color: #dc3545;font-size: 18px;"><i class="ti-trash"></i></a>
                                                    </td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-area">
                <p>© Copyright Planting seeds</p>
            </div>
        </footer>
    </div>
    
    <div class="modal fade modalcreate">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="/register" oninput='password_confirmation.setCustomValidity(password_confirmation.value != password.value ? "The password not match." : "")' id="formAuthentication">
                    <div class="modal-header">
                        <h5 class="modal-title">Create User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required maxlength="100"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LastName" required maxlength="100"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required maxlength="25"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-envelope"></i>
                            <input type="email" id="sender-email" class="form-control" name="email" placeholder="Email" required maxlength="100"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-lock"></i>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" aria-describedby="password" required maxlength="28" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="la contraseña debe contener al menos 6 digitos, una letra Mayúscula y un simbolo"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-lock"></i>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" aria-describedby="password" maxlength="28" minlength="6" />
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color: #3a7863; border: none;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modaledit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="/edituser" oninput='password_confirmation.setCustomValidity(password_confirmation.value != password.value ? "The password not match." : "")' id="formAuthentication">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="name_edit" name="name" placeholder="Name" required maxlength="100"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="lastname_edit" name="lastname" placeholder="LastName" required maxlength="100"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="phone_edit" name="phone" placeholder="Phone" required maxlength="25"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-lock"></i>
                            <input type="password" id="password" class="form-control" name="password" placeholder="New Password (Optional)" aria-describedby="password" maxlength="28" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="la contraseña debe contener al menos 6 digitos, una letra Mayúscula y un simbolo"/>
                          </div>
                        </div>
                        <input type="hidden" name="id_user" id="id_user">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color: #3a7863; border: none;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/back/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/back/assets/js/popper.min.js"></script>
    <script src="/back/assets/js/bootstrap.min.js"></script>
    <script src="/back/assets/js/owl.carousel.min.js"></script>
    <script src="/back/assets/js/metisMenu.min.js"></script>
    <script src="/back/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/back/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- all line chart activation -->
    <script src="/back/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="/back/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="/back/assets/js/plugins.js"></script>
    <script src="/back/assets/js/scripts.js"></script>
    <script>
      $(function(){
          var current = location.pathname;
          $('.navdashboard ul li a').each(function(){
              var $this = $(this);
              if($this.attr('href').indexOf(current) !== -1){
                  $this.addClass('active');
              }
          })
      })
    </script>
    <script>
        function loadData(id){
            $.ajax({
            url : '/getUser/'+id,
            method : 'get',
            dataType : 'json',
            success : function(user){
                document.getElementById('name_edit').value = user.name;
                document.getElementById('lastname_edit').value = user.lastname;
                document.getElementById('phone_edit').value = user.phone;
                document.getElementById('id_user').value = user.id;
            },
            error: function(error){
                console.log("Error en la busqueda, intentelo otra vez");
            }
          });
        }
    </script>
</body>

</html>
