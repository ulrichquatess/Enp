@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('team.create')}}">Create A New Team Member</a><br>
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
              <h3 class="box-title">Team Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                 <th>Description</th>
                 <th>email</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($teams as $team ) 
                <tr>
                  <td>{{ substr(strip_tags($team->name), 0, 10) }} {{ strlen(strip_tags($team->name)) > 40 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($team->description), 0, 20) !!} {!! strlen(strip_tags($team->description)) > 50 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->email), 0, 10) !!} {!! strlen(strip_tags($team->email)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->facebook), 0, 10) !!} {!! strlen(strip_tags($team->facebook)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->twitter), 0, 10) !!} {!! strlen(strip_tags($team->twitter)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->linkedin), 0, 10) !!} {!! strlen(strip_tags($team->linkedin)) > 10 ? "...." : "" !!}</td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('team.show', $team->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('team.edit', $team->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['team.destroy', $team->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Name</th>
                 <th>email</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Description</th>
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