<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltoption&gt HTML</h1>
        <p>A tag <code>option</code> é utilizada para criar opções dentro da tag <code><a href="select.php">&ltselect&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltselect>
    &ltoption>Futebol&lt/option>
    &ltoption>Basquete&lt/option>
    &ltoption>Tênis&lt/option>
    &ltoption>Vôlei&lt/option>
    &ltoption>Ping Pong&lt/option>   
    &ltoption>Hóquei&lt/option>
&lt/select></pre>
        </div>

        <select style="margin-left:20px;">
            <option>Futebol</option>
            <option>Basquete</option>
            <option>Tênis</option>
            <option>Vôlei</option>
            <option>Ping Pong</option>
            <option>Hóquei</option>
        </select>

        <p>Como o <code><a href="select.php">&ltselect&gt</a></code> é usado dentro de formulários (<code><a href="form.php">&ltform&gt</a></code>), a tag <code><a href="select.php">&ltselect&gt</a></code> deve retornar algum valor, no caso, o <code>option</code> selecionado.</p>
        <p>Normalmente ele retornará o valor que está escrito dentro da tag <code>option</code>. Mas, utilizando o atributo <code>value</code>, podemos passar outros valores.</p>

        <div class="code">
            <pre>
&ltselect>
    &ltoption value="PR">Paraná&lt/option>
    &ltoption value="SP">São Paulo&lt/option>
    &ltoption value="DF">Distrito Federal&lt/option>   
    &ltoption value="AM">Amazonas&lt/option>
    &ltoption value="BA">Bahia&lt/option>
&lt/select></pre>
        </div>

        <select style="margin-left:20px;">
            <option value="PR">Paraná</option>
            <option value="SP">São Paulo</option>
            <option value="DF">Distrito Federal</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
        </select>

        <hr>

        <p>Podemos definir um <code>option</code> ativo por padrão adicionando o atributo <code>selected</code> a ele.</p>

        <div class="code">
            <pre>
&ltselect>
    &ltoption value="PR">Paraná&lt/option>
    &ltoption value="SP">São Paulo&lt/option>
    &ltoption value="DF">Distrito Federal&lt/option>
    &ltoption value="AM" selected>Amazonas&lt/option>   
    &ltoption value="BA">Bahia&lt/option>
&lt/select></pre>
        </div>

        <select style="margin-left:20px;">
            <option value="PR">Paraná</option>
            <option value="SP">São Paulo</option>
            <option value="DF">Distrito Federal</option>
            <option value="AM" selected>Amazonas</option>
            <option value="BA">Bahia</option>
        </select>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>