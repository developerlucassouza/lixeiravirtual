<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>text-indent CSS</h1>
        <p>A propriedade <code>text-indent</code> é utilizada para controlar o recuo (ou espaçamento) da primeira linha de um bloco de texto. Ela define a quantidade de espaço vazio que deve ser aplicada ao início da primeira linha de texto em um elemento HTML. O valor é geralmente especificado em unidades de medida, como pixels (<code>px</code>), ems (<code>em</code>), porcentagens (<code>%</code>), entre outros.</p>

        <div class="code">
            <pre>text-indent: <em>valor</em>;   </pre>
        </div>

        <hr>

        <p>Exemplos:</p>

        <div class="code">
            <pre>text-indent: 0; <span class="comentario">/* Sem text-indent */</span>   </pre>
        </div>

        <p style="text-indent: 0;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, reiciendis! Placeat ullam dolor dolore, totam in distinctio molestias fuga eum quia animi nemo eaque quis veniam unde? Fuga, suscipit repellendus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos magni, illo pariatur, numquam maxime aliquam facilis itaque hic est expedita consequuntur illum, eligendi consectetur vel earum reprehenderit inventore impedit.</p>

        <div class="code">
            <pre>text-indent: 30px;   </pre>
        </div>

        <p style="text-indent: 30px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, reiciendis! Placeat ullam dolor dolore, totam in distinctio molestias fuga eum quia animi nemo eaque quis veniam unde? Fuga, suscipit repellendus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos magni, illo pariatur, numquam maxime aliquam facilis itaque hic est expedita consequuntur illum, eligendi consectetur vel earum reprehenderit inventore impedit.</p>

        <div class="code">
            <pre>text-indent: 100px;   </pre>
        </div>

        <p style="text-indent: 100px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, reiciendis! Placeat ullam dolor dolore, totam in distinctio molestias fuga eum quia animi nemo eaque quis veniam unde? Fuga, suscipit repellendus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos magni, illo pariatur, numquam maxime aliquam facilis itaque hic est expedita consequuntur illum, eligendi consectetur vel earum reprehenderit inventore impedit.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>