<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $arc = $_POST['arc'];
    $emergency_contact = $_POST['emergency_contact'];
    $birthday = $_POST['birthday'];
    $favorite_color = $_POST['favorite_color'];
    $allergy = $_POST['allergy'];
    $membership = $_POST['membership'];
    $shirt_size = $_POST['shirt_size'];
    $message = $_POST['message'];

    // Menyimpan atau memproses data (contoh: menampilkan hasil atau menyimpannya di database)
    echo "<h2>提交表格：</h2>";
    echo "姓名: $name<br>";
    echo "學號: $student_id<br>";
    echo "聯絡電話: $phone<br>";
    echo "電子郵件: $email<br>";
    echo "居留證: $arc<br>";
    echo "緊急聯絡人電話: $emergency_contact<br>";
    echo "生日: $birthday<br>";
    echo "喜歡的顏色: $favorite_color<br>";
    echo "過敏: $allergy<br>";
    echo "會員身份: $membership<br>";
    echo "衣服尺寸: $shirt_size<br>";
    echo "留言: $message<br>";
} else {
    // Menampilkan formulir jika belum disubmit
    ?>

    <html>
        <head>
            <title>資管迎新活動117 連結</title>
            <meta charset="utf-8">
        </head>
        <body bgcolor="#ebe5d5" text="#49609a" align="center">
            <h2>資管迎新活動 117</h2>

            <form action="" method="POST">
                <label for="name">姓名：</label>
                <input type="text" id="name" name="name" required><br/><br/>

                <label for="student_id">學號:</label>
                <input type="text" id="student_id" name="student_id" required><br/><br/>

                <label for="phone">聯絡電話:</label>
                <input type="tel" id="phone" name="phone" required><br/><br/>

                <label for="email">電子郵件:</label>
                <input type="email" id="email" name="email" required><br/><br/>

                <label for="arc">居留證:</label>
                <input type="text" id="arc" name="arc" required><br/><br/>

                <label for="emergency_contact">緊急聯絡人電話:</label>
                <input type="tel" id="emergency_contact" name="emergency_contact" required><br/><br/>

                <label for="birthday">生日:</label>
                <input type="date" id="birthday" name="birthday" required><br/><br/>

                <label for="favorite_color">喜歡的顏色:</label>
                <input type="color" id="favorite_color" name="favorite_color"><br/><br/>

                <label>是否有食物過敏?</label>
                <input type="radio" name="allergy" value="yes"> 是
                <input type="radio" name="allergy" value="no"> 否<br/><br/>

                <label for="allergy">過敏食物:</label><br>
                <input type="text" id="allergy" name="allergy"><br><br>

                <table border="1" align="center">
                    <tr>
                        <th>年數</th>
                        <th>費用 (NTD)</th>
                    </tr>
                    <tr>
                        <td>1 年</td>
                        <td>400 NTD</td>
                    </tr>
                    <tr>
                        <td>2 年</td>
                        <td>800 NTD</td>
                    </tr>
                    <tr>
                        <td>3 年</td>
                        <td>1200 NTD</td>
                    </tr>
                    <tr>
                        <td>4 年</td>
                        <td>1500 NTD</td>
                    </tr>
                </table><br/>

                <label>選擇是否成為會員：</label><br>
                <input type="radio" name="membership" value="no_member" checked> 不加入會員<br>
                <input type="radio" name="membership" value="1_year"> 1 年 - 400 NTD<br>
                <input type="radio" name="membership" value="2_years"> 2 年 - 800 NTD<br>
                <input type="radio" name="membership" value="3_years"> 3 年 - 1200 NTD<br>
                <input type="radio" name="membership" value="4_years"> 4 年 - 1500 NTD<br><br>

                <img src="img_4.jpg" width="30%"><br/><br/>

                <label for="shirt_size">會員衣服尺寸:</label><br>
                <select id="shirt_size" name="shirt_size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select><br><br>

                <label for="message">對活動的期待或建議:</label><br>
                <textarea id="message" name="message" cols="30" rows="5"></textarea><br><br>

                <input type="submit" value="提交">
                <input type="reset" value="重設">
            </form>

            <br/><br/><p align="center">@A1123309</p>
        </body>
    </html>

    <?php
}
?>

