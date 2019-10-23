<?php
// 共通で使うものを別ファイルにしておきましょう。
// DB接続関数（PDO）
function connectToDb()
{
    $db = 'mysql:dbname=gsacfd04_15;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
        return new PDO($db, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:' . $e->getMessage());
    }
}

// SQL処理エラー
function showSqlErrorMsg($stmt)
{
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
}

// SESSIONチェック＆リジェネレイト
function checkSessionId()
{
    // ログイン失敗時の処理（ログイン画面に移動）
    // ログイン成功時の処理（一覧画面に移動）
    if (!isset($_SESSION['session_id']) || $_SESSION['session_id'] != session_id()) {
        header('Location: login.php');
    } else {
        session_regenerate_id(true);
        $_SESSION['session_id'] = session_id();
    }
}



//menuを指定する
// function menu($kanri_flg)
// {
//   if ($kanri_flg == 0) {
//     $menu = '<li class="nav-item"><a class="nav-link" href="user_login.php">ログイン</a></li>';
//     $menu .= '<li class="nav-item"><a class="nav-link" href="user_select.php">ユーザー登録</a></li>';
//     return $menu;
//   } else {
//     $menu = '<li class="nav-item"><a class="nav-link" href="user_select.php">ユーザー情報一覧</a></li>';
//     $menu .= '<li class="nav-item"><a class="nav-link" href="post.php">記事投稿</a></li>';
//     $menu .= '<li class="nav-item"><a class="nav-link" href="user_logout.php">ログアウト</a></li>';
//     $menu .= '<li class="nav-item"><a class="nav-link" href="user_logout.php">ログアウト</a></li>';
//     return $menu;
//   }
// }

// function menu()
// {
//   $menu = '<li class="nav-item"><a class="nav-link" href="detail_nologin.php">ユーザー登録一覧</a></li><li class="nav-item"><a class="nav-link" href="index.php">記事投稿</a></li>';
//   $menu .= '<li class="nav-item"><a class="nav-link" href="user_logout.php" nclick="return confirm_test()">ログアウト</a></li>';
//   return $menu;
// }

// function menu()
// {
//     $menu03 = '<li class="nav-item"><a class="nav-link" href="user_login.php">ログイン</a></li><li class="nav-item"><a class="nav-link" href="user_index.php">ユーザー登録</a></li>';
//     $menu03 .= '<li class="nav-item"><a class="nav-link" href="user_logout.php">ログアウト</a></li>';
//     return $menu03;
// }


function menu()
{
    $menu = '<li class="nav-item"><a class="nav-link" href="user_login.php">ログイン</a>';
    $menu .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
    $menu .= '<li class="nav-item"><a class="nav-link" href="index.php">記事一覧</a></li>';
    return $menu;
}

function kanri_menu()
{
    $kanri_menu = '<li class="nav-item"><a class="nav-link" href="post.php">記事投稿</a></li>';
    $kanri_menu .= '<li class="nav-item"><a class="nav-link" href="select.php">記事一覧</a></li>';
    $kanri_menu .= '<li class="nav-item"><a class="nav-link" href="user_index.php">ユーザー登録</a></li>';
    $kanri_menu .= '<li class="nav-item"><a class="nav-link" href="user_select.php">ユーザー一覧</a></li>';
    $kanri_menu .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
    return $kanri_menu;
}

function add_new($date, $days)
{
    $today = date_i18n('U');
    $elapsed = date('U', ($today - $date)) / 86400;
    if ($days > $elapsed) {
        echo '<span class="new">New</span>';
    }
}
