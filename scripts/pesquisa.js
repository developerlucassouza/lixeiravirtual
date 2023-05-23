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