@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif
    
    @component('components.nav')

@foreach($blogs as $blog)


<div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>
                <p class="card-text samneil"><img class="samneil" src="{{ asset('public/storage/') }}/{{ $blog->id }}/{{ $blog->image }}"></p>
                <div class="d-flex" style="height: 36.4px;">
                <a href="/sample01/blogs/{{ $blog->id }}" class="btn btn-outline-primary">詳細</a>
                    <a href="/sample01/blogs/{{ $blog->id }}/edit" class="btn btn-outline-primary">編集</a>
                    <form action="/sample01/blogs/{{ $blog->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">削除</button>
                    </form>
                </div>
            </div>
        </div>
@endforeach

<a href="/sample01/blogs/create">新規作成</a> 

@endsection


　<!DOCTYPE html>
<html lang="ja" class="no-js">
  <!-- Head -->
  <head>
    <title>blog</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Stream - UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header>
            <!-- Navbar Light -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand mr-4" href="index.html">
                  <img src= 'assets/img/logo.png' alt="Stream UI Kit" style="width: 100px;">
                </a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active mr-3">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="/sample01/profiles">profile</a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="/sample01/blogs">blog</a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link" href="services.html">ヒアリング</a>
                    </li>
                    </li>
                  </ul>
    
                </div>
              </div>
            </nav>
      <!-- End Navbar -->

      <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img-temp/1920x1080/img6.jpg);">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <h1 class="display-sm-4 display-lg-3">学びの全て</h1>
                <p class="h6 text-uppercase u-letter-spacing-sm mb-0">昨日の自分にグッバイ</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Promo Content -->
      </section>
      <!-- End Promo Block -->
    </header>
    <!-- End Header -->





    

  <div class="container　.m-auto	.p-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top　.m-n1" src="assets/img-temp/400x550/img2.jpg" alt="ライトコースのイメージ画像">
          <div class="card-body">
            <h4 class="card-title">タイトル</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Lean More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top　.m-n1" src="assets/img-temp/400x550/img2.jpg" alt="スタンダードコースのイメージ画像">
          <div class="card-body">
            <h4 class="card-title">タイトル</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Lean More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top　.m-n1" src="assets/img-temp/400x550/img2.jpg" alt="プロフェッショナルコースのイメージ画像">
          <div class="card-body">
            <h4 class="card-title">タイトル</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Lean More</a>
          </div>
        </div>
      </div>
    </div>
  </div>


      <!-- About -->
      <!-- End About -->
<!-- ループさせたい内容 end -->
</dl>
</div>
<div class="single_kanren">
            <dl class="clearfix">
      <dt><a href="https://www.fukulow.info/new-dresscode/">
                        <img width="650" height="400" src="https://www.fukulow.info/wp-content/uploads/2019/01/new-dresscode_th-300x160.jpeg" class="attachment-medium size-medium wp-post-image" alt="" srcset="https://www.fukulow.info/wp-content/uploads/2019/01/new-dresscode_th-300x160.jpeg 300w, https://www.fukulow.info/wp-content/uploads/2019/01/new-dresscode_th-768x410.jpeg 768w, https://www.fukulow.info/wp-content/uploads/2019/01/new-dresscode_th-1024x546.jpeg 1024w, https://www.fukulow.info/wp-content/uploads/2019/01/new-dresscode_th.jpeg 1500w" sizes="(max-width: 300pxw) 100vw, 300px" />											</a></dt>
      <dd>
        <p class="kanren-t"><a href="https://www.fukulow.info/new-dresscode/">
            				</a></p>
          <div class="blog_info">
        <span class="blog_info_date">Published on   2019/01/17</span>
      </div>

        <div class="smanone2">
        </div>
      </dd>
    </dl>
        <dl class="clearfix">
      <dt><a href="https://www.fukulow.info/blog-twohundredthousand/">
                        <img width="650" height="400" src="https://www.fukulow.info/wp-content/uploads/2016/11/blog-twohundredthousand_th-300x160.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="https://www.fukulow.info/wp-content/uploads/2016/11/blog-twohundredthousand_th-300x160.jpg 300w, https://www.fukulow.info/wp-content/uploads/2016/11/blog-twohundredthousand_th-768x410.jpg 768w, https://www.fukulow.info/wp-content/uploads/2016/11/blog-twohundredthousand_th-1024x546.jpg 1024w, https://www.fukulow.info/wp-content/uploads/2016/11/blog-twohundredthousand_th.jpg 1500w" sizes="(max-width: 300px) 100vw, 300px" />											</a></dt>
      <dd>
        <p class="kanren-t"><a href="https://www.fukulow.info/blog-twohundredthousand/">
            月間20万PVを達成した『DRESS CODE.』がブログ運営で日々意識していること。						</a></p>
          <div class="blog_info">
        <span class="blog_info_date">Published on   2016/11/03</span>
      </div>

        <div class="smanone2">
        </div>
      </dd>
    </dl>
        <dl class="clearfix">
      <dt><a href="https://www.fukulow.info/photo-processing/">
                        <img width="650" height="400" src="https://www.fukulow.info/wp-content/uploads/2016/12/photo-processing_th-300x160.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="https://www.fukulow.info/wp-content/uploads/2016/12/photo-processing_th-300x160.jpg 300w, https://www.fukulow.info/wp-content/uploads/2016/12/photo-processing_th-768x410.jpg 768w, https://www.fukulow.info/wp-content/uploads/2016/12/photo-processing_th-1024x546.jpg 1024w, https://www.fukulow.info/wp-content/uploads/2016/12/photo-processing_th.jpg 1500w" sizes="(max-width: 300px) 100vw, 300px" />											</a></dt>
      <dd>
        <p class="kanren-t"><a href="https://www.fukulow.info/photo-processing/">
            スマホで完結！DRESS CODE.で行なっている写真の加工方法を紹介します。						</a></p>
          <div class="blog_info">
        <span class="blog_info_date">Published on   2016/12/28</span>
      </div>

        <div class="smanone2">
        </div>
      </dd>
    </dl>
      </div>
</div>
<div id="content" class="clearfix">
<div id="contentInner">

  <div class="st-main">



      
      <!-- End Clients Section -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy; 2020 <a class="text-white" href="https://htmlstream.com">Yasuhiro Namba</a>.NO ONE ELSE CAN DO.</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/yasuhiro.number">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/yasuhironamba/?hl=ja">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Call Us Modal Window -->
    <div class="modal fade" id="callUsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="#">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">We'll call you</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group mb-4">
                <input type="text" class="form-control" id="modalName" placeholder="Your Name">
              </div>
              <div class="form-group mb-4">
                <input type="tel" class="form-control" id="modalPhone" placeholder="Your Phone Number">
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Call Us Modal Window -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Vendor  -->
    <script src="assets/vendors/jquery.parallax.js"></script>
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="assets/js/vendors/parallax.js"></script>
    <script src="assets/js/vendors/carousel.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- End Body -->
</html>