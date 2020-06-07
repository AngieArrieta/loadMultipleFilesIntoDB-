<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        $('input[type=file]').change(function () {
            console.log(this.files[0].mozFullPath);
        });
    </script>
</head>
<body>

    

    <form method = "post" id = "sample_form" enctype = "multipart/form-data" class = "form-horizontal" action="load.php" >

        <div>
        <h1>Importacion</h1>
         <input type="file" name="file[]" id="file[]" multiple="" accept=".csv">
        </div>
        
        <div>
            <input type="hidden" name="hidden_field" value="1">
            <br><br>
            <input type="submit" name="import" id="import" value="import">
        </div>

    </form>

    

</body>
</html>
