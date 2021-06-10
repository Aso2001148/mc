<?php require "setup/header.php"; ?>　<!-name:PHP送信用 class:cssで使う id:css,js id要る？->

    <form name="login" method="post" action="http://localhost/php/apps/mcapmany/new_profile.php" class="outer">
        <ul class="signup_display">
            <li>
                <h1 class="signinh1">サインイン画面</h1>
            </li>
            <li><label>新規ID入力</label><br>
                <input type="text" name="userid" placeholder="ID" class="inputbox" required></li>
            <li><label>ID入力※確認</label><br>
            <input type="text" name="userid_check" placeholder="ID※確認" class="inputbox" required></li>
            <li><label>パスワード</label><br>
                <input type="password" name="userpasswd" id="pass" class="inputbox" required></li>
            <li><label>パスワード※確認</label><br>
                <input type="password" name="userpasswd_check" id="pass" class="inputbox" required></li>
            <li><input type="submit" value="送信" class="loginbutton"></li>
        </ul>
    </form>
<?php require "setup/footer.php"; ?>