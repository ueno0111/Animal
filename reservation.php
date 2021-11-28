<?php
    session_start();
      //初期化、空の値を代入することで、echoをした時に何も表示されない
      // $error_name="";
      // $error_body="";
      // $error_succes="";

      //入力チェック //
      //下のPDOの引数に入れる、if文の外に出しても良い、場合によって使い分ける
      //データベース名　grayokapi1_database
      //ホスト名さくら　mysql57.grayokapi1.sakura.ne.jp
      $dsn = 'mysql:dbname=takeshiueno_database1;host=mysql1.php.xdomain.ne.jp';//データベース接続
       //ユーザー名　　grayokapi1
      //パスワード　5050rock
      $user = 'takeshiueno_0111';
      $password = '5050Rock';

      //予約フォームからデータベースへ//
      //値が空だった場合
      if($_GET["action"] == "reservation_action"){
        $error_flag=true;
        if($_POST["requests"] == ""){
          $error_name= "ご用件を入力して下さい";
          $error_flag=false;
        }
        if($_POST["name"] == ""){
          $error_name= "お名前を入力して下さい";
          $error_flag=false;
        }
        if($_POST["tel"] == ""){
          $error_name= "お電話番号を入力して下さい";
          $error_flag=false;
        }
        if($_POST["mail"] == ""){
          $error_name= "メールアドレスを入力して下さい";
          $error_flag=false;
        }
        if($_POST["contact_type"] == ""){
          $error_name= "お問い合わせ内容を入力して下さい";
          $error_flag=false;
        }
        if($_POST["reservation"] == ""){
          $error_name= "ご予約日時を入力して下さい";
          $error_flag=false;
        }
        if($_POST["idnumber"] == ""){
          $error_name= "診察券番号を入力して下さい";
          $error_flag=false;
        }
        if($_POST["contact_text"] == ""){
          $error_body="内容を入力して下さい";
          $error_flag=false;
        }else{
        echo "<script>alert('お問い合わせ内容を承りました');</script>";//アラートで表示する
        }

        //予約フォーム//
        //$error_flagの中身はtrue,false。問い合わせフォームの必須の部分が入力されていれば、データベースと接続する//
        if($error_flag){
          try {
            $dbh = new PDO($dsn, $user, $password);
            $sql = 'INSERT INTO reservation (idnumber,requests,name,tel,mail,contact_type,reservation,contact_text,in_date,up_date) VALUE (:idnumber,:requests,:name,:tel,:mail,:contact_type,:reservation,:contact_text,now(),now())';//now()はMYSQLの標準日時取得する
            $prepare = $dbh->prepare($sql);//SQLを実行するための準備
            $prepare->bindValue(':idnumber',$_POST["idnumber"], PDO::PARAM_INT);
            $prepare->bindValue(':requests', $_POST["requests"], PDO::PARAM_STR);
            $prepare->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
            $prepare->bindValue(':tel', $_POST["tel"], PDO::PARAM_STR);
            $prepare->bindValue(':mail', $_POST["mail"], PDO::PARAM_STR);
            $prepare->bindValue(':contact_type', $_POST["contact_type"], PDO::PARAM_STR);
            $prepare->bindValue(':reservation', $_POST["reservation"], PDO::PARAM_STR);
            $prepare->bindValue(':contact_text', $_POST["contact_text"], PDO::PARAM_STR);
            $prepare->execute();

          } catch (PDOException $e) {
              echo "接続失敗: " . $e->getMessage() . "\n";
              exit();
          $error_succes="お問い合わせ内容を送ることができませんでした";
        }
      }
    }

?>

<?php
    //タイムゾーン設定
    date_default_timezone_set('Asia/Tokyo');

    //表示させる年月を設定　↓これは現在の月
    $year = date('Y');
    $month = date('m');

    //月末日を取得
    $end_month = date('t', strtotime($year.$month.'01'));
    //1日の曜日を取得
    $first_week = date('w', strtotime($year.$month.'01'));
    //月末日の曜日を取得
    $last_week = date('w', strtotime($year.$month.$end_month));

    $aryCalendar = [];
    $j = 0;

    //1日開始曜日までの穴埋め
    for($i = 0; $i < $first_week; $i++){
        $aryCalendar[$j][] = '';
    }

    //1日から月末日までループ
    for ($i = 1; $i <= $end_month; $i++){
        //日曜日まで進んだら改行
        if(isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7){
            $j++;
        }
        $aryCalendar[$j][] = $i; 
    }

    //月末曜日の穴埋め
    for($i = count($aryCalendar[$j]); $i < 7; $i++){
        $aryCalendar[$j][] = '';
    }
    $aryWeek = ['日', '月', '火', '水', '木', '金', '土'];
?>





<!DOCTYPE html>
<html>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
      <meta charset="UTF-8">
      <title>丸山動物病院　予約フォーム</title>
      <meta name="description" content="サイトの説明文">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="canonical" href="maruyama.animal.clinic">
      <link rel="icon" type="image/png" href="ファビコンのパス" />
      <!-- OGP設定 -->
      <meta property="og:type" content="website" />
      <meta property="og:url" content="あなたのサイトURL" />
      <meta property="og:image" content="SNSで表示させたい画像のパス" />
      <meta property="og:title" content="ページタイトル" />
      <meta property="og:description" content="サイトの説明文" />

      <!-- スタイルシートはここから -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesom
      e.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/contact.css">
      <link rel="stylesheet" href="queries.css">
      <link rel="stylesheet" href="reservation.css">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
    </head>

    
    <body>
        <a name="link2"></a>
        <!--黒ボタン、ナビゲーション-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
          <button class="navbar-toggler"  style="background-color: #111;" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--ナビゲーションの中身-->
          <div class="collapse navbar-content" id="navbar">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" href="index.php">ホーム</a></li>
              <li class="nav-item"><a class="nav-link" href="tel:03-5665-1212">お電話でのご予約・お問合せ </a></li>
              <script>
                let elements = document.getElementsByClassName(nav-link);
              </script>

              <li class="nav-item"><a class="nav-link" href="reservation.php#link1">WEBでのご予約・お問合せ</a></li>
            </ul>
          </div>
        </nav>

          <!--ご予約はこちら-->
          <header class="under-layer">
            <div class="jumbotron jumbotron-fluid">
              <div class="container-fluid mb-3" style="background-color:rgba(255,255,255,0.5);">
                <div class="container py-3">
                  <div class="d-md-flex align-items-center">
                    <div class="pt-3 col-md-4"></div>
                    <div class="pt-3 col-md-9">
                      <h1 class="header-title">ご予約はこちら</h1>
                      <p class="text-muted">お電話とWEBでのご予約も承っております。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>




          <!--メインの予約フォーム-->
          <main>
            <article class="container py-5 my-5">
              <!-- お電話でのご予約・お問合せ -->
              <section class="mb-5">
                <h3 class="tel-reception" style="padding-top:0rem;"><span class="border-bottom pb-2" style="line-height: 3.5rem; font-family:monospace;"><i class="mr-3 fas fa-phone"></i>お電話でのご予約・お問合せ</span></h3>

                <div class="d-md-flex justify-content-center align-items-center margin: 0 auto margin-top: 3rem margin-bottom: 6rem" style="background-color:lightgrey;">
                  <p class="h3 p-3">03-5665-1212</p>
                  <p class="p-3"><span class="reception">受付時間</span></p>
                  <p class="p-3">9:00～12:00 / 16:00～19:00<br>
                    ※休診日　火曜・日曜午後・祝日</p>
                </div>
              </section>

              <!--WEBでのご予約・お問合せ-->
              <section class="webcontact">
                <h3 class="web-reception"><span class="border-bottom pb-2" style="line-height: 3.5rem; font-family:monospace;;"><i class="mr-3 fas fa-envelope"></i>WEBでのご予約・お問合せ</span></h3>
                <h4 class="text-center py-3">WEBでのご予約の流れ</h4>
                <ol class="step">
                  <li class="is-current">フォームからの仮予約受付</li>
                  <li>当院で予約内容の確認</li>
                  <li>当院より折り返しのご連絡</li>
                  <li>予約確定</li>
                </ol>
                
                <!--予約内容入力欄-->
                <form method="post" action="reservation.php?action=reservation_action">
                  <a name="link1"></a>
                  <div class="py-5">

                      <!--ご用件を選択-->
                      <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 pt-0">ご用件</legend>
                          <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="requests" id="reservation" value="ご予約">
                              <label class="form-check-label">ご予約</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="requests" id="contact" value="お問い合わせ">
                              <label class="form-check-label">お問い合わせ</label>
                            </div>
                          </div>
                        </div>
                      </fieldset>

                      <!--個人情報入力欄-->
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">お名前<span class="ml-2 badge badge-pill badge-primary">必須</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name"  name="name" placeholder="お名前">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">電話番号</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" id="tel" name="tel" placeholder="電話番号">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">メール<span class="ml-2 badge badge-pill badge-primary">必須</span></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="mail" name="mail" placeholder="メールアドレス">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-2">連絡方法</div>
                        <div class="col-sm-10">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Check1" name="contact_type" value="メール">
                            <label class="form-check-label" for="Check1">メール</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Check2" name="contact_type" value="お電話">
                            <label class="form-check-label" for="Check2">お電話</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">診察券番号</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="再診の方はご記入ください">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">予約希望日</label>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="calender-content">
                              <table class="calendar">
                                    <!-- 曜日の表示 -->
                                    <tr>
                                        <?php foreach($aryWeek as $week){ ?>
                                            <th><?php echo $week ?></th>
                                        <?php } ?>
                                    </tr>
                                    <!-- 日数の表示 -->
                                    <?php foreach($aryCalendar as $tr){ ?>
                                      <tr>
                                          <?php foreach($tr as $td){ ?>
                                              <?php if($td != date('j')){ ?>
                                                  <!--日付をクリックした時に-->
                                                  <td id="date_<?php echo $td ?>"> 
                                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#sampleModal" onclick="click_date(<?php echo $td ?>)"> <?php echo $td ?></a></td>
                                              <?php }else{ ?>
                                                  <!-- 今日の日付 -->
                                                <td class="target">
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#sampleModal" id="target"> <?php echo $td ?></a></td>
                                              <?php } ?>
                                          <?php } ?>
                                      </tr>
                                    <?php } ?>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!--カレンダーの日にちを選択したら黄色に変える-->
                      <script>
                        function click_date(select_date){
                          // 背景を透明にする
                          $('[id^="date_"]').css("background-color", "");
                          // 選択のセルだけ赤色に染める
                          $("#date_" + select_date).css("background-color", "yellow");
                        }
                      </script>

                      <div id="reservation_datetime"></div>
                      <input type="hidden" name="reservation_day" id="reservation_day">
                                      

                      <!--お時間選択のモーダル--->
                      <div class="modal fade" id="sampleModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"></button>
                              <h4 class="modal-title">ご予約希望時間をご入力下さい</h4>
                            </div>

                            <!--AM,PMの選択-->
                            <div class="modal-body">
                              <div class="reservation"><span>(午前)</span></div>
                                <div class="reservation-time">
                                  <input type="radio" name="reservation" id="reservation1" value="9:00" autofocus required><label for="reservation1">9:00</label>
                                  <input type="radio" name="reservation" id="reservation2" value="9:30" autofocus required><label for="reservation2">9:30</label>
                                  <input type="radio" name="reservation" id="reservation3" value="10:00" autofocus required><label for="reservation3">10:00</label> 
                                  <input type="radio" name="reservation" id="reservation4" value="10:30" autofocus required><label for="reservation4">10:30</label>
                                  <input type="radio" name="reservation" id="reservation5" value="11:00" autofocus required><label for="reservation5">11:00</label>
                                  <input type="radio" name="reservation" id="reservation6" value="11:30" autofocus required><label for="reservation6">11:30</label>
                                  <br>
                                  <div class="reservation"><span>(午後)</span></div>
                                  <input type="radio" name="reservation" id="reservation7" value="16:00" autofocus required><label for="reservation7">16:00</label>
                                  <input type="radio" name="reservation" id="reservation8" value="16:30" autofocus required><label for="reservation8">16:30</label>
                                  <input type="radio" name="reservation" id="reservation9" value="17:00" autofocus required><label for="reservation9">17:00</label> 
                                  <input type="radio" name="reservation" id="reservation10" value="17:30" autofocus required><label for="reservation10">17:30</label>
                                  <input type="radio" name="reservation" id="reservation11" value="18:00" autofocus required><label for="reservation11">18:00</label>
                                  <input type="radio" name="reservation" id="reservation12" value="18:30" autofocus required><label for="reservation12">18:30</label>
                                </div>
                            </div>

                            <!--モーダルを閉じる-->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirm()">確定</button>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!--予約日時の時間を取得-->
                      <script>
                            function confirm(){
                              var flag = false; // 選択されているか否かを判定するフラグ
                                                //　ラジオボタンの数だけ判定を繰り返す（ボタンを表すインプットタグがあるので１引く）
                              for(var i=0; i<document.getElementsByName("reservation").length;i++){
                                  // i番目のラジオボタンがチェックされているかを判定
                                  if(document.getElementsByName("reservation").item(i).checked){ 
                                      flag = true;    
                                      document.getElementById("reservation_datetime").innerHTML = document.getElementsByName("reservation").item(i).value;
                                      document.getElementById("reservation_day").value = document.getElementsByName("reservation").item(i).value;
                                  }
                              }
                              // 何も選択されていない場合の処理
                              if(!flag){ 
                                  alert("項目が選択されていません。");
                              }
                          }
                      </script>

                      <!--お問い合わせフォーム-->
                      <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">お問い合わせ</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="contact_text" name="contact_text"></textarea>
                        </div>
                      </div>
                      <!--送信ボタン-->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">送信</button>
                        </div>
                      </div>

                  </div>
                </form>
              </section>
            </article>
          </main>

          <a name="link3"></a>
          <!--営業日時-->
          <footer class="footer bg-lightblue">
            <div class="container py-5">
              <div class="ex-time">
                <div class="col-md-6">
                  <h2 class="footer-title">まるやま動物病院</h2>
                  <p class="mb-0">東京都江東区石島4-9</p>
                  <p>TEL 03-5665-1212</p>

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
                        <td class="text-center">●</td>
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

                  <p class="text-right mb-4 small"> 休診日：火曜日、日曜午後・祝日</p>

                    <!--マップ-->
                    <div class="col-md-6-2">
                      <h2 class="map">マップ</h2>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12963.312118305756!2d139.7671248!3d35.6812362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1600695521427!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
              </div>
            </div>
          </footer>


          <!--フッター部分--->
          <div class="un-footer">
            <div class="footer-contents">
              <div class="footer-list">
                <ul>
                  <a href="reservation.php#link2"><li>トップへ戻る</li></a>
                  <a href="reservation.php#link3"><li>診察時間</li></a>
                  <a href="reservation.php#link1"><li>予約をする</li></a>
                  <a href="index.php"><li>ホームへ戻る</li></a>
                </ul>
              </div>
            </div>
          </div>


          <!--JavaScript、jQuery、Bootstrapの読み込み-->
          <script src="reservation.js"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

          <!--最上段のナビゲーション-->
          <script>
              $(window).on('scroll', function() {
                h = $('header').outerHeight();
                $('header nav').toggleClass('fixed', $(this).scrollTop() > h)
              });

              // 無効なフィールドがある場合にフォーム送信を無効にするスターターJavaScriptの例
              (function() {
                'use strict';

                window.addEventListener('load', function() {
                  // Bootstrapカスタム検証スタイルを適用してすべてのフォームを取得
                  var forms = document.getElementsByClassName('needs-validation');

                  // ループして帰順を防ぐ
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
          </script>

    </body>
</html>
