<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltoptgroup&gt HTML</h1>
        <p>A tag <code>optgroup</code> é utilizada para separar determinados grupos de tags <code><a href="option.html">&ltoption&gt</a></code>. Sendo tanto o <code>optgroup</code> quanto o <code><a href="option.html">&ltoption&gt</a></code> entando dentro de uma tag <code><a href="select.html">&ltselect&gt</a></code>.</p>
        <p>É preciso usar um atributo <code>label</code> para nomear o grupo.</p>

        <div class="code">
            <pre>
&ltselect>
    &ltoptgroup label="Região Sudeste">
        &ltoption>São Paulo&lt/option>
        &ltoption>Rio de Janeiro&lt/option>
        &ltoption>Minas Gerais&lt/option>
        &ltoption>Espírito Santo&lt/option>
    &lt/optgroup>

    &ltoptgroup label="Região Sul">
        &ltoption>Paraná&lt/option>
        &ltoption>Santa Catarina&lt/option>
        &ltoption>Rio Grande do Sul&lt/option>   
    &lt/optgroup>
&lt/select></pre>
        </div>

        <select style="margin-left:20px;">
            <optgroup label="Região Sudeste">
                <option>São Paulo</option>
                <option>Rio de Janeiro</option>
                <option>Minas Gerais</option>
                <option>Espírito Santo</option>
            </optgroup>

            <optgroup label="Região Sul">
                <option>Paraná</option>
                <option>Santa Catarina</option>
                <option>Rio Grande do Sul</option>
            </optgroup>
        </select>

        <p>Assim, é possível organizar melhor as opções dentro de um <code><a href="select.html">&ltselect&gt</a></code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>