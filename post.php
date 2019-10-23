<?php

//セッションスタート
session_start();

// 関数ファイルの読み込み
include('functions.php');

// ログイン状態のチェック
checkSessionId();

$kanri_menu = kanri_menu();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">BOOKおまとめリスト</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
            <a class="nav-link" href="select.php">データ一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category01.php"></a>
          </li> -->
                    <?= $kanri_menu ?>
                </ul>
            </div>
        </nav>
    </header>


    <div class="box">
        <div class="wrap_box">

            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="name">タイトル</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>


                <div class="form-group">
                    <label for="url">気になる記事</label>
                    <input type="text" class="form-control" id="url" name="url">
                </div>

                <div class="form-group">
                    <label for="comment">テキスト挿入</label>
                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                </div>

                <div class="form-group">
                    <label for="deadline">登録日時</label>
                    <input type="date" class="form-control" id="indate" name="indate">
                </div>


                <div class="category">
                    <ul>
                        <li>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="category" class="custom-control-input" value="MANGA">
                                <label class="custom-control-label" for="customRadio1">WEB</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="category" class="custom-control-input" value="NOVEL">
                                <label class="custom-control-label" for="customRadio2">DESIGN</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="category" class="custom-control-input" value="DESIGN">
                                <label class="custom-control-label" for="customRadio3">JavaScript</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="category" class="custom-control-input" value="LIVING">
                                <label class="custom-control-label" for="customRadio4">php</label>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="btnbox">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- <div id="popup" style="width: 200px;display: none;padding: 30px 20px;border: 2px solid #000;margin: auto;">
    問い合わせますか？<br />
    <button id="ok" onclick="okfunc()">OK</button>
    <button id="no" onclick="nofunc()">キャンセル</button>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    function confirm_test() { // 問い合わせるボタンをクリックした場合
      document.getElementById('popup').style.display = 'block';
      return false;
    }

    function okfunc() { // OKをクリックした場合
      document.contactform.submit().style.display = 'none';
    }

    function nofunc() { // キャンセルをクリックした場合
      document.getElementById('popup').style.display = 'none';
    }
  </script> -->
</body>

</html>