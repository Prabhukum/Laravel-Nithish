@include('includes.header')
 <style>

    @media (min-width: 768px) {
    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 0;
    }

    .form-check-input {
        margin-right: 5px;
    }
}
@media (min-width: 992px) and (max-width: 1163px) {
    .form-check-label {
        font-size: 14px;
        white-space: nowrap;
    }
}

@media (max-width: 425px) {
    .form-check-label {
        font-size: 12px;
    }
}
@media (min-width: 992px) and (max-width: 1190px) {
    .form-check-label {
        font-size: 14px;
    }

    .form-check-inline {
        display: flex;
        align-items: center;
    }

    .form-check-input {
        position: static;
        margin-right: 5px;
    }
}

</style>
<div class="container">
    <div class="card-outer">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <img src="images/Capture.PNG" alt="Glide Acra image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 align-self-center">
                        <div class="text-center">
                            <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid mb-3" style="width: 187px; height: 74px;">
                            <p class="mt-3"><b>Welcome to Acra Lending Broker Portal</b></p>
                            <form class="px-5 mt-5">
                                <div class="mb-3">
                                    <input type="text" name="name" placeholder="Email ID" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" style="font-size: 12px; color: #0033A1;">Forgot Your Password?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary text-white" style="background: #213E97; width: 100%; max-width: 338px; height: 48px; border-radius: 5px;"><a href="/third" style="color:white;"><b>NEXT</b></a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')