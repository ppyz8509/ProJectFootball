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
            <a class="navbar-brand" href="index.php"><i class="bi bi-globe2"></i>&nbsp;Football World Club </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                        <br>
                            <form name="frmadd" method="post" action="view_success-edit.php" enctype="multipart/form-data">              
                                <input name="identifier" type="hidden" id="ID" value="<?=$jsonDecode['identifier'];?>" >
                                <div class="form-group row">
                                    <label for="staticFirst" class="col-sm-3 col-form-label">First_name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="<?=$jsonDecode['first_name'];?>" required>
                                    </div>
                                </div>
                            <br>
                                <div class="form-group row">
                                    <label for="staticLast" class="col-sm-3 col-form-label">Last_name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="<?=$jsonDecode['last_name'];?>" required>
                                    </div>
                                </div>
                            <br>
                            <div class="form-group row">
                                <label for="staticteam" class="col-sm-3 col-form-label">Team :</label>
                                <div class="col-sm-9">
                                    <input list="team" name="team" class="form-control" placeholder="<?=$jsonDecode['team'];?>" required>
                                    <datalist id="team">
                                        <option value="Arsenal">กรุณาเลือก</option>
                                        <option value="Chelsea">กรุณาเลือก</option>
                                        <option value="Crystal Palace">กรุณาเลือก</option>
                                        <option value="Leicester">กรุณาเลือก</option>
                                        <option value="Manchester City">กรุณาเลือก</option>
                                        <option value="Manchester United">กรุณาเลือก</option>
                                        <option value="Stoke">กรุณาเลือก</option>
                                        <option value="Tottenham">กรุณาเลือก</option>
                                        <option value="West Brom">กรุณาเลือก</option>
                                    </datalist>
                                </div>
                            </div>
                            <br>
                                <div class="form-group row">
                                    <label for="staticteam" class="col-sm-3 col-form-label">Position :</label>
                                    <div class="col-sm-9">
                                        <input list="position" name="position" class="form-control" placeholder="<?=$jsonDecode['position'];?>" required>
                                        <datalist id="position">
                                            <option value="Defender">กรุณาเลือก</option>
                                            <option value="Goalkeeper">กรุณาเลือก</option>
                                            <option value="Midfielder 1">กรุณาเลือก</option>
                                            <option value="Midfielder 2">กรุณาเลือก</option>
                                            <option value="Striker">กรุณาเลือก</option>
                                        </datalist>
                                    </div>
                                </div>
                            <br>
                                
                            <br>
                                <div class="form-group row">
                                    <label for="staticteam" class="col-sm-3 col-form-label">Image :</label>
                                    <div class="col-sm-9">
                                        <input list="image" name="image" class="form-control" placeholder="<?=$jsonDecode['image'];?>" required>
                                        <datalist id="image">
                                            <option value="AddTest-1.gif">กรุณาเลือก</option>
                                            <option value="AddTest-2.gif">กรุณาเลือก</option>
                                            <option value="AddTest-3.gif">กรุณาเลือก</option>
                                        </datalist>
                                    </div>
                                </div>
                            <br>
                            <br>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil-square"
                                                aria-hidden="true"></i>&nbsp; บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-lg-4  d-none d-lg-block">
                        <center>
                            <br>
                            <br>
                            <br>
                            <img class="card-img-top" src="../data/images/<?=$jsonDecode['image'];?>" alt="..." />
                            <br>
                            <br>
                            <br>
                            <h5>รูปดั้งเดิมของข้อมูลนักเตะคนนี้</h5>
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