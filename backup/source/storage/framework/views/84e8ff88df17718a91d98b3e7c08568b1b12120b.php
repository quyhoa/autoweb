<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title','Quản Lý Danh Mục'); ?></title>

  <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/css/admin-style.css')); ?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo e(asset('/js/templateEditor/ckeditor/ckeditor.js')); ?>"></script>
  <script type="text/javascript">
    var baseUrl = "<?php echo e(asset('/')); ?>";
  </script>
  <!-- Fonts -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>  
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">Visit website</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
      <?php if(Auth::guest()): ?>
        <li><a href="<?php echo e(url('/auth/login')); ?>">Login</a></li>
        <li><a href="<?php echo e(url('/auth/register')); ?>">Register</a></li>
      <?php else: ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo e(url('/auth/logout')); ?>">Logout</a></li>
          </ul>
        </li>
      <?php endif; ?>
    </ul>
    </div>
  </nav>
  <div class="container-fluid bg-3">    
    <div class="row">
      <div class="col-sm-2 sidenav hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading headings">DANH MỤC QUẢN LÝ</div>
            <ul class="list-group">
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="<?php echo e(route('categoryList')); ?>">QUẢN LÝ MENU HIỂN THỊ</a>
                <a href="<?php echo e(route('addCate')); ?>" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới chuyên mục!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="<?php echo e(route('listLession')); ?>">QUẢN LÝ BÀI HỌC</a>
                <a href="<?php echo e(route('addLession')); ?>" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới Khóa học!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="<?php echo e(route('listProduct')); ?>">QUẢN LÝ SẢN PHẨM</a>
                <a href="<?php echo e(route('addProduct')); ?>" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới sản phẩm!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="">QUẢN LÝ HÌNH ẢNH</a>
                <a href="<?php echo e('add'); ?>" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới hình ảnh!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="">QUẢN LÝ VIDEO</a>
                <a href="<?php echo e('add'); ?>" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới video!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
        </div>
      </div>
      <div class="col-sm-10">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script type="text/javascript" src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/js/myscript.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/js/admin/adminscript.js')); ?>"></script>
</body>
</html>
