<head><link rel="stylesheet" type"text/css" href="/css/app.css"></head>

<div class="container">

<h1>Listagem de pacientes</h1>
<table class="table table-striped table-bordered table-hover">
    <?php foreach ($pacientes as $p) : ?>
    <tr>
        <td><?= $p->nome ?></td>
        <td><?= $p->cpf ?></td>
        <td><?= $p->tel ?></td>
        
    </tr>
    <?php endforeach ?>
    </table>
    </div>
        