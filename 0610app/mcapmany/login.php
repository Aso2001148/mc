<?php require "setup/header.php"; ?>　<!-name:PHP送信用 class:cssで使う id:css,js id要る？->
    <form name="login" method="post" action="http://localhost/php/apps/mcapmany/login-out.php" class="outer">
        <ul class="login_display">
            <li>
                <h1 class="loginh1">ログイン画面</h1>
            </li>
            <li><label>あなたのID</label><br>
                <input type="text" name="userid" placeholder="ID" class="inputbox" required></li>
            <li><label>パスワード</label><br>
                <input type="password" name="userpasswd" id="PASS" placeholder="pass" class="inputbox" required></li>
            <li><input type="submit" value="送信" class="loginbutton"></li>
        </ul>
    </form>
<?php require "setup/footer.php"; ?>