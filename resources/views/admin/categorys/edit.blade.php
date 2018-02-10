@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PATCH', 'files' =>true]) !!}

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  {{ Form::textarea('name', null, ["class" => 'form-control']) }}
                     @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Link</label>
                 {{ Form::text('content', null, ["class" => 'form-control']) }}
                     @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('category.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}   
  </div>
@endsection