<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style>
        body
        {
        color: #464646;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        background-color: #525252;
        /* background-image: url('https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=400&q=60'); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        }
        .centered-form{
            background: rgba(255, 255, 255, 0.8);
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand px-5 h1">Login Form</span>
    </nav>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php if(session('message')!='')
                    {
                        ?>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey! </strong><?= session('message'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                    <?php
                    // unset(session('message'));
                    }
                    ?>
                    <div class="card centered-form">
                        <div class="card-header" style="background: #f2f2f2">
                        <h4>Login Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="login" method="post">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword1">
                                </div>
                                <div class="forgot mb-3">
                                    <a href="<?php echo e(route('forgot.password.get')); ?>">Forgot password</a>
                                </div>
                                <div class="mb-3 ">

                                    <button type="submit" name="login_btn" class="btn btn-primary ">Login</button>
                                    <span class="col-md-6 click" >Not yet registered?then <a href="/registeration">click here</a></span>
                                    <?php echo csrf_field(); ?>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\Laravel\Git\Laravel-Nithish\excel\resources\views/login.blade.php ENDPATH**/ ?>