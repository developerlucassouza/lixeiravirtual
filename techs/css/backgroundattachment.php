<?php
    include_once '../../header.php';
?>

<style>
        .att {
            background-image: url(imagens/controle.jpg);
            background-position: center right;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            min-height: 100px;
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
        <h1>background-attachment CSS</h1>
        <p>A propriedade <code>background-attachment</code> permite controlar o comportamento da rolagem de uma imagem de fundo em relação ao conteúdo.</p>
        <p>Para definir uma imagem de fundo, utilize <code><a href="backgroundimage.html">background-image</a></code>.</p>

        <div class="code">
            <pre>
.elemento {
    background-image: url('imagem.jpg');   
    background-attachment: valor;
}</pre>
        </div>

        <p>O <code>background-attachment</code> aceita os seguintes valores:</p>

        <hr>

        <h2>scroll</h2>
        <p>O valor <code>scroll</code> é o valor padrão.</p>
        <p>O fundo rola junto do conteúdo da página.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    background-attachment: scroll;   
}</pre>
        </div>

        <div class="att" style="background-attachment: scroll;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam fugiat ab doloribus saepe eos debitis tempora velit, dolore modi tenetur fugit laboriosam quae inventore ducimus, aut esse maiores, molestiae incidunt.
        Sequi officia ab a, expedita labore omnis quo doloremque delectus ipsum voluptas quis assumenda distinctio repellendus, amet illo repudiandae autem! Excepturi libero asperiores, mollitia accusantium laboriosam reprehenderit laudantium totam et!
        Recusandae facere consequuntur numquam suscipit tempora voluptates, commodi pariatur reiciendis, perferendis, in nam molestias beatae cumque. Officia aliquam similique quidem, cum sunt quas, voluptatum fugiat minus reprehenderit praesentium nulla exercitationem!
        Neque nobis vero voluptas consequuntur, enim exercitationem delectus praesentium nostrum, animi magnam minima dolore dicta obcaecati, nulla ipsa architecto. Debitis eveniet et neque sit voluptas eum consequatur adipisci atque vero!
        Ullam, voluptates dicta suscipit voluptatum, molestias id, aspernatur corporis soluta consequatur vero alias eligendi inventore voluptatibus nulla dolores ea. Nam quaerat quasi obcaecati architecto pariatur sapiente, optio reiciendis neque odit.</div>

        <hr>

        <h2>fixed</h2>
        <p>O imagem de fundo permanecerá em uma posição fixa, criando um efeito paralax.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    background-attachment: fixed;   
}</pre>
        </div>

        <div class="att" style="background-attachment: fixed;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam fugiat ab doloribus saepe eos debitis tempora velit, dolore modi tenetur fugit laboriosam quae inventore ducimus, aut esse maiores, molestiae incidunt.
        Sequi officia ab a, expedita labore omnis quo doloremque delectus ipsum voluptas quis assumenda distinctio repellendus, amet illo repudiandae autem! Excepturi libero asperiores, mollitia accusantium laboriosam reprehenderit laudantium totam et!
        Recusandae facere consequuntur numquam suscipit tempora voluptates, commodi pariatur reiciendis, perferendis, in nam molestias beatae cumque. Officia aliquam similique quidem, cum sunt quas, voluptatum fugiat minus reprehenderit praesentium nulla exercitationem!
        Neque nobis vero voluptas consequuntur, enim exercitationem delectus praesentium nostrum, animi magnam minima dolore dicta obcaecati, nulla ipsa architecto. Debitis eveniet et neque sit voluptas eum consequatur adipisci atque vero!
        Ullam, voluptates dicta suscipit voluptatum, molestias id, aspernatur corporis soluta consequatur vero alias eligendi inventore voluptatibus nulla dolores ea. Nam quaerat quasi obcaecati architecto pariatur sapiente, optio reiciendis neque odit.</div>

        <hr>

        <h2>local</h2>

        <p>A imagem de fundo rola juntamente com o elemento que a contém. Isso significa que a imagem de fundo permanece no lugar em relação ao elemento que a possui, em vez de rolar com o conteúdo da página.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    background-attachment: local;   
}</pre>
        </div>

        <div class="att" style="background-attachment: local;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam fugiat ab doloribus saepe eos debitis tempora velit, dolore modi tenetur fugit laboriosam quae inventore ducimus, aut esse maiores, molestiae incidunt.
        Sequi officia ab a, expedita labore omnis quo doloremque delectus ipsum voluptas quis assumenda distinctio repellendus, amet illo repudiandae autem! Excepturi libero asperiores, mollitia accusantium laboriosam reprehenderit laudantium totam et!
        Recusandae facere consequuntur numquam suscipit tempora voluptates, commodi pariatur reiciendis, perferendis, in nam molestias beatae cumque. Officia aliquam similique quidem, cum sunt quas, voluptatum fugiat minus reprehenderit praesentium nulla exercitationem!
        Neque nobis vero voluptas consequuntur, enim exercitationem delectus praesentium nostrum, animi magnam minima dolore dicta obcaecati, nulla ipsa architecto. Debitis eveniet et neque sit voluptas eum consequatur adipisci atque vero!
        Ullam, voluptates dicta suscipit voluptatum, molestias id, aspernatur corporis soluta consequatur vero alias eligendi inventore voluptatibus nulla dolores ea. Nam quaerat quasi obcaecati architecto pariatur sapiente, optio reiciendis neque odit.</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>