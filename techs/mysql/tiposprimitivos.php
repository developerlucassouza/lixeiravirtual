<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tipos Primitivos do MySQL</h1>
        <p>O MySQL possui quatro grupos principais de Tipos Primitivos: Literal, Numérico, Data/Tempo e Espacial.</p>

        <hr>

        <h2>Literal</h2>
        <ul>
            <li>Caractere</li>
            <ul>
                <li>Char</li>
                <li>VarChar</li>
            </ul>

            <li>Texto</li>
            <ul>
                <li>TinyText</li>
                <li>Text</li>
                <li>MediumText</li>
                <li>LongText</li>
            </ul>

            <li>Binário</li>
            <ul>
                <li>TinyBlob</li>
                <li>Blob</li>
                <li>MediumBlob</li>
                <li>LongBlob</li>
            </ul>

            <li>Coleção</li>
            <ul>
                <li>Enum</li>
                <li>Set</li>
            </ul>
        </ul>

        <p>Os mais utilizados são: Char, Varchar e Text.</p>
        
        <hr>

        <h2>Tipos Numéricos</h2>
        <ul>
            <li>Inteiro</li>
            <ul>
                <li>TinyInt</li>
                <li>SmallInt</li>
                <li>Int</li>
                <li>MediumInt</li>
                <li>BigInt</li>
            </ul>

            <li>Real</li>
            <ul>
                <li>Decimal</li>
                <li>Float</li>
                <li>Double</li>
                <li>Real</li>
            </ul>

            <li>Lógico</li>
            <ul>
                <li>Bit</li>
                <li>Boolean</li>
            </ul>
        </ul>

        <p>Os mais utilizados são: TinyInt, Int, Float, Decimal e Bit.</p>

        <hr>

        <h2>Data/Tempo</h2>
        <ul>
            <li>Date</li>
            <li>DateTime</li>
            <li>TimeStamp</li>
            <li>Time</li>
            <li>Year</li>
        </ul>

        <hr>

        <h2>Espacial</h2>
        <ul>
            <li>Geometry</li>
            <li>Point</li>
            <li>Polygon</li>
            <li>MultiPolygon</li>
        </ul>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>