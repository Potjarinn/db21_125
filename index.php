<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'home';
    $action = 'home';
}
?><html>
<head></head>
<body>
<?php echo "controller = ".$controller.",action = ".$action; ?>
<br><a href="?controller=home&action=home">[Home]</a>
    <a href="?controller=hospital&action=index">[Hospital]</a>
    <a href="?controller=doctor&action=index">[Doctor]</a>
    <a href="?controller=homeisolation&action=index">[Homeisolation]</a>
<?php require_once("routes.php"); ?>


</body>
</html>