<!-- Course section -->
<div class="col mb-5">
    <div class="card h-150">
        <a href="view/viewteam-detail.php?identifier=<?=$result2['identifier']?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="data/images/<?=$result2['image'];?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <center>
                            <?=$result2['first_name'];?> &nbsp;&nbsp;
                            <?=$result2['last_name'];?>
                        </center>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="fa fa-shield"></i> สังกัดทีม: &nbsp;
                        <?=$result2['team'];?>
                    </div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fa fa-futbol-o"></i> ตำแหน่งของทีม: &nbsp;
                        <?=$result2['position'];?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>