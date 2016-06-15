<?php
	include '../../vistas/header.php';
?>
<h1>Muchas gracias, Dios Te Bendice!!!</h1>

<script>
    $(document).ready(function(){
            function recargarPagina(){
                window.location.href = "1.php";
            }
            setInterval(recargarPagina, 2500);
         });
    
</script>
<?php
include '../../vistas/footer.php';
?>