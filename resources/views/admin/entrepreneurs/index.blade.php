@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Create Your Entrepreneur Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('entrepreneur.create')}}">Create A New Entrepreneur</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                 <th>Name</th>
                 <th>Title</th>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Content</th>
                 <th>Action</th>
                </tr>
                @foreach($entrepreneurs as $entrepreneur ) 
                <tr>
                   <td>{{ $entrepreneur->name }}</td>
                   <td>{{ substr(strip_tags($entrepreneur->title), 0, 10) }} {{ strlen(strip_tags($entrepreneur->title)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($entrepreneur->facebook), 0, 10) }} {{ strlen(strip_tags($entrepreneur->facebook)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($entrepreneur->twitter), 0, 10) }} {{ strlen(strip_tags($entrepreneur->twitter)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($entrepreneur->linkedin), 0, 10) }} {{ strlen(strip_tags($entrepreneur->linkedin)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($entrepreneur->content), 0, 10) }} {{ strlen(strip_tags($entrepreneur->content)) > 12 ? "..." : ""  }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('entrepreneur.show', $entrepreneur->id)}}">Show</a>
               <a class="btn btn-primary" href="{{ route('entrepreneur.edit', $entrepreneur->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['entrepreneur.destroy', $entrepreneur->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          {!! $entrepreneurs->links() !!}
        </div>
      </div>
@endsection      