<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" ></script>
    <title>Details</title>
    <style>
        body{
            background: #e6e6e6;
        }
        th, td {
        text-align: center;
        vertical-align:middle;
        }

        .sorting {
            text-align: center;
        }
        .danger{
            color:red;
        }
        .update{
            color:#0033A1;
        }
    </style>
</head>
<body>

    <!-- Add Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Add Details</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(url('add-details')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Emp ID</label>
                            <input type="text" required class="form-control" placeholder="Enter your Emp ID" name="emp_id">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" required class="form-control" placeholder="Enter your name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" required class="form-control" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile</label>
                            <input type="text" required class="form-control" placeholder="Enter your mobile number" name="mobile">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" required class="form-control" placeholder="Enter your Password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" required class="form-control"  name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- end Add Modal -->

     <!-- edit Modal -->



    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Edit Details</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?php echo e(url('update-details')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" id="stud_id" name="stud_id">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Emp ID</label>
                            <input type="text" required class="form-control"  name="emp_id" id="emp_id">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" required class="form-control"  name="name"  id="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" required class="form-control"  name="email"  id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile</label>
                            <input type="text" required class="form-control"  name="mobile"  id="mobile">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file"  class="form-control"  name="new_image" id="new_image">
                        </div>
                        <div class="mt-2" id="avatar">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <!-- end edit Modal -->




<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">Details</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" >Delete</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Import Users Details</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/import" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><strong>Import</strong></label>
                    <input type="file"  required class="form-control"  name="file">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>




        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand px-5 h1">Admin Panel</span>
        </nav>

        <div class="container" id="detail_table">

        <?php if(session('status')): ?>
            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
        <?php endif; ?>
        <div class="row py-5">
            <div class="card px-0">
                <div class="card-header bg-primary">
                   <div class="row" style="width: 100%">
                        <div class="col-6">
                            <span style="font-size: 26px" class="text-light"><b>User Details</b></span>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-light " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-circle-plus"></i> Add Details</button>

                            <button class="btn btn-light " ><a href="/export" class="text-dark" style="text-decoration: none"><i class="fa-solid fa-file-export"></i> Export Details</a> </button>

                            <button class="btn btn-light " data-bs-toggle="modal" data-bs-target="#importModal"><i class="fa-solid fa-file-import"></i> import Details</a> </button>

                            <button class="btn btn-light" style="width:130px; height:40px;" ><a href="/" class="text-dark" style="text-decoration: none; "><i class="fa-solid fa-right-from-bracket"></i> Logout</a> </button>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead class="headcenter">
                            <tr>
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">Emp ID</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Mobile</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Action</th>

                                <th style="text-align: center;">PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>
                                <td><?php echo e($detail->id); ?></td>
                                <td><?php echo e($detail->emp_id); ?></td>
                                <td><?php echo e($detail->name); ?></td>
                                <td><?php echo e($detail->email); ?></td>
                                <td><?php echo e($detail->mobile); ?></td>
                                <td>
                                    <img src="<?php echo e($detail->image); ?>" alt="Avatar" width="30px">
                                </td>
                                <td>
                                    <button type="button" class=" editbtn" value="<?php echo e($detail->id); ?>" title="Edit" data-bs-toggle="tooltip" style="border:none"><i class="fa-solid fa-pen-to-square update"></i></button>

                                    <button type="button" class=" deletebtn" value="<?php echo e($detail->id); ?>" title="Delete" data-bs-toggle="tooltip" style="border:none"><i class="fa-solid fa-trash danger"></i></button>
                                </td>
                                <td>
                                    <a href="/view_user_pdf/<?php echo e($detail->id); ?>" title="View" data-bs-toggle="tooltip"><i class="fa-solid fa-file fa-lg"></i></a>
                                    <a href="/export_user_pdf/<?php echo e($detail->id); ?>" title="Download" data-bs-toggle="tooltip"><i class="fa-solid fa-file-arrow-down fa-lg"></i></i></a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p>No details found</p>
                        <?php endif; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function (){
            $(document).on('click', '.editbtn', function () {
                var stud_id =$(this).val();
                // alert(stud_id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/edit-details/"+stud_id,
                    success: function (response) {
                        // console.log(response.detail.name);
                        $('#emp_id').val(response.detail.emp_id);
                        $('#name').val(response.detail.name);
                        $('#email').val(response.detail.email);
                        $('#mobile').val(response.detail.mobile);
                        $('#avatar').html(
                            `<img src="${response.detail.image}" width="100" class="img-fluid img-thumbnail">`
                        );
                        $('#stud_id').val(response.detail.id);

                    }
                });
            });

            // $(document).on('click', '.deletebtn', function () {
            //     var stud_id =$(this).val();
            //     // alert(stud_id);
            //     $('#deleteModal').modal('show');

            //     $.ajax({
            //         type: "GET",
            //         url: "/delete-details/"+stud_id,
            //         data: "data",
            //         success: function (response) {
            //             console.log(response);
            //         }
            //     });
            // });


            $('.deletebtn').click(function (e){
                e.preventDefault();

                var stud_id =$(this).val();
                // alert(stud_id);

                swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "GET",
                        url: "/delete-detail/"+stud_id,
                        data: {
                            'stud_id':stud_id,
                            'deletebtn':true
                        },
                        success: function (response) {
                            if(response == 200)
                            {
                                swal("Success!", "User Detail successfully Deleted!", "success");
                                // $("#detail_table").load(location.href + " #detail_table")
                                setTimeout(function() {

                                    location.reload();

                                }, 3000);
                                // window.location.href="/detail" ;
                                // location="/details";
                            }
                        }
                        //  error: function(error) {

                        //     // alert('Error deleting employee: ' + error);

                        //     swal("Problem in deleting", "Cannot able to delete", "error");

                        // }
                   });
                }
                });
            });
        });


        $(document).ready(function () {
            $('#example').DataTable({
                scrollY: '250px',
                scrollCollapse: true,
                paging: true,
            });
        });
    </script>

</body>
</html>
<?php /**PATH D:\Laravel\Git\Laravel-Nithish\excel\resources\views/details.blade.php ENDPATH**/ ?>