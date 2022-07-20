<!DOCTYPE html>
<html lang="en">
<head>
  <title>Razorpay Payment gateway Integration - Online Web Tutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3 style="text-align: center;">Razorpay Payment gateway Integration - Online Web Tutor</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">Razorpay Payment gateway Integration - Online Web Tutor</div>
    <div class="panel-body">

        <?php if (session()->has('error')) {?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error!</strong> <?=session("error")?>
        </div>
        <?php }?>

        <?php if (session()->has('success')) {?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Success!</strong> <?=session("success")?>
            </div>
        <?php }?>

        <form action="<?=base_url('payment')?>" method="POST" >
            <!-- Note that the amount is in paise 1 INR = 1000 Paisa -->

            <!--amount need to be in paisa-->
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="<?=env('razorKey')?>"
                    data-amount="1000"
                    data-buttontext="Pay 10 INR"
                    data-name="OnlineWebTutor"
                    data-description="Sample order description"
                    data-image="https://onlinewebtutorblog.com/wp-content/uploads/2020/08/blog-icon.png"
                    data-prefill.name="Samaple"
                    data-prefill.email="sample@gmail.com"
                    data-theme.color="#ff7529">
            </script>
        </form>
        <form action="<?=base_url('payment')?>" method="POST" >
            <!-- Note that the amount is in paise 1 INR = 1000 Paisa -->

            <!--amount need to be in paisa-->
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="<?=env('razorKey')?>"
                    data-amount="10002"
                    data-buttontext="Pay 102 INR"
                    data-name="OnlineWebTutor"
                    data-description="Sample order description"
                    data-image="https://onlinewebtutorblog.com/wp-content/uploads/2020/08/blog-icon.png"
                    data-prefill.name="Samaple"
                    data-prefill.email="sample@gmail.com"
                    data-theme.color="#ff7529">
            </script>
        </form>
    </div>
  </div>
</div>

</body>
</html>