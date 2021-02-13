<form method="post" action="">
    <input name="nome" placeholder="Nome"><br>
    <input name="email" placeholder="E-mail"><br>
    <input name="fone" placeholder="Fone"><br>
    <input name="cidade" placeholder="Cidade"><br>
    <br>
        <select>
            <option name="ano nascimento">--SELECIONE--</option>
            <?php
            for($ano = 1900; $ano <= 2010; $ano++) {
                echo "<option>{$ano}</option>";
            }
            ?>
        <select>
    <br>
    <button>Enviar</button>
</form>

<?php
    if($_POST) {
        foreach ($_POST as $cadaCampo => $cadaValor) {
            echo "{$cadaCampo}: {$cadaValor} <br>";
        }

    } else {
       echo 'Preencha o form';
    }
?>