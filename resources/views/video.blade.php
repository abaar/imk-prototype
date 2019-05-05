@extends('template.index')
@section('main')

<div class="row">
    <div class="vid-comment-container col-md-8">
        <div class="vid-container">
            <img class="player" src="{{ asset('img/tidy-house-2.jpg') }}" width="1040px",height="585px">
        </div>
        <div class="text-container">
            <h1>5 minutes with me</h1>
            <h3>1,000 views</h3>
            <p>Test for description</p>
        </div>
        <div class="form-comment-container">
            <div class="label-comment"><h3>Comment</h3></div>
            <form role="form">
                <div class="form-group">
                    <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Write your comments">
                    <button type="submit" class="btn btn-default" stype="padding-top:100p">Submit</button>
                    </div>
                </div>
        </div>
    </div>
    <div class="vid-comment-container col-md-4">
        <h1>Recommendation</h1>
    </div>
</div>


@endsection

@section('additional-styles')
    <style>
    .vid-comment-container {
        padding-top:40px;
        padding-bottom:5px;
        padding-left:40px;
        padding-right:40px;
        margin-left:0;
    }
    .vid-container{
        padding-bottom: 10px;
    }
    .player {
        cursor: pointer;
    }
    .text-container {
        color: white;
        padding: 0;
    }
    .text-container p {
        font-size: 18px;
    }
    .form-comment-container {
        padding-top: 10px;
        padding-left: 0;
    }

    .label-comment {
        color: white;
    }
    input[type="text"]{
        background: transparent;
        border: none;
        margin-bottom: 20px;
        border-bottom: 1px solid black;
        font-size: 18px;
        color: white;
    } 
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection