
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
                    <h1 class="h2">Success Story</h1>
                    <p>Success Story That Inspires thousands.</p>
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
                            $sql = "SELECT * FROM success_story";
                            $result = $conn->query($sql);
                            $stories = $result->fetch_all();
//                            echo gettype($stories);
                            ?>
                            <!--== Single Blog Post start ==-->
                            <?php foreach ($stories as $item) {
                                ?>
                            <div class="col-lg-6 col-md-6">
                                <article class="single-blog-post">
                                    <figure class="blog-thumb">
                                        <div class="blog-thumbnail">
                                            <img src="../backend/storage/<?php echo $item[3] ?>" alt="Blog" class="img-fluid" />
                                        </div>
                                    </figure>

                                    <div class="blog-content">
                                        <h3><a ><?php echo substr($item[1],0,45) ?>.....</a></h3>
                                        <p><?php echo substr($item[2],0,200) ?>...</p>
                                        <form method="post" action="singleSuccessStory.php">
                                            <input name="id" hidden value="<?php echo $item[0] ?>">
                                            <input type="submit" class="btn btn-brand" value="More">
                                        </form>
                                        <?php
                                        if ($_SESSION['user_details']->account_type == 0 || $_SESSION['user_details']->account_type == 1) {
                                            ?>
                                            <a href="editSuccessStory.php?id=<?php echo $item[0] ?>"
                                               class="btn btn-brand text-white">
                                                Edit
                                            </a>
                                            <a href="../backend/deleteSuccessStory.php?id=<?php echo $item[0] ?>"
                                               class="btn btn-brand text-white">
                                                Delete
                                            </a>
                                            <?php

                                        }
                                        ?>

                                    </div>
                                </article>
                            </div>
                            <?php } ?>
                            <!--== Single Blog Post End ==-->
                        </div>
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

