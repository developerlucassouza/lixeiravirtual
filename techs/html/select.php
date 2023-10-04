<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltselect&gt HTML</h1>
        <p>A tag <code>select</code> é utilizada normalmente dentro de formulários (<code><a href="form.php">&ltform&gt</a></code>), é utilizada para criar uma lista suspensa onde o usuário pode selecionar um dos itens pré estabelecidos.</p>
        <p>Para adicionar os itens do <code>select</code> é preciso usar a tag <code><a href="option.php">&ltoption&gt</a></code>para cada item.</p>

        <div class="code">
            <pre>
&ltp>Selecione um estado:&lt/p>
&ltselect>
    &ltoption>São Paulo&lt/option>
    &ltoption>Rio de Janeiro&lt/option>   
    &ltoption>Minas Gerais&lt/option>
    &ltoption>Paraná&lt/option>
&lt/select></pre>
        </div>

        <p style="margin-bottom: 0px;">Selecione um estado:</p>
        <select style="margin-left:20px;">
            <option>São Paulo</option>
            <option>Rio de Janeiro</option>
            <option>Minas Gerais</option>
            <option>Paraná</option>
        </select>

        <hr>

        <p>A tag <code><a href="option.php">&ltoption&gt</a></code> também pode receber o atributo <code>value</code>, que mudará o valor enviado pelo formulário. Ao invés de enviar o que está escrito dentro da tag <code><a href="option.php">&ltoption&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltp>Selecione um estado:&lt/p>
&ltselect>
    &ltoption value="SP">São Paulo&lt/option>
    &ltoption value="RJ">Rio de Janeiro&lt/option>   
    &ltoption value="MG">Minas Gerais&lt/option>
    &ltoption value="PR">Paraná&lt/option>
&lt/select></pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>