<html>

<head>
    <title>Form trong PHP</title>
</head>

<body>
    <?php
    // Định nghĩa các biến và gán giá trị rỗng cho biến
    $name = $email = $gender = $comment = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Mẫu đăng ký lớp luyện thi TOEIC </h2>
    <form method="POST" action="form.php">
        <table>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Thời gian học:</td>
                <td> <input type="text" name="website"></td>
            </tr>
            <tr>
                <td>Tên lớp:</td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="gender" value="female">Nữ
                    <input type="radio" name="gender" value="male">Nam
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    echo "<h2>Thông tin bạn đã cung cấp:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

</body>

</html>