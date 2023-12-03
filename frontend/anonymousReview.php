
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
                    <h1 class="h2">Anonymous Review </h1>
                    <p>Tell What you want!</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="career-page-wrapper">
        <div class="career-page-topbg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <img src="../assets/frontend/assets/img/careerbg.png" class="img-fluid" alt="career">
                    </div>
                </div>
            </div>
        </div>

        <div class="career-page-content-wrap section-padding">
            <div class="container">

                <div class="job-opportunity-wrapper">
                    <div class="row">
                        <?php
                        include('database/db_connect.php');
                        $sql = "SELECT distinct `company_name`, `company_website` FROM `alumni`";
                        $result = $conn->query($sql);

                        //                            echo gettype($stories);
                        ?>
                        <!--== Single Blog Post start ==-->
                        <?php while( $item = $result->fetch_assoc() ) {
                        ?>
                        <!--== Single Job opportunity Start ==-->
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="single-job-opportunity">
                                <div class="job-opportunity-text">
                                    <div class="job-oppor-logo">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <img src="../backend/storage/default/img_2.png" alt="Job">
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href=""><?php echo $item['company_name'] ?></a></h3>
                                    <a href="<?php echo$item['company_website'] ?>">Company website</a>
                                </div>
                                <form action="singleCompany.php" method="get">
                                    <input type="text" name="company_name" value="<?php echo $item['company_name'] ?>" hidden>
                                    <input type="text" name="company_website" value="<?php echo $item['company_website'] ?>" hidden>
                                    <button type="submit" class="btn btn-job">Read or Comment</button>
                                </form>

                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <!--== Single Job opportunity End ==-->





                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

