<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="/image/favicon.png" rel="icon" />
  <title>مارکت شاپ - قالب HTML فروشگاهی</title>
  <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
  <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
  <!-- CSS Part Start-->
  <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap-rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
  <link rel="stylesheet" type="text/css" href="/css/stylesheet-rtl.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive-rtl.css" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>




<!-- CSS Part End-->
</head>
<body style="background-color:white;">
  <div id="container" class="col-sm-12">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="login.html">حساب کاربری</a></li>
        <li><a href="register.html">ثبت نام</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div class="col-sm-9" id="content" >
          @yield('content')
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">حساب کاربری</h3>
          <div class="list-group">
            <ul class="list-item">
              <li><a href="{{ route('login') }}">ورود</a></li>
              <li><a href="{{ route('register') }}">ثبت نام</a></li>
              <li><a href="{{ route('password.request') }}">فراموشی رمز عبور</a></li>
              <li><a href="#">حساب کاربری</a></li>

            </ul>
          </div>
        </aside>
        <!--Right Part End -->
      </div>
    </div>
  </div>

</body>
</html>
