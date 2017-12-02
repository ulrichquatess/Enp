@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Create Your Social Links Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('social.create')}}">Create A New Social Icon</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                 <th>Facebook</th>
                 <th>Twitter</th>
                 <th>Linkedin</th>
                 <th>Action</th>
                </tr>
                @foreach($socials as $social ) 
                <tr>
            
                  <td>{{ substr(strip_tags($social->facebook), 0, 100) }} {{ strlen(strip_tags($social->facebook)) > 100 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($social->twitter), 0, 100) }} {{ strlen(strip_tags($social->twitter)) > 100 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($social->linkedin), 0, 100) }} {{ strlen(strip_tags($social->linkedin)) > 100 ? "..." : ""  }}</td>
                  
                  <td>
               <a class="btn btn-primary" href="{{ route('social.edit', $social->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['social.destroy', $social->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         
        </div>
      </div>
@endsection      