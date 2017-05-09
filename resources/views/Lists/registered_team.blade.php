@extends('main')

@section('title')
    Registered Teams
@endsection

@section('OuterInclude')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
@endsection

@section('ContentOfBody')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 mem_head clearfix">
                    <h2>Practice Contest 01</h2>
                    <p>Date : <time>14.06.2017</time></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th>Team Name</th>
                                <th>Team Members</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                             @if($teams)
                                 @foreach($teams as $team)
                                    <tr>
                                        <td class="team_name">{{$team->team_name}}</td>
                                        <td>
                                            <p>{{$team->team_leader}}</p>
                                            <p>{{$team->mem2}}</p>
                                            <p>{{$team->mem3}}</p>
                                        </td>
                                        <td class="accpeted">
                                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                            <lead>Accpeted
                                                <lead>
                                        </td>
                                    </tr>
                                  @endforeach
                             @endif
                            </tbody>
                    </table>
                </div> <!--End Of table-responsive-->
            </div> <!--End Of col-->
        </div> <!--End Of row-->
    </div> <!--End Of container-->

@endsection