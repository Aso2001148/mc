
<?php require "setup/header.php"; ?>
<?php
$pdo=new PDO("mysql:host=localhost;dbname=apps;charset=utf8",
    "Admin","Admin");
if($_POST["userid"]===$_POST["userid_check"] and $_POST["userpasswd"]===$_POST["userpasswd_check"]) {
    $sql = $pdo->prepare("insert into userdata values(?,?)");
    if ($sql->execute([$_REQUEST['userid'], $_REQUEST['userpasswd']])) {
        echo <<<main
<div class="prof">
<h1>アカウント作成成功！</h1>
    <form name="newprofile" method="post" action="http://localhost/php/apps/mcapmany/tutorial.html" class="outer">
        <ul class="profile_display">
            <li>
                <h1 class="profh1">プロフィール入力</h1>
            </li>
            <li>
                <label>ニックネーム入力</label><br>
                <input type="text" name="usernick" placeholder="Nickname" class="inputbox" required>
            </li>
            <li><div class="cp_ipselect">
                <select class="cp_sl06" required>
                    <option name="question1" value="" hidden disabled selected></option>
                    <option name="question1" value="1">バンド１</option>
                    <option name="question1" value="2">グループ１</option>
                    <option name="question1" value="3">ユニット１</option>
                    <option name="question1" value="4">特になし</option>
                </select>
                <span class="cp_sl06_highlight"></span>
                <span class="cp_sl06_selectbar"></span>
                <label class="cp_sl06_selectlabel">好きな曲ジャンルは？</label>
                </div>
            </li>
            <li><div class="cp_ipselect">
                    <select class="cp_sl06" required>
                        <option name="question2" value="" hidden disabled selected></option>
                        <option name="question2" value="1">動物１</option>
                        <option name="question2" value="2">動物２</option>
                        <option name="question2" value="3">動物３</option>
                        <option name="question2" value="4">動物４</option>
                    </select>
                    <span class="cp_sl06_highlight"></span>
                    <span class="cp_sl06_selectbar"></span>
                    <label class="cp_sl06_selectlabel">好きな動物は？</label>
                </div>
            </li>
            <li><div class="cp_ipselect">
                    <select class="cp_sl06" required>
                        <option name="question3" value="" hidden disabled selected></option>
                        <option name="question3" value="1">ゲーム１</option>
                        <option name="question3" value="2">ゲーム２</option>
                        <option name="question3" value="3">ゲーム３</option>
                        <option name="question3" value="4">ゲーム４</option>
                    </select>
                    <span class="cp_sl06_highlight"></span>
                    <span class="cp_sl06_selectbar"></span>
                    <label class="cp_sl06_selectlabel">好きなゲームは？</label>
                </div>
            </li>
            <li><div class="cp_ipselect">
                    <select class="cp_sl06" required>
                        <option name="question4" value="" hidden disabled selected></option>
                        <option name="question4" value="1">アニメ１</option>
                        <option name="question4" value="2">アニメ２</option>
                        <option name="question4" value="3">アニメ３</option>
                        <option name="question4" value="4">アニメ４</option>
                    </select>
                    <span class="cp_sl06_highlight"></span>
                    <span class="cp_sl06_selectbar"></span>
                    <label class="cp_sl06_selectlabel">好きなアニメは？</label>
                </div>
            </li>
            <li><input type="submit" value="送信" class="loginbutton"></li>
        </ul>
    </form>
</div>
main;
    } else {
        echo <<<return
<h1>既に同じIDが使われています。</h1>
<a href="http://localhost/php/apps/mcapmany/signup.php" class="loginbutton">登録画面に戻る</a>
return;

    }
}else{
    echo<<<missed
<h1>既に同じIDが使われています。</h1>
<a href="http://localhost/php/apps/mcapmany/signup.php" class="loginbutton">登録画面に戻る</a>
missed;
    }
?>
<?php require "setup/footer.php"; ?>