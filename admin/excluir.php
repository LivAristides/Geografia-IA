<?php
$id = filter_input(INPUT_GET, 'id');
include_once '../class/Contato.php';
$conf = new Contato ();
if ($conf->excluir($id) == 'null') {
    ?> <div class="alert alert-primary" role = "alert">
        Excluido com sucesso
    </div>
    <?php
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        Erro ao excluir
</div>
<?php
}
?>
<meta hhp-equiv="refresh" content="0.3;URL=?p=listar">