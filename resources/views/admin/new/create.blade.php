@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Latest New Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'new.store', 'data-parsley-validate' => '']) !!}
               
               <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter Content for the News Here..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="box-footer">

                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('new.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection