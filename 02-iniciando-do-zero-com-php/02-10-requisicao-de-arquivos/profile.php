<article
  style="
    padding: 5px 10px;
    background: #eee;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  "
>
  <h1><?= $profile->name;?></h1>
  <p>
    Estuda no
    <?= $profile->company; ?> </br>
    <a title="Enviar E-mail" href="mailto:<?=$profile->email?>">Enviar E-mail</a>
  </p>
</article>
