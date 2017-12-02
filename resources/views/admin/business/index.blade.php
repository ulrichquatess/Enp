@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Create Your Business Here</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('business.create')}}">Create A New Business Topics</a><br>
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
                @foreach($businesss as $business ) 
                <tr>
                
                   <td>{{ substr(strip_tags($business->title), 0, 90) }} {{ strlen(strip_tags($business->title)) > 12 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($business->content), 0, 100) }} {{ strlen(strip_tags($business->content)) > 12 ? "..." : ""  }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('business.show', $business->id)}}">Show</a>
               <a class="btn btn-primary" href="{{ route('business.edit', $business->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['business.destroy', $business->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          {!! $businesss->links() !!}
        </div>
      </div>
@endsection      