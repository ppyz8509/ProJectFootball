<?php
    include "../controller/controllerDetail.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟุตบอลโลก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../data/css/styles.css">
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
    <link href="../data/css/body.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-globe2"></i>&nbsp;World Club </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            จัดการนักเตะ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="view_edit.php?identifier=<?=$jsonDecode['identifier']?>">แก้ไขนักเตะ</a></li>
                            <li><a class="dropdown-item" href="view_success-del.php?identifier=<?=$jsonDecode['identifier']?>" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')">ลบนักเตะ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col ">
                <br>
                <br>
                <br>
                <div class="card p-3 border" style="background-image: url('../data/images/BG-D.png');">
                    <br>
                    <center>
                        <h1><i class="fas fa-user">&nbsp;&nbsp;</i>
                            <?=$jsonDecode['first_name'];?>
                            <?=$jsonDecode['last_name'];?>
                        </h1>
                    </center>
                    <div class="d-flex">
                        <div class="col col-5 ms-5">

                            <br>
                            <br>
                            <img class="card-img-top" src="../data/images/<?=$jsonDecode['image'];?>" alt="..." />
                            <br>
                            <br>
                            <br>
                            <h5><label for="id"><b>ผู้เล่นเลขที่</b>&nbsp;:&nbsp;
                                    <?=$jsonDecode['identifier'];?>
                                </label></h5><!--หัวข้อ-->
                            <h5><label for="name"><b>ชื่อ</b>&nbsp;:&nbsp;
                                    <?=$jsonDecode['first_name'];?>
                                </label></h5><!--หัวข้อ-->
                            <h5><label for="last"><b>นามสกุล</b>&nbsp;:&nbsp;
                                    <?=$jsonDecode['last_name'];?>
                                </label></h5><!--หัวข้อ-->
                            <h5><label for="Team"><b>สังกัดทีม</b>&nbsp;:&nbsp;
                                    <?=$jsonDecode['team'];?>
                                </label></h5><!--หัวข้อ-->
                            <h5><label for="position"><b>ตำแหน่งของทีม</b>&nbsp;:&nbsp;
                                    <?=$jsonDecode['position'];?>
                                </label></h5><!--หัวข้อ-->


                        </div>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;

                        <div class="col-lg-4  d-none d-lg-block">
                            <br>
                            <center>
                                <img src="https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl="<?=$jsonDecode['image'];?>
                                    title="Data identifier" />
                                <h3>
                                    Scan Me..
                                    <i class="fas fa-qrcode">
                                    </i>
                                </h3>
                                <p>สแกนเพื่อดูข้อมูลนักเตะแบบละเอียด..</p>
                                <br>
                                <a href="<?=$jsonDecode['image'];?>" target="_blank"><button type="button"
                                        class="btn btn-primary">เปิดรายละเอียดบนเว็บไซต์
                                        คลิกที่นี่!!</button></a>
                                <br>
                                <br>
                                <a href="../index.php"><button type="button"
                                        class="btn btn-outline-dark">กลับสู่หน้าหลัก
                                        คลิกที่นี่!!</button></a>
                            </center>
                        </div>
                    </div>
                    <center>
                        <hr width="2">
                        <hr size="4">
                        <a href="https://web.facebook.com/profile.php?id=100086630391898" class="text-primary"><i
                                class="fa fa-facebook-official"></i></a>
                        &nbsp;
                        &nbsp;
                        <a href="https://www.secure.instagram.com/" class="text-warning"><i
                                class="fa fa-instagram"></i></a>
                        &nbsp;
                        &nbsp;
                        <a href="https://www.youtube.com/@mr.supphalakmaneepanpanit7264" class="text-danger"><i
                                class="fa fa-youtube-square"></i></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <footer class="py-lg-5 bg-dark ">
        <div class="container">
            <p class="m-0 text-center text-light">Copyright &copy; Nakhon Pathom
                Rajabhat University 2021</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>