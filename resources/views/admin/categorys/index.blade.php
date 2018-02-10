@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('category.create')}}">Create A New Category Blog</a><br>
                  </div>
                </div>
              </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Content</th>
                  <th>Link</th>
                  <th></th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($categorys as $category ) 
                <tr>
                  <td>{!! substr(strip_tags($category->name), 0, 50) !!} {!! strlen(strip_tags($category->name)) > 50 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($category->content), 0, 50) !!} {!! strlen(strip_tags($category->content)) > 50 ? "...." : "" !!}</td>
                  <td> </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('category.show', $category->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('category.edit', $category->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Content</th>
                  <th></th>
                  <th></th>
                  <th>Action</th>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection