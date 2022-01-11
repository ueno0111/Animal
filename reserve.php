<?php
    session_start();

      $error_name="";
      $error_body="";
      $error_succes="";

      $dsn = 'mysql:dbname=grayokapi1_database;host=mysql57.grayokapi1.sakura.ne.jp';//データベース接続
      $user = 'grayokapi1';
      $password = '5050rock';

      //formの値が入力されているか？チェックする
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
    date_default_timezone_set('Asia/Tokyo');
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
    for($i = 1; $i <= $end_month; $i++){
        //日曜日まで進んだら改行
        if(isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7){
            $j++;
        }
        $aryCalendar[$j][] = $i; 
    }
    //月末、曜日の穴埋め
    for($i = count($aryCalendar[$j]); $i < 7; $i++){
        $aryCalendar[$j][] = '';
    }
    $aryWeek = ['日', '月', '火', '水', '木', '金', '土'];
?>

<!DOCTYPE html>
<html　lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>予約フォーム</title>
      <meta name="description" content="予約フォーム">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesom
      e.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">s
      <link rel="stylesheet" href="reserve_sp.css">
      <link rel="stylesheet" href="reserve_tb.css">
      <link rel="stylesheet" href="reserve_pc.css">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
    </head>

    
    <body>
        <!--ナビゲーション-->
        <a name="link2"></a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
          <button class="navbar-toggler" value="ボタン" style="background-color: #111;" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--ナビゲーションの中身-->
          <div class="collapse navbar-content" id="navbar">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="index.php">ホーム</a></li>
              <li class="nav-item"><a class="nav-link" href="reservation.php#link1">WEBのご予約</a></li>
              <li class="nav-item"><a class="nav-link" href="reservation.php#link1">診察時間</a></li>
            </ul>
          </div>
        </nav>

          <!--ご予約はこちら-->
          <header class="under-layer">
            <div class="jumbotron jumbotron-fluid">
              <div class="container-fluid mb-3" style="background-color:rgba(255,255,255,0.5);">
                <div class="header-container">
                      <h1 class="header-title">ご予約はこちら</h1>
                    </div>
                </div>
              </div>
            </div>
          </header>



          <main>
            <article class="container py-5 my-3">
              <section class="webcontact">
                <h3 class="web-reception"><span class="border-bottom pb-2" style="line-height: 3.5rem; font-family:monospace;;"><i class="mr-3 fas fa-envelope"></i>WEBでのご予約・お問合せ</span></h3>
                <h4 class="text-center py-3">WEBのご予約の流れ</h4>
                <ol class="step">
                  <li class="is-current">フォームへ入力</li>
                  <li>予約内容の確認</li>
                  <li>当院より折り返しのご連絡</li>
                  <li>予約確定</li>
                </ol>
                
                <!--予約内容入力欄-->
                <form method="post" action="reservation.php?action=reservation_action">
                  <a name="link1"></a>
                  <div class="py-5">
                      <fieldset class="form-group">
                        <div class="row">
                          <legend class="form-label">ご用件</legend>
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
                        <label for="inputEmail" class="form-label">お名前<span class="ml-2 badge badge-pill badge-primary">必須</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name"  name="name" placeholder="お名前">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="form-label">電話番号</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" id="tel" name="tel" placeholder="電話番号">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="form-label">メール<span class="ml-2 badge badge-pill badge-primary">必須</span></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="mail" name="mail" placeholder="メールアドレス">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="form-label">連絡方法</div>
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
                        <label for="inputEmail" class="form-label">診察券番号</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="再診の方はご記入ください">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="form-label">予約希望日</label>
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
                              for(var i=0; i<document.getElementsByName("reservation").length;i++){
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
                        <label for="exampleFormControlTextarea1" class="form-label">お問い合わせ</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="contact_text" name="contact_text"></textarea>
                        </div>
                      </div>
                      <!--送信ボタン-->
                      <div class="form-group row">
                        <div class="button">
                          <button type="submit" class="btn btn-primary">送信</button>
                        </div>
                      </div>
                  </div>
                </form>
              </section>
            </article>
          </main>

          <a name="link3"></a>
          <section class="access bg-lightblue">
            <div class="container py-5">
              <div class="ex-time">
                <div class="col-md-6">
                  <h2 class="access-title">まるやま動物病院</h2>
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

                    <!--地図-->
                  <div class="map">
                    <div id="map"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.871056768986!2d139.80930385110352!3d35.68017683753925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018891dca4ab10d%3A0x46c21ff87751e1cc!2z44CSMTM1LTAwMTQg5p2x5Lqs6YO95rGf5p2x5Yy655-z5bO277yU4oiS77yZ!5e0!3m2!1sja!2sjp!4v1631874522263!5m2!1sja!2sjp" class="map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <script src="http://maps.googleapis.com/maps/api/js?key={AIzaSyADW-v1vcRDsmQF0Q8FBCjYjy15Qr48UF8}&language=ja"></script>
                  </div>

                </div>
              </div>
            </div>
          </section>


          <!--フッター部分--->
          <section class="footer">
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
          </section>


          <!--JavaScript、jQuery、Bootstrapの読み込み-->
          <script src="index.js"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
