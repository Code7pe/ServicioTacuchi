<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
    <form action='http://192.168.1.22:80/Proyectos/Rest/Service/api.php' method='POST' >
        <div>
            <Label for='txtnombre'></label>
            <Input name='txtnombre' id='txtnombre' placeholder='Ingrese el nombre'>
        </div>
        <div>
            <Label for='txtapellido'></label>
            <Input name='txtapellido' id='txtapellido' placeholder='Ingrese su apellido' >
        </div>
        <div>
            <button> Enviar </button>
        </div>
    </form>
    </div>    
</body>
</html>