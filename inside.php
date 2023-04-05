<html>

<?php $color = $_GET["color"] ? $_GET["color"] : "black"; ?>

<?php $h1Color="blue" ?>

<style>
h1   {color: <?=$color?>;}
p    {color: red;}
</style>

<body>
<?php $nilai=100; ?>
<h1>Ini adalah h1</h1>
Nilainya adalah : <?php echo $nilai ?>

</body>
</html>