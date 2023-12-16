<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Single Job Post</h1>
                    <p>Tumi job paba na</p>
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
                <?php

                $id = $_GET['id'];
                include("database/db_connect.php");

                $sql = "select * from fund where id='$id' ";
                $result = $conn->query($sql);
                $fund_details = $result->fetch_assoc();

                ?>
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <?php if($fund_details['cover_photo']== null){
                                    ?>
                                    <img src="../backend/storage/default/default%20job%20post.jpg" class="img-fluid"
                                         alt="Blog">
                                    <?php
                                }
                                else {
                                    ?>
                                    <img src="../backend/storage/<?php echo $fund_details['cover_photo'] ?>" class="img-fluid"
                                         alt="Blog">
                                    <?php
                                }?>

                            </div>
                            <div class="single-blog-meta">
                                <div class="posting-info">
                                    <p> <?php echo $fund_details['title'];?></p>
                            </div>
                        </header>
                        <section class="blog-details">
                            <p> <?php echo $fund_details['description'];?></p>
                        </section>

                        <footer class="ml-5">
                            <div class="row no-gutters ">
                                <div class="col-10">
                                    <h3>Goal Amount (BDT):</h3>
                                    <p> <?php echo $fund_details['goal_amount'];?></p>
                                    <h3>Current Amount (BDT):</h3>
                                    <p> <?php echo $fund_details['current_amount'];?></p>
                                    <h3>Start Date:</h3>
                                    <p> <?php echo $fund_details['start_date'];?></p>
                                    <h3>End Date:</h3>
                                    <p> <?php echo $fund_details['end_date'];?></p>
                                </div>
                                <div class="col-2 text-right">
                                    <?php if($fund_details['goal_amount'] > $fund_details['current_amount'])
                                    {
                                        ?>
                                    <form action="../backend/pay.php" method="post">
                                        <input type="text" name="fund_id" value="<?php echo $fund_details['id'] ?>" hidden>
                                        <input type="number" name="amount" >
                                    <button type="submit" class="btn btn-lg btn-info">
                                        Pay!!
                                    </button>
                                    </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </footer>
                    </article>
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

