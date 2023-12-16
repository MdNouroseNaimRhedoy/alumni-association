
<!--== Header Area Start ==-->
<?php
include('header.php')
?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Fund Raising Campaigns</h1>
                    <p>Ashun Dan Kori.</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">

    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="">
                    <div class="blog-page-contant-start">
                        <div class="row">

                            <?php
                            include('database/db_connect.php');
                            $sql = "SELECT * FROM fund";
                            $result = $conn->query($sql);
                            $funds = $result->fetch_all();
//                            echo gettype($stories);
                            ?>
                            <!--== Single Blog Post start ==-->
                            <?php foreach ($funds as $item) {
                                ?>
                            <div class="col-lg-6 col-md-6">
                                <article class="single-blog-post">
                                    <figure class="blog-thumb">
                                        <div class="blog-thumbnail">
                                            <img src="../backend/storage/<?php echo $item[8] ?>" alt="Blog" class="img-fluid" />
                                        </div>
                                    </figure>

                                    <div class="blog-content">
                                        <h3><a ><?php echo substr($item[2],0,45) ?>.....</a></h3>
                                        <a href="<?php echo 'singleFundPost.php?id='.$item[0] ?>" class="btn btn-brand">More</a>
                                    </div>
                                </article>
                            </div>
                            <?php } ?>
                            <!--== Single Blog Post End ==-->
                        </div>

                        <!-- Pagination Start -->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="pagination-wrap text-center">-->
<!--                                    <nav>-->
<!--                                        <ul class="pagination">-->
<!--                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>-->
<!--                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
<!--                                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                                            <li class="page-item"><a class="page-link" href="#">...</a></li>-->
<!--                                            <li class="page-item"><a class="page-link" href="#">50</a></li>-->
<!--                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </nav>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>

</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

