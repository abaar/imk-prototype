@extends('template.index')
@section('main')
    <div class="form-container col-md-10 col-md-offset-1">
        <div class="col-md-6" style="padding:0;height:60vh;background-color:white;">
                <div id="editor-container" style="background-color:#6c717f;padding:0;color:white;"    class="col-md-12 col-md-offset-1">
                    </div>
        </div>

        <div class="add-description col-md-4">
            <div class="description-container"> 
                <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Title">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name" id="#Tags">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="button" onclick="window.location='{{ Route('profile') }}'" class="btn btn-primary btn-upload col-md-12">Upload</button>
                            </div>
                        </div>
                      </form>
            </div>
        </div>
    </div>
@endsection

@section('additional-styles')
    <style>

        .btn-upload:hover{
            background-color:#333844;
            color:white;
            border:1px solid white;
        }

        .btn-upload{
            background-color: #333844;
            color:grey;
            border:none;
        }

        .form-control{
            background: #6c717f;
            border: 1px solid grey;
            color: white;
        }

        .form-control::placeholder{
            color: white;
        }

        .description-container{
            margin-top:28%;
            /* background-color:#333844; */
        }


        .add-videos-container{
            top:50%;
            left:50%;
            position:absolute;
            text-align:center;
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        
        .red{
            background-color:red;
        }

        .blue{
            background-color:blue;
        }

        .form-container{
            margin-top:7vh;
            height: 70vh;
            padding:10px;
            
        }

        .add-videos:hover{
            color:white;
            border:1px dashed white;
        }

        .add-videos{
            height: 100%;
            cursor: pointer;
            border : 1px dashed grey;
            background-color:#333844;
        }

        .add-description{
            height: 100%;
            margin-left:5%;
        }

    </style>
@endsection

@section('additional-scripts')
    <script>
        var quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
            ]
        },
        // placeholder: 'compose something awesome',
        theme: 'snow'  // or 'bubble'
        });
    </script>
@endsection