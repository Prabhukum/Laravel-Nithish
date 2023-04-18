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
    <title>Document</title>
</head>
<style>
    body {
    background-position: center;
    background-color: #eee;
    background-repeat: no-repeat;
    background-size: cover;
    color: #505050;
    font-family: "Rubik",Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.5;
    text-transform: none;
}

.forgot{
	    background-color: #fff;
    padding: 12px;
    border: 1px solid #dfdfdf;
}

.padding-bottom-3x {
    padding-bottom: 72px !important;
}

.card-footer{
	background-color: #fff;
}

.btn{

	font-size: 13px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #76b7e9;
    outline: 0;
    box-shadow: 0 0 0 0px #28a745;
}

</style>
<body>

    <div class="container padding-bottom-3x mb-2 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <div class="forgot">

                <h2>Forgot your password?</h2>
            <p>Change your password in three easy steps. This will help you to secure your password!</p>
            <ol class="list-unstyled">
              <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
              <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
              <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
            </ol>

            </div>
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
            <form class="card mt-4" accept="{{route('forgot.password.post')}}" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label for="email-for-pass">Enter your email address</label>
                  <input class="form-control" type="text" name="email" id="email-for-pass" required=""><small class="form-text text-muted">Enter the email address you used during the registration. Then we'll email a link to this address.</small>
                @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-success" type="submit">Send Password Reset Link</button>
                <a href="/login-view" class="btn btn-danger">Back to Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>

</body>
</html>
