@include('includes.header')
<style>
    th td{
        width:14.28%;
    }
     input::placeholder {
        /* font-weight: bold; */
        opacity: 0.9;
        color: #A8A8A8;
        font-size:14px;

    }
    a {
        text-decoration: none;
    }
    .dataTables_paginate {
        position: absolute;
        margin-top: 50px;
        margin-left:90%;
        background-color : #FCFCFC;
        padding:10px;
        /* border:none ; */
        /* border-right:1px #707070; */
        color : #707070;
    }
    .dataTables_paginate a {
        color : #707070;
        text-decoration: none;
    }

    input{
        background: transparent;
    }
    .card-outer{
        position: relative;
        top: 0px;
        left: 0px;
        width: 1366px;
        height: 934px;
            /* margin: auto; */
        margin-top: calc(calc(100vh - 934px) * 0.5);
        margin-left: calc(calc(100vw - 1366px) * 0.5);
    }
    .reloadButton {
        margin-top: 13px;
        position: absolute;
        margin-left:9.5%;
        background-color : #FCFCFC;
        border:none ;
        color: #323E48;
    }
    .dataTables_length label {
        margin-left: -50px;
            font: normal normal 800 12px/17px Poppins;
            letter-spacing: 0px;
            padding-right: 115px;
            color: #323E48;
            padding-top:9px;
    }


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<div class="card-outer">
    <div class="card shadow" >
        @include('includes.navbar')
        @include('includes.sidebar')


        <div class="home">
            <div class="py-5 px-3">
                <div class="row" >
                    <div class="col-3" >
                    <span style="font-size: 16px;" ><b>Pipe Line</b></span>
                    </div>
                    <div class="col-9 btn-group" >
                        <button  class="btn1 active" >Scenarios</button>
                        <button  class="btn1" >Active</button>
                        <button  class="btn1" >Funded</button>
                        <button  class="btn1"  style="width: 141px;">Cancelled/Declined</button>
                    </div>
                </div>
            </div>

            <div class="px-3" style="margin-top: -40px">
                <div class="container-fluid shadow p-2">
                    <span class="ms-1"style="font-size: 14px">search</span>
                    <div class="row ms-1 me-1 align-items-center" style="height: 69px; background: #EFF5FC">
                        <form>
                            <div class="row">
                                <div class="col-10">
                                    <label style="font-size: 14px">Search by</label>
                                    <input list="brow" id="i" class="ms-4" placeholder="mm/dd/yy" autocomplete="off">
                                        <datalist id="brow">
                                            <option value="02/22/2023">
                                            <option value="04/12/2023">
                                            <option value="03/22/2023">
                                            <option value="01/20/2023">
                                            <option value="01/20/2023">
                                        </datalist><img src="images/down-arrow-11.svg" alt="" style="width:10px;height:10px; margin-left:-15px;">
                                        <input list="list" id="name" class="ms-4" placeholder="Borrower Name" autocomplete="off">
                                        <datalist id="list">
                                            <option value="Andy America">
                                            <option value="Andy">
                                            <option value="America">
                                            <option value="Amy America">
                                            <option value="Patricia Gail">
                                        </datalist><img src="images/down-arrow-11.svg" alt="" style="width:10px;height:10px; margin-left:-15px;">
                                </div>
                                <div class="col-2" >
                                    <button  class="btnrst clear-btn" style=" width: 69px;  height: 28px; ">Reset</button>
                                    <button  class="btngo" style="width: 37px;  height: 28px;">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="px-3 py-2">
                <div class="container-fluid shadow p-2 dashboard-table" id="dashboard-table">
                    <div class="tab-header">
                        <button id="reloadButton" class="reloadButton" style="background-color:#FCFCFC;border:none" type="button"><img src="{{asset('images/reload.svg')}}" alt=""></button>
                    </div>
                    <table id="example" class="table datatable" style="width: 100%; height: 100%;">
                        <thead style="background: #E3ECF6 0% 0% no-repeat padding-box; font-size:12px;">
                            <tr>
                                <th>Scenario Name</th>
                                <th>Borrower Name</th>
                                <th>Date</th>
                                <th>Loan Officer</th>
                                <th>Loan Purpose</th>
                                <th>Broker Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody style="border-radius:5px;background: #FCFCFC  0% 0% no-repeat padding-box; font-size:11px;" id="body">
                            {{-- Table data retrived from json file  --}}
                         </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
  $(document).ready(function() {
  var table = $('#example').DataTable( {
    "ajax": {
      "url": "{{asset('data/page4data.json')}}",
      "dataSrc": ""
    },
    "columns": [
      { "data": "Scenario Name" },
      { "data": "Borrower Name" },
      { "data": "Date" },
      { "data": "Loan Officer" },
      { "data": "Loan Purpose" },
      { "data": "Broker Name" },
      { "data": "Action" }
    ],
    "fnInitComplete": function() {
        $('select[name="example_length"]').removeClass('form-select');
    },
    "pagingType": "full_numbers",
    "scrollY": 542,
    "scrollX": true,
    "paging": true,
    "scrollCollapse": true,

    "language": {
      "paginate": {
        "first": '<i class="fa-solid fa-angles-left" style="font-size:12px"></i>',
        "last": '<i class="fa-solid fa-angles-right" style="font-size:12px"></i>',
        "previous": '<i class="fa-solid fa-angle-left" style="font-size:12px"></i>',
        "next": '<i class="fa-solid fa-angle-right" style="font-size:12px"></i>',
        "sInfo": "_START_ - _END_ of _TOTAL_",
        "sInfoEmpty": "0 - 0 of 0",
        "sInfoFiltered": "",
        "sLengthMenu": "Show _MENU_"
      }
    },
    "drawCallback": function(settings) {
      var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
      var pageInfo = $(this).DataTable().page.info();
      var currentPage = pageInfo.page + 1;
      var totalPages = pageInfo.pages;
      var paginationHtml = '';
      paginationHtml += '<a  class="paginate_button first" href="#" data-page="first"><i class="fa-solid fa-angles-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button previous" href="#" data-page="prev"><i class="fa-solid fa-angle-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<span class="paginate_button current"> ' + currentPage + '<span style="height:10px;font-size:9px">&nbsp; / &nbsp;</span>' + totalPages + ' </span><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button next" href="#" data-page="next"><i class="fa-solid fa-angle-right" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button last" href="#" data-page="last"><i class="fa-solid fa-angles-right" style="font-size:12px"></a>';
      pagination.html(paginationHtml);

      // attach click event listener to navigation links
      pagination.find('a').on('click', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        if (page === 'prev') {
          table.page('previous').draw('page');
        } else if (page === 'next') {
          table.page('next').draw('page');
        } else if (page === 'first') {
          table.page('first').draw('page');
        } else if (page === 'last') {
          table.page('last').draw('page');
        } else {
          table.page(page - 1).draw('page');
        }
      });
    },
    "dom": "<'row'<'col-sm-6 col-md-2'i><'col-sm-6 col-md-2'l><'col-md-6'><'col-sm-6 col-md-2'p>>" + "<'row'<'col-sm-12'tr>>",
    "language": {
        "infoEmpty": "0 - 0 of 0",
        "lengthMenu": "Show&nbsp;&nbsp;&nbsp; _MENU_",
        "info": "_START_ - _END_ of _TOTAL_ ",
        "infoFiltered": ""

    }
  });

  $('#reloadButton').on('click', function() {
        table.ajax.reload();
    });



    $('.toggle').click(function () {

        $('.dataTables_scrollHeadInner').css('width', '100%');
        $('.datatable').css('width', '100%');
       
    });


    $(".btn1").click(function () {
            $(".btn1").removeClass("active");
            $(this).addClass("active");
    });
    $(".btn2").click(function(){
        $(".btn2").removeClass("active2");

        $(this).addClass("active2");

    });

    // Call columns.adjust() when the sidebar is opened or closed

    $(function() {

        $('.btngo').on('click', function() {

        event.preventDefault(); // prevent form submission

        let input1 = $('#i').val();

        let input2 = $('#name').val();



        input2 == 'Borrower Name' ? input2 = "" : input2;

        table.columns().search('').column(1).search(input2).column(2).search(input1).draw();

        });




        $('.btnrst').click(function() {

        $('#i').val('');

        $('#name').val('');

        table.columns().search('').draw();

        });

    });




});


// $('#example').DataTable( {

// } );


    // $(".btn1").click(function(){
    //     $(".btn1").removeClass("active");
    //     $(this).addClass("active");
    // });

</script>
@include('includes.footer')

