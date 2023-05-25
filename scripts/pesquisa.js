function pesquisar() {

    var tpesquisa = document.getElementById('tpesquisa')
    var search = tpesquisa.value
    
    switch (search) {
        case "html":
            alert('html')
            break
        
        default:
            open('https://youtube.com', '_self')
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