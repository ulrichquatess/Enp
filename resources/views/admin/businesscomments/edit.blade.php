@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Edit English Content</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {{ Form::model($businesscomment, ['route' => ['businesscomments.update', $businesscomment->id], 'method' => 'PUT']) }}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                 {{ Form::text('name', null, ["class" => 'form-control', 'disabled' => '']) }}
                     @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                 {{ Form::text('email', null, ["class" => 'form-control', 'disabled' => '']) }}
                     @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Comment</label>
                  {{ Form::textarea('comment', null, ["class" => 'form-control', 'disabled' => '' ]) }}
                     @if ($errors->has('comment'))
                        <p class="help is-danger">{{$errors->first('comment')}} </p>
                     @endif
                </div>


                <!-- text input -->
                <div class="form-group">
                  <label>Reply Name</label>
                 {{ Form::text('reply_name', null, ["class" => 'form-control' ]) }}
                     @if ($errors->has('reply_name'))
                        <p class="help is-danger">{{$errors->first('reply_name')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Approve Here </label>
                  <select class="form-control input-height" name="approve">
                            <option value="">Select...</option>
                            <option>1</option>
                            <option>0</option>
                 </select>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Reply</label>
                  {{ Form::textarea('reply', null, ["class" => 'form-control' ]) }}
                     @if ($errors->has('reply'))
                        <p class="help is-danger">{{$errors->first('reply')}} </p>
                     @endif
                </div>


                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('business.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
{!! Form::close() !!}   
  </div>
@endsection