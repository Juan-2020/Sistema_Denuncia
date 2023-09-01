<!DOCTYPE html>
<html>
<script src="usuario/files/plugins/sweetalert2/sweetalert2.all.js"></script>
</html>
<?php
include 'conexion.php';
$nombre = $_POST['usuario'];
$apellido = $_POST['nombre'];
$correo= $_POST['correo'];
$cedula=$_POST['telefono'];
$clave =  md5($_POST['password']);
$ran_id = rand(time(), 100000000);
if (buscarepetido($correo,$cedula,$conection)==1) {
     echo'<script>
        swal({
                type:"warning",
                title:"Este usuario ya esta registrado,registre otro",
                showConfirmButton:true,
                confirmButtonText:"Cerrar"

                }).then(function(){
                        window.location="registrar_usuario.php";
                                  });
               </script>';
}
else{
     $query_insert ="INSERT INTO usuario (unique_id,nombre,apellido,correo,denunciante_cod,clave,idrol,estado) values ('$ran_id','$nombre','$apellido','$correo','$cedula','$clave','1','1')";
         $ejecutar=mysqli_query($conection,$query_insert);
    if ($ejecutar) {
        echo'<script>
        swal({
                type:"success",
                title:"Usuario registrado satisfactoriamente",
                showConfirmButton:true,
                confirmButtonText:"Cerrar"

                }).then(function(){
                        window.location="index.php";
                                  });
               </script>';
    }
}
function buscarepetido($correo,$cedula,$conection){
     $consulta="SELECT * FROM usuario WHERE denunciante_cod='$cedula' or correo='$correo'";
     $resultado=mysqli_query($conection,$consulta);
     if (mysqli_num_rows($resultado)>0) {
         return 1;
     }
     else{
          return 0;
     }

}
     
?>