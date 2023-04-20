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
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    a {
        text-decoration: none;
    }
    .card-outer{
        position: relative;
        top: 0px;
        left: 0px;
        width: 1366px;
        height: 768px;
            /* margin: auto; */
        margin-top: calc(calc(100vh - 768px) * 0.5);
        margin-left: calc(calc(100vw - 1366px) * 0.5);
    }
</style>
    <div class="card-outer">
        {{-- <div style="width: 1230px; height: 748px; margin: auto; margin-top:10%; "> --}}
            <div class="card shadow ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <img src="images/Capture.PNG" alt="Glide Acra image" style="width: 885px; height: 768px;">
                        </div>
                        <div class="col-4 align-self-center " style="margin-left: -15px">
                            <div class="text-center">
                                <img src="images/header.PNG" alt="Glide Acra image"  style="width: 187px; height: 74px;">
                                <p class="mt-3" style="font-size:14px"><b>We Need To Verify Your Identity</b></p>
                                <div class="form-page mt-5  px-5">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <img src="images/phone_symbol.PNG" alt="phone" class="img_phone_symbol mt-1" style="width:18px; height:18px;  border-bottom-style: ridge;">
                                        </div>
                                        <input type="text" class="form-control col-md-12"  placeholder="+1 *******20" id="email" name="email" />
                                    </div>
                                </div>
                            </div>
                            <span class=" px-5" style="font-size:13px">If your number is incorrect please reach out to </span><br>
                                <a href=""> <strong> <span class=" px-5" style="font-size:13px">itsupport@acrabrokerlinks.com</span></strong></a>
                            <div class="form-button ms-5 col-md-11 mt-4">
                                <button class="btn btn-primary text-white " style="background: #213E97 0% 0% no-repeat padding-box; width: 345px; height: 48px; border-radius: 5px;"><a href="/third" style="color:white"><b>SEND TEXT</a></b></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>
@include('includes.footer')
