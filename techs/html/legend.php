<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltlegend&gt HTML</h1>
        <p>A tag <code>legend</code> é um complemento da tag <code><a href="fieldset.html">&ltfieldset&gt</a></code> dentro de um <code><a href="form.html">&ltform&gt</a></code>. O <code>legend</code> irá nomear o grupo do <code><a href="fieldset.html">&ltfieldset&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltform action="cadastro.php">
    &ltfieldset>
    &ltlegend>Dados Pessoais&lt/legend>
        Nome: &ltinput type="text">       &ltbr>
        Sobrenome: &ltinput type="text">  &ltbr>
        Idade: &ltinput type="number">    &ltbr>
    &lt/fieldset>

    &ltfieldset>
    &ltlegend>Endereço&lt/legend>
        Rua: &ltinput type="text">        &ltbr>   
        Número: &ltinput type="text">     &ltbr>
        Complemento: &ltinput type="text">&ltbr>
    &lt/fieldset>
&lt/form></pre>
        </div>

        <form action="cadastro.php">
            <fieldset>
                <legend>Dados Pessoais</legend>
                Nome: <input type="text">       <br>
                Sobrenome: <input type="text">  <br>
                Idade: <input type="number">    <br>
            </fieldset>

            <fieldset>
                <legend>Endereço</legend>
                Rua: <input type="text">        <br>
                Número: <input type="text">     <br>
                Complemento: <input type="text"><br>
            </fieldset>
        </form>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>