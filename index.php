<!-- <?php
        echo "Xin chao!";
        echo "<br>";
        $mang = array(
            array('hoc', 'lap trinh', 'web'),
            array('web co ban', ' xin chao', 'by')
        );
        $length = count($mang);
        for ($row = 0; $row < $length; $row++) {
            $length_1 = count($mang[0]);
            for ($col = 0; $col < $length_1; $col++) {
                echo $mang[$row][$col] . " ";
            }
            echo "<br>";
        }

        echo "<br>";
        $hocweb = array(
            array("HTML", "1 tuần", "dễ học"),
            array("CSS", "2 tuần", "dễ học"),
            array("JS", "5 tuần", "hơi khó học"),
            array("PHP", "3 tuần", "siêng thì được")
        );
        echo $hocweb[0][0] . " " . $hocweb[0][1] . " " . $hocweb[0][2];
        ?> -->
<!-- php_get_post.php -->
<!-- <form action="" method="post">
     Điện thoại: <input type="text" name="phone2"><br>
     Địa chỉ: <input type="text" name="address2">
     <button type="submit">Gửi</button>
</form>
Phone: <?php if (isset($_POST["phone2"])) {
            echo $_POST["phone2"];
        } ?><br>
Address: <?php if (isset($_POST["address2"])) {
                echo $_POST["address2"];
            } ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="" method="post">
         <p>Họ tên: <input type="text" name="fullname" value=""></p>
         <p>Password: <input type="password" name="password" value=""></p>
         <p>Đăng ký học: HTML <input type="checkbox" name="check_html" value="HTML">, CSS <input type="checkbox" name="check_css" value="CSS"></p>
         <p>Giới tính: Nam <input type="radio" name="gender" value="Nam">, Nữ <input type="radio" name="gender" value="Nữ"></p>
         <p>Thành phố: <select name="city">
             <option value="Hà Nội">Hà Nội</option>
             <option value="Hồ Chí Minh">Hồ Chí Minh</option>
             <option value="Đà Nẵng">Đà Nẵng</option>
             <option value="Cần Thơ">Cần Thơ</option>
         </select></p>
         <p>Tin nhắn:<br>
         <textarea cols="30" rows="7" name="message"></textarea></p>
         <button type="submit">Gửi</button>
     </form>

     <p>Họ tên: <?php if (isset($_POST["fullname"])) {
                    echo $_POST["fullname"];
                } ?></p>
     <p>Password: <?php if (isset($_POST["password"])) {
                        echo $_POST["password"];
                    } ?></p>
     <p>Đăng ký học: <?php if (isset($_POST["check_html"])) {
                            echo $_POST["check_html"];
                        } ?> <?php if (isset($_POST["check_css"])) {
                                    echo $_POST["check_css"];
                                } ?></p>
     <p>Giới tính: <?php if (isset($_POST["gender"])) {
                        echo $_POST["gender"];
                    } ?></p>
     <p>Thành phố: <?php if (isset($_POST["city"])) {
                        echo $_POST["city"];
                    } ?></p>
     <p>Tin nhắn: <?php if (isset($_POST["message"])) {
                        echo $_POST["message"];
                    } ?></p> -->
    <?php
    // Khai báo giá trị ban đầu, nếu không form sẽ báo lỗi.
    $fullname = $email = $path = "";
    $error_fullname = $error_email = $error_path = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullname"])) {
            $error_fullname = "<span style='color:red;'>Error: Họ tên bắt buộc phải nhập.</span>";
        } else {
            $fullname = $_POST["fullname"];
            if (!preg_match("/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i", $fullname)) {
                $error_fullname = "<span style='color:red;'>Error: Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
            } else {
                echo $fullname;
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "<span style='color:red;'>Error: Email bắt buộc phải nhập.</span>";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "<span style='color:red;'>Error: Email nhập chưa đúng.</span>";
            } else {
                echo $email;
            }
        }

        if (empty($_POST["path"])) {
            $error_path = "<span style='color:red;'>Error: URL bắt buộc phải nhập.</span>";
        } else {
            $path = $_POST["path"];
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $path)) {
                $error_path = "<span style='color:red;'>Error: URL nhập chưa đúng.</span>";
            } else {
                echo $path;
            }
        }
    }
    ?>

    <form action="" method="post">
        <p>Họ tên: <input type="text" name="fullname" value=""> <?php echo $error_fullname; ?></p>
        <p>Email: <input type="email" name="email" value=""> <?php echo $error_email; ?></p>
        <p>URL: <input type="text" name="path" value=""> <?php echo $error_path; ?></p>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>