@include('includes.header')
    <div class="py-5">
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-8">
                    <img src="images/Capture.PNG" alt="Glide Acra image" class="w-100">
                </div>
                <div class="col-md-4 col-sm-12 mt-sm-5 mt-md-0 align-self-center">
                    <div class="text-center">
                    <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid">
                    <p class="mt-3" style="font-size:14px"><b>Welcome to Acra Lending Broker Portal</b></p>
                        <div class="form-page px-4 mt-5">
                                <input type="text" name="name"  placeholder="Email ID" class="d-block mt-3 col-12">
                                <input type="password" name="password" placeholder="Password"  class="d-block mt-5 col-12">
                        </div>
                    </div>
                    <div class="check-list px-4 mt-3">
                        <div class="form-check mb-2 mr-sm-2">
                            <div class="d-flex justify-content-between py-4">
                                <div class="remember-me">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck"/>
                                    <label class="form-check-label" for="inlineFormCheck"  style="font-size:12px;">Remember me</label>
                                </div>
                                <a href="#" style="font-size:12px;"><label class="form-check-label" style="color:#0033A1" for="inlineFormCheck">Forgot Your Password?</label></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-button mx-4 col-md-11 mt-4">
                        <button class="btn btn-primary text-white " style="background: #213E97 0% 0% no-repeat padding-box; width: 100%; height: 48px; border-radius: 5px;"><b>NEXT</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
