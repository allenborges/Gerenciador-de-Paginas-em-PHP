<h3 class="mb 5"> Administração de Usuários </h3>

<dl class="rol">
    <dt class="col-sm-3"> Email</dt>
    <dd class="col-sm-3"> <?php echo $data['user']['email']; ?></dd>


    <dd class="col-sm-9"> Criado em</dd>
    <dd class="col-sm-3"> <?php echo $data['user']['created']; ?></dd>

    <dd class="col-sm-9"> Atualizado em </dd>
    <dd class="col-sm-3"> <?php echo $data['user']['updated']; ?></dd>
</dl>
<a href="/admin/users/<?= $data['user']['id'] ?>/edit" class="btn btn-primary">editar</a>
<a href="/admin/users/<?= $data['user']['id'] ?>/delete" class="btn btn-danger confirm">remover</a>



<a href="/admin/users" class="btn btn-secondary">Voltar</a>