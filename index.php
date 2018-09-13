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
<nav class="navbar navbar-light navbar-expand-md" style="background-color:#7b8779;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color:rgba(255,255,255,0.9);"><strong><?=$vv['menu_tieude1']?></strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse float-left" id="navcol-1" style="background-color:#7b8779;">
                <ul class="nav navbar-nav" style="padding:1px;font-size:16px;">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><?=$lang['menu_content2']?></a></li>
                    <li class="dropdown show"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#" style="color:#ffffff;"><?=$lang['menu_content3']?></a>
                        <div class="dropdown-menu show flex-column" role="menu">
                            <h6 class="dropdown-header" role="presentation"><strong><?=$lang['menu_content4']?></strong></h6><a class="dropdown-item" role="presentation"><?=$lang['menu_content5']?></a><a class="dropdown-item" role="presentation"><?=$lang['menu_content6']?></a><a class="dropdown-item" role="presentation"><?=$lang['menu_content7']?></a>
                            <div class="dropdown-divider"
                                role="presentation"></div>
                            <h6 class="dropdown-header" role="presentation"><strong><?=$lang['menu_content8']?></strong></h6><a class="dropdown-item" role="presentation"><?=$lang['menu_content9']?></a><a class="dropdown-item" role="presentation"><?=$lang['menu_content10']?></a></div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:#ffffff;"><?=$lang['menu_content11']?></a>
                        <div class="dropdown-menu dropdown-menu-left" role="menu"><a class="dropdown-item" role="presentation" href="#"><?=$lang['menu_content12']?><br></a><a class="dropdown-item" role="presentation" href="#"><?=$lang['menu_content13']?><br></a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#ffffff;"><?=$lang['menu_content14']?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#ffffff;"><?=$lang['menu_content15']?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#ffffff;"><?=$lang['menu_content16']?></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <section id="trang1" class="page1" style="background-color:rgb(123,135,121);">
        <div style="background-color:rgb(123,135,121);">
            <div class="row page1 row1">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;min-height:0px;"><img src="assets/img/4.jpg" id="pic1" style="background-size:cover;background-repeat:no-repeat;background-position:center;width:100px;">
                    <!-- <p id="par1"><br>TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM<br><br></p> -->
                    <p id="par1"><br><?=$vv['page1_tieude1']?><br><br></p>
                </div>
            </div>
            <div class="row page1 row1" style="min-height:35vh;margin:0px;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;background-color:rgb(123,135,121);"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"><img src="assets/img/2.jpg" id="pic3"></div>
            </div>
            <div class="row page1 row1">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;background-color:rgb(123,135,121);">
                    <p id="par2"><?=$vv['page1_tieude2']?>&nbsp;<br><?=$vv['page1_diachi']?>&nbsp;<br><?=$vv['page1_tel']?>&nbsp;<br><?=$vv['page1_mail']?>&nbsp;<br></p>
                    <img
                        src="assets/img/3.jpg" id="pic2" style="background-size:cover;background-repeat:no-repeat;background-position:center;width:100px;"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;"></div>
            </div>
        </div>
    </section>
    <section id="trang2" style="color:rgb(123,135,121);">
        <div>
            <div class="row page1 row1" style="background-color:rgb(123,135,121);min-height:80vh;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;background-color:#dfeadf;">
                    <p style="background-color:#dfeadf;"></p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;">
                    <p id="page2-par1" style="color:rgb(255,255,255);"><?=$vv['page2_tieude1']?>&nbsp;</p>
                    <p id="page2-par2" style="color:rgb(255,255,255);"><?=$vv['page2_tieude2']?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="trang3" style="color:rgb(123,135,121);">
        <div>
            <div class="row page1 row1" style="margin:0px;margin-right:-1px;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;background-color:#dfeadf;">
                    <div class="row" id="page3-row1" style="margin:0px;">
                        <div class="col-12">
                            <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/4.jpg" id="page3-pic1"></div>
                        </div>
                    </div>
                    <div class="row" id="page3-row2" style="margin:0px;">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h1 class="page3-heading"><?=$vv['page3_tieude1']?></h1>
                            <p class="page3-par1"><?=$vv['page3_content1']?></p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h1 class="page3-heading"><?=$vv['page3_tieude2']?>&nbsp;<br></h1>
                            <p class="page3-par1"><?=$vv['page3_content2']?>&nbsp;<br></p>
                        </div>
                    </div>
                    <div class="row" id="page3-row2" style="margin:0px;">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h1 class="page3-heading"><?=$vv['page3_tieude3']?>&nbsp;<br></h1>
                            <p class="page3-par1"><?=$vv['page3_content3']?></p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h1 class="page3-heading"><?=$vv['page3_tieude4']?>&nbsp;<br></h1>
                            <p class="page3-par1"><?=$vv['page3_content4']?><br></p>
                        </div>
                    </div>
                    <div class="row" id="page3-row3" style="margin:0px;">
                        <div class="col-12"><img src="assets/img/333.jpg" id="page3-pic2"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-left:15px;background-color:#dfeadf;">
                    <div class="card" id="page3-card-pic3"><img class="card-img-top w-100 d-block align-items-center" src="assets/img/2-1.jpg" id="page3-pic3"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="trang9" style="color:rgb(123,135,121);">
        <div>
            <div class="row page1 row1" style="background-color:rgb(123,135,121);min-height:80vh;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;background-color:#dfeadf;">
                    <p style="background-color:#dfeadf;"></p>
                    <p id="page9-par1"><?=$vv['page4_content1']?><br><?=$vv['page4_content2']?></p>
                    <p id="page9-par2" style="color:#7b8779;"><?=$vv['page4_content3']?></p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0px;"></div>
            </div>
        </div>
    </section>
    <section id="trang5" style="color:rgb(123,135,121);">
        <div style="min-height:35vh;">
            <div class="row" style="background-color:#f4e6cc;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;padding:0px;">
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;">
                        <div class="col-6 col-md-6">
                            <div class="card"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-5.5.jpg" id="page5-pic1"></div>
                        </div>
                    </div>
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;margin:0px;margin-bottom:30px;height:auto;">
                        <div class="col-6 col-md-6">
                            <h6 class="heading"><?=$vv['page5_tieude1']?><br></h6>
                            <p class="text-justify par"><?=$vv['page5_content1']?>&nbsp;<br></p>
                        </div>
                        <div class="col-6 col-md-6" style="padding:0;">
                            <h6 class="heading"><?=$vv['page5_tieude2']?><br></h6>
                            <p class="text-justify par"><?=$vv['page5_content2']?>&nbsp;<br></p>
                        </div>
                    </div>
                    <div class="row" style="background-color:#f4e6cc;">
                        <div class="col-12 col-md-12" style="padding:0px;">
                            <div class="card"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-5.4.jpg" id="page5-pic2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img class="img-fluid" src="assets/img/brochure-tradiontal-art-5.3.jpg" id="page4-pic1"></div>
            </div>
        </div>
    </section>
    <section id="trang4">
        <div>
            <div class="row" style="background-color:#f4e6cc;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;">
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:40px;">
                        <div class="col-6 col-md-6">
                            <h6 class="heading4"><?=$vv['page6_tieude1']?>&nbsp;<br></h6>
                            <p class="text-justify par4"><?=$vv['page6_content1']?>&nbsp;</p>
                        </div>
                        <div class="col-6 col-md-6" style="padding:0;">
                            <h6 class="heading4"><?=$vv['page6_tieude2']?>&nbsp;<br></h6>
                            <p class="text-justify par4"><?=$vv['page6_content2']?>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img class="img-fluid" src="assets/img/brochure-tradiontal-art-4.9.jpg" id="page4-pic1"></div>
            </div>
        </div>
    </section>
    <section id="trang6">
        <div>
            <div class="row" style="background-color:#f4e6cc;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;padding:0px;">
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:40px;">
                        <div class="col-6 col-md-6">
                            <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-4.jpg" id="page6-pic1"></div>
                        </div>
                    </div>
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;min-height:85vh;">
                        <div class="col-6 col-md-6">
                            <h6 class="trang6-heading"><?=$vv['page7_tieude1']?>&nbsp;<br></h6>
                            <p class="text-justify par6"><?=$vv['page7_content1']?>&nbsp;<br></p>
                        </div>
                        <div class="col-6 col-md-6" style="padding:0;">
                            <h6 class="trang6-heading"><?=$vv['page7_tieude2']?><br></h6>
                            <p class="text-justify par6">T<?=$vv['page7_content2']?>&nbsp;<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img src="assets/img/brochure%20tradiontal%20art-6.2.jpg" style="max-width:100%" id="page6-pic2"></div>
            </div>
        </div>
    </section>
    <section id="trang7">
        <div style="position:relative;top:0px;left:0px;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="padding:0px;">
                    <div class="card" id="trang7-card-pic1"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure%20tradiontal%20art-7.1.1.jpg"></div>
                    <h1 class="trang7-heading-1"><?=$vv['page8_tieude1']?><br><?=$vv['page8_tieude2']?></h1>
                    <p class="trang7-par1" style="margin:0px;"><?=$vv['page8_content1']?><br></p>
                    <p class="trang7-par2"><?=$vv['page8_content2']?>&nbsp;<br></p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="padding:0px;margin:0;min-height:0px;background-color:#f4e6cc;">
                    <div class="card" id="trang7-card-pic2"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-7.8.1.jpg"></div>
                    <h1 class="trang7-heading-1"><?=$vv['page8_tieude3']?><br><?=$vv['page8_tieude4']?></h1>
                    <p class="trang7-par1"><?=$vv['page8_content3']?>&nbsp;<br></p>
                    <p class="trang7-par2"><?=$vv['page8_content4']?>&nbsp;<br></p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="padding:0px;">
                    <div class="card" id="trang7-card-pic3"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-7.9.1.jpg"></div>
                    <h1 class="trang7-heading-1"><?=$vv['page8_tieude5']?><br><?=$vv['page8_tieude6']?>&nbsp;<br></h1>
                    <p class="trang7-par1"><?=$vv['page8_content5']?><br></p>
                    <p class="trang7-par2"><?=$vv['page8_content6']?>&nbsp;<br></p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="padding:0px;background-color:#f4e6cc;margin:0px;">
                    <div class="card" id="trang7-card-pic4"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-7.10.1.jpg"></div>
                    <h1 class="trang7-heading-1"><?=$vv['page8_tieude7']?><br><?=$vv['page8_tieude8']?></h1>
                    <p class="trang7-par1"><?=$vv['page8_content7']?></p>
                    <p class="trang7-par2"><?=$vv['page8_content8']?>&nbsp;<br></p>
                </div>
            </div>
        </div>
    </section>
    <section id="trang8" style="position:relative;top:84px;left:0px;">
        <div>
            <div class="row" style="margin:0px;">
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8" style="padding:0;background-color:#f4e6cc;">
                    <div class="card" id="trang8-card-pic1">
                        <h1 id="trang8-heading"><?=$vv['page9_tieude1']?>&nbsp;<br></h1>
                        <p id="trang8-par1"><?=$vv['page9_content1']?></p><img class="card-img-bottom w-100 d-block"
                            src="assets/img/brochure-tradiontal-art-8.1.jpg"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding:0;background-color:#f4e6cc;">
                    <div class="card" id="trang8-card-pic2">
                        <h1 id="trang8-heading2"><?=$vv['page9_tieude2']?></h1>
                        <p id="trang8-par2"><?=$vv['page9_content2']?></p><img class="card-img-bottom w-100 d-block" src="assets/img/brochure-tradiontal-art-8.2.jpg" id="trang8-pic2"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>