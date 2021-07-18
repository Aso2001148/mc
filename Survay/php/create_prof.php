<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/create_prof.css">
</head>
<body>
<header>
    <div class="head_main">
        <a href="../backup_210714/home.php" class="head_link">
            <img src="../img/Survay_logo.jpg" class="head_img">
            <span class="head_txtstyle">Survay</span>
        </a>
    </div>
    <div class="head_name">プロフ作成</div>
</header>
<div class="main">
    <div class="title_div">
        <span class="main_title">プロフィール作成</span>
        <span class="sub_title">※後から変更できます</span>
    </div>
    <form>
        <div class="form">
            <div class="old_div">　
                <div class="txt_div">
                    <span class="prof_icon"><ion-icon name="accessibility-outline"></ion-icon></span>
                    <span class="prof_txt">年齢</span>
                </div>
                <ul class="old_ul">
                    <label for="old_1">
                        <li class="old_1">
                            <input type="radio" name="old" value="old_10" id="old_1" onclick="old_checked()">
                            10代　
                        </li>
                    </label>
                    <label for="old_2">
                        <li class="old_2">
                            <input type="radio" name="old" value="old_20" id="old_2" onclick="old_checked()">
                            20代　
                        </li>
                    </label>
                    <label for="old_3">
                        <li class="old_3">
                            <input type="radio" name="old" value="old_30" id="old_3" onclick="old_checked()">
                            30代　　
                        </li>
                    </label>
                    <label for="old_4">
                        <li class="old_4">
                            <input type="radio" name="old" value="old_40" id="old_4" onclick="old_checked()">
                            40代　
                        </li>
                    </label>
                    <label for="old_5">
                        <li class="old_5">
                            <input type="radio" name="old" value="old_50" id="old_5" onclick="old_checked()">
                            50代　
                        </li>
                    </label>
                    <label for="old_6">
                        <li class="old_6">
                            <input type="radio" name="old" value="after60" id="old_6" onclick="old_checked()">
                            60歳以上
                        </li>
                    </label>
                </ul>
            </div>
            <div class="gender">
                <div class="txt_div">
                    <span class="prof_icon"><ion-icon name="male-female-outline"></ion-icon></span>
                    <span class="prof_txt">性別</span>
                </div>
                <ul class="gender_ul">
                    <label for="gender_1">
                        <li class="gender_1">
                            <input type="radio" name="gender" value="man" id="gender_1">
                            男性
                        </li>
                    </label>
                    <label for="gender_2">
                        <li class="gender_2">
                            <input type="radio" name="gender" value="woman" id="gender_2">
                            女性
                        </li>
                    </label>
                    <label for="gender_3">
                        <li class="gender_3">
                            <input type="radio" name="gender" value="other" id="gender_3">
                            その他
                        </li>
                    </label>
                </ul>
            </div>
            <div class="blood">
                <div class="txt_div">
                    <span class="prof_icon"><ion-icon name="water-outline"></ion-icon></span>
                    <span class="prof_txt">血液型</span>
                </div>
                <ul class="blood_ul">
                    <label for="blood_1">
                        <li class="blood_1">
                            <input type="radio" name="blood" value="blood_A" id="blood_1">
                            A型
                        </li>
                    </label>
                    <label for="blood_2">
                        <li class="blood_2">
                            <input type="radio" name="blood" value="blood_B" id="blood_2">
                            B型
                        </li>
                    </label>
                    <label for="blood_3">
                        <li class="blood_3">
                            <input type="radio" name="blood" value="blood_AB" id="blood_3">
                            AB型
                        </li>
                    </label>
                    <label for="blood_4">
                        <li class="blood_4">
                            <input type="radio" name="blood" value="blood_O" id="blood_4">
                            O型
                        </li>
                    </label>
                </ul>
            </div>
            <div class="job">
                <div class="txt_div">
                    <span class="prof_icon"><ion-icon name="bag-remove-outline"></ion-icon></span>
                    <span class="prof_txt">職業</span>
                </div>
                <ul class="job_ul">
                    <label for="job_1">
                        <li class="job_1">
                            <input type="radio" name="job" value="none" id="job_1">
                            学生 主婦・主婦 その他
                        </li>
                    </label>
                    <label for="job_2">
                        <li class="job_2">
                            <input type="radio" name="job" value="free" id="job_2">
                            フリーター
                        </li>
                    </label>
                    <label for="job_3">
                        <li class="job_3">
                            <input type="radio" name="job" value="service" id="job_3">
                            サービス業
                        </li>
                    </label>
                    <label for="job_4">
                        <li class="job_4">
                            <input type="radio" name="job" value="IT" id="job_4">
                            IT系
                        </li>
                    </label>
                    <label for="job_5">
                        <li class="job_5">
                            <input type="radio" name="job" value="medic" id="job_5">
                            医療・福祉系
                        </li>
                    </label>
                    <label for="job_6">
                        <li class="job_6">
                            <input type="radio" name="job" value="teach" id="job_6">
                            教育
                        </li>
                    </label>
                    <label for="job_7">
                        <li class="job_7">
                            <input type="radio" name="job" value="shipping" id="job_7">
                            運送業
                        </li>
                    </label>
                    <label for="job_8">
                        <li class="job_8">
                            <input type="radio" name="job" value="const" id="job_8">
                            建設業
                        </li>
                    </label>
                    <label for="job_9">
                        <li class="job_9">
                            <input type="radio" name="job" value="create" id="job_9">
                            製造業
                        </li>
                    </label>
                    <label for="job_10">
                        <li class="job_10">
                            <input type="radio" name="job" value="other" id="job_10">
                            その他
                        </li>
                    </label>
                </ul>
            </div>
            <div class="submit">
                <input type="submit" value="決定！" class="submit_btn">
            </div>
        </div>
    </form>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>