@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Your Technology Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('technology.create')}}">Create A New Technology Topics</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                 <th>Title</th>
                 <th>Content</th>
                 <th>Action</th>
                </tr>
                @foreach($technologys as $technology ) 
                <tr>
                
                   <td>{{ substr(strip_tags($technology->title), 0, 90) }} {{ strlen(strip_tags($technology->title)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($technology->content), 0, 100) }} {{ strlen(strip_tags($technology->content)) > 12 ? "..." : ""  }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('technology.show', $technology->id)}}">Show</a>
               <a class="btn btn-primary" href="{{ route('technology.edit', $technology->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['technology.destroy', $technology->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          {!! $technologys->links() !!}
        </div>
      </div>
@endsection      