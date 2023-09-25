<?php
    if(session()->getFlashdata('message')){
?>
    <div class="container-sm"><?= session()->getFlashdata('message')?></div>
<?php } ?>

<?php if(session()->perfil_id == 1) {?>
    <div class="container"><p class="h3">Administrador</p></div>
<?php } 
    elseif(session()->perfil_id == 2){
?>
    <div class="container"><p class="h3">Cliente</p></div>
<?php } ?>

