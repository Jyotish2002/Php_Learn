<!DOCTYPE html>
<html lang="en">

<head>

    <title>Call PHP function</title>
</head>

<body>
    <form method="get">
        <button name="button" value="btn1">
            Call function
        </button>
    </form>
</body>

</html>

<?php
if (isset($_GET['button'])) {
    btn_click_test();
}
function btn_click_test(){
    echo "Function called on button click";
}
?>