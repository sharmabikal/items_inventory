

 @extends('backend.backend_master')

 @section('content')
<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Add Category Form</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" class="form-horizontal">
{{csrf_field()}}
              <div class="box-body">
                                <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Name Of Category:</label>

                                <div class="col-sm-4">
                                  <input name="category_name" type="text" class="form-control" id="" placeholder="Enter Item Category">
                                </div>
                                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Add Item Category</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="box">
                        <div class="box-header">
                          <h2 class="box-title">View All Category</h2>

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
                              <tr></tr>
                              <th>Category Name</th>

                            </tr>
                            <tbody>
                            @foreach($category_list as $category)
                            <tr>
                              <td>
                                {{$category->id}}
                              </td>
                              <td>
                                {{$category->category_name}}
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