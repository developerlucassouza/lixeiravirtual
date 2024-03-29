
<?php
    include_once '../../header.php';
?>

<style type="text/css">
        ul, ol {
            margin-left: 20px;
            padding-left: 30px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>list-style CSS</h1>
        <p>A propriedade <code>list-style</code> é utilizada para controlar a aparência de listas <code><a href="../html/index.php">HTML</a></code>, como listas ordenadas (<code><a href="../html/ol.php">&ltol></a></code>) e listas não ordenadas (<code><a href="../html/index.php">&ltul></a></code>). Ela combina três propriedades relacionadas em uma única declaração: <code>list-style-type</code>, <code>list-style-image</code> e <code>list-style-position</code>.</p>

        <div class="code">
            <pre>
ol {
    list-style-type: <em>valor</em>;
    list-style-image: <em>valor</em>;
    list-style-position: <em>valor</em>;   
}</pre>
        </div>

        <hr>

        <h2>list-style-type</h2>
        <p><code>list-style-type</code> define o tipo de marcador (ou número) a ser utilizado em listas <code><a href="../html/index.php">HTML</a></code>. Essa propriedade é aplicada a elementos <code><a href="../html/ul.php">&ltul></a></code> (listas não ordenadas) e <code><a href="../html/ol.php">&ltol></a></code> (listas ordenadas) para controlar a aparência dos itens da lista.</p>
        <p>Esta propriedade possui os seguintes valores:</p>

        <hr>

        <p>Para listas não ordenadas (<code><a href="../html/ul.php">&ltul></a></code>):</p>

        <div class="code">
            <pre>list-style-type: disc;   </pre>
        </div>
        <ul style="list-style-type: disc;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>

        <div class="code">
            <pre>list-style-type: circle;   </pre>
        </div>
        <ul style="list-style-type: circle;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>

        <div class="code">
            <pre>list-style-type: square;   </pre>
        </div>
        <ul style="list-style-type: square;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>

        <div class="code">
            <pre>list-style-type: none;   </pre>
        </div>
        <ul style="list-style-type: none;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>

        <hr>

        <p>Para listas ordenadas (<code><a href="../html/ol.php">&ltol></a></code>):</p>

        <div class="code">
            <pre>list-style-type: decimal;   </pre>
        </div>

        <ol style="list-style-type: decimal;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <div class="code">
            <pre>list-style-type: lower-roman;   </pre>
        </div>

        <ol style="list-style-type: lower-roman;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <div class="code">
            <pre>list-style-type: upper-roman;   </pre>
        </div>

        <ol style="list-style-type: upper-roman;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <div class="code">
            <pre>list-style-type: lower-alpha;   </pre>
        </div>

        <ol style="list-style-type: lower-alpha;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <div class="code">
            <pre>list-style-type: upper-alpha;   </pre>
        </div>

        <ol style="list-style-type: upper-alpha;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>
        
        <hr>

        <h2>list-style-image</h2>
        <p><code>list-style-image</code> define uma imagem personalizada como marcador em uma lista <code><a href="../html/index.php">HTML</a></code> (seja ela ordenada ou não ordenada). Em vez de usar os marcadores padrão, como círculos, quadrados ou números, você pode usar uma imagem de sua escolha para representar os itens da lista.</p>
        <div class="code">
            <pre>list-style-image: url('marcador.png');   </pre>
        </div>

        <hr>

        <h2>list-style-position</h2>

        <p><code>list-style-position</code> controla a posição dos marcadores (ou números) em relação ao conteúdo de itens de lista. Essa propriedade é frequentemente usada em listas ordenadas (<code><a href="../html/ol.php">&ltol></a></code>) e listas não ordenadas (<code><a href="../html/ul.php">&ltul></a></code>).</p>
        <p>Esta propriedade aceita apenas os valores <code>inside</code> e <code>outside</code>.</p>

        <div class="code">
            <pre>list-style-position: <em>valor</em>;</pre>
        </div>

        <p><code>inside</code> (dentro, padrão): Os marcadores ficam dentro da área de conteúdo do item da lista. Isso significa que o conteúdo do item da lista começa após o marcador.</p>
        <p><code>outside</code> (fora): Os marcadores ficam fora da área de conteúdo do item da lista. Isso significa que o conteúdo do item da lista começa imediatamente após o início do item, e o marcador é posicionado fora do elemento.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>