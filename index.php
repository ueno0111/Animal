<!DOCTYPE html>
<html>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
      <meta charset="UTF-8">
      <title>まるやま動物病院</title>
      <meta name="description" content="丸山動物病院のWEBサイトです">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="canonical" href="あなたのサイトURL">
      <link rel="icon" type="image/png" href="ファビコンのパス" />
      <!-- OGP設定 -->
      <meta property="og:type" content="website" />
      <meta property="og:url" content="あなたのサイトURL" />
      <meta property="og:image" content="SNSで表示させたい画像のパス" />
      <meta property="og:title" content="ページタイトル" />
      <meta property="og:description" content="サイトの説明文" />
      <!-- Facebook用設定 -->
      <meta property="fb:app_id" content="facebookのApp ID" />
      <meta property="article:publisher" content="FacebookページのURL">
      <!-- Twitter用設定 -->
      <meta name="twitter:card" content="Twitterカードの種類">
      <meta name="twitter:site" content="">
      <!-- スタイルシートはここから -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="responsive_sp.css">
      <link rel="stylesheet" href="responsive_tb.css">
      <link rel="stylesheet" href="responsive_pc.css">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    </head>

    <body>
          <!--ヘッダータイトル-->
  
          <header>
   
                <div class="header-main-title">
               
                <h1 class="header-title-text">まるやま動物病院</h1>
              </div>
              <div class="icon">
                    <img src="img/hospital.png" alt="logo" class="header-title-img">
                  </div>
              <!--ナビゲーション-->
              <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <!--ハンバーガーメニュー-->
              <script>
                $(function(){
                  $('.hamburger').click(function() {
                      $(this).toggleClass('active');

                      if ($(this).hasClass('active')) {
                          $('.globalMenuSp').addClass('active');
                      } else {
                          $('.globalMenuSp').removeClass('active');
                      }
                  });
                });
              </script>
            
            <!--ハンバーガーメニューの中身-->
            <nav class="globalMenuSp">
                <ul>
                    <li><a href="#">予約</a></li>
                    <li><a href="#">診療案内</a></li>
                    <li><a href="#">医療設備</a></li>
                    <li><a href="#">スタッフ紹介</a></li>
                    <li><a href="#">お知らせ</a></li>
                </ul>
            </nav>

          </header>


          <main>
              <!--メインヘッダー-->
              <section class="header">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container-fluid mt-5" style="background-color:rgba(255,255,255,0.8);">
                      <div class="container py-3">
                        <div class="d-md-flex align-items-center">
                          <div class="header-title">
                              <div class="slide-bottom show">
                                <h1>-動物は私たちの家族です-</h1>
                                <!--フェードイン-->
                                <script>
                                    $(function(){
                                      $(window).on('load scroll', function() {
                                        var winScroll = $(window).scrollTop();
                                        var winHeight = $(window).height();
                                        var scrollPos = winScroll + (winHeight * 0.8);

                                    $(".show").each(function() {
                                      if($(this).offset().top < scrollPos) {
                                    $(this).css({opacity: 1, transform: 'translate(0, 0)'});
                                    }
                                    });
                                    });
                                    });
                                </script>

                                <p class="text-muted"><br>
                                  動物愛護の精神を持って動物たちの健康と幸せを守ります。<br>
                                  飼い主さまが「この病院ならきっとウチの子を元気にしてくれる」と安心して託していただけるように全力を尽くします。<br>
                                  動物たちに健康を、飼い主さまに安心を、そして幸せを共有してもらえるよう<br>
                                  獣医師、スタッフ共々、技術・知識・愛情・責任を持ってしっかり対応して参ります。<br>
                                </p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </section>

              <!--電話予約-->
              <section class="contact">
                  <div class="container main-img">
                  <div class="d-md-flex flex-row justify-content-between">
                    <div class="bg-blue p-3 rounded-lg col-md-6 mr-md-3 mb-3 mb-md-0">
                      <p class="text-white h2"><span><i class="fas fa-phone mr-3"></i></span>03-1234-5678</p>
                      <div class="d-flex align-items-center mb-2">
                        <p class="bg-white rounded-pill px-3 py-2 mr-3 mb-0 text-center col-3 text-blue font-weight-bold">受付時間</p>
                        <p class="text-white h4">9:00～12:00 / 16:00～19:00</p>
                      </div>
                      <p class="text-white">※ 火曜、日曜午後・祝祭日<br>※手術・往診12時〜16時</p>
                    </div>
                    
                    <!--WEB予約-->
                    <div class="bg-pink p-4 rounded-lg col-md-5">
                      <p class="text-white h4"><span><i class="fas fa-envelope mr-3"></i></span>Web予約</p>
                      <p class="text-white">休診日および診療時間外に関係なく24時間受付</p>
                      <a class="btn bg-white" href="reservation.php" role="button">予約する</a>
                    </div>
                  </div>
                </div>
              </section>


              <!--診療案内-->
              <section class="medical-check">
              <div class="sub-title">
                    <img src="img/dogcat2.png" alt="アイコン">
                    <h2 class="medical-check-title">診療案内</h2>
                  </div>
                <div class="container">
                  <!--診療案内スライドショー-->
                  <div class="step-3content">
                    <div class="area1">
                      <img src="img/matiaisitu.png" alt="ご来院" class="area-img1">
                      <h3 class="area-subtitle1">ご来院</h3>
                      <p class="area-text1">人間と同じく動物も早期発見が大事です<br>日常で些細な変化を感じましたら、<br>ためらわずにお気軽にご来院下さい</p>
                    </div>

                    <div class="area2">
                      <img src="img/uketuke.png" alt="受付" class="area-img2">
                      <h3 class="area-subtitle2">受付</h3>
                      <p class="area-text2">スタッフは全員動物大好きです<br>動物を安心させる接し方が得意なので<br>気軽にお立ち寄り下さい</h6>
                    </div>
                    
                    <div class="area3">
                      <img src="img/sinsatu.png" alt="診察" class="area-img3">
                      <h3 class="area-subtitle3">診察</h3>
                      <p class="area-text3">1.どんな症状か、いつからか。<br>2.食欲はあるか、嘔吐、下痢の状況<br>3.生活環境<br>などを診察してゆきます
                    </div>

                    <div class="area4">
                      <img src="img/kensa.png" alt="検査" class="area-img4">
                      <h3 class="area-subtitle4">検査</h3>
                      <p class="area-text4">獣医師による検温、触診、視診、聴診<br>動物たちの状態を細かくチェックします</p>
                    </div>

                    <div class="area5">
                      <img src="img/syujutu2.png" alt="入院＆手術" class="area-img5">
                      <h3 class="area-subtitle5">入院＆手術</h3>
                      <p class="area-text5">手術時間を計測し手術術時間の短縮に努め<br>動物達の体にかかる負担を減らします</p>
                    </div>

                    <div class="area6">
                      <img src="img/saikensin.png" alt="再検診" class="area-img6">
                      <h3 class="area-subtitle6">経過観察</h3>
                      <p class="area-text6">麻酔から目覚めるまで状態を経過観察<br>手術をした場合は最低１日の入院します</p>
                    </div>

                    <div class="area7">
                      <img src="img/dog.png" alt="退院" class="area-img7">
                      <h3 class="area-subtitle7">退院</h3>
                      <p class="area-text7">退院時に血液検査、術後のご説明を致します<br>食事、術後のケアなどのアドバイスも行います</p>
                    </div>
                  </div>

                </div>
              </section>




              <!--当院の理念ー-->
              <div class="sub-title">
                    <img src="img/dogcat2.png" alt="アイコン">
                    <h2 class="policy-title">当院の理念</h2>
                </div>
              <section class="policy">
                <div class="policy-container">
                  <div class="container1">
                      <!--フェードイン--->
                      <script>
                            $(function(){
                              $(window).on('load scroll', function() {
                                var winScroll = $(window).scrollTop();
                                var winHeight = $(window).height();
                                var scrollPos = winScroll + (winHeight * 0.8);
                          
                                $(".show").each(function() {
                                    if($(this).offset().top < scrollPos) {
                                      $(this).css({opacity: 1, transform: 'translate(0, 0)'});
                                    }
                                });
                              });
                          });
                      </script>

                      <!--動物への愛-->
                      <div class="slide-bottom show">
                        <img src="img/animal-love.png" alt="" class="policy-image1">
                      </div>
                      <div class="policy-content">
                        <h3 class="policy-contenttitle1"><span>動物への愛<span></h3>
                        <p class="policy-text1">「お節介なくらい愛情たっぷり、みんなうちの子！」<br>出会った子犬や子猫は家族、ずっと元気にいてほしい<br>動物と飼い主さんを一番に考え、最善の治療を尽くします</p>
                      </div>

                      <!--信頼と安心-->
                      <div class="policy-container1">
                        <div class="slide-bottom show">
                          <img src="img/sinrai.png" alt="" class="policy-image2">
                        </div>
                        <div class="policy-content1">
                          <h3 class="policy-contenttitle2"><span>信頼と安心<span></h3>
                          <p class="policy-text2">飼い主さんと深いコミニュケーションを図り<br>我が子の体調変化にすぐに気づくことができます。<br>病気は早期発見が基本です。早い段階で治療に入ることが大切です。</p>
                        </div>
                      </div>

                      <!--知識と技術と精神-->
                      <div class="policy-container2">
                        <div class="slide-bottom show">
                          <img src="img/skill.png" alt="" class="policy-image3">
                        </div>
                        <div class="policy-content2">
                          <h3 class="policy-contenttitle3"><span>知識と技術と精神<span></h3>
                          <p class="policy-text3">弊院は「知識、技術」の向上に努めております<br>応援にかけつけてくれるスタッフもおり体制は万全です。<br>経験豊富な医師とスタッフが責任を持ってご対応します。</p>
                        </div>
                      </div>
                  </div>
                </div>
              </section>



              <!--医療設備-->
              <div class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">医療設備</h2>
              </div>

              <section class="medical-machine">
                <div class="container">
                  <div class="step-4content">

                      <div class="area-machine1">
                        <img src="img/syujutu-room2.png" alt="手術室" class="area-machine-img1">
                        <h3 class="area-machine-subtitle1">手術室</h3>
                        <p class="area-machine-text1">殺菌＆消毒が施された手術室<br>経験豊富な獣医師による施術を行います。</p>
                      </div>

                      <div class="area-machine2">
                        <img src="img/syujutu-item8.png" alt="検査室" class="area-machine-img2">
                        <h3 class="area-machine-subtitle2">検査室</h3>
                        <p class="area-machine-text2">血液、尿検査、超音波検査、CT検査<br>細部まで異常を検査し原因を突き止め<br>飼い主様と一緒に治療方針を決定してゆきます。</p>
                      </div>
                    
                      <div class="area-machine3">
                        <img src="img/syujutu-item7.png" alt="入院室" class="area-machine-img3">
                        <h3 class="area-machine-subtitle3">入院室</h3>
                        <p class="area-machine-text3">温度や湿度、酸素濃度が一定になるように<br>コントロールし、環境を徹底して整えます。</p>
                      </div>

                      <div class="area-machine4">
                        <img src="img/syujutu-item6.png" alt="処方食" class="area-machine-img4">
                        <h3 class="area-machine-subtitle4">処方食</h3>
                        <p class="area-machine-text4">一般的に販売されているものでなく<br>獣医師が動物達の体調・病気に合わせた<br>特別な成分のご飯を動物たちにご用意します。</p>
                      </div>

                      <div class="area-machine5">
                        <img src="img/syujutu-item2.png" alt="エコー" class="area-machine-img5">
                        <h3 class="area-machine-subtitle5">エコー</h3>
                        <p class="area-machine-text5">高周波数の超音波を発信して<br>データをコンピューターで画像化します。<br>施術の際は毛刈りをする可能性があります。</p>
                      </div>

                      <div class="area-machine6">
                        <img src="img/syujutu-item1.png" alt="レントゲン" class="area-machine-img6">
                        <h3 class="area-machine-subtitle6">レントゲン</h3>
                        <p class="area-machine-text6"><br>最新のレントゲン機器を導入<br>動物たちへの負担を軽減し診断精度を高め<br>動物達の治療に役立ています。</p>
                      </div>

                      <div class="area-machine7">
                        <img src="img/syujutu-item3.png" alt="電子内視鏡" class="area-machine-img7">
                        <h3 class="area-machine-subtitle7">電子内視鏡</h3>
                        <p class="area-machine-text7">術後の経過観察を行います。<br>アフターケアも徹底して行います。</p>
                      </div>
              
                      <div class="area-machine8">
                        <img src="img/syujutu-item4.png" alt="超音波スケーラー" class="area-machine-img8">
                        <h3 class="area-machine-subtitle8">超音波スケーラー</h3>
                        <p class="area-machine-text8">超音波で歯石を粉砕し除去する機器です。<br>スピーディに歯石除去<br>口腔内を傷つけず施術を行います。</p>
                      </div>

                  </div>
                </div>
              </section>



              <!--スタッフ紹介-->
              <div class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">スタッフ紹介</h2>
              </div>

              <section class="staff-title">
                <div class="container">
                  <div class="wrapper">
                    <div class="container">
                      <div class="content">

                          <div class="list">
                            <div class="list-item">
                              <img src="img/staff1.png" class="image">
                              <h2 class="staff-class1">院長</h2>
                              <div class="staff-text">一言だけです！「来院した子達は家族」です</div>
                            </div>
                                
                            <div class="list-item">
                              <img src="img/staff6.png" class="image">
                              <h2 class="staff-class2">副院長</h2>
                              <div class="staff-text">病気や怪我を診るだけではなく、食事、しつけに関するお悩みお答えしてゆきます</div>
                            </div>

                            <div class="list-item">
                              <img src="img/staff3.png" class="image">
                              <h2 class="staff-class3">主任</h2>
                              <div class="staff-text">飼い主さんと一緒にケアができるようにアドバイスもしております！</div>
                            </div>

                            <div class="list-item">
                              <img src="img/staff4.png" class="image">
                              <h2 class="staff-class4">看護師長</h2>
                              <div class="staff-text">診察は病気のサインを見つけることが重要です。些細な不安でも遠慮なく教えて下さい！</div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>
                </div>
              </section>



              <!--お知らせ-->
              <div class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン" class="info-img">
                <h2 class="info-title">お知らせ</h2>
              </div>

              <section class="py-5">
                <div class="info">
                  <div class="container">
                    <ul class="list-group list-group-flush h5">
                      <li class="list-group-item d-flex justify-content-start align-items-center"><span class="mr-5">2021/1/15</span>新型コロナウイルスによる受付時間変更のお知らせ<br>9:00〜11:45受付｜16:00〜17:30受付終了</li>
                      <li class="list-group-item d-flex justify-content-start align-items-center"><span class="mr-5">2020/12/28</span> 狂犬病ワクチン接種と<br>フィラリアの予防をしましょう！</li>
                      <li class="list-group-item d-flex justify-content-start align-items-center"><span class="mr-5">2020/11/24</span> 当院ではマスクの着用が義務づけられております。<br>予めご準備いただくか、当院での配布も行っております。</li>
                    </ul>
                  </div>
                </div>
              </section>




                <!--受付時間ー-->
                <div class="sub-title">
                  <img src="img/dogcat2.png" alt="アイコン">
                  <h2 class="medical-check-title">受付時間</h2>
                </div>

                <div class="footer bg-lightblue">
                  <div class="container">
                    <div class="footer">
                      <div class="col-md-6">
                        <!--診療時間-->
                        <table class="table mb-2 table-sm">
                          <thead class="thead-blue text-white">
                            <tr>
                              <th class="pl-2">診察時間</th>
                              <th scope="col" class="text-center">月</th>
                              <th scope="col" class="text-center">火</th>
                              <th scope="col" class="text-center">水</th>
                              <th scope="col" class="text-center">木</th>
                              <th scope="col" class="text-center">金</th>
                              <th scope="col" class="text-center">土</th>
                              <th scope="col" class="text-center">日</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <th scope="row" class="pl-2">9:00~12:00</th>
                              <td class="text-center">●</td>
                              <td class="text-center">－</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">▲ </td>
                            </tr>
                            <tr class="border-bottom">
                              <th scope="row" class="pl-2">16:00~19:00</th>
                              <td class="text-center">●</td>
                              <td class="text-center">－</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">●</td>
                              <td class="text-center">－</td>
                            </tr>
                          </tbody>
                        </table>
                        <p class="text-right mb-0"> 休診日：火曜、日曜午後・祝日 ／ ▲ 日曜の午後は12：00まで</p>


                        <!--電話予約-->
                        <div class="d-md-flex flex-row">
                          <div class="bg-blue p-3 rounded-lg col-md-6 mr-md-3 mb-3 mb-lg-0">
                            <p class="text-white h3"><span><i class="fas fa-phone mr-3"></i></span>03-5665-1212</p>
                            <div class="d-flex align-items-center">
                              <p class="bg-white rounded-pill px-3 py-2 mr-2 text-center h6 text-blue font-weight-bold" style="line-height: 1rem;">受付時間</p>
                              <p class="text-white h6">9:00～12:00 / 16:00～19:00</p>
                            </div>
                            <p class="text-white">※ 火曜、日曜午後・祝日は休診</p>
                          </div>

                          <!--WEB予約-->
                          <div class="bg-pink p-3 rounded-lg col-md-4 mb-3 mb-lg-0">
                            <p class="text-white h4"><span><i class="fas fa-envelope mr-3"></i></span>Web予約</p>
                            <p class="text-white">休診日および診療時間外に関係なく24時間受付</p>
                            <a class="btn bg-white" href="reservation.php" role="button">予約する</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <!--アクセスー-->
                <div class="sub-title">
                  <img src="img/dogcat2.png" alt="アイコン">
                  <h2 class="medical-check-title">アクセス</h2>
                </div>

            　<!--アクセス-->
              <div class="access-content">
                <div class="col-md-7">
                  <div class="access">丸山動物病院</div>
                  <p class="mb-0">東京都江東区石島 4-9</p>
                  <p>TEL 03-5665-1212</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.871056768986!2d139.80930385110352!3d35.68017683753925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018891dca4ab10d%3A0x46c21ff87751e1cc!2z44CSMTM1LTAwMTQg5p2x5Lqs6YO95rGf5p2x5Yy655-z5bO277yU4oiS77yZ!5e0!3m2!1sja!2sjp!4v1631874522263!5m2!1sja!2sjp" class="map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="map">
                  <!--GoogleAPI 地図-->
                  <div id="map"></div>
                  <script src="http://maps.googleapis.com/maps/api/js?key={AIzaSyADW-v1vcRDsmQF0Q8FBCjYjy15Qr48UF8}&language=ja"></script>
                  <script>
                    var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
                    var Options = {
                    zoom: 15,      //地図の縮尺値
                    center: MyLatLng,    //地図の中心座標
                    mapTypeId: 'roadmap'   //地図の種類
                    };
                    var map = new google.maps.Map(document.getElementById('map'), Options);
                  </script>
                </div>
              </div>

                <!--天気API
                <div class="col-md-7">
                  <iframe src="https://api.openweathermap.org/data/2.5/weather?q=Tokyo,JP&appid=87586f50c2ea2c3f33cdf9fb879cffa5&lang=ja" class="weather" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <script>
                    var forecast = JSON.parse(response.getContentText());//情報解析
                    console.log(forecast);
                </script>
                  -->
          </main>



          <!--フッター-->
          <footer>
            <footer id="footer">
              <div class="container-fulid">
                <div class="footer-title">
                  <p class="text-center mb-3">&copy;丸山動物病院</p>
                </div>
              </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script>
                  $(window).on('scroll', function() {
                    h = $(window).height();
                    $('header nav').toggleClass('fixed', $(this).scrollTop() > h)
                  });
            </script>
          </footer>


    </body>
</html>
