<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('database/db_connect.php');
include('header.php');

/*if (isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    $details = $_SESSION['user_details'];


    if($details->account_type == '2'){
        echo"  <script> alert('You don\'t have permission!')</script>";
        echo"  <script>location.assign('index.php')</script>";
    }
}*/
if (isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    $details = $_SESSION['user_details'];
    if ($details->account_type == 0 || $details->account_type == 1) {

        $id = $_GET['id'];

        if (isset($id) && $id) {
            $query = "select * from success_story where id='$id'";
            $result = $conn->query($query);
            $successStory = $result->fetch_assoc();
            if($result->lengths == 0){
                echo "<script> location.href='successStory.php'; </script>";
            }
            /*  echo '<pre>';
              echo var_dump($job_details);
              echo '</pre>';*/
        }
        else {
            echo "<script> location.href='successStory.php'; </script>";
        }

    }
    else {
        echo "<script> alert('You don\'t have permission!')</script>";
        echo "<script> location.href='successStory.php'; </script>";
    }
}
?>

<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Edit your Story</h1>
                    <p>A story to inspire thousands of students in their future path.</p>
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
            <form method="post" action="../backend/editSuccessStory.php" enctype="multipart/form-data">
                <input type="number" hidden value="<?php echo $id ?>" name="id">

            <div class="">
                <div class="form-group">
                    <label for=""><h3>Title</h3></label>
                    <input placeholder="Enter Title Here!"
                           required
                           type="text"
                           class="form-control"
                           name="title"
                           value="<?php echo $successStory['title'] ?>"
                    />
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for=""><h3>Content</h3></label>
                        <textarea   name="content" id="content">
                                    <?php echo $successStory['content'] ?>
                        </textarea>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for=""><h3>Cover Photo</h3></label>
                    <img src="../backend/storage/<?php echo $successStory['cover_photo'] ?>"
                         class="img-fluid w-50 h-50 m-5"
                         alt="Blog"
                         id="previewImageId1"
                    >
                    <input type="file"
                           onchange="imagePreview(event, 'previewImageId1')"
                           class="form-control"
                           name="cover_photo"
                    />
                </div>
                <br>
                <br>
                <div class="form-group ">
                    <input class="btn-lg btn-success float-right " type="submit" value="Publish">
                </div>
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
    let imagePreview = function (event, id) {
        let output = document.getElementById(id);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    tinymce.init({
        selector: '#content',
        width: 1100,
        height: 600,
    });
</script>



