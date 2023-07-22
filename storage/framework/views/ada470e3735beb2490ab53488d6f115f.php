    <?php $__env->startSection('main-section'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Invoice Page</h1>

              
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
              
                <form action="<?php echo e(url('/add_user')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                <div class="card-body">

                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        
                      <div class="form-group row">
                        <label class="col-sm-5">Invoice No.</label>
                        <input type="text" class="form-control col-sm-6" name="invoice_no" placeholder="Invoice No.">
                      </div>
                    

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

                      <div class="form-group row">
                        <label class="col-sm-5">Select Item</label>
                        <select class="form-control col-sm-6" name="item">
                          <option value="">Select Item</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="Sialkot">C</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-sm-6">
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

                      <div class="form-group row">
                        <label class="col-sm-5">Select Item</label>
                        <select class="form-control col-sm-6" name="item">
                          <option value="">Select Item</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="Sialkot">C</option>
                        </select>
                      </div>
                    </div>

                    




                  </div>

                  <hr>
                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
              
              <!-- /.card-body -->
            </div>

            

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoice\resources\views/welcome.blade.php ENDPATH**/ ?>