<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bol</title>
</head>
<body>


<h1>Enter BOL</h1>


<div class="col-6 m-auto">

    <form align="center", action="/bol/creatBol" method="GET">
        @csrf

        <div class="form-group">
            <lable>NumOfBol:</lable>
            <input class="form-control" type="text" name="NumOfBol">
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

        <div class="form-group">
            <lable>Source:</lable>
            <input class="form-control" type="text" name="Source">
        </div>+
        <br/>

        <div class="form-group">
            <lable>Destination:</lable>
            <input class="form-control" type="text" name="Destination">
        </div>
        <br/>

        <div class="form-group">
            <lable>FeeOfCarry:</lable>
            <input class="form-control" type="text" name="FeeOfCarry">
        </div>
        <br/>

        <div class="form-group">
            <lable>NameOfGood:</lable>
            <input class="form-control" type="text" name="NameOfGood">
        </div>
        <br/>

        <div class="form-group">
            <lable>Quantity:</lable>
            <input class="form-control" type="text" name="Quantity">
        </div>
        <br/>

        <div class="form-group">
            <lable>NoOfUnitType:</lable>
            <input class="form-control" type="text" name="NoOfUnitType">
        </div>
        <br/>

        <div class="form-group">
            <lable>Code of good:</lable>
            <input class="form-control" type="text" name="GCode">
        </div>
        <br/>

        <div class="form-group">
            <lable>IdNumEmployee:</lable>
            <input class="form-control" type="text" name="IdNumEmployee">
        </div>
        <br/>

        <div class="form-group">
            <lable>IdNumReseaver:</lable>
            <input class="form-control" type="text" name="IdNumReseaver">
        </div>
        <br/>

        <div class="form-group">
            <lable>IdNumSender:</lable>
            <input class="form-control" type="text" name="IdNumSender">
        </div>
        <br/>

        <div class="form-group">
            <lable>IdNumDriver:</lable>
            <input class="form-control" type="text" name="IdNumDriver">
        </div>
        <br/>
        <button class="form-control btn btn-outline-info" type="submit">SEND</button>
<p>**********************************************************************</p>



</center>
    </form>
</div>
</body>
</html>