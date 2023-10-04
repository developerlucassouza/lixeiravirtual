<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltform&gt HTML</h1>
        <p>A tag <code>form</code> indica um formulário, dentro de um formulário usa-se tags <code><a href="input.html">&ltinput&gt</a></code> para criar os campos dos dados desejados.</p>

        <div class="code">
            <pre>
&ltform&gt
    Email: &ltinput type="text"&gt      &ltbr&gt   
    Senha: &ltinput type="password"&gt
&lt/form&gt</pre>
        </div>

        <form style="margin-left:20px;">
            Email: <input type="text">      <br>
            Senha: <input type="password">
        </form>

        <p>Por padrão, a tag <code>form</code> pede o atributo <code>action</code>, que receberá um arquivo .php. Esse arquivo será executado ao clicar em um <code><a href="input.html">&ltinput&gt</a></code> com <code>type submit</code></p>

        <div class="code">
            <pre>
&ltform action="cadastro.php"&gt
    Email: &ltinput type="text"&gt      &ltbr&gt   
    Senha: &ltinput type="password"&gt  &ltbr&gt
    &ltinput type="submit" value="Enviar Dados"&gt   
&lt/form&gt</pre>
        </div>

        <form action="cadastro.php" style="margin-left:20px;">
            Email: <input type="text">      <br>
            Senha: <input type="password">  <br>
            <input type="submit" value="Enviar Dados">
        </form>

        <hr>

        <p>Os formulários possuem o atributo <code>method</code> que recebe os valores <code>GET</code> e <code>POST</code>. A diferença entre eles são questões de segurança nos dados na URL e a quantidade de megabytes enviados.</p>
        <h2>Quando usar GET ou POST?</h2>
        <div style="margin-left:40px;">
            <strong>GET</strong>
            <ul>
                <li>Dados não sensíveis</li>
                <li>Formulários compartilháveis</li>
                <li>O envio de dados for menor que 3MB</li>
            </ul>
            <br>
            <strong>POST</strong>
            <ul>
                <li>Dados sensíveis</li>
                <li>Envio de arquivos</li>
                <li>O envio de dados for maior que 3MB</li>
            </ul>
        </div>

        <div class="code">
            <pre>
&ltform action="cadastro.php" method="POST"&gt   
    [...]
&lt/form&gt</pre>
        </div>

        <hr>

        <p>Também podemos criar um <code>autocomplete</code> para os inputs do formulário.</p>
        <p>Primeiro, na tag <code>form</code>, atribuimos o valor <code>on</code> ao atributo <code>autocomplete</code></p>
        <p>Após isso, no <code>input</code> desejado, colocamos o atributo <code>autocomplete</code> e selecionamos o tipo de dado que será inserido.</p>

        <div class="code">
            <pre>
&ltform autocomplete="on"&gt
    Nome: &ltinput type="text" autocomplete="name"&gt   
&lt/form&gt</pre>
        </div>

        <form autocomplete="on" style="margin-left:20px;">
            Nome: <input type="text" autocomplete="name">
        </form>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>