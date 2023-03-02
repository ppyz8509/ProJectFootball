<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะมนุษยศาสตร์และสังคมศาสตร์ มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../data/css/styles.css" rel="stylesheet" />
    <link href="../data/css/css.css" rel="stylesheet" />
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">เพิ่มตัวละครนักเตะ</a></li>
                </ul>
            </div>
            <form class="d-flex" action="view_search.php" method="get">
                <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keywords"
                    autocomplete="off">
                <button class="btn btn-outline-light" type="submit" value="Search"> <i
                        class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
    <!--BR-->
    <br>
    <!-- Navigation_Search-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <b>Select Team</b>&nbsp;
                    "<?php include "../Controller/controllerSelects-name.php"; ?>"
                    &nbsp;&nbsp;
                    <b>Found</b>&nbsp;
                    <?php include "../Controller/controllerSelects-found.php"; ?>&nbsp; <b>results.</b>
                </ul>
                <a class="navbar-brand" href="#"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;&nbsp;<i class="fas fa-atom"></i> Search Character</a>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                include "../Controller/controllerSelects.php";
                ?>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../data/js/scripts.js"></script>
    
</body>

</html>