function pesquisar() {

    var tpesquisa = document.getElementById('tpesquisa')
    var search = tpesquisa.value
    search = search.trim()
    search = search.toLowerCase()
    
    switch (search) {
        case "html":
            open('https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/html/index.html', '_self')
            break

        case "mysql":
            open('https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/mysql/index.html', '_self')
            break

        case "python":
            open('https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/python/index.html', '_self')
            break
        
        default:
            open('https://www.youtube.com/', '_self')
            break
    }

}

// Pesquisa
/*
<form id="pesquisa" autocomplete="off">
    <input type="text" id="tpesquisa" placeholder="Pesquisar">
    <input type="button" id="bpesquisa" value="_" onclick="pesquisar()">
</form> 
*/