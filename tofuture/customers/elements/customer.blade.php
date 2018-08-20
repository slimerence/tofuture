<div class="box content">
    <h3 class="text-center">用户登录</h3>
    <div class="content-detail-wrap">
        <form method="post" action="{{ url('/listen/login') }}">
            {{ csrf_field() }}
            <input type="hidden" name="the_referer" value="{{ $the_referer }}">
            <div class="field mt">
                <label for="staticEmail" class="label">Email</label>
                <div class="control">
                    <input type="text" class="input w-100" id="staticEmail" name="email" placeholder="email@example.com">
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> {{ $errors->first('email') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="field mt">
                <label for="inputPassword" class="label">Password</label>
                <div class="control">
                    <input type="password" class="input w-100" id="Password" name="password" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> {{ $errors->first('password') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-6">
                    <a class="customer-btn cancel text-center" href="{{ url('frontend/customers/forget-password') }}">Forget Password</a>
                </div>
                <div class="col-6">
                    <button type="submit" class="customer-btn confirm">Log Me In</button>
                </div>
            </div>
        </form>
    </div>
</div>