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
    <style>      
      .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
      }
      .upload_img_box{
        width: 100%;
        display: inline-block;
        margin: 1%;
      }
    </style>
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
                                <li><span>Report Anual</span></li>
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
                                <h4 class="header-title" style="display: inline-block;">Reports Anual</h4>
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
                                                    <th scope="col">Lang</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Url</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reports as $report)
                                                <tr>
                                                    <th scope="row">{{$report->id}}</th>
                                                    @if($report->lang == 'en')
                                                    <td><b style="vertical-align: middle; font-weight: 500">EN</b> <img src="/assets/img/en.png" alt="" width="30px"></td>
                                                    @else
                                                    <td><b style="vertical-align: middle; font-weight: 500">ES</b> <img src="/assets/img/gt.png" alt="" width="30px"></td>
                                                    @endif
                                                    <td>{{$report->title}}</td>
                                                    <td><a href="{{$report->doc}}" target="_blank" class="link-primary">{{$report->doc}}</a></td>
                                                    <td>
                                                        <a href="/admin/anual/delete/{{$report->id}}" style="color: #dc3545;font-size: 18px;"><i class="ti-trash"></i></a>
                                                    </td>
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
                <form method="POST" action="/anual" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Document</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <select class="form-control" required name="lang">
                              <option value="en">English</option>
                              <option value="es">Spanish</option>
                          </select>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required maxlength="190"/>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="file" class="form-control" id="doc" name="doc" placeholder="Document" required/>
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
      function previewImages() {
        var $preview = $('#preview').empty();
        if (this.files) $.each(this.files, readAndPreview);
        var cont = 0;
        function readAndPreview(i, file) {          
          if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
            return alert(file.name +" is not an image");
          } // else...this.result          
          var reader = new FileReader();
          $(reader).on("load", function() {
            $preview.append($("<div>", {class: 'img-bg upload_img_box', id: cont, height: 500}));
            $("#"+cont).css("background-image", "url(" + this.result + ")");
            cont = cont+1;
          });
          reader.readAsDataURL(file);          
        }
      }
      $('#file-input').on("change", previewImages);
    </script>
</body>

</html>
