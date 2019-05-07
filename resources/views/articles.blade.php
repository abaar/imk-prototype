@extends('template.index')
@section('main')

<div class="row">
    <div class="vid-comment-container col-md-8" style="height:200vh">
        <article>
        <h2>How to Tidy Up Your Room in mere 5 minutes</h2>
        <p>Author: Mark Newman  | Published : 5 May 2019</p>
        <hr>
        <div class="vid-container" style="float:left; margin-right:15px;">
                <img class="player" src="{{ asset('img/tidy-house-2.jpg') }}" width="512px",height="256px">
        </div>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula purus, blandit id nisl at, laoreet semper augue. Fusce sit amet scelerisque risus. Proin ut elit dolor. Curabitur tempus, libero eu lacinia pulvinar, odio odio maximus mi, sit amet consectetur dui felis et augue. Vestibulum id porttitor massa, ac posuere enim. Maecenas porta scelerisque orci id egestas. Donec dictum dolor vehicula nibh consectetur posuere. Maecenas scelerisque dolor vel dictum ullamcorper.

                Nulla tellus turpis, laoreet in fringilla id, dignissim vitae nunc. Curabitur consectetur erat at sodales posuere. Vestibulum nec augue id elit tempor luctus in id diam. Duis vitae volutpat purus, eget sodales sapien. Donec sed odio tempor orci faucibus rhoncus sed a urna. Cras posuere leo a lectus pretium feugiat. Vestibulum tincidunt, est in ullamcorper auctor, urna felis rutrum justo, in molestie erat arcu eu leo.
                
                Duis vehicula dignissim massa ut maximus. Sed laoreet enim orci, vel semper leo dictum tempor. Etiam mollis nulla non justo aliquam, in lacinia nunc interdum. Ut ac leo tortor. Aliquam ornare velit ornare ex scelerisque malesuada. Mauris eget pulvinar tortor. Nunc vehicula, magna gravida sodales interdum, tellus erat consequat magna, non finibus enim dui vitae dui. Nunc fringilla posuere turpis, non luctus urna lobortis nec.
                
                Donec posuere enim quis diam commodo posuere. Aenean mollis tellus sed efficitur imperdiet. Cras rutrum ipsum cursus, consequat nibh nec, luctus ante. Proin at magna diam. Proin ultrices luctus ipsum vel porta. Etiam bibendum, ante eget congue tempus, diam leo tristique purus, a semper nisl velit a urna. Cras accumsan, diam id convallis ultrices, metus neque suscipit odio, sed scelerisque metus turpis nec risus. Pellentesque elit metus, dapibus sed facilisis sed, molestie vel lacus. Duis id est diam. Curabitur rutrum tempus felis aliquet pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque felis lorem, sollicitudin non nunc a, suscipit euismod velit. Nulla quis rhoncus nisi.
                
                In eu tincidunt mauris. Pellentesque non felis eu lacus congue dapibus. Mauris malesuada, elit at scelerisque pellentesque, orci risus pretium risus, non pharetra diam arcu nec nibh. Praesent ultrices vehicula velit a ullamcorper. Morbi vel feugiat tortor. Integer ultricies sagittis odio, et scelerisque elit fermentum vitae. Nam posuere nisi quam, quis dignissim enim lobortis vitae. Vestibulum sit amet est sed erat egestas accumsan. Duis turpis mauris, iaculis nec nibh ut, sollicitudin facilisis elit. Suspendisse tincidunt convallis sem id eleifend.</p>    
    </article>
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
            <div class="profile-container col-md-2">
                <img src="{{asset('img/profile-02.jpg')}}" style="width:100%; max-width:80px; height:80px; border-radius: 50%;">
            </div>
            <div class="comment-container col-md-10">
                <div class="comment-profile"><h3>Mr.J</h3></div>
                <p>This video is good</p>

            </div>
            
        </div>
    </div>
    <div class="vid-comment-container col-md-4" style="border-left:1px solid white">
        <h1>Recommendation</h1>

        <div class="vid-thumbnail row">
            <div class="col-md-6">
            <img src="{{asset('img/tidy-house.jpg')}}">
            </div>
            <div class="title-thumbnail col-md-6">
                <h3>Tidy up your room</h3>
                <p>100 views</p>
                <p>Yep, another filler episode, I guess</p>
            </div>
        </div>

        <div class="vid-thumbnail row">
            <div class="col-md-6">
                <img src="{{asset('img/tidy-house-2.jpg')}}">
            </div>
                <div class="title-thumbnail col-md-6">
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

    article p{
        font-size: 1.5rem;
        line-height: 2.6rem;
        font-weight: 300;
    }

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
        height: 150px;
        max-width: 300px; 
        border-radius: 10px;
    }
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection