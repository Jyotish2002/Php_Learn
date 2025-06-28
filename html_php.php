<?php
echo "<h1 style = 'color:blue' >Php with HTML</h1>";
echo "<h3 style = 'color:green'> Php with blue in html</h3>";

?>
<?php
$name = "Jyotish Yadav";
$h2_color="red";
echo "<h1 style = 'color:red'> $name</h1>";

?>

<h1 style = "color: blue">
    <?php
    echo"My name is $name";
    ?>
</h1>



<h2 style = "color:<?php echo $h2_color; ?>">
    <?php
    echo "My name is $name"
    ?>
</h2>