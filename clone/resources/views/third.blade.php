@include('includes.header')
<style>
input::placeholder {
    width: 74px;
    height: 17px;
    /* UI Properties */
    /* margin-left: 50px; */
    text-align: left;
    font: normal normal normal 12px/21px Poppins;
    letter-spacing: 0px;
    color: #C4C4C4;
    opacity: 1;

    }
</style>
    <div class="py-5">
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-8">
                    <img src="images/Capture.PNG" alt="Glide Acra image" class="w-100">
                </div>

                <div class=" col-md-4 col-sm-12 mt-sm-5 mt-md-0 align-self-center">
                    <div class="container">
                        <div class="text-center">
                            <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid">
                            <p class="mt-3" style="font-size:16px"><b>Enter Code</b></p>
                            <span class="mt-3" style="font-size:12px">We texted your phone <b>+XX XXXXXXX21,</b></span><br>
                            <span class="mt-3" style="font-size:12px">Please enter the Code to sign in.</span>

                        </div>
                        <div class="form-page mt-5">

                            <input class="col-md-12 form-control"  placeholder="Enter Code" id="otp" name="otp" type="text"/>

                        </div>
                        <div class="col-md-12 mt-3">
                            <span class="" style="font-size:13px">If your number is incorrect please reach out to </span><br>
                        <a href=""> <strong> <span class="" style="font-size:13px">itsupport@acrabrokerlinks.com</span></strong></a>
                        </div>

                        <div class="form-button  col-md-12 mt-4">
                            <button class="btn btn-primary text-white " style="background: #213E97 0% 0% no-repeat padding-box; width: 100%; height: 48px; border-radius: 5px; font-size:18px"><a href="/fourth" style="color:white; text-decoration: none;" ><b>VERIFY</a></b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
