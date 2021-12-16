<!DOCTYPE html>
<html>
<head>
    <title>Copisteria Julian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .tinta {
            width: 50px;
            height: 50px;
            float: left;
            padding: 5px;
        }
    </style>

</head>

<body>
    <div class="container">
        <!--<div class="jumbotron">
                <h1>Copisteria Julian</h1>
                <p>Usa la impresora que mejor te vaya!</p> 
            </div>-->


        <div class="row">
            <h3>Hojas:{{$data[3]}}</h3>
            <p>Introduce la impresora y el texto a imprimir</p>
            <form action="/queue" method="get" class="form-inline" role="form">Impresora:<select class="form-control" name="n_impresora">
                <option value="0">{{$data[0][0]}}</option>
                <option value="1">{{$data[1][0]}}</option>
                <option value="2">{{$data[2][0]}}</option>
                </select><textarea class="form-control" rows="4" name="texto"></textarea>
                <input type="submit" value="Enviar a impresora">
            </form>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="row"><a href="/print?impresora=0"><img src="/images/A2.jpg" alt="Procesa cola"></a></div>
                <div class="row">
                    <div class="toner">
                        <div class="tinta" style="background-color:black">{{$data[0]["ink"]["black"]}}</div>
                        <div class="tinta" style="background-color:yellow">{{$data[0]["ink"]["yellow"]}}</div>
                        <div class="tinta" style="background-color:cyan">{{$data[0]["ink"]["blue"]}}</div>
                        <div class="tinta" style="background-color:magenta">{{$data[0]["ink"]["magenta"]}}</div>
                    </div>
                </div>
                @for ($i = 0; $i < count($data[0]["queue"]); $i++)
                    <div>{{$data[0]["queue"][$i]}}</div>
                @endfor
                <div class="row">
                    <ul class="list-group"></ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row"><a href="/print?impresora=1"><img src="/images/A3.jpg" alt="Procesa cola"></a></div>
                <div class="row">
                    <div class="toner">
                    <div class="tinta" style="background-color:black">{{$data[1]["ink"]["black"]}}</div>
                        <div class="tinta" style="background-color:yellow">{{$data[1]["ink"]["yellow"]}}</div>
                        <div class="tinta" style="background-color:cyan">{{$data[1]["ink"]["blue"]}}</div>
                        <div class="tinta" style="background-color:magenta">{{$data[1]["ink"]["magenta"]}}</div>
                        
                    </div>
                </div>
                @for ($i = 0; $i < count($data[1]["queue"]); $i++)
                    <div>{{$data[1]["queue"][$i]}}</div>
                @endfor
                <div class="row">
                    <ul class="list-group"></ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row"><a href="/print?impresora=2"><img src="/images/A4.jpg" alt="Procesa cola"></a></div>
                <div class="row">
                    <div class="toner">
                    <div class="tinta" style="background-color:black">{{$data[2]["ink"]["black"]}}</div>
                        <div class="tinta" style="background-color:yellow">{{$data[2]["ink"]["yellow"]}}</div>
                        <div class="tinta" style="background-color:cyan">{{$data[2]["ink"]["blue"]}}</div>
                        <div class="tinta" style="background-color:magenta">{{$data[2]["ink"]["magenta"]}}</div>
                    </div>
                </div>
                @for ($i = 0; $i < count($data[2]["queue"]); $i++)
                    <div>{{$data[2]["queue"][$i]}}</div>
                @endfor
                <div class="row">
                    <ul class="list-group"></ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
