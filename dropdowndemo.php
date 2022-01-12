
<!DOCTYPE html>

<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile &mdash; </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
<label for="dropdown">Dropdown:</label></th><td><select id="dropdown" name="dropdown">
<option value="" disabled="disabled" selected="selected">Please select an option</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>

</select>

<div id='checkbox'>
    <div data-id="1">
<label for="id_checkbox_0"><input id="id_checkbox_0" name="checkbox" type="checkbox" value="1" /> 1</label>
    </div>
    <div data-id="2">
<label for="id_checkbox_1"><input id="id_checkbox_1" name="checkbox" type="checkbox" value="2" /> 2</label>
    </div>
    <div data-id="3">
<label for="id_checkbox_2"><input id="id_checkbox_2" name="checkbox" type="checkbox" value="3" /> 3</label>
    </div>
    <div data-id="4">
<label for="id_checkbox_3"><input id="id_checkbox_3" name="checkbox" type="checkbox" value="4" /> 4</label>
    </div>
</div>



<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script>
 $( document ).ready(function() {  
    $('#checkbox').hide();
    $("#dropdown").change(function() {
        var index = $(this).val();
        $("[data-id]").show();
        $("[data-id=" + index + "]").hide();
        $('#checkbox').show();
     });
    
 });

 </script>

</body>

<html>
