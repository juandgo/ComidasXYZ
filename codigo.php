<h1 align="center">Comidas Rapidas XYZ</h1><br>
<h2 align="center">Se venden Hamburguesas, perros, salchipapapa y pizza.</h2><br>
<h2 align="center">FACTURA</h2><br>
<link rel="stylesheet" href="style.css">
<div id="factura">
    <?php 
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo']; 
        $select = $_POST['select']; 

        echo "Comida: $select <br>
            Nombre: $nombre <br>
            Direccion: $direccion <br>
            Telefono: $telefono <br>
            Correo: $correo <br>";
        $rs = 0;
        $gs = 13000;
        $jg = 15000;
        $ag = 11000;
        $pr = 5000;
        $dm = 3500;

        if ($_REQUEST['bebida'] == "gaseosa") {
            $rs += $gs;
            echo "Gaseosa: $$gs";
        }else if ($_REQUEST['bebida'] == "jugo"){
            $rs += $jg;
            echo "Jugo: $$jg";
        }else if ($_REQUEST['bebida'] == "agua"){
            $rs += $ag;
            echo "Agua o sin bebida: $$ag";
        }else if ($_REQUEST['bebida'] == " "){
            echo " ";
        }

        if (isset($_REQUEST['porcion'])){
            $rs+= $pr;
            echo "<br>Porción de papa: $$pr";
        }
        if (isset($_REQUEST['domicilio'])){
            $rs += $dm;
            echo "<br>Domicilio: $$dm";
        }

        if ($_REQUEST['operacion'] == "efectivo"){
            echo "<br>El total de su compra es de: $$rs";
        }else if ($_REQUEST['operacion'] == "tarjeta"){
            $rsf = 0.03*$rs;
            $rs += $rsf;
            echo "<br>El total de su compra mas el 3% es de:   $$rs";
        }
    ?>

</div>
<h2 align="center">Gracias por su compra :D</h2><br>
