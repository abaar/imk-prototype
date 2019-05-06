@extends('template.index')
@section('main')

<div class="row">
    <div id="first-col" class="vid-comment-container col-md-8">
        <div class="vid-container">
            <img class="player" src="{{ asset('img/tidy-house-2.jpg') }}" width="800px",height="450px">
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
                    <input type="text" class="form-control white-form" placeholder="Write your comments">
                    <button type="submit" class="btn btn-primary" style="margin-bottom:30px">Submit</button>
                    </div>
                </div>
        </div>
        <div class="comments-container row">
            <div class="profile-container col-md-2" style="width:13%;padding-right:0">
                <img src="{{asset('img/profile-02.jpg')}}" style="width:100%; max-width:80px; height:80px; border-radius: 50%;">
            </div>
            <div class="comment-container col-md-10" style="padding-left:0">
                <div class="comment-profile"><h3>Mr.J</h3></div>
                <p>This video is good</p>

            </div>
            
        </div>
    </div>
    <div id="second-col" class="vid-comment-container col-md-4">
        <h1>Recommendation</h1>

        <div class="vid-thumbnail row">
            <div class="col-md-5">
            <img src="{{asset('img/tidy-house.jpg')}}">
            </div>
            <div class="title-thumbnail col-md-7">
                <h3>Tidy up your room</h3>
                <p>100 views</p>
                <p>Yep, another filler episode, I guess</p>
            </div>
        </div>

        <div class="vid-thumbnail row">
            <div class="col-md-5">
                <img src="{{asset('img/tidy-house-2.jpg')}}">
            </div>
                <div class="title-thumbnail col-md-7">
                    <h3>Tidy up my room</h3>
                    <p>100 views</p>
                    <p>Yep, another filler episode, I guess</p>
            </div>
        </div>
        

    </div>
</div>


@endsection

@section('additional-styles')
    <style>

    .white-form::placeholder  {
        color:white
    }
    .vid-comment-container {
        margin-top:40px;
        padding-bottom:5px;
        padding-left:40px;
        padding-right:40px;
        margin-left:0;
        color: white;
    }
    #second-col {
        border-left: 1px solid white;
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
        margin-bottom: 10px;
    }
    .text-container p {
        font-size: 18px;
    }
    .form-comment-container {
        margin-top: 10px;
        padding-left: 0;
        margin-bottom: 10px;
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
    }
    
    ::placeholder {
        color: green;
    }

    input:focus {
        color: white;
    }

    .comments-container {
        margin-top: 100px;
    }
    .comment-container h3 {
        color: white;
        font-weight: bold;
    }
    .comment-container p {
        font-size: 18px;
        color: white;
    }

    .vid-thumbnail {
        padding-top:5px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-bottom:5px;
    }

    .vid-thumbnail img {
        width: 100%;
        height: 100px;
        max-width: 200px; 
        border-radius: 10px;
    }
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection