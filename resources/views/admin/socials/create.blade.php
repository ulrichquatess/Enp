@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'social.store', 'data-parsley-validate' => '', 'files' => true]) !!}

               <!-- text input -->
                <div class="form-group">
                  <label>phone</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number Here ...">
                    @if ($errors->has('phone'))
                        <p class="help is-danger">{{$errors->first('phone')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email-Address Here ...">
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address Here ...">
                    @if ($errors->has('address'))
                        <p class="help is-danger">{{$errors->first('address')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Instagram</label>
                  <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Enter Here ...">
                    @if ($errors->has('instagram'))
                        <p class="help is-danger">{{$errors->first('instagram')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook Here ...">
                    @if ($errors->has('facebook'))
                        <p class="help is-danger">{{$errors->first('facebook')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter Twitter Here ...">
                    @if ($errors->has('twitter'))
                        <p class="help is-danger">{{$errors->first('twitter')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Linkedin</label>
                  <input type="text" name="linkedin" id="facebook" class="form-control" placeholder="Enter Linkedin Here ...">
                    @if ($errors->has('linkedin'))
                        <p class="help is-danger">{{$errors->first('linkedin')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('social.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
{!! Form::close() !!} 
  </div>
@endsection