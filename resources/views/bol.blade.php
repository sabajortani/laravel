<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bol</title>
</head>
<body>


<h1>Enter BOL</h1>


<ul>
    @foreach($bol as $bol)
        <li>{{ $bol->NumOfBOL }}</li>
        <li>{{ $bol->Date }}</li>
        <li>{{ $bol->NoTypeInsurance }}</li>
    @endforeach
</ul>

<div class="col-6 m-auto">

    <form align="center", action="/bol/index" method="post">
        @csrf

        <div class="form-group">
            <lable>NumOfBOL:</lable>
            <input class="form-control" type="text" name="NumOfBOL">
        </div>
        <br/>
        <div class="form-group">
            <lable>Date:</lable>
            <input class="form-control" type="date" name="Date">
        </div>
        <br/>
        <div class="form-group">
            <lable>NoTypeInsurance:</lable>
            <input class="form-control" type="text" name="NoTypeInsurance">
        </div>
        <br/>
        <button class="form-control btn btn-outline-info" type="submit">SEND</button>

</center>
    </form>
</div>
</body>
</html>