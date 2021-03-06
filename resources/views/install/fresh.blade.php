@extends('install.layout')
@section('pageinfo')
    <p>To start a fresh install, please enter the information below. Make sure you setup your .env file within the
        application directory. For detailed instructions regarding this step, please see the documentation.
    </p>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">
            <h2>Please fill out the form below</h2>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fresh Installation
                </div>
                <div class="panel-body">
                    <p class="text-muted">Create your account</p>
                    <form role="form" method="POST" action="{{ url('/install') }}">
                        {{ csrf_field() }}
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" autofocus required>
                        </div>
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>

                        <div class="input-group m-b-1">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="input-group m-b-2">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
                        </div>

                        <button type="submit" class="btn btn-block btn-success">Finish Install</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection