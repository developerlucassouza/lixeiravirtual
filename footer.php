<footer class="footer bg-dark p-2">
    <p class="text-center text-light">Desenvolvido por Lucas Souza</p>
</footer>

<!-- Bootstrap/jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


<script type="text/javascript">

    // Menu Hamburguer e Afins
    try {
        // === Menu Hamburguer das Páginas ===

        /* Fazer Menu aparecer e desaparecer */
        let button = document.querySelector('#menuburguer');
        let itens = document.querySelector('#itens');

        button.addEventListener('click', clickMenu)
        function clickMenu() {
            if (itens.style.display == 'none') {
                itens.style.display = 'block';
            } else {
                itens.style.display = 'none';
            }
        }
    } catch (ERRO) {
        console.log(ERRO, message);
    }

    try {
        // === Deixar URL como ativo === 
        // Obtém a URL atual
        let url = new URL(window.location.href);

        // Obtém o pathname da URL
        let pathname = url.pathname;

        // Separa o pathname em partes usando o caractere '/'
        let partes = pathname.split('/');

        // Obtém a última parte do pathname (parte final da URL)
        url = partes[partes.length - 1];



        window.addEventListener('load', function () {
            // Obtém a URL atual
            let url = new URL(window.location.href);

            // Obtém o pathname da URL
            let pathname = url.pathname;

            // Separa o pathname em partes usando o caractere '/'
            let partes = pathname.split('/');

            // Obtém a última parte do pathname (parte final da URL)
            let urlFinal = partes[partes.length - 1];

            // Avalia href de cada tag e se ela é igual à parte final da URL atual
            for (let ancora of document.querySelectorAll('div#itens a')) {
                let href = ancora.getAttribute('href');
                // Se o href for igual à parte final da URL, adiciona a classe 'ativo'
                if (href === urlFinal) {
                    ancora.classList.add('ativo');
                }
            }
        });
    } catch (ERRO) {
        console.log(ERRO.message);
    }


</script>
</body>

</html>