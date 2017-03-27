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
            <div class="col-sm-3">
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
            </div>

            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025424</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025425</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025426</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025427</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>14025428</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>13025423</i></strong></h2>
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
            </div>

            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>10025423</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
                <div class="mem_box">
                    <h2><strong> <i>15025423</i></strong></h2>
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
            </div>
            <div class="col-sm-3">
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
            </div>
            <div class="col-sm-3">
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
            </div>

        </div>

        <div class="Pagination-section">
            <ul class="pagination">
                <li></li>
               {{--  <li><a href="#"><span class="glyphicon glyphicon-backward"> </a></li> --}}
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
               {{--  <li><a href="#"><span class="glyphicon glyphicon-forward"> </a></li> --}}
                <li></li>
          </ul>
        </div>
    
    </div>
@endsection 

