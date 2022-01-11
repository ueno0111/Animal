<?php
  require_once('data.php');
  require_once('staff.php');
  require_once('info.php');
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>まるやま動物病院</title>
      <meta name="description" content="丸山動物病院のWEBサイト">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="reset.css">
      <link rel="stylesheet" href="index_sp.css">
      <link rel="stylesheet" href="index_tb.css">
      <link rel="stylesheet" href="index_pc.css">
    </head>

    <body>
          <header>
              <div class="header-container">
                    <img src="img/animal-clinic.jpg" alt="logo" class="header-img">
              
                    <!--SPナビゲーション-->
                    <div class="hamburger">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <nav class="globalMenuSp">
                        <ul>
                            <li><a href="#link1">WEB予約</a></li>
                            <li><a href="#link2">診療案内</a></li>
                            <li><a href="#link3">お知らせ</a></li>
                        </ul>
                    </nav>
                  </div>
              </div>
          </header>

          <!--PCナビゲーション-->
          <nav>
              <div class="nav-menu">
                <ul>
                    <li><a href="#link1">WEB予約</a></li>
                    <li><a href="#link2">診療案内</a></li>
                    <li><a href="#link3">お知らせ</a></li>
                </ul>
              </div>
          </nav>


          <main class="main-container">
              <section class="philosophy">
                  <div class="slide-text">
                    <div class="slide-bottom show">
                        <h1 class="philosophy-title">-動物は私たちの家族です-</h1>
                        <p class="text-muted"><br>
                          動物愛護の精神を持って動物たちの健康と幸せを守ります。<br>
                          飼い主さまが「この病院ならきっとウチの子を元気にしてくれる」と安心して託していただけるように全力を尽くします。<br>
                          動物たちに健康を、飼い主さまに安心を、そして幸せを共有してもらえるよう<br>
                          獣医師、スタッフ共々、技術・知識・愛情・責任を持ってしっかり対応して参ります。<br>
                        </p>
                    </div>
                  </div>
              </section>

              <section class="contact">
                <div class="container main-img">
                  <div class="ml-2 d-md-flex flex-row justify-content-between">
                    <div class="bg-blue p-3 rounded-lg mr-md-3 mb-3 mb-md-0">
                      <p class="text-white h3"><span><i class="fas fa-phone mr-3"></i></span>03-1234-5678</p>
                      <div class="d-flex align-items-center mb-2">
                        <p class="bg-white rounded-pill px-1 py-1 mr-3 mb-0 text-center col-4 text-blue font-weight-bold">受付時間</p>
                        <p class="text-white mr-5 h6">9:00～12:00 / 16:00～19:00</p>
                      </div>
                      <p class="text-white mb-0">※ 火曜、日曜午後・祝祭日<br>※手術・往診12時〜16時</p>
                    </div>
                    
                    <!--WEB予約-->
                    <div class="mt-0 bg-pink p-4 rounded-lg col-md-5">
                      <p class="text-white h4"><span><i class="fas fa-envelope mr-3"></i></span>Web予約</p>
                      <p class="text-white">休診日および診療時間外に関係なく24時間受付</p>
                      <a class="btn bg-white" href="reserve.php" role="button">予約する</a>
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
                      <div class="slide-bottom show">
                        <img src="img/animal-love.png" alt="" class="policy-image">
                      </div>
                      <div class="policy-content">
                        <h3 class="policy-subtitle"><span>動物への愛<span></h3>
                        <p class="policy-text">「お節介なくらい愛情たっぷり、みんなうちの子！」<br>出会った子犬や子猫は家族、ずっと元気にいてほしい<br>動物と飼い主さんを一番に考え、最善の治療を尽くします</p>
                      </div>
            
                      <div class="policy-container1">
                        <div class="slide-bottom show">
                          <img src="img/sinrai.png" alt="" class="policy-image">
                        </div>
                        <div class="policy-content1">
                          <h3 class="policy-subtitle"><span>信頼と安心<span></h3>
                          <p class="policy-text">飼い主さんと深いコミニュケーションを図り<br>我が子の体調変化にすぐに気づくことができます。<br>病気は早期発見が基本です。早い段階で治療に入ることが大切です。</p>
                        </div>
                      </div>

                      <div class="policy-container2">
                        <div class="slide-bottom show">
                          <img src="img/skill.png" alt="" class="policy-image">
                        </div>
                        <div class="policy-content2">
                          <h3 class="policy-subtitle"><span>知識と技術と精神<span></h3>
                          <p class="policy-text">弊院は「知識、技術」の向上に努めております<br>応援にかけつけてくれるスタッフもおり体制は万全です。<br>経験豊富な医師とスタッフが責任を持ってご対応します。</p>
                        </div>
                      </div>
                </div>
              </section>


              <!--診療案内-->
              <section id="link2" class="medical-check">
                <div class="sub-title">
                  <img src="img/dogcat2.png" alt="アイコン">
                  <h2 class="medical-check-title">診療案内</h2>
                </div>

                  <div class="container">
                    <div class="step-content">
                      <div class="area">
                        <img src="img/matiaisitu.png" alt="ご来院" class="area-img">
                        <h3 class="area-subtitle">ご来院</h3>
                        <p class="area-text">人間と同じく動物も早期発見が大事です<br>日常で些細な変化を感じましたら<br>ためらわずにお気軽にご来院下さい</p>
                      </div>

                      <div class="area">
                        <img src="img/uketuke.png" alt="受付" class="area-img">
                        <h3 class="area-subtitle">受付</h3>
                        <p class="area-text">スタッフは全員動物大好きです<br>動物を安心させる接し方が得意なので<br>気軽にお立ち寄り下さい</p>
                      </div>
                      
                      <div class="area">
                        <img src="img/sinsatu.png" alt="診察" class="area-img">
                        <h3 class="area-subtitle">診察</h3>
                        <p class="area-text">1.どんな症状か、いつからなのか<br>些細な変化でも構いません<br>私たちにお伝えください
                      </div>

                      <div class="area">
                        <img src="img/kensa.png" alt="検査" class="area-img">
                        <h3 class="area-subtitle">検査</h3>
                        <p class="area-text">検温、触診、視診、聴診<br>経験豊富な獣医師が<br>動物たちの状態を細かくチェックします</p>
                      </div>

                      <div class="area">
                        <img src="img/syujutu2.png" alt="入院＆手術" class="area-img">
                        <h3 class="area-subtitle">入院＆手術</h3>
                        <p class="area-text">手術には身体への負担はつきものです<br>そのため動物の身体への負担を減らすため<br>手術時間の短縮に努めます</p>
                      </div>

                      <div class="area">
                        <img src="img/saikensin.png" alt="再検診" class="area-img">
                        <h3 class="area-subtitle">経過観察</h3>
                        <p class="area-text">麻酔から目覚めるまで状態を経過観察<br>術後の状態は不安定になることが多いです<br>そのため術後は最低１日の入院いたします</p>
                      </div>

                      <div class="area">
                        <img src="img/dog.png" alt="退院" class="area-img">
                        <h3 class="area-subtitle">退院</h3>
                        <p class="area-text">退院時に血液検査、術後のご説明を致します<br>日頃のケアが最も大事です<br>食事、ストレス対策のアドバイスも行います</p>
                      </div>
                    </div>
                  </div>
              </section>

    

              <!--医療設備-->
              <div id="link3" class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">医療設備</h2>
              </div>

              <section class="medical-machine">
                <div class="container">
                  <div class="step-content">

                      <div class="machine">
                        <img src="img/syujutu-room2.png" alt="手術室" class="machine-img">
                        <h3 class="machine-subtitle">手術室</h3>
                        <p class="machine-text">殺菌＆消毒が施された手術室<br>経験豊富な獣医師による施術を行います。</p>
                      </div>

                      <div class="machine">
                        <img src="img/syujutu-item8.png" alt="検査室" class="machine-img">
                        <h3 class="machine-subtitle">検査室</h3>
                        <p class="machine-text">血液、尿検査、超音波検査、CT検査<br>細部まで異常を検査し原因を探します</p>
                      </div>
                    
                      <div class="machine">
                        <img src="img/syujutu-item7.png" alt="入院室" class="machine-img">
                        <h3 class="machine-subtitle">入院室</h3>
                        <p class="machine-text">温度や湿度、酸素濃度が一定になるように<br>コントロールし、環境を徹底して整えます</p>
                      </div>

                      <div class="machine">
                        <img src="img/syujutu-item6.png" alt="処方食" class="machine-img">
                        <h3 class="machine-subtitle">処方食</h3>
                        <p class="machine-text">獣医師が動物達の体調・病気に合わせた<br>特別なご飯を動物たちにご用意します</p>
                      </div>

                      <div class="machine">
                        <img src="img/syujutu-item2.png" alt="エコー" class="machine-img">
                        <h3 class="machine-subtitle">エコー</h3>
                        <p class="machine-text">高周波数の超音波を発信して<br>データをコンピューターで画像化します</p>
                      </div>

                      <div class="machine">
                        <img src="img/syujutu-item1.png" alt="レントゲン" class="machine-img">
                        <h3 class="machine-subtitle">レントゲン</h3>
                        <p class="machine-text">最新のレントゲン機器を導入<br>動物たちへの負担が少なく診断精度も高いです</p>
                      </div>

                      <div class="machine">
                        <img src="img/syujutu-item3.png" alt="電子内視鏡" class="machine-img">
                        <h3 class="machine-subtitle">電子内視鏡</h3>
                        <p class="machine-text">術後の経過観察に用います<br>こちらは電子のため身体への負担を少ないです</p>
                      </div>
              
                      <div class="machine">
                        <img src="img/syujutu-item4.png" alt="超音波スケーラー" class="machine-img">
                        <h3 class="machine-subtitle">超音波スケーラー</h3>
                        <p class="machine-text">超音波で歯石を粉砕し除去する機器です<br>口腔内を傷つけず施術を行います</p>
                      </div>
                  </div>
                </div>
              </section>



              <!--スタッフ紹介-->
              <div class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">スタッフ</h2>
              </div>


              <section class="staff-wrapper">
                    <?php foreach($staffs as $staff) :?>
                      <div class="staff-container">
                        <img class="staff-image" src="<?php echo $staff->getImage() ?>">
                        <h3 class="staff-name"><?php echo $staff->getName() ?></h3>
                        <div class="staff-position">担当：<?php echo $staff->getPosition() ?></div>
                        <div class="staff-hobby">趣味：<?php echo $staff->getHobby() ?></div>
                        <div class="staff-message"><?php echo $staff->getMessage() ?></div>
                    </div>
                    <?php endforeach ?>
              </section>



              <!--お知らせ-->
              <div class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">お知らせ</h2>
              </div>

              <section class="info-wrapper">
                    <?php foreach($infos as $info) :?>
                      <div class="info-container">
                        <div class="info-day"><?php echo $info->getDay() ?></div>
                        <div class="info-text"><?php echo $info->getText() ?></div>
                      </div>
                    <?php endforeach ?>
              </section>


                <!--受付時間ー-->
                <div id="link1" class="sub-title">
                <img src="img/dogcat2.png" alt="アイコン">
                <h2 class="medical-check-title">受付時間</h2>
              </div>

                <div class="footer bg-lightblue">
                  <div class="container">
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
                              <p class="pl-2 text-white h6">9:00～12:00 / 16:00～19:00</p>
                            </div>
                            <p class="text-white">※ 火曜、日曜午後・祝日は休診</p>
                          </div>

                          <!--WEB予約-->
                          <div class="bg-pink p-3 rounded-lg col-md-6 mb-3 mb-lg-0">
                            <p class="text-white h4"><span><i class="fas fa-envelope mr-3"></i></span>Web予約</p>
                            <p class="text-white">休診日および診療時間外に関係なく24時間受付</p>
                            <a class="btn bg-white" href="reservation.php" role="button">予約する</a>
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

                <div class="access">
                    <h3 class="mb-0">丸山動物病院</h3>
                    <p class="mb-0">東京都江東区石島 4-9</p>
                    <p>TEL 03-5665-1212</p>
                </div>
   
                  <!--地図-->
                  <div class="map">
                    <div id="map"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.871056768986!2d139.80930385110352!3d35.68017683753925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018891dca4ab10d%3A0x46c21ff87751e1cc!2z44CSMTM1LTAwMTQg5p2x5Lqs6YO95rGf5p2x5Yy655-z5bO277yU4oiS77yZ!5e0!3m2!1sja!2sjp!4v1631874522263!5m2!1sja!2sjp" class="map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <script src="http://maps.googleapis.com/maps/api/js?key={AIzaSyADW-v1vcRDsmQF0Q8FBCjYjy15Qr48UF8}&language=ja"></script>
                  </div>
                </div>
            </div>
          </main>

          <footer>
                <div class="footer-title">
                  <div class="footer-text">&copy;丸山動物病院</d>
                </div>
          </footer>
  
          
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script type="text/javascript" src="index.js"></script>
            <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>   
    </body>
</html>
