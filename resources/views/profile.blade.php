<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>


    @if (session('message'))
        {{ session('message') }}
    @endif
    

@foreach($profiles as $profile)

        <div class="card-body">
        <p class="card-varchara">{{ $profile->name }}</p>
            <p class="card-varchara">{{ $profile->explanation }}</p>
            <p class="card-text">{{ $profile->about_me }}</p>
            <p class="card-varchara">{{ $profile->php_laravel }}</p>
            <p class="card-varchara">{{ $profile->html_css }}</p>
            <p class="card-varchara">{{ $profile->wix }}</p>
            <p class="card-varchara">{{ $profile->marketing }}</p>
                <p class="card-text samneil"><img class="samneil" src="{{ asset('public/storage/') }}/{{ $profile->id }}/{{ $profile->image }}"></p>
                <div class="d-flex" style="height: 36.4px;">
                <a href="/sample01/profiles/{{ $profile->id }}" class="btn btn-outline-primary">詳細</a>
                    <a href="/sample01/profiles/{{ $profile->id }}/edit" class="btn btn-outline-primary">編集</a>
                    <form action="/sample01/profiles/{{ $profile->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">削除</button>
                    </form>
                </div>
            </div>
        </div>
@endforeach

<a href="/sample01/profiles/create">新規作成</a> 




  <body>
    <!-- Header -->
    <header>

      <!-- End Navbar -->

      <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img-temp/1920x1080/img5.jpg);">
        <!-- Promo Content -->
        @foreach($profiles as $profile)
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <h1 class="display-sm-4 display-lg-3">{{ $profile->name }}</h1>
                <p class="h6 text-uppercase u-letter-spacing-sm mb-2">{{ $profile->explanation }}</p>

                <ul class="list-inline text-center mb-0">
                  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <a class="text-white" href="https://www.facebook.com/yasuhiro.number">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>

                  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                    <a class="text-white" href="https://www.instagram.com/yasuhironamba/?hl=ja!">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Promo Content -->
      </section>
      <!-- End Promo Block -->
    </header>
    <!-- End Header -->

    <main role="main">
      <!-- About Section -->
      <section>
        <div class="container">
          <!-- Profile Block -->
          <div class="row">
            <div class="col-md-4 mx-auto">
              <div class="u-pull-half text-center">
                <img class="img-fluid u-avatar u-box-shadow-lg rounded-circle mb-3" width="150" height="auto" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Profile Block -->

          <!-- About and Skills -->

          <div class="row u-content-space-bottom">
            <div class="col-lg-6 mb-5 mb-lg-5 pl-lg-5">
              <h4 class="mb-3">About me</h4>
              <hr>
              <p>{{ $profile->name }}</p>
              <p>{{ $profile->explanation }}</p>
              <p>{{ $profile->about_me }}</p>
              <p>{{ $profile->about_me }}</p>
              <p>{{ $profile->about_me }}</p>
              <p>{{ $profile->about_me }}</p>

            </div>

            <div class="col-lg-6">
              
              <h4 class="mb-3">My skills</h4>
              <hr>
              <!-- Progress Bar -->
              <h5 class="u-font-size-90 mb-1">{{ $profile->my_skils }}</h4>
              <div class="progress mb-3">
                <div class="progress-bar .bg-secondary" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- End Progress Bar -->

              <!-- Progress Bar -->
              <h5 class="u-font-size-90 mb-1">{{ $profile->my_skils }}</h4>
              <div class="progress mb-3">
                <div class="progress-bar .bg-secondary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- End Progress Bar -->

              <!-- Progress Bar -->
              <h5 class="u-font-size-90 mb-1">{{ $profile->my_skils }}</h4>
              <div class="progress mb-3">
                <div class="progress-bar .bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- End Progress Bar -->
                            <!-- Progress Bar -->
                            <h5 class="u-font-size-90 mb-1">{{ $profile->my_skils }}</h4>
                              <div class="progress mb-3">
                                <div class="progress-bar .bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              @endforeach

                              <!-- End Progress Bar -->
            </div>
          </div>
          <!-- End About and Skills -->
        </div>
      </section>
      <!-- End About Section -->

      <div class="container">
        <hr class="my-0">
      </div>

      <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">

          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img8.jpg" alt="Image Description">
            <h2 class="h1">Direction</h2>
          </header>

          <!-- Work Content -->
      <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img9.jpg" alt="Image Description">

     
            <h2 class="h1">Design</h2>
          </header>

           <!-- Work Content -->
                          <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img10.jpg" alt="Image Description">

            <h2 class="h1">Coding</h2>
          </header>

           <!-- Work Content -->
                          <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img11.jpg" alt="Image Description">

            <h2 class="h1">Consulting</h2>
          </header>

           <!-- Work Content -->
                          <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img13.jpg" alt="Image Description">

            <h2 class="h1">Development</h2>
          </header>

           <!-- Work Content -->
               <!-- Portfolio -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <img class="u-portfolio__image" src="assets/img-temp/portfolio/img14.png" alt="Image Description">

            <h2 class="h1">広告</h2>
          </header>

           <!-- Work Content -->
    <!-- Portfolio -->
    <section class="u-content-space">
      <div class="container">
        <header class="text-center w-md-50 mx-auto mb-8">
          
          <img class="u-portfolio__image" src="assets/img-temp/portfolio/img12.jpg" alt="Image Description">
          <h2 class="h1">Marketing</h2>
        </header>

         <!-- Work Content -->

          　
            <!-- sizer -->
            <figure class="col-sm-6 col-md-4 u-portfolio__item shuffle_sizer"></figure>
          </div>
          <!-- End Work Content -->

 
        </div>
      </section>
      <!-- End Portfolio -->
      <hr>
      <form action="confirm.php" method="post" name="Form1">
        <div class="form-group">
            <label>お名前　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="フォーム太朗" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>メールアドレス　<span class="label label-danger">必須</span></label>
            <input type="email" class="form-control" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>住所</label>
            <input type="text" class="form-control" placeholder="○○県△△市□□町xxxx-yy-z" name="address">
        </div>
        <div class="form-group">
            <label>電話番号</label>
            <input type="text" class="form-control" placeholder="xxx-yyyy-zzzz" name="phone">
        </div>
        <label>件名</label><br>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxA" onClick="changeDisabled()"> 〇〇のご依頼について
        </label>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxB" onClick="changeDisabled()"> △△について
        </label>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="others" onClick="changeDisabled()"> その他(下記の件名にご記入ください)
        </label>
        <div class="form-group" style="margin-top:10px;">
            <input type="text" class="form-control" placeholder="〇〇について" name="subject" onClick="changeDisabled()">
        </div>
        <div class="form-group">
            <label>お問い合わせ内容　<span class="label label-danger">必須</span></label>
            <textarea placeholder="お問い合わせ内容" rows="10" class="form-control" name="main" required></textarea>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
        </div>
        <button type="submit" class="btn btn-warning btn-lg btn-block">送信</button>
    </form>
<!-- 件名その他を押したときだけテキストボックスをONにする -->
<script type="text/javascript">
    function changeDisabled() {
        if ( document.Form1["subjectR"][2].checked ) {
            document . Form1["subject"] . disabled = false;
        } else {
            document . Form1["subject"] . disabled = true;
        }
    }
    window.onload = changeDisabled;
</script>

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
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/shuffle/jquery.shuffle.min.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="assets/js/vendors/parallax.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/shuffle.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- End Body -->
</html>　