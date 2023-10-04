<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltinput&gt HTML</h1>
        <p>A tag <code>input</code> cria uma área de inserção de dados ou um botão. Em resumo, o <code>input</code> é responsável por parte da interação entre o usuário e o site.</p>
        <p>O <code>input</code> pode receber vários valores no atributo <code>type</code>, onde cada type é um tipo diferente de <code>input</code></p>

        <div class="code">
            <pre>
&ltinput type="text"&gt   </pre>
        </div>

        <hr>

        <p>Text <br> <input type="text" name="" id=""> <br> - Usado para digitar um texto.</p>

        <hr>
        
        <p>Submit <br> <input type="submit"> <br> - Usado em formulários (<code><a href="form.php">&ltform&gt</a></code>) para enviar os dados.</p>

        <hr>
        
        <p>Password <br> <input type="password" name="" id=""> <br> - Oculta o que for escrito na caixa de texto.</p>

        <hr>
        
        <p>Reset <br> <input type="reset" value="Limpar"> <br> - Limpa todos os campos do formulário (<code><a href="form.php">&ltform&gt</a></code>) <br> - Pede atributo <code>value</code>, que é o texto que será mostrado no botão.</p>

        <hr>
        
        <p>Number <br> <input type="number" name="" id=""> <br> - Só aceita números. <br> - Pode-se usar os atributos <code>min</code> e <code>max</code> para definir o valor mínimo e máximo do campo. <br> - O atributo <code>step</code> calcula o passo dos valores do input (podendo configurar números decimais.)</p>

        <hr>

        <p>Month <br> <input type="month" name="" id=""> <br> - Escolhe mês e ano.</p>

        <hr>

        <p>Date <br> <input type="date" name="" id=""> <br> - Escolhe uma data completa (dia, mês e ano).</p>

        <hr>

        <p>Time <br> <input type="time" name="" id=""> <br> - Escolhe um horário.</p>

        <hr>

        <p>Email <br> <input type="email" name="" id=""> <br> - Usado para inserir email.</p>

        <hr>

        <p>Tel <br> <input type="tel" name="" id=""> <br> - Usado para inserir telefone.</p>

        <hr>

        <p>Checkbox <br> 
            <input type="checkbox" id="opt1"> <label for="opt1">Opção 1</label> <br> 
            <input type="checkbox" id="opt2"> <label for="opt2">Opção 2</label> <br>
            <input type="checkbox" id="opt3"> <label for="opt3">Opção 3</label> <br>
            - Cria um checkbox. <br>
            - Necessita de ligação com um <code><a href="label.php">&ltlabel&gt</a></code> para funcionar corretamente.
        </p>

        <hr>

        <p>Radio <br>
            <input type="radio" name="sexo" id="imasc"> <label for="imasc">Masculino</label> <br>
            <input type="radio" name="sexo" id="ifem"> <label for="ifem">Feminino</label> <br>
        </p>

        <hr>

        <p>Color <br>
            <input type="color" name="" id="">
        </p>

        <hr>

        <p>Range <br>
            <input type="range" name="" id=""> <br>
            - Podemos usar min e max para definir o intervalo do range.
        </p>

        <hr>

        <p>File <br>
            <input type="file" name="" id="">
        </p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>