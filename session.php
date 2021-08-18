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
   session_start();
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 1;
   }
   else {
      $_SESSION['counter']++;
   }
   $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter'];
   $msg .= " lần trong session này.";
   echo ( $msg );
?>
<p>
   Để tiếp tục, mời bạn click vào trang sau: <br />


   <a  href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">
</p>