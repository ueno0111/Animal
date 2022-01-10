<?php
require_once('index.php');
require_once('staff.php');
require_once('info.php');

//病院のスタッフインスタンス
$staff1 = new Staff('img/staff1.png','丸山　秀雄','院長','ゴルフ','動物たちの命は私が守ります！');
$staff2 = new Staff('img/staff6.png','丸山　弘子','副院長','ウォーキング','当院では食事、しつけに関するお悩みお答えしてゆきます');
$staff3 = new Staff('img/staff3.png','斎藤　智浩','獣医師','テニス','丸山と共に施術を担当しております。よろしくお願いします！');
$staff4 = new Staff('img/staff4.png','北川　彩香','動物看護師','映画鑑賞','雑談でもかまいません！お気軽に遊びに来てください');
$staffs = array($staff1,$staff2,$staff3,$staff4);


//お知らせ記事のインスタンス
$info1 = new Info('2022/1/1','新年明けましておめでとうございます！今年もよろしくお願いいたします');
$info2 = new Info('2022/1/3','当院ではコロナの感染防止対策としてマスクの着用、消毒をお願いしております。');
$info3 = new Info('2022/1/4','半年に１回は定期検診を行いましょう。無料検診受付中！');
$infos = array($info1,$info2,$info3);
?>