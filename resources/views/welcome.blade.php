<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="">
            <div class=""><nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#"></a>
            </nav></div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-6">
                    Section 1
                    <div class="row">
                      <div class="col">
                            <div style="position:relative;">
                            <iframe width="300" height="400" src="{{$latestvedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <a href="{{url('/admin/vedio/'.$latestvedio->id)}}" style="position:absolute; top:0; left:0; display:inline-block; width:500px; height:500px; z-index:5;"></a>
                            </div>
                            <h3><b>{{$latestvedio->title}}</b></h3>
                  
                      </div>
                      <div class="col">
                           <div class="row">
                                @foreach($allvedio as $vedio)
                                <div class="col">
                                    <div style="position:relative;">
                                        <iframe width="150" height="200" src="{{$vedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <a href="{{url('/admin/vedio/'.$vedio->id)}}" style="position:absolute; top:0; left:0; display:inline-block; width:500px; height:500px; z-index:5;"></a>
                                    </div>
                                    <h3><b>{{$vedio->title}}</b></h3>    
                                </div>
                                @endforeach
                           </div>
                      </div>
                      <div class="w-100"></div>
                      
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col">
                    section 2
                    <div class="row">
                        <a href="{{url('/admin/photo/'.$latestphoto->id)}}"><img src="{{$latestphoto->photo}}"  width="600" height="400"></a>
                        <h3><b>{{$latestphoto->title}}</b></h3>
                    </div>
                    <div class="row">
                        @foreach($allphoto as $photo)
                        <div class="col">
                            <a href="{{url('/admin/photo/'.$photo->id)}}"><img src="{{$photo->photo}}"  width="300" height="200"></a>
                            <h3><b>{{$photo->title}}</b></h3>
                        </div>
                        @endforeach
                      </div>
                </div>
                <div class="w-100"></div>
                
              </div>
            </div>  

            
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
