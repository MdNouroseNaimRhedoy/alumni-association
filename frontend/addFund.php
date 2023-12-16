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
                    <h1 class="h2">Add Fund Raising Campaign</h1>
                    <p>Help us make a difference! Your contribution will support. Every donation counts, and we appreciate your support in making this campaign a success!</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap" class="bg-info">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <form method="post" action="../backend/addFund.php" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""><h3>Title</h3></label>
                                <input placeholder="Fund Raising Campaign Title"
                                       required
                                       type="text"
                                       class="form-control"
                                       name="title"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>Start Date</h3></label>
                                <input required type="date" class="form-control" name="start_date"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>End Date</h3></label>
                                <input required type="date" class="form-control" name="end_date"/>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""><h3>Description</h3></label>
                                <textarea name="description" id="description"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>Goal Amount</h3></label>
                                <input required type="number" class="form-control" name="goal_amount"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>Cover Photo</h3></label>
                                <input type="file" class="form-control" name="cover_photo"/>
                            </div>
                        </div>

                    </div>

                            <br>
                            <div class="form-group ">
                                <input class="btn-lg btn-success float-right " type="submit" value="Publish">
                            </div>

                    </div>
            </form>
        </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

<script>
    tinymce.init({
        selector: '#skills',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#description',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#contact',
        width: 500,
        height: 200,
    });
</script>



