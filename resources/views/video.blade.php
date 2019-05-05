@extends('template.index')
@section('main')

<div>
    <div class="vid-container">
        <img src="{{ asset('img/tidy-house-2.jpg') }}" width="675px",height="380px">
    </div>
    <div>
        <h1>123</h1>
    </div>
    <div>
        <p>HHHHHH</p>
    </div>
</div>


@endsection

@section('additional-styles')
    <style>
    .vid-container {
        padding-top:5px;
        padding-bottom:5px;
        padding-left:0;
        margin-left:0;
    }
    .content-wrapper{
        height: 100vh;
        margin-left: 1%;
        margin-top:20px;
    }
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection