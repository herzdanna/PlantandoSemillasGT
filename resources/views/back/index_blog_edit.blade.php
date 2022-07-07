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
    <link rel="stylesheet" href="/back/assets/css/summernote.css" >
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
                                <li><span>Blogs</span></li>
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
                                <h4 class="header-title" style="display: inline-block;">Blogs </h4>
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
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Text</th>
                                                    <th scope="col">Align</th>
                                                    <th scope="col">Color</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($blogs as $blog)
                                                <tr>
                                                    <th scope="row">{{$blog->id}}</th>
                                                    @if($blog->lang == 'en')
                                                    <td><b style="vertical-align: middle; font-weight: 500">EN</b> <img src="/assets/img/en.png" alt="" width="30px"></td>
                                                    @else
                                                    <td><b style="vertical-align: middle; font-weight: 500">ES</b> <img src="/assets/img/gt.png" alt="" width="30px"></td>
                                                    @endif
                                                    <td>{{$blog->title}}</td>
                                                    <td><img src="{{$blog->image}}" style="width: 60px; height: 50px;"></td>
                                                    <td><textarea class="form-control" readonly cols="50" rows="5" style="font-size: 11px; background: transparent; border: none">{!!$blog->text!!}</textarea></td>
                                                    <td>{{$blog->align}}</td>
                                                    <td>{{$blog->color}}</td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target=".modaledit" onclick="loadData('{{$blog->id}}')" style="color: #3551dc;font-size: 18px;"><i class="ti-pencil"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="/admin/blog/delete/{{$blog->id}}" style="color: #dc3545;font-size: 18px;"><i class="ti-trash"></i></a>
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
                <form method="POST" action="/blogs" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Blog</h5>
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
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required maxlength="100"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <select class="form-control" required name="align">
                              <option value="right">Right</option>
                              <option value="left">Left</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" required name="color">
                              <option value="bg-secondary">Orange</option>
                              <option value="bg-green">Green</option>
                              <option value="bg-blue">Blue</option>
                          </select>
                        </div>
                        <div class="form-group md-3">
                            <section id="editor">
                              <textarea id="summernote" name="text" required>
                              </textarea>
                            </section>
                        </div>
                        <div class="upload__box">
                            <div class="upload__btn-box">
                              <label class="upload__btn">
                                <h5 style="margin-bottom: 20px; font-weight: 600; font-size: 18px;">Upload image</h5>
                                <input type="file" id="file-input" name="foto" data-max_length="20" class="form-control form-control-lg">
                              </label>
                            </div>
                            <div id="preview"></div>
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
                <form method="POST" action="/editBlogs" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Blog</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="lni-user"></i>
                            <input type="text" class="form-control" id="title_edit" name="title" placeholder="Title" required maxlength="100"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <select class="form-control" required name="align" id="align_edit">
                              <option value="right">Right</option>
                              <option value="left">Left</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" required name="color" id="color_edit">
                              <option value="bg-secondary">Orange</option>
                              <option value="bg-green">Green</option>
                              <option value="bg-blue">Blue</option>
                          </select>
                        </div>
                        <div class="form-group md-3">
                            <section id="editor">
                              <textarea id="summernote_edit" name="text" required>
                              </textarea>
                            </section>
                        </div>
                        <div class="upload__box">
                            <div class="upload__btn-box">
                              <label class="upload__btn">
                                <h5 style="margin-bottom: 20px; font-weight: 600; font-size: 18px;">Upload image (optional)</h5>
                                <input type="file" id="file-input_edit" name="foto" data-max_length="20" class="form-control form-control-lg">
                              </label>
                            </div>
                            <div id="preview_edit"></div>
                        </div>
                        <input type="hidden" name="id_blog" id="id_blog">
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
    <script src="/back/assets/js/summernote.js"></script>
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
            url : '/getBlog/'+id,
            method : 'get',
            dataType : 'json',
            success : function(blog){
                document.getElementById('title_edit').value = blog.title;
                $('#summernote_edit').summernote('code', blog.text);
                document.getElementById('id_blog').value = blog.id;
                $('#align_edit').val(blog.align);
                $('#align_edit').trigger('change');
                $('#color_edit').val(blog.color);
                $('#color_edit').trigger('change');
            },
            error: function(error){
                console.log("Error en la busqueda, intentelo otra vez");
            }
          });
        }
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
      function previewImagesEdit() {
        var $preview = $('#preview_edit').empty();
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
      $('#file-input_edit').on("change", previewImagesEdit);
    </script>
    <script>
        /* Editor Note Js
      ========================================================*/
      $("#summernote").summernote({
        height: 250,
        minHeight: null,
        maxHeight: null,
        focus: false,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });
      $("#summernote_edit").summernote({
        height: 250,
        minHeight: null,
        maxHeight: null,
        focus: false,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });
    </script>
</body>

</html>
