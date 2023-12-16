<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');

/*echo '<pre>';
echo print_r($_SESSION['user_details']);
echo '</pre>';*/

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
$sql = "SELECT * FROM `users`  ";
$users = $conn->query($sql);
//$all_users = $users->fetch_all();
$number = $users->num_rows;



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

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company Name</th>
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
                                        <td><?php echo $user['email'] ?></td>
                                        <?php
                                        $alumni_id_fk = $user['alumni_id_fk'];
                                        $sql = "SELECT `company_name`, `company_website` FROM `alumni` WHERE student_id='$alumni_id_fk'";
                                        $result = $conn->query($sql);
                                        $alumni = $result->fetch_assoc();
                                        ?>
                                        <td><?php echo $alumni['company_name'] ?></td>
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
                                            <?php
                                            $url = '../backend/sendContactRequestEmail.php';
                                            $url .= '?recipientEmailAddress='.$user['email'];
                                            $url .= '&recipientName='.$user['name'];
                                            $url .= '&fromEmailAddress='.$_SESSION['user_details']->email;
                                            $url .= '&contactNumber='.$_SESSION['user_details']->phone;
                                            $url .= '&fullName='.$_SESSION['user_details']->name;
                                            ?>
                                            <a href="<?php echo $url ?>" class="text-white btn btn-md btn-primary">Request No.</a>
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



