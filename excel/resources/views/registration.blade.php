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
    <title>Register</title>
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
        <span class="navbar-brand px-5 h1">Registration Form</span>
    </nav>
    <div class="py-3">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
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
                    <div class="card shadow centered-form">
                        <div class="card-header" style="background: #f2f2f2">
                        <h4>Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="/register" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Emp ID</label>
                                        <input type="text" required name="emp_id" class="form-control" placeholder="Enter your Emp ID">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">UserName</label>
                                        <input type="text" required name="username" class="form-control" placeholder="Enter your Username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" required name="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                                        <input type="text" required name="phone" class="form-control" placeholder="Enter Phone Number" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Address</label>
                                        <textarea rows="2" required name="address" class="form-control" placeholder="Enter your Address" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Select Course</label>
                                        <div class="search_select_box">
                                            <select required class="form-select" data-live-search="true" name="course">
                                                <option selected>Select Course</option>
                                                <option >B.E(CSE)</option>
                                                <option >B.E(IT)</option>
                                                <option >B.E(EEE)</option>
                                                <option >B.E(ECE)</option>
                                                <option >B.E(BIO-CHEM)</option>
                                                <option >B.E(MECHANICAL)</option>
                                                <option >B.E(AUTOMOBILE)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" required name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Confirm Password</label>
                                        <input type="password" required name="cpassword" class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Designation</label>
                                        <select required class="form-select" name="designation">
                                            <option selected>Select Designation</option>
                                            <option >Software Developer</option>
                                            <option >IT Support</option>
                                            <option >Tester</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Experience</label>
                                        <select required class="form-select" name="exp">
                                            <option selected>select Experience</option>
                                            <option >Fresher</option>
                                            <option >0-1</option>
                                            <option >1-3</option>
                                            <option >3-5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputPassword1" >Gender</label>
                                        <input type="radio"  name="radio"  value="Male" id="exampleInputPassword1" required>
                                        <label for="exampleInputPassword1" class="form-label" style="font-weight: lighter">Male</label>
                                        <input type="radio"  name="radio"  value="Female" id="exampleInputPassword1">
                                        <label for="exampleInputPassword1" class="form-label" style="font-weight: lighter">Female</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputPassword1" class="form-label" >Martial Status</label>
                                        <input type="radio"  name="status"  value="Single" id="exampleInputPassword1" required>
                                        <label for="exampleInputPassword1" class="form-label" style="font-weight: lighter" >Single</label>
                                        <input type="radio"  name="status"  value="Married" id="exampleInputPassword1">
                                        <label for="exampleInputPassword1" class="form-label" style="font-weight: lighter">Married</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">

                                        <select name="country" class="form-select  mb-3" id="country">
                                            <option selected disabled>Select country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <select name ="state" class="form-select  mb-3" id="state"></select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <select name ="city" class="form-select mb-3" id="city"></select>
                                    </div>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="checkbox" required name="agree"  value="Single" id="exampleInputPassword1">
                                    <label for="exampleInputPassword1"  class="form-label" style="font-weight: lighter">I have agreed terms and conditions</label>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <button type="submit" name="register" class="btn btn-info btn-block text-light col-md-6">Submit</button>
                                        <span class="col-md-6" >Already registered?then <a href="/login-view">click here</a></span>
                                    </div>

                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#country').on('change', function () {
                var countryId = this.value;
                $('#state').html('');
                $.ajax({
                    url: '{{ route('states') }}?country_id='+countryId,
                    type: 'get',
                    success: function (res) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(res, function (key, value) {
                            $('#state').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state').on('change', function () {
                var stateId = this.value;
                $('#city').html('');
                $.ajax({
                    url: '{{ route('cities') }}?state_id='+stateId,
                    type: 'get',
                    success: function (res) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(res, function (key, value) {
                            $('#city').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
        $('.search_select_box select').selectize({
            sortField: 'text'
        });
    });
    </script>
</body>
</html>
