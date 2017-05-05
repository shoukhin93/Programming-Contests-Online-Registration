<!-- Modal For Login-->
<div class="modal fade" id="signinModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-head">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-text" align="center">
                    Log in with valid data
                </h4>
            </div>
            <div class="modal-body">
                <form action="/login" method="post" action="#">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="userID" name="student_id" maxlength="8"
                               placeholder="User ID">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="userLoginPassword" maxlength="15"
                               id="userPassword"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btng" value="12" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-ok-sign"> LogIn</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>