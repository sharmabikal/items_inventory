 @extends('backend.backend_master')
 @section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Items List Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Item Name</th>
                  <th>Item Number</th>
                  <th>Item Category</th>
                  <th>Desk Officer Name</th>
                  <th>Date of Entry</th>
                </tr>
                <tbody>
                @foreach($item_list as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->items_name}}</td>
                  <td>{{$item->items_quantity}}</td>
                  <td></td>

                  <td>{{$item->desk_officer}}</td>
                  <td>{{$item->entry_date}}</td>
                  <td>
                                         {{ csrf_field() }}
                                         <a class="ui small green edit button" href="{{url('backend/pages/dashboard/item/edit/'.$item->id)}}">Edit</a>
                                         <a class="ui small green edit button" href="{{url('backend/pages/dashboard/item/delete/'.$item->id)}}">Delete</a>

                                         </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

 @endsection