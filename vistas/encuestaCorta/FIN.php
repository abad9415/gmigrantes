<?php
	include '../../vistas/header.php';
?>


<script>
    $(document).ready(function(){
        swal({
          title: 'Muchas Gracias!!!',
          type: 'success',
          showCancelButton: false,
          showConfirmButton: false
        })
            function recargarPagina(){
                window.location.href = "1.php";
            }
            setInterval(recargarPagina, 2000);
         });
    
</script>
<?php
include '../../vistas/footer.php';
?>