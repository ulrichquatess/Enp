@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Website Social Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($social, ['route' => ['social.update', $social->id], 'method' => 'PATCH', 'files' =>true]) !!}
                
              

                 <div class="form-group">
                  <label>Facebook</label>
                  {{ Form::text('facebook', null, ["class" => 'form-control']) }}
                  @if ($errors->has('facebook'))
                        <p class="help is-danger">{{$errors->first('facebook')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  {{ Form::text('twitter', null, ["class" => 'form-control']) }}
                  @if ($errors->has('twitter'))
                        <p class="help is-danger">{{$errors->first('twitter')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Linkedin</label>
                  {{ Form::text('linkedin', null, ["class" => 'form-control']) }}
                  @if ($errors->has('linkedin'))
                        <p class="help is-danger">{{$errors->first('linkedin')}} </p>
                     @endif
                </div>

  

                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('social.index') }}" class="btn btn-default">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
@endsection