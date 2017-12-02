@extends('layouts.main')
@section('content')
<div class="container">
        <div class="row">
        
            <!-- TEAM CONTENT START -->
            <div class="team-content clearfix">
                <div class="team-box clearfix">
                    <ul>
                        @foreach($teams as $team)
                        <li>
                            <div class="team-thumb">
                                <a href="{{ url('teamm/'.$team->id)}}"><img alt="" src="{{ asset('images/team/' . $team->image)}}" /></a>
                            </div>
                            <div class="team-text">
                                <h3><a href="#">{{$team->name}}</a></h3>
                                <p>{!! substr(strip_tags($team->description), 0, 80) !!} {{ strlen(strip_tags($team->description)) > 80 ? "..." : ""  }}</p>
                                <div class="button">
                                    <a href="{{ url('teamm/'.$team->id)}}">View More</a>
                                </div>
                            </div>
                        </li>
                       @endforeach
                    </ul>
                </div>
            </div><!-- TEAM CONTENT END {{ asset('images/team/' . $team->image)}} -->
            {{ $teams->links() }}
        </div>
    </div>
    
@endsection 