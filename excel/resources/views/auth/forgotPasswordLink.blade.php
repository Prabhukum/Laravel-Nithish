<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Reset Password</title>
</head>
<style>
    .form-gap {
        padding-top: 70px;
    }
</style>
<body>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 col-md-offset-4 ">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="text-center">
                      <h3><i class="fa fa-lock fa-4x"></i></h3>
                      <h2 class="text-center">Forgot Password?</h2>
                      <p>You can reset your password here.</p>
                      <div class="panel-body ">

                        <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="{{ route('reset.password.post')}}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                              <input id="email_address" name="email" placeholder="email address" class="form-control"  type="email" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                          </div>
                          <div class="form-group mb-3">
                              <input id="password" name="password" placeholder="Password" class="form-control"  type="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                          </div>
                          <div class="form-group mb-3">
                            <input id="password-confirm" name="password_confirmation" placeholder="Confirm Password" class="form-control"  type="password" required>
                              @if ($errors->has('password-confirmation'))
                                  <span class="text-danger">{{$errors->first('password-confirmation')}}</span>
                              @endif
                        </div>
                          <div class="form-group">
                            <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                          </div>

                          {{-- <input type="hidden" class="hide" name="token" id="token" value=""> --}}
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</body>
</html>
