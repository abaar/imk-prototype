@extends('template.index')
@section('main')
    <div class="col-md-4 col-md-offset-4 red login-container">
        <div class="col-md-12">
            <h3>Register</h3>
        </div>

        <div class="col-md-12">
                <div class="col-md-12 alert alert-danger">
                        Email has been taken
                    </div>
            <form class="form-horizontal" action="{{route('dashboard')}}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="password" class="form-control required" id="inputEmail3" required placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control required" id="inputEmail3" required placeholder="Surname(optional)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select name=""  id="" class="form-control" placeholder="Sex">
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            By clicking register, you agree with our <span class="links">Terms</span>, <span class="links">Data Policy</span>, and <span class="links">Cookie Policy</span>.
                        </div>
                    </div>
                    <button class="btn btn-primary col-md-12">Register</button>            
            </form>
        </div>
    </div>
@endsection

@section('additional-styles')
    <style>
        .links{
            text-decoration: underline;
        }

        .red{
            background-color:red
        }

        .login-container{
            margin-top:7vh;
            height: 70vh;
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