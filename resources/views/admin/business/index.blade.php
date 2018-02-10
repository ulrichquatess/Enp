@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('business.create')}}">Create A New Business Blog</a><br>
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
              <h3 class="box-title">Business Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th></th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                 @foreach($businesss as $business ) 
                <tr>
                  <td>{{ substr(strip_tags($business->title), 0, 41) }} {{ strlen(strip_tags($business->title)) > 10 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($business->content), 0, 20) !!} {!! strlen(strip_tags($business->content)) > 20 ? "...." : "" !!}</td>

                  <td></td>


                  <td><a class="btn btn-info btn-xs" href="{{ route('business.show', $business->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('business.edit', $business->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['business.destroy', $business->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Title</th>
                  <th>Content</th>
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