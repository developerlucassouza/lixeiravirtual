<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            border: 5px solid black;
            display: block;
            margin: auto;
            width: 80%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border-color CSS</h1>
        <p>A propriedade <code>border-color</code> irá definir a cor da borda, podendo usar valores como nome da cor, RGB, RGBA e Hexadecimais.</p>
        <div class="code">
            <pre>border-color: red;   </pre>
        </div>
        <div class="teste" style="border-color: red;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora ut alias doloribus laudantium enim voluptates, laborum aut voluptate aspernatur autem voluptatem animi nulla? Ducimus, mollitia? Reiciendis maiores minima maxime!</p></div>

        <hr>

        <div class="code">
            <pre>border-color: rgb(0, 170, 129);   </pre>
        </div>
        <div class="teste" style="border-color: rgb(0, 170, 129);"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora ut alias doloribus laudantium enim voluptates, laborum aut voluptate aspernatur autem voluptatem animi nulla? Ducimus, mollitia? Reiciendis maiores minima maxime!</p></div>

        <hr>

        <div class="code">
            <pre>border-color: rgba(0, 0, 255, 0.5);   </pre>
        </div>
        <div class="teste" style="border-color: rgba(0, 0, 255, 0.5);"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora ut alias doloribus laudantium enim voluptates, laborum aut voluptate aspernatur autem voluptatem animi nulla? Ducimus, mollitia? Reiciendis maiores minima maxime!</p></div>

        <hr>

        <div class="code">
            <pre>border-color: #4B545F;   </pre>
        </div>
        <div class="teste" style="border-color: #4B545F;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora ut alias doloribus laudantium enim voluptates, laborum aut voluptate aspernatur autem voluptatem animi nulla? Ducimus, mollitia? Reiciendis maiores minima maxime!</p></div>

        <hr>

        <p>Você também pode utilizar vários valores para definir cada lado da borda.</p>
        <div class="code">
            <pre>border-color: <em>top right bottom left</em>;   </pre>
        </div>
        <p>Exemplo:</p>
        <div class="code">
            <pre>border-color: red rgb(255, 255, 0) rgba(0, 0, 255, 0.7) #00FF00;   </pre>
        </div>
        <div class="teste" style="border-color: red rgb(255, 255, 0) rgba(0, 0, 255, 0.7) #00FF00;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora ut alias doloribus laudantium enim voluptates, laborum aut voluptate aspernatur autem voluptatem animi nulla? Ducimus, mollitia? Reiciendis maiores minima maxime!</p></div>

        <hr>

        <p>Ou definir cada borda separadamente.</p>

        <div class="code">
            <pre>
.elemento {
    border-top-color: red;
    border-right-color: rgb(255, 255, 0);
    border-bottom-color: rgba(0, 0, 255, 0.7);   
    border-left-color: #00FF00;
}</pre>
        </div>

        <div class="teste" style="border-color: red rgb(255, 255, 0) rgba(0, 0, 255, 0.7) #00FF00;"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et quasi unde ea optio consequuntur neque vero esse veritatis quidem magni? Quidem quo eum repudiandae dolores possimus ipsa quam repellendus est!</p></div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>