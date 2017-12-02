@extends('layouts.main')
@section('content')    
        <div class="container">
        <div class="row">   
            <div class="contact-page clearfix">
                <h2 class="post-title">
                    Contact Us
                </h2>
                
                <!-- CONTACT FORM START -->
                <div id="content">
                    <div class="contact-form clearfix">
                        
                        <form   action="{{url('contact')}}" method="POST" id="contact-form">
                            {{ csrf_field() }}
                            <div class="f-form">
                                <input name="name" id="name" type="text" placeholder="Name (Required)" required/>
                            </div>
                            <div class="f-form">
                                <input name="email" id="email" type="text" placeholder="Email (Required)" required/>
                            </div>
                            <div class="last">
                                <input name="website" id="website" type="text" placeholder="Website (Not Required)">
                            </div>
                            <textarea name="message" id="message" placeholder="Your Message (Required)"></textarea>
                            <div class="submit-area">
                                <input type="submit" id="submit_contact" value="Send Message">
                                <div id="msg" class="message"></div>                                
                            </div>
                        </form>
                        
                    </div>
                </div><!-- CONTACT FORM END -->             
                
            </div>
        </div>
    </div>
@endsection