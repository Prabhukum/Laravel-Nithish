@include('includes.header')

<style>
    /* @media (min-width: 768px) {
        .form-check {
            display: inline-block;
            margin-bottom: 0;
        }

        .form-check-input {
            margin-right: 5px;
        }
    }

    @media (min-width: 1024px) and (max-height: 626px) {
        .form-check-label {
            white-space: normal;
            display: inline-block;
        }
        .form-check {
            flex-wrap: wrap;
            display: inline-block;
        }
        .form-check-input {
            margin-right: 0;
            margin-bottom: 5px;
        }
    }


    @media (min-width: 992px) and (max-width: 1163px) {
        .form-check-label {
            font-size: 14px;
            white-space: nowrap;
            display: inline-block;
        }
        .form-check {
            flex-wrap: wrap;
            display: inline-block;
        }
    }

    @media (max-width: 425px) {
        .form-check-label {
            font-size: 12px;
            display: inline-block;
        }
        .form-check {
            flex-wrap: wrap;
            display: inline-block;
        }
    }

    @media (min-width: 992px) and (max-width: 1190px) {
        .form-check-label {
            font-size: 14px;
            display: inline-block;
        }
        .form-check {
            flex-wrap: wrap;
            display: inline-block;
        }

        .form-check-inline {
            display: flex;
            align-items: center;
        }

        .form-check-input {
            position: static;
            margin-right: 5px;
        }
    } */
    .cover_image{
        /* margin-left:-12px;
        width:100%; */
      /* height:100%;
    background-size:cover; */
    height:100vh;
    background-image:no-repeat;
    background-size:cover;
    background-repeat:no-repeat;
    background-image:url({{asset('images/Capture.PNG')}});
 
    }
 
</style>

<div class="container-fluid" style="height:100vh;">
<!-- <div class="card-outer"> 
       <div class="card shadow-none"> 
          <div class="card-body">   -->
                <div class="row" style="height:100vh;">
                    <div class="col-lg-8 img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex">
                        <!-- <img src="images/Capture.PNG" style="height:100vh;" alt="Glide Acra image"  class="img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex"> -->
                    </div>
                    <div class="col-lg-4 align-self-center"  style="">
                        <div class="text-center">
                            <img src="images/header.PNG" alt="Glide Acra image" class="img-fluid mb-3 mt-4" style="width: 187px; height: 74px;">
                            <p class="mt-3"><b style="font-size: 13px;">Welcome to Acra Lending Broker Portal</b></p>
                            <form class="px-lg-3 px-4 px-md-5 px-xxl-5 mt-5">
                                <div class="mb-3">
                                    <input type="text" name="name" placeholder="Email ID" autocomplete="off" class="d-block mt-3 col-12">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" placeholder="Password" autocomplete="off" class=" d-block mt-3 col-12">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 text-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" style="font-size: 10px;" for="inlineFormCheck"><b>Remember me</b></label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" style="font-size: 9px; color: #0033A1; text-decoration:none;"><b>Forgot Your Password?</b></a>
                                    </div>
                                </div>
                                <div class="mt-4  mb-5">
                                    <div class="d-flex justify-content-center ">
                                        <a  href="/second" class=" btn btn-primary "
                                            style="background: #213E97; width: 300px; height:40px; margin-bottom: 12px; border-radius: 5px; color: white;"><b class="text-white">NEXT</b></a>
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
