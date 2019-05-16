@extends('template.index')
@section('main')
    <div class="col-md-4 col-md-offset-4 red login-container">
        <div class="col-md-12">
            <h3>Login</h3>
        </div>
        <div class="col-md-12">
            <form class="form-horizontal"  action="{{route('dashboard')}}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>  
                    <div class="form-group">
                            <div class="checkbox">
                                <label class="col-md-4 col-md-offset-3">
                                    <div class="col-md-12">
                                    <input type="checkbox" style="margin-top:2px"> <span>Remember</span>
                                    </div>
                                </label>
                                <div class="col-md-5">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>   
                    </div>
                <button class="btn btn-primary col-md-8 col-md-offset-2">Login</button>
           
            </form>
        </div>
    </div>
@endsection

@section('additional-styles')
    <style>
        .red{
            background-color:red
        }

        .login-container{
            margin-top:20vh;
            height: 43vh;
            padding-bottom:20px;
            border-radius:5%;
            background-color:#333844;
            color:white;
        }

        .btn-primary{
            background-color:#4a505f;
            border:2px solid #696969;
        }

        .btn-primary:hover{
            background-color:#333844;
            border: 2px solid #4a505f;
        }
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection