<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');


if (isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $details = $_SESSION['user_details'];
    if($details->account_type == '2' || $details->account_type == '1'){
        echo"  <script> alert('You don\'t have permission!')</script>";
        echo"  <script>location.assign('index.php')</script>";
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
                    <h1 class="h2">Member Directory</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--data dhore niye ashi-->
<?php
$sql = "SELECT * FROM `users` ";
$users = $conn->query($sql);
//$all_users = $users->fetch_all();
$number = $users->num_rows;


//echo '<pre>';
//echo print_r($users);
//echo '</pre>';
?>
<!-- /data dhore niye ashi-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                        <h2>Now  we have <strong class="funfact-count"><?php echo $number ?></strong> member </h2>
<!--                        search work not done-->

<!--                        <div class="table-search-area">-->
<!--                            <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">-->
<!--                                <input type="search" placeholder="Type Your Keyword">-->
<!--                                <select name="dept">-->
<!--                                    <option selected>Dept</option>-->
<!--                                    <option value="cmt">Computer</option>-->
<!--                                    <option value="cmt">Computer</option>-->
<!--                                    <option value="cmt">Computer</option>-->
<!--                                    <option value="cmt">Computer</option>-->
<!--                                    <option value="cmt">Computer</option>-->
<!--                                </select>-->
<!--                                <button class="btn btn-brand">Search</button>-->
<!--                            </form>-->
<!--                        </div>-->

<!--                        /search work not done-->

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Account Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ( $user = $users->fetch_assoc() ) {


                                ?>
                                <tr>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php if ($user['account_type'] == 1 )
                                        {
                                            echo '<a class="badge badge-info">Committee Member</a>';
                                        }
                                        else if ($user['account_type'] == 2 )
                                        {
                                            echo '<a class="badge badge-warning">General Member</a>';
                                        }
                                        else{

                                            echo '<a class="badge badge-light">Admin</a>';
                                        }
                                        ?></td>
                                    <td>
                                        <?php if ( $user['account_type'] ==2) { ?>
                                        <form action="../backend/changeAccountType.php" method="POST">
                                            <input type="text" name="id" value="<?php echo  $user['id'] ?>" hidden>
                                            <input type="number" name="account_type" value="1" hidden>
                                            <input class="btn btn-md btn-primary" type="submit" value="Make Committee Member" >
                                        </form>
                                        <?php
                                        }
                                        ?>
                                        <?php if ( $user['account_type'] ==1) { ?>
                                            <form action="../backend/changeAccountType.php" method="POST">

                                                <input type="text" name="id" value="<?php echo  $user['id'] ?>" hidden>
                                                <input type="number" name="account_type" value="2" hidden>
                                                <input class="btn btn-md btn-danger" type="submit" value="Make General Member" >
                                            </form>
                                            <?php
                                        }
                                        ?>
                                        <?php if ( $user['account_type'] ==0) { ?>

                                                <p class=" btn-md btn-warning" >Admin</p>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
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

<script>
    tinymce.init({
        selector: '#content',
        width: 1100,
        height: 600,
    });
</script>



