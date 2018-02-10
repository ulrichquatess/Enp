@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('entrepreneur.create')}}">Create A New Entrepreneur Blog</a><br>
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
              <h3 class="box-title">Entrepreneur Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                 <th>Title</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Content</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($entrepreneurs as $entrepreneur )
                <tr>
                  <td>{{ substr(strip_tags($entrepreneur ->name), 0, 40) }} {{ strlen(strip_tags($entrepreneur ->name)) > 40 ? "...." : "" }}</td>
                  <td>{{ substr(strip_tags($entrepreneur ->title), 0, 41) }} {{ strlen(strip_tags($entrepreneur ->title)) > 10 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($entrepreneur ->content), 0, 20) !!} {!! strlen(strip_tags($entrepreneur ->content)) > 20 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($entrepreneur->facebook), 0, 10) !!} {!! strlen(strip_tags($entrepreneur ->facebook)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($entrepreneur->twitter), 0, 10) !!} {!! strlen(strip_tags($entrepreneur ->twitter)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($entrepreneur->linkedin), 0, 10) !!} {!! strlen(strip_tags($entrepreneur->linkedin)) > 10 ? "...." : "" !!}</td>


                  <td><a class="btn btn-info btn-xs" href="{{ route('entrepreneur.show', $entrepreneur->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('entrepreneur.edit', $entrepreneur->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['entrepreneur.destroy', $entrepreneur->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Name</th>
                 <th>Title</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Content</th>
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