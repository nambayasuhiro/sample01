
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
@extends('layouts.nav')

    <main role="main">

                 <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img-temp/1920x1080/img3.jpg);">
        <!-- Promo Content --> 
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                <h1 class="display-sm-4 display-lg-3 mb-3">NO ONE ELSE CAN DO <span class="js-display-typing"></span></h1>

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
              <!-- About -->
              <section class="demo-about-section u-content-space-bottom">
                <div class="container">
                  <!-- Author Avatar -->
                  <article class="mb-5">
                    <div class="d-flex align-items-center justify-content-center text-uppercase font-weight-bold small">
                      <span class="mr-3">世界一クールな </span>
                      <img class="rounded-circle mr-3 mb-1" src="assets/img-temp/ava/img1.jpg" width="35" alt="Author Image">
                      <a href="https://htmlstream.com">マーケティング視点のHP</a>
                    </div>
                  </article>
                  <!-- End Author Avatar -->
           <!-- About Content -->
           <article class="w-md-75 mx-auto">
            <p class="lead font-weight-normal text-center mb-4">ホームページを作成して終わりではありません。事実世の中には制作されたけどだれからも見られていないHPは多くあります。弊社はSEO/MEOに強いHP、またその後の集客の程までもワンストップで行えます。</p>

      <!-- End About -->

      <hr>
     <!-- Why We? -->
     <section class="u-content-space">
      <div class="container">
        <header class="text-center w-md-50 mx-auto mb-8">
          <h2 class="h1">３つの特徴</h2>
        </header>

        <!-- Row -->
        <div class="row text-center">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fab fa-grav"></i>
            </div>
            <h4 class="h5">シンプルイズベスト</h4>
            <p>お問い合わせをいただいた後、ヒアリングを行います。その後弊社のクリエーションチームがホームページを仕上げ完了といったシンプルな流れとなります。</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fab fa-connectdevelop"></i>
            </div>
            <h4 class="h5">技術力</h4>
            <p>シンプルだけどシンプルじゃない理由。それは私たちの「技術」にあります。最新のHTML5やJS、モーションなどを駆使し、スマホとPCに対応したレスポンシブサイトにイマドキのデザインや機能を埋め込んだウェブサイトが可能です。</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fas fa-cubes"></i>
            </div>
            <h4 class="h5">全て私がやります</h4>
            <p>通常ホームページを作る前、様々なコンテンツなどを別業者に発注をかけたりと大きな手間があります。弊社ではすでにコンテンツ制作や撮影事業を​行なっておりますためコンテンツ制作などのご要望もワンストップで行えます。</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- End Why We? -->


    <hr>

      <!-- Stats -->
      <section class="bg-light position-relative u-hero-img u-overlay u-overlay--dark" style="background-position: 50% 65%; background-image: url(assets/img-temp/1920x1080/img4.jpg);">
        <div class="container u-overlay__inner pt-8">
          <div class="row text-center text-uppercase text-white">
            <div class="col-lg-3 col-sm-6 pb-8">
              <h1 class="js-counter display-4 mb-1">制作事例</h1>
            </div>

           
          </div>
        </div>
      </section>
      <!-- End Stats -->

        <!-- Row -->
        <div class="row text-center">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fab fa-grav"></i>
            </div>
            <h4 class="h5">飲食店事例</h4>
            <p>サンプルリンク</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fab fa-connectdevelop"></i>
            </div>
            <h4 class="h5">企業ページ</h4>
            <p>サンプルリンク</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="display-4 text-primary mb-2">
              <i class="fas fa-cubes"></i>
            </div>
            <h4 class="h5">会員制サイト</h4>
            <p>サンプルリンク</p>
            <a href="#!">
              Learn More <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </div>

      
      <!-- Our Product -->
    <hr>
      <!-- Carousel -->
      <section class="u-content-space-bottom">
        <div class="container">
          <header class="w-md-50 mx-auto text-center mb-7">
            <h2 class="h1 font-weight-light mb-1">サービスフロー</h2>
          </header>

          <!-- Carousel -->
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div id="carouselExampleIndicators" class="carousel slide bg-light u-box-shadow-lg" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3" class="rounded"></li>

                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/img1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="h2 font-weight-light mb-0">お申し込み</h5>
                      <p class="lead">以下の申し込みフォームからお申し込みいただき、その情報を基に担当者から詳細ヒアリングのためメールにてご連絡をさせていただきます。</p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/img2.jpg"  alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="h2 font-weight-light mb-0">連絡方法</h5>
                      <p class="lead">サイトの詳細ヒアリングは「Chatwork」アプリにて行います。チャットワークをダウンロードし、弊社担当者と詳細の打ち合わせを開始してください。必要であればお電話でのMTGも可能です。</p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/img9.jpg"  alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="h2 font-weight-light mb-0">制作開始</h5>
                      <p class="lead">サイトの制作を開始いたします。サイトにてコンテンツなどが必要な場合は別途撮影プラン（別料金）もご検討ください。制作後最終的な精査をいただいたのちサイトをウェブ上へ公開いたします。</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/YOSX9526_TP_V.jpg" alt="Fourth slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="h2 font-weight-light mb-0">お支払い</h5>
                    <p class="lead">サイト公開後サイトのお支払いをお振込にて行なってください。また月々のエンハンス費用（17800円）のご登録も別途登録URLをメールにてご案内いたします。</p>
                  </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/macbookFTHG1236_TP_V.jpg" alt="fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="h2 font-weight-light mb-0">保守・編集</h5>
                      <p class="lead">小規模なサイトの内容更新などはお申し込み規約に基づいて無料にて対応をさせていただきます。都度チャットワークなどでお気軽にご相談ください。</p>
                    </div>
                  </div>
                </div>



                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span aria-hidden="true">
                    <i class="fas fa-angle-left carousel-control-size"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span aria-hidden="true">
                    <i class="fas fa-angle-right carousel-control-size"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Carousel -->
        </div>
      </section>
      <!-- End Carousel -->

    
      <!-- End Stats -->
      
            <!-- End Article Content -->

            <!-- Article Image 
            <div class="col-lg-6 align-self-center">
              <img class="img-fluid rounded" src="assets/img-temp/900x700/img1.png" alt="Iamge Description">
            </div>
            End Article Image -->
          </div>
        </div>
      </section>
      <!-- End Our Product -->
      <hr>

       <!-- Testimonials -->
       <section class="u-content-space">
        <div class="container">
          <!-- Testimonials: Header -->
          <header class="text-center w-md-50 mx-auto mb-8">
            <h2 class="h1">プラン内容</h2>
            <p class="h5"></p>
          </header>
          <!-- End Testimonials: Header -->

          <div class="row">
            <div class="col-lg-6 mb-7 mb-lg-0 px-lg-5">
              <!-- Testimonial -->
              <blockquote class="u-blockquote-v2 rounded mb-5">サイト制作をご依頼の方は上記「ヒアリングフォーム」からサイトのイメージなどをご登録ください。その後弊社担当者より通常数時間後、混雑状況により最大３営業日以内にお電話をさせていただきます。その際に詳しいヒアリングなどをお電話にて行います。お客様と弊社で制作イメージが固まりましたらやりとりをChatWorkにて行いお見積兼請求書、電子契約書をお送りいたします。（契約書は電子契約書のためスマートフォンにて署名が可能です）請求書兼お見積書に沿って初期制作費用のお支払いを行なってください。お支払いが完了後制作に取り掛からせていただきます。制作の際は都度ChatWorkにて細かい調整を行わせていただきます。サイト制作が完了後以下納品納品承認フォームから承認を行ってください。そのフォームにて月々の決済登録も同時位に可能です。決済登録完了後納品されたウェブサイトはウェブ上に公開されます。通常申し込みから納品まで２週間から1ヶ月程度で可能です。</blockquote>
              <div class="media u-font-size-90">
                <img class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2" src="assets/img-temp/ava/img2.jpg"　alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">スタンダード</strong>
                  <span class="u-font-size-75 text-dark"></span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>

            <div class="col-lg-6 px-lg-5">
              <!-- Testimonial -->
              <blockquote class="u-blockquote-v2 rounded mb-5">プレミアプランは、スタンダードプランに追加して撮影から編集し全てお任せのプランになります。ただし、撮影の出張費は別途いだだきます。</blockquote>
              <div class="media u-font-size-90">
                <img class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2" src="assets/img-temp/ava/img3.jpg" alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">プレミア</strong>
                  <span class="u-font-size-75 text-dark"></span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials -->
      <hr>

       <!-- Testimonials -->
       <section class="u-content-space">
        <div class="container">
          <!-- Testimonials: Header -->
          <header class="text-center w-md-50 mx-auto mb-8">
            <h2 class="h1">各種注意事項</h2>
            <p class="h5"></p>
          </header>
          <!-- End Testimonials: Header -->
               <!-- Alert Light -->
               <div class="alert bg-light fade show" role="alert">
                <div class="d-flex">
                  <div class="alert__icon mr-3">
                    <i class="fas fa-hand-pointer"></i>
                  </div>
    
                  <div class="align-self-center mr-3">弊社はWixなどの機能を利用することによりデザイン性に優れ、且つマーケティングに強いホームページを圧倒的な低価格で提供することが可能となっております。そのため特殊コードを用いておりますためコードデータの納品をHTMLでは行いません。一方で、コードデータをご希望の場合はWixアカウントをクライアント様側で作成していただきそちらに付与することは可能となっておりますことご安心ください。</div>
    
                  <div class="ml-auto">
                    <button type="button" class="alert__close alert__close--dark" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Alert Light -->
                        <!-- Alert Light -->
                                       <!-- Alert Light -->
               <div class="alert bg-light fade show" role="alert">
                <div class="d-flex">
                  <div class="alert__icon mr-3">
                    <i class="fas fa-hand-pointer"></i>
                  </div>
    
                  <div class="align-self-center mr-3">【注意事項】コードデータ
                    弊社の機能を利用することによりデザイン性に優れ、且つマーケティングに強いホームページを圧倒的な低価格で提供することが可能となっております。そのため特殊コードを用いておりますためコードデータの納品をHTMLでは行いません。一方で、コードデータをご希望の場合はWixアカウントをクライアント様側で作成していただきそちらに付与することは可能となっておりますことご安心ください.</div>
                  <div class="ml-auto">
                    <button type="button" class="alert__close alert__close--dark" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Alert Light -->
          
          <!-- End Alert Light -->
                    <!-- Alert Light -->
                    <div class="alert bg-light fade show" role="alert">
                      <div class="d-flex">
                        <div class="alert__icon mr-3">
                          <i class="fas fa-hand-pointer"></i>
                        </div>
          
                        <div class="align-self-center mr-3">【注意事項】保守管理
                          納品後の更新依頼については簡単な内容（例：少量の文字変更、色の変更、画像の差し替えなど）は月々の保守代金17,980円（税込）の中で行えますことご安心ください。しかし大幅な変更（例：ページの追加、ページのデザイン変更、大量の文字の差し替え、タグの追加及び動作確認など）については都度更新内容をクライアント様と協議の上追加料金の決定を行うものとしております。</div>
          
                        <div class="ml-auto">
                          <button type="button" class="alert__close alert__close--dark" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Alert Light --> 
                                   <!-- Alert Light -->
               <div class="alert bg-light fade show" role="alert">
                <div class="d-flex">
                  <div class="alert__icon mr-3">
                    <i class="fas fa-hand-pointer"></i>
                  </div>
    
                  <div class="align-self-center mr-3">【注意事項】滞納による閲覧停止
                    月々の保守代金を滞納した場合、弊社にてクライアント様へ電子メールなどの方法により通知を行います。２ヶ月以上滞納が解消されない場合弊社はウェブサイトをウェブ上またはオンライン上からの閲覧停止を一時的または永続的に実行できるものとします。その際に発生した全ての事象への責任は弊社では負い兼ねますことご了承ください。</div>
    
                  <div class="ml-auto">
                    <button type="button" class="alert__close alert__close--dark" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Alert Light -->
                             <!-- Alert Light -->
                             <div class="alert bg-light fade show" role="alert">
                              <div class="d-flex">
                                <div class="alert__icon mr-3">
                                  <i class="fas fa-hand-pointer"></i>
                                </div>
                  
                                <div class="align-self-center mr-3">【注意事項】契約期間
                                  本契約の解除は解除希望日の１ヶ月前までに電子メールなどの方法にて告知することにより解除できるものとし、契約満了である二年間に満たない場合、17,980円の保守管理代金を残契約月で掛けた額を一括支払いされた時点で解除されるものとする。契約解除後ウェブサイトはクライアント様が保有するWixアカウントにて移行されるものとする。その際Wix側で発生するWixサービス利用料はクライアント様が負担するものとする。</div>
                  
                                <div class="ml-auto">
                                  <button type="button" class="alert__close alert__close--dark" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End Alert Light -->



    </main>

         <!-- Footer -->
    <footer class="bg-dark u-content-space-top pb-4" role="footer">
      <div class="container-fluid">
        <div class="px-md-3">
          <!-- Social Sharing -->
          <div class="text-center">
          <h2 class="h5 font-weight-light text-white mb-4">ホームページは見られなきゃ意味がない</h2>

            <div class="d-flex justify-content-center">
              <!-- Facebook Share -->
              <div class="mr-3 mb-2 mb-md-0">
                <div class="fb-share-button demo-faceook-share"
                     data-href="http://facebook.com/htmlstream"
                     data-layout="button"
                     data-size="large"
                     data-mobile-iframe="true">
                  <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/yasuhiro.number">@facebook</a>
                </div>
              </div>
              <!-- End Facebook Share -->

              <!-- Google Plus -->
              <div class="mr-3 mb-2 mb-md-0">
                <div class="g-plus" data-action="share" data-annotation="bubble" data-height="52"></div>
              </div>
              <!-- End Google Plus -->

              <!-- Tweet -->
              <div class="mr-3">
                <a href="https://www.instagram.com/yasu_namba/?hl=ja" class="twitter-share-button" data-size="large" data-text="Stream UI Kit is beautiful Open Source Bootstrap 4 UI Kit under MIT license." data-hashtags="StreamUIKit, Bootstrap, Freebies" data-related="htmlstream, freebies, bootstrap">@instagram</a>
              </div>
              <!-- End Tweet -->
            </div>
          </div>
          <!-- End Social Sharing -->

          <hr class="u-opacity-1 mb-4">
        </div>

        <!-- Copyright and Social Icons -->
        <div class="row px-md-3">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy; 2020 <a class="text-white" href="https://htmlstream.com">Yasuhiro Namba</a>.NO ONE ELSE CAN DO.</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/htmlstream">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/htmlstream">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a class="text-white" target="_blank" href="https://twitter.com/htmlstream">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                <a class="text-white" target="_blank" href="https://dribbble.com/htmlstream">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Copyright and Social Icons -->
      </div>
    </footer>
    <!-- End Footer -->
    

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="assets/js/global.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- End Body -->
</html>