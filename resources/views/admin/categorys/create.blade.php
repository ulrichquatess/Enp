@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Category Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'category.store', 'data-parsley-validate' => '']) !!}
               
               <!-- textarea -->
                <div class="form-group">
                  <label>Name Of Category</label>
                  <textarea class="form-control" name="name" id="name" rows="3" placeholder="Enter Content for the Category Here..."></textarea>
                  @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                !-- text input -->
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Link Here....">
                    @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div

                <div class="box-footer">

                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('category.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection