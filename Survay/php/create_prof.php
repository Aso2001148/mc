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
                        <li id="old_1_li" >
                            <input type="radio" name="old" value="old_10" id="old_1" onclick="old_checked()">
                            10代　
                        </li>
                    </label>
                    <label for="old_2">
                        <li id="old_2_li">
                            <input type="radio" name="old" value="old_20" id="old_2" onclick="old_checked()">
                            20代　
                        </li>
                    </label>
                    <label for="old_3">
                        <li id="old_3_li">
                            <input type="radio" name="old" value="old_30" id="old_3" onclick="old_checked()">
                            30代　　
                        </li>
                    </label>
                    <label for="old_4">
                        <li id="old_4_li">
                            <input type="radio" name="old" value="old_40" id="old_4" onclick="old_checked()">
                            40代　
                        </li>
                    </label>
                    <label for="old_5">
                        <li id="old_5_li">
                            <input type="radio" name="old" value="old_50" id="old_5" onclick="old_checked()">
                            50代　
                        </li>
                    </label>
                    <label for="old_6">
                        <li id="old_6_li">
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
                        <li id="gender_1_li">
                            <input type="radio" name="gender" value="man" id="gender_1" onclick="gender_checked()">
                            男性
                        </li>
                    </label>
                    <label for="gender_2">
                        <li id="gender_2_li">
                            <input type="radio" name="gender" value="woman" id="gender_2" onclick="gender_checked()">
                            女性
                        </li>
                    </label>
                    <label for="gender_3">
                        <li id="gender_3_li">
                            <input type="radio" name="gender" value="other" id="gender_3" onclick="gender_checked()">
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
                        <li id="blood_1_li">
                            <input type="radio" name="blood" value="blood_A" id="blood_1" onclick="blood_checked()">
                            A型
                        </li>
                    </label>
                    <label for="blood_2">
                        <li id="blood_2_li">
                            <input type="radio" name="blood" value="blood_B" id="blood_2" onclick="blood_checked()">
                            B型
                        </li>
                    </label>
                    <label for="blood_3">
                        <li id="blood_3_li">
                            <input type="radio" name="blood" value="blood_AB" id="blood_3" onclick="blood_checked()">
                            AB型
                        </li>
                    </label>
                    <label for="blood_4">
                        <li id="blood_4_li">
                            <input type="radio" name="blood" value="blood_O" id="blood_4" onclick="blood_checked()">
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
                        <li id="job_1_li">
                            <input type="radio" name="job" value="none" id="job_1" onclick="job_checked()">
                            学生 主婦・主婦 その他
                        </li>
                    </label>
                    <label for="job_2">
                        <li id="job_2_li">
                            <input type="radio" name="job" value="free" id="job_2" onclick="job_checked()">
                            フリーター
                        </li>
                    </label>
                    <label for="job_3">
                        <li id="job_3_li">
                            <input type="radio" name="job" value="service" id="job_3" onclick="job_checked()">
                            サービス業
                        </li>
                    </label>
                    <label for="job_4">
                        <li id="job_4_li">
                            <input type="radio" name="job" value="IT" id="job_4" onclick="job_checked()">
                            IT系
                        </li>
                    </label>
                    <label for="job_5">
                        <li id="job_5_li">
                            <input type="radio" name="job" value="medic" id="job_5" onclick="job_checked()">
                            医療・福祉系
                        </li>
                    </label>
                    <label for="job_6">
                        <li id="job_6_li">
                            <input type="radio" name="job" value="teach" id="job_6" onclick="job_checked()">
                            教育
                        </li>
                    </label>
                    <label for="job_7">
                        <li id="job_7_li">
                            <input type="radio" name="job" value="shipping" id="job_7" onclick="job_checked()">
                            運送業
                        </li>
                    </label>
                    <label for="job_8">
                        <li id="job_8_li">
                            <input type="radio" name="job" value="const" id="job_8" onclick="job_checked()">
                            建設業
                        </li>
                    </label>
                    <label for="job_9">
                        <li id="job_9_li">
                            <input type="radio" name="job" value="create" id="job_9" onclick="job_checked()">
                            製造業
                        </li>
                    </label>
                    <label for="job_10">
                        <li id="job_10_li">
                            <input type="radio" name="job" value="other" id="job_10" onclick="job_checked()">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</body>
</html>