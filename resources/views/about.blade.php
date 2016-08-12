<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
       <!-- link rel="stylesheet" type="text/css"  href="{{ URL::asset('/assets/css/bootstrap.min.css') }}"--> 
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css"> 
       
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">About 關於本站</div>
                <div >
                  
                    <a class="btn btn-primary" href="{{route('home.index')}}" role="button">首頁</a>
                    
                    <a class="btn btn-primary" href="{{route('news.index')}}" role="button">最新消息</a>
                   
               </div>
            </div>
        </div>
    </body>
</html>
