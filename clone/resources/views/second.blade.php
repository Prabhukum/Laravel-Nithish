@include('includes.header')
<style>
input::placeholder {
    width: 74px;
    height: 17px;
    /* UI Properties */
    text-align: left;
    font: normal normal normal 12px/21px Poppins;
    letter-spacing: 0px;
    color: #C4C4C4;
    opacity: 1;

    }
    input:focus {
        outline:none;
    }
</style>
    <div class="py-5">
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-8">
                    <img src="images/Capture.PNG" alt="Glide Acra image" class="w-100">
                </div>
                <div class="col-md-4 col-sm-12 mt-sm-5 mt-md-0 align-self-center">
                    <div class="container">
                        <div class="text-center">
                            <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid">
                            <p class="mt-3" style="font-size:14px"><b>We Need To Verify Your Identity</b></p>
                        </div>
                        <div class="form-page mt-5">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <img src="images/phone_symbol.PNG" alt="phone" class="img_phone_symbol mt-1" style="width:18px; height:18px;  border-bottom-style: ridge;">
                                </div>
                                <input type="text" class="form-control col-md-12"  placeholder="+1 *******20" id="email" name="email" />
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <span class="" style="font-size:13px">If your number is incorrect please reach out to </span><br>
                            <a href=""> <strong> <span class="" style="font-size:13px">itsupport@acrabrokerlinks.com</span></strong></a>
                        </div>

                        <div class="form-button  col-md-12 mt-4">
                            <button class="btn btn-primary text-white " style="background: #213E97 0% 0% no-repeat padding-box; width: 100%; height: 48px; border-radius: 5px; font-size:18px"><a href="/third" style="color:white; text-decoration: none;" ><b>SEND TEXT</a></b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
