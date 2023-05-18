@include('includes.header')

<style>
    .cover_image {

        height: 100vh;
        background-image: no-repeat;
        background-size: cover;
        background-repeat: no-repeat;
        background-image:url({{asset('images/Capture.PNG')
    }
    }

    );

    }

    input[type="text"],
    select.form-control {


        height: 24px;
        border: none;
        border-bottom: 1px solid #000000;
        outline: none;
        border-bottom-color: #6A679E;
        /* margin: 0 auto; */
        float: none;
        background: transparent;
    }

    input[type="password"],
    select.form-control {
        margin: 0 auto;
        float: none;
        border: none;
        border-bottom: 1px solid #000000;
        outline: none;
        border-bottom-color: #6A679E;

    }

    input::placeholder {
        font-weight: bold;
        opacity: 0.9;
        color: black;
        font-size: 12px;

    }

</style>

<div class="container-fluid" style="height:100vh;">
    <div class="card-outer">
        <!-- <div class="card shadow-none">  -->
        <div class="card-body">
            <div class="row" style="height:100vh;">
                <div class="col-lg-8 img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex">
                    <!-- <img src="images/Capture.PNG" style="height:100vh;" alt="Glide Acra image"  class="img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex"> -->
                </div>
                <div class="col-lg-4 align-self-center" style="">
                    <div class="text-center">
                        <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid mb-3 mt-4"
                            style="width: 187px; height: 74px;">
                        <p class="mt-3"><b style="font-size: 13px;">Welcome to Acra Lending Broker Portal</b></p>
                        <form class="px-lg-3 px-4 px-md-5 px-xxl-5 mt-5">
                            <div class="mb-3">
                                <input type="text" name="name" placeholder="Email ID" autocomplete="off"
                                    class="d-block mt-3 col-12">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" placeholder="Password" autocomplete="off"
                                    class=" d-block mt-3 col-12">
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 text-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label" style="font-size: 10px;"
                                            for="inlineFormCheck"><b>Remember me</b></label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#" style="font-size: 9px; color: #0033A1; text-decoration:none;"><b>Forgot
                                            Your Password?</b></a>
                                </div>
                            </div>
                            <div class="mt-4  mb-5">
                                <div class="d-flex justify-content-center ">
                                    <a href="/second" class=" btn btn-primary "
                                        style="background: #213E97; width: 300px; height:40px; margin-bottom: 12px; border-radius: 5px; color: white;"><b
                                            class="text-white">NEXT</b></a>
                                </div>
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
