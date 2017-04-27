@extends('main')

@section('title')
    Contest Result
@endsection

@section('OuterInclude')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
@endsection

@section('ContentOfBody')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 mem_head clearfix">
                    <h2>Practice Contest 01 Result</h2>
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
                                    <th>Problems Solved</th>
                                    <th>Time Penalty</th>
                                    <th>Rank</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($results)
                                    @foreach($results as $result)
                                        <tr>
                                            <td class="team_name">{{$result->team_name}}</td>
                                            <td>
                                                <p>{{$result->mem1}}</p>
                                                <p>{{$result->mem2}}</p>
                                                <p>{{$result->mem3}}</p>
                                            </td>
                                            <td class="team_name">{{$result->problem_solved}}</td>
                                            <td class="team_name">{{$result->time_penalty}}</td>
                                            <td class="team_name">{{$result->rank}}</td>
                                        </tr>
                                    @endforeach
                                  @else
                                    <h1>There are no current resuts show</h1>
                                @endif
                        </tbody>
                    </table>
                </div> <!--End Of table-responsive-->
            </div> <!--End Of col-->
        </div> <!--End Of row-->
    </div> <!--End Of container-->
@endsection