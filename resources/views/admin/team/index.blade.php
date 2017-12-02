@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Create Your Team Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('team.create')}}">Create A New Team</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                 <th>Name</th>
                 <th>email</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Description</th>
                 <th>Action</th>
                </tr>
                @foreach($teams as $team ) 
                <tr>
                   <td>{{ $team->name }}</td>
                   <td>{{ substr(strip_tags($team->email), 0, 10) }} {{ strlen(strip_tags($team->email)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($team->facebook), 0, 10) }} {{ strlen(strip_tags($team->facebook)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($team->twitter), 0, 10) }} {{ strlen(strip_tags($team->twitter)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($team->linkedin), 0, 10) }} {{ strlen(strip_tags($team->linkedin)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($team->description), 0, 10) }} {{ strlen(strip_tags($team->description)) > 12 ? "..." : ""  }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('team.show', $team->id)}}">Show</a>
               <a class="btn btn-primary" href="{{ route('team.edit', $team->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['team.destroy', $team->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          {!! $teams->links() !!}
        </div>
      </div>
@endsection      