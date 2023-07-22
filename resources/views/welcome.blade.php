@extends('layouts.main')

    @section('main-section')

    <style type="text/css">
/*@media print {
  .modal_content_body {
    position: absolute;
    z-index: 999999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}*/



@media print {
        body * {
            visibility: hidden;
        }
        .modal-content * {
            visibility: visible;
            overflow: visible;
        }
        .main-page * {
            display: none;
        }
        .modal-footer * {
            display: none;
        }
        .modal {
            position: absolute;
            left: 0;
            top: 0;
            margin: 0;
            padding: 0;
            min-height: 550px;
            visibility: visible;
            overflow: visible !important; 
        }
        .modal-dialog {
            visibility: visible !important;
            overflow: visible !important; 
        }
    }
</style>


    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Invoice Page</h1>

              {{-- @if(Auth::check())
                <p>Welcome,  {{ Auth::user()->name }}!</p>
              @endif
               --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">




            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Invoice</h3>
                 
            </div>
              <!-- /.card-header -->
              
                <form action="{{ url('/add_user') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">

                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        {{-- <div class=""> --}}
                      <div class="form-group row">
                        <label class="col-sm-5">Invoice No.</label>
                        <input type="text" class="form-control col-sm-6" name="invoice_no" placeholder="Invoice No.">
                      </div>
                    {{-- </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-5">Invoice Date</label>
                        <input type="date" class="form-control col-sm-6" name="invoice_date" placeholder="Enter Username">
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-5">Buyer Code</label>
                        <input type="text" class="form-control col-sm-6" name="buyer_code" placeholder="Buyer Code">
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-5">Shipping Date</label>
                        <input type="date" class="form-control col-sm-6" name="shipping_date" placeholder="Shipping Date">
                      </div>

                      {{-- <div class="form-group row">
                        <label class="col-sm-5">Select Item</label>
                        <select class="form-control col-sm-6" name="item">
                          <option value="">Select Item</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="Sialkot">C</option>
                        </select>
                      </div> --}}
                    </div>


                    <div class="col-sm-6">

                        <div class="form-group row">
                        <label class="col-sm-5">Select Item</label>
                        <select class="form-control col-sm-6" name="item" id="item_id">
                          <option value="">Select Item</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                        </select>
                      </div>

                        <div class="form-group row">
                        <label class="col-sm-5">Production Order</label>
                        <input type="text" class="form-control col-sm-6" name="production_order" placeholder="Production Order">
                      </div>

                      <div class="form-group row">
                        <input type="text" class="form-control " name="buyer_name" placeholder="Buyer Name">
                      </div>

                      <div class="form-group row">
                        <label class="col-md-2" style="white-space: nowrap;">Ship Via</label>
                        <input type="text" class="form-control col-md-4" name="ship" placeholder="Ship Via">

                        <label class="col-md-2" style="white-space: nowrap;">Currency</label>
                        <input type="text" class="form-control col-md-4" name="currency" placeholder="Currency">
                      </div>

                      {{-- <div class="form-group row">
                        <label class="col-sm-5">Select Item</label>
                        <select class="form-control col-sm-6" name="item">
                          <option value="">Select Item</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="Sialkot">C</option>
                        </select>
                      </div> --}}
                    </div>

                    {{-- <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Username">
                            </div>
                        </div>
                        
                    </div> --}}




                  </div>

                  <hr>



                  <div class="row col-sm-12">
                                

    <div style="overflow-x:auto;" class="table-responsive">
        <table class="table table-bordered datatable display nowrap" id="table-4" style="width:100%">
            <thead>
                <tr>
                    <th>Sr#</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody class="items">
                 <tr>
                     <td>1</td>
                     <td>1001</td>
                     <td>ABC</td>
                     <td>5</td>
                     <td>100</td>
                     <td>500</td>
                 </tr>   

                 <tr>
                     <td>2</td>
                     <td>1002</td>
                     <td>UIO</td>
                     <td>4</td>
                     <td>80</td>
                     <td>320</td>
                 </tr>  

                  <tr>
                     <td>3</td>
                     <td>1003</td>
                     <td>XYZ</td>
                     <td>5</td>
                     <td>100</td>
                     <td>500</td>
                 </tr>     
            </tbody> 
        </table>
    </div>
                            </div>
                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" name="add_item" id="add_item" class="btn btn-secondary" >Add Item</button>
                  <button type="button" name="save" id="print" class="btn btn-primary">Save</button>

                </div>
              </form>
              
              <!-- /.card-body -->
            </div>

            

            
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>




<div class="modal fade custom-width modal_content_body" id="modal-lg" role="dialog">
        <div class="modal-dialog modal-lg" style="width: 100%">
            <div class="modal-content">
             
                
                <div class="modal-body">


  <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort testosterone trophy driving gloves handsome</td>
                      <td>$64.50</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Need for Speed IV</td>
                      <td>247-925-726</td>
                      <td>Wes Anderson umami biodiesel</td>
                      <td>$50.00</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Monsters DVD</td>
                      <td>735-845-642</td>
                      <td>Terry Richardson helvetica tousled street art master</td>
                      <td>$10.70</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Grown Ups Blue Ray</td>
                      <td>422-568-642</td>
                      <td>Tousled lomo letterpress</td>
                      <td>$25.99</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>


            </div>
                    </div>
                
                </div>
                    
                </div>





<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


  <script>
        $(document).ready(function(){
            $("#item_id").change(function(){
                var item_id_check_stock=$("#item_id").val();
                $.ajax({
                         url:"ajax.php",
                         method:"POST",
                         data:{item_id_check_stock:item_id_check_stock},
                         success:function(data){
                            result = $.trim(data);
                            $('#item_stock_quantity').val(data);
                         }
                    });

                        var qty=$("#quantity").val(" ");
                        var unit_price=$("#unit_price").val(" ");
                        var total_price=$("#total_price").val(" ");
            
            });


            $('#print').on({'click': function(){
                    // var invoice=$("#sale_code").val();
                    // $.ajax({
                    //  url:"ajax.php",
                    //  method:"POST",
                    //  data:{invoice:invoice},
                    //  success:function(data){

                    //     get_total_amount(invoice);
                    //      var customer_id=$("#sale_to").val();
                    //     get_whatsapp_number(customer_id)
                    //     $('#invoice_table_body').html(data);


                    //  }
                    // });

                     $("#modal-lg").modal("show");
                }
            });

        });
  </script>

    @endsection

