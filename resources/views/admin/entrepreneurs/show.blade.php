@extends('layouts.boxed')
@section('content')
 <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    {{ date( ' h:ia ', strtotime( $entrepreneur->updated_at ))}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i>{{ date( 'M j Y ', strtotime( $entrepreneur->updated_at ))}}</span>

                <h3 class="timeline-header"><a>{{ $entrepreneur->title  }}</a></h3>

                <div class="timeline-body">
                  {!! $entrepreneur->content !!}
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-info" href="{{ route('entrepreneur.index')}}">Go Back</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['entrepreneur.destroy', $entrepreneur->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </div>
              </div>
              <div class="container" style="margin-top: 50px; margin-left: 100px;">
                <div class="row">
                  <div class="col-md-4">
                     <img src="{{asset('images/entrepreneur/'.$entrepreneur->image)}}" height="200px;" width="160px;" alt="image logo">
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Service Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Comment</th>
                  <th>Reply</th>
                  <th>Reply Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach ($entrepreneur->comments as $comment)
                <tr>
                  <td>{{ substr(strip_tags($comment->name), 0, 20) }} {{ strlen(strip_tags($comment->name)) > 20 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($comment->email), 0, 15) !!} {!! strlen(strip_tags($comment->email)) > 15 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($comment->comment), 0, 15) !!} {!! strlen(strip_tags($comment->comment)) > 15 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($comment->reply), 0, 15) !!} {!! strlen(strip_tags($comment->reply)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($comment->reply_name), 0, 15) !!} {!! strlen(strip_tags($comment->reply_name)) > 15 ? "...." : "" !!} </td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="{{ route('comments.edit', $comment->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['comments.destroy', $comment->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Comment</th>
                  <th>Reply</th>
                  <th>Reply Name</th>
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
