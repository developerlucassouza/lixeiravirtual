<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 50px;
            width: 100%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background-image CSS</h1>
        <p>A propriedade CSS <code>background-image</code> é usada para definir uma imagem de fundo para um elemento <code><a href="../html/index.php">HTML</a></code>. Essa imagem de fundo pode ser usada para adicionar texturas, padrões, imagens de fundo decorativas e outros elementos visuais a um elemento da página da web.</p>

        <div class="code">
            <pre>
.elemento {
    background-image: <em>valor</em>;
}</pre>
        </div>

        <p>Você pode usar os seguintes valores:</p>

        <hr>

        <h2>Imagem local (url)</h2>
        <p>Para isso, você precisa ter o arquivo na sua máquina, e indicar o caminho para a imagem.</p>
        <div class="code">
            <pre>
.elemento {
    background-image: url('fundo.jpg');   
}</pre>
        </div>
        <div class="teste" style="background-image: url('imagens/controle.jpg');">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat sequi aspernatur, esse odit nam obcaecati asperiores nemo alias nobis eius itaque, architecto quasi nulla repellat neque excepturi officiis deleniti?
        Ducimus illo nisi tempora eaque blanditiis laborum quidem accusamus hic ad nesciunt magnam ut ipsum iure vel doloremque consequatur repellendus velit quae laboriosam veniam facere aspernatur soluta, quo perspiciatis. A.
        Praesentium repudiandae quaerat ratione possimus esse sequi nisi harum laboriosam, nulla temporibus similique nemo eaque iusto placeat corporis. Voluptas, amet nostrum beatae nesciunt consequatur veniam sequi doloremque incidunt quas fuga!
        Sapiente odio aut optio porro ipsam quam ab quidem, aliquam, expedita quo nobis aliquid. Aspernatur voluptas modi officiis provident tempora optio obcaecati, quod autem fugiat veniam incidunt, odio sint porro!
        Asperiores esse nisi, rem accusamus sapiente doloremque excepturi sint numquam id reiciendis. Minima sequi obcaecati, ab, at adipisci cupiditate vitae sit porro optio dignissimos unde. Quaerat commodi fugiat debitis facilis?</div>

        <hr>

        <h2>Imagem Externa (url)</h2>
        <p>Ainda utilizando o <code>url()</code>, você irá inserir o link para a imagem web.</p>
        <div class="code">
            <pre>
.elemento {
    background-image: url('https://i.pinimg.com/474x/ea/80/03/ea8003eda835af024292148060887ed4.jpg');   
}</pre>
        </div>
        <div class="teste" style="background-image: url('https://i.pinimg.com/474x/ea/80/03/ea8003eda835af024292148060887ed4.jpg');">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem doloribus beatae voluptates dolore alias reiciendis repudiandae quo dolor in! Illum repudiandae quibusdam iusto quas illo nobis amet quaerat laborum necessitatibus?
        Dolor reprehenderit quos ad, modi suscipit magni laboriosam inventore tenetur laudantium impedit odit aperiam corrupti ipsum nulla vitae! A libero unde aperiam possimus optio quidem fuga commodi harum necessitatibus in?
        Quam quidem sequi aliquid aspernatur quod impedit cupiditate quaerat vero ab tempore explicabo culpa nam, labore doloremque sapiente. Similique magnam qui neque quasi obcaecati maxime dicta sapiente dolor sed a?
        Obcaecati molestiae iure excepturi non enim laudantium libero corrupti sunt, blanditiis qui officiis mollitia, expedita vitae? Deleniti nihil impedit neque suscipit magnam sed et temporibus, provident est laboriosam minima magni.
        Soluta delectus nemo porro ab reiciendis! Nobis ea tempore quas iure. Accusantium, expedita sed. Voluptas asperiores neque veniam dolore quia. Aperiam culpa saepe nobis maxime nemo rerum eos adipisci animi.</div>

        <hr>

        <h2>Degradê (linear-gradiente)</h2>
        <p>Pode-se utilizar o <code>linear-gradient()</code> dentro do <code>background-image</code> para criar um degradê de cores.</p>

        <div class="code">
            <pre>
.elemento {
    background-image: <em>direção</em>, <em>cor1</em>, <em>cor2</em>;   
}</pre>
        </div>

        <p>A direção pode ser:</p>
        <p>Lados</p>
        <p>Cima para Baixo (<code>to bottom</code>)</p>
        <p>Esquerda para Direita (<code>to right</code>)</p>
        <p>Direita para Esquerda (<code>to left</code>)</p>
        <p>Diagonais</p>
        <p>Superior Esquerdo para Inferior Direito (<code>to bottom right</code>)</p>
        <p>Superior Direito para Inderior Esquerdo (<code>to bottom left</code>)</p>
        <p>Ângulos (<code>deg</code>)</p>

        <p>Exemplo</p>

        <div class="code">
            <pre>
.elemento {
    background-image: linear-gradient(to right, #0000AA, #000000);   
}</pre>
        </div>

        <div class="teste" style="background-image: linear-gradient(to right, #0000AA, #000000);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem doloribus beatae voluptates dolore alias reiciendis repudiandae quo dolor in! Illum repudiandae quibusdam iusto quas illo nobis amet quaerat laborum necessitatibus?
        Dolor reprehenderit quos ad, modi suscipit magni laboriosam inventore tenetur laudantium impedit odit aperiam corrupti ipsum nulla vitae! A libero unde aperiam possimus optio quidem fuga commodi harum necessitatibus in?
        Quam quidem sequi aliquid aspernatur quod impedit cupiditate quaerat vero ab tempore explicabo culpa nam, labore doloremque sapiente. Similique magnam qui neque quasi obcaecati maxime dicta sapiente dolor sed a?
        Obcaecati molestiae iure excepturi non enim laudantium libero corrupti sunt, blanditiis qui officiis mollitia, expedita vitae? Deleniti nihil impedit neque suscipit magnam sed et temporibus, provident est laboriosam minima magni.
        Soluta delectus nemo porro ab reiciendis! Nobis ea tempore quas iure. Accusantium, expedita sed. Voluptas asperiores neque veniam dolore quia. Aperiam culpa saepe nobis maxime nemo rerum eos adipisci animi.</div>

        <hr>

        <p>A propriedade <code>background-image</code> pode ser usada em conjunto com outras propriedades de plano de fundo, como <code><a href="backgroundrepeat.php">background-repeat</a></code>, <code><a href="backgroundposition.php">background-position</a></code>, <code><a href="backgroundsize.php">background-size</a></code>, e <code><a href="backgroundattachment.php">background-attachment</a></code>, para controlar a exibição e o comportamento da imagem de fundo.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>