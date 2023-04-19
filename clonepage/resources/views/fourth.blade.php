@include('includes.header')

<style>
     input::placeholder {
        font-weight: bold;
        opacity: 0.9;
        color: black;
        font-size:10px;

    }
    a {
        text-decoration: none;
    }
    .gv-container div.dataTables_scrollBody {
        background: none !important;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@include('includes.navbar')
@include('includes.sidebar')


<div class="home">
    <div class="py-5 px-3">
        <div class="row" >
            <div class="col-2" >
            <span style="font-size: 16px;" ><b>Pipe Line</b></span>
            </div>
            <div class="btn-group" style="position:fixed; margin-left:20%;margin-right:30%">
                <button  class="btn1" >Scenarios</button>
                <button  class="btn1" >Active</button>
                <button  class="btn1" >Funded</button>
                <button  class="btn1"  style="width: 141px;">Cancelled/Declined</button>
            </div>
        </div>
    </div>

    <div class="px-3" >
        <div class="container-fluid shadow p-2">
            <span class="ms-1"style="font-size: 14px">search</span>
            <div class="row ms-1 me-1 align-items-center" style="height: 69px; background: #EFF5FC">
                    <div class="col-10">
                        <label style="font-size: 14px">Search by</label>
                        <input type="date" class="ms-5" >
                        <select  class="ms-4" aria-label="Default select example">
                            <option selected style="font-size: 14px">Borrower Name</option>
                            <option value="1" style="font-size: 14px">No Borrower Name</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button class="btnrst" style="width: 69px;  height: 28px;">Reset</button>
                        <button class="btngo" style="width: 37px;  height: 28px;">Go</button>
                    </div>
            </div>
        </div>

    </div>
    <div class="px-3">
        <div class="container-fluid shadow p-2" >
            <table id="example" class="table table-striped" style="width:100%">
                <thead style="background: #E3ECF6 0% 0% no-repeat padding-box;  font-size:12px">
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
                <tbody style="border-radius:5px;background: #FCFCFC  0% 0% no-repeat padding-box; font-size:12px">
                    <tr>
                        <td>Scenario-1</td>
                        <td>Andy America</td>
                        <td>02/22/2023</td>
                        <td>George</td>
                        <td>Purchase</td>
                        <td>Sunal</td>
                        <td>Awaiting Income</td>
                    </tr>
                    <tr>
                        <td>Scenario-2</td>
                        <td>Andy</td>
                        <td>04/12/2023</td>
                        <td>Daniel</td>
                        <td>Purchase</td>
                        <td>Sunal</td>
                        <td><a style="color:#8AB7E9; text-decoration: none;" href="#">Initiate Pricing</a></td>
                    </tr>
                    <tr>
                        <td>Scenario-3</td>
                        <td>America</td>
                        <td>03/22/2023</td>
                        <td>Soburt</td>
                        <td>Purchase</td>
                        <td>Robert</td>
                        <td><a style="color:#8AB7E9; text-decoration: none;" href="#">Submit Loan</a></td>
                    </tr>
                    <tr>
                        <td>Scenario-4</td>
                        <td>Amy America</td>
                        <td>01/20/2023</td>
                        <td>Salah</td>
                        <td>Purchase</td>
                        <td>Noki</td>
                        <td>Awaiting Income</td>
                    </tr>
                    <tr>
                        <td>Scenario-5</td>
                        <td>Patricia Gail</td>
                        <td>01/20/2023</td>
                        <td>Salah</td>
                        <td>Purchase</td>
                        <td>Noki</td>
                        <td>Awaiting Income</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


<script src="assets/js/script.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            scrollY: '200px',
            scrollCollapse: true,
            paging: true,
            stripeClasses: [],
            pagingType: 'full_numbers',

            "language": {

                        "paginate": {
                            "first": '<i class="fa fa-angle-double-left" style="font-size:10px"></i>',
                            "last": '<i class="fa fa-angle-double-right" style="font-size:10px"></i>',
                            "previous": '<i class="fa fa-angle-left" style="font-size:10px"></i>',
                            "next": '<i class="fa fa-angle-right" style="font-size:10px"></i>',

                        }
                        
                    },
            // dom: '<"row table_header"<"col-md-1"i><"col-md-1"l><"col-md-8"><"col-md-2"p>>',
            // dom: '',
        });

    });



    $(".btn1").click(function(){
        $(".btn1").removeClass("active");
        $(this).addClass("active");
    });


</script>
@include('includes.footer')

