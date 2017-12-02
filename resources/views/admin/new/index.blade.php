@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">  See All The Latest Slide Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('new.create')}}">Create A New Slide Topics</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Contenu</th>
                  <th>Action</th>
                </tr>
                @foreach($news as $new ) 
                <tr>
                  <td>{{ $new->id }}</td>
                  <td>{{ substr(strip_tags($new->content), 0, 90)}} {{ strlen(strip_tags($new->content)) > 100 ? "...." : "" }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('new.show', $new->id)}}">Montrer</a>
               <a class="btn btn-primary" href="{{ route('new.edit', $new->id) }}">Modifier</a>
               {!! Form::open(['method' => 'DELETE','route' => ['new.destroy', $new->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@endsection        