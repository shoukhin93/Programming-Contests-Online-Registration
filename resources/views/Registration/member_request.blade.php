@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Member Request
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/member_request.css') }}" rel="stylesheet">
    <script src="{{ asset('js/member_request.js') }}"></script>
@endsection


@section('ContentOfBody')

    {{-- Main Member Request View --}}
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-2"></div> --}}
            <div class="col-sm-12 mem_head clearfix">
                <h2>MEMBER REQUEST</h2>
                <p>This all members are requested to join. Once if you approve them, then they will enjoy the
                    functionality.</p>
            </div>
            {{-- <div class="col-sm-2"></div> --}}
        </div>
        <div class="row">

            @foreach($users as $user)
                <div class="col-sm-3">
                    <div class="mem_box">
                        <h2><strong> <i>{{$user["student_id"]}}</i></strong></h2>
                        <h3>{{$user["fname"]}}  {{$user["lname"]}} </h3>
                        <h4>{{$user["year"]}}.</h4>
                        <h4><span class="glyphicon glyphicon-phone-alt"></span>: {{$user["phone"]}}</h4>
                        <div class="mem_btn_div">
                            <form role="form" method="post" action="{{route('request.action')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="id" value="{{$user["student_id"]}}">
                                <button name="action" value="accept" class="btn btn-default btn-md pull-left" type="submit" data-toggle="tooltip" data-placement="bottom" title="Accept" ><i class="glyphicon glyphicon-ok"></i></button>
                                <button name="action" value="remove" class="btn btn-default btn-md pull-right" type="submit" data-toggle="tooltip" data-placement="bottom" title="Remove" ><i class="glyphicon glyphicon-remove"></i></button>
                            </form>     
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Sample Core  Design --}}
            {{-- <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025423</i></strong></h2>
                    <h3>Rakul Preet Sing</h3>
                    <h4>Third Year Student.</h4>
                    <h4><span class="glyphicon glyphicon-phone-alt"></span>: 01915770274</h4>
                    <div class="mem_btn_div">
                        <button class="btn btn-default btn-md pull-left" type="button" data-toggle="tooltip"
                                data-placement="bottom" title="Accept"><i class="glyphicon glyphicon-ok"></i></button>
                        <button class="btn btn-default btn-md pull-right" type="button" data-toggle="tooltip"
                                data-placement="bottom" title="Remove"><i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </div>
                </div>
            </div> --}}

        </div>
       
        <div class="Pagination-section">

            {{ $users->links() }}

            {{-- Pagination Core Design --}}
            {{--  <ul class="pagination">
                <li></li>
                <li><a href="#"><span class="glyphicon glyphicon-backward"> </a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-forward"> </a></li>
                <li></li>
            </ul> --}}

        </div>
    
    </div>
@endsection 

    