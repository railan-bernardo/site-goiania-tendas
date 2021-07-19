<?php $v->layout("_theme", ["title" => $first_name]); ?>

<h1 style="font-size: 1.2em; padding-bottom: 12px; display: block;"><span>Cliente: </span> <?= $first_name; ?></h1>

<h2 style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Pessoa: </span> <?= $juridic; ?></h2>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>E-mail: </span><?= $email; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Telefone Fixo: </span><?= $telephone; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Celular: </span><?= $phone; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Estado: </span><?= $state; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Cidade: </span><?= $city; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Endereço: </span><?= $address; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>CEP: </span><?= $zipcode; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Empresa: </span><?= $company; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Produtos: </span><?= $items; ?></p>
<p style="font-size: 1em; padding-bottom: 8px; display: block;"><span>Mensagem: </span><?= $msg; ?></p>