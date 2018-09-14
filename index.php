<?php 
include_once('config.php');
try{
    
    $opt= array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo =new PDO('mysql:host=localhost;dbname=database1','root','',$opt);
    $pdo->query('set names utf8');
}catch(PDOException $e)
{
    exit('server error');
}
$sql="select * from noidung where 1";
$sth = $pdo->prepare($sql);
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
$a=array();
foreach($data as $k=>$v)
{
    $tam=array($v->name => $v->content);
    array_push($a,$tam);
}
// echo "<pre>";
// print_r($a);
// echo "</pre>";
$c=array();
$vv=array();
foreach($a as $k=>$v)
{
        $vv=array_merge($vv,$v);
}
// echo "<pre>";
// print_r($vv);
// echo "</pre>";

// echo "<pre>";
// print_r($v);
// echo "</pre>";

// echo $v['page1_tieude1'];

// exit();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parallax2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<?php
  include_once('page/menu.php');
  $page=$_GET['page'];
  $link='page/'.$page.'.php';
  if(isset($_GET['page']) && $_GET['page'] && file_exists($link)  ) 
  {
    include_once($link);
  }else
  {

    include_once('page/page404.php');
  }
        
   ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>