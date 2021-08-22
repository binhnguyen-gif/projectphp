<!-- <?php
// session_start();


// if (isset($_SESSION['counter'])) {
//     $_SESSION['counter'] += 1;
// } else {
//     $_SESSION['counter'] = 1;
// }
// $msg = "Bạn đã truy cập trang này " .  $_SESSION['counter'];
// $msg .= " lần trong session này.";


// session_destroy();
// unset($_SESSION['counter']);
?>
<html>


<head>
    <title>Thiết lập session trong PHP</title>
</head>


<body>
    <?php 
    // echo ($msg); 
    ?>
</body>


</html> -->


<?php
   // session_start();
   // if (isset($_SESSION['counter'])) {
   //    $_SESSION['counter'] = 1;
   // }
   // else {
   //    $_SESSION['counter']++;
   // }
   // $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter'];
   // $msg .= " lần trong session này.";
   // echo ( $msg );
?>

<?php 
     session_start();
   //   $_SESSION["key"] = "phong";
     var_dump($_SESSION);
     die();
   //   xóa các phần tử trong mang hoặc xóa các session 
   //   unset($_SESSION["key"]);
?>
<!-- <p>
   Để tiếp tục, mời bạn click vào trang sau: <br />


   <a  href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">
</p> -->

<!-- session lưu dữ liệu trên server máy chử đặt server sẽ tạo ra php session id  trên cookie và lưu phpsessionid trên phía webserver khi f5 trang nó sẽ gửi cũng cookie lên webserver php sẽ gửi cũng sseion id lên web server sẽ index và so sánh với id trên webserver để nó biết cái id đi cùng trong session (ở các brower khác nhau sẽ có các session id khác nhau) -->