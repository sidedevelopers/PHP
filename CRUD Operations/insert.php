<?php

?>

<?php

if (isset($_POST['g_submit'])) {

    $g_name = $_POST['g_name'];
    $g_amount = $_POST['g_amount'];
    $g_rate = $_POST['g_rate'];
    $g_weight = $_POST['g_weight'];
    $g_date = $_POST['g_date'];

    $stmt = "INSERT INTO `gath`(`name`, `rate`, `weight`, `date`,`amount`) VALUES ('$g_name','$g_rate','$g_weight','$g_date','$g_amount')";

    if (mysqli_query($conn, $stmt)) {
        echo '<script type="text/javascript">alert("Insert Succesfull");</script>';
        echo "<script>window.location='add-gaths.php'</script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>