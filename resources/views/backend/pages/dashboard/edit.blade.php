

 @extends('backend.backend_master')

 @section('content')

<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit Items Form</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('backend/pages/dashboard/item/edit/'.$editItem->id)}}" class="form-horizontal">

              <div class="box-body">
              {{ csrf_field() }}
                                <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Name Of Item:</label>

                                <div class="col-sm-4">
                                  <input value="@if(isset($editItem->items_name)) {{$editItem->items_name}} @endif" name="items_name" type="text" class="form-control" id="" placeholder="Enter Item Name">
                                </div>
                                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Number of Items:</label>

                  <div class="col-sm-4">
                    <input value="@if(isset($editItem->items_quantity)) {{$editItem->items_quantity}} @endif" type="text" name="items_quantity" class="form-control" id="" placeholder="Enter Number of Items">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Added By:</label>

                  <div class="col-sm-4">
                    <input value="@if(isset($editItem->desk_officer)) {{$editItem->desk_officer}} @endif" type="text" name="desk_officer" class="form-control" id="" placeholder="Name of Desk officer">
                  </div>
                </div>
                <div class="form-group">
                                  <label for="" class="col-sm-2 control-label">Date of Entry:</label>

                                  <div class="col-sm-4">
                                    <input value="@if(isset($editItem->entry_date)) {{$editItem->entry_date}} @endif" type="date" name="entry_date" class="form-control" id="" placeholder="Enter Entry Date">
                                  </div>
                                </div>
                    <!-- select -->
                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Select Category :</label>

                    <select class="col-sm-3">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    </select>
                    </div>

                    <!--end select -->


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Add Item</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

 @endsection