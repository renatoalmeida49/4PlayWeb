//Função executada em 'suasMusicas.php' com o clique do mouse
function preencheDados(nome, art, tipo, capo, lan, ins, cod) {
    var div = document.getElementById("infoMusic");
    var divB = document.getElementById("buttonFooter");
    
    var nomeMusica = "<img src='' height='' width=''/>"+nome+"<br/>";
    var imgArtist = "<img src='../assets/images/artist-icon.png' height='32' width='32'/>"+art+"<br/>";
    var imgType = "<img src='../assets/images/type-icon.png' height='32' width='32'/>"+tipo+"<br/>";
    var imgCapo = "<img src='../assets/images/capo-icon.png' height='32' width='32'/>"+capo+"<br/>";
    var imgLanguage = "<img src='../assets/images/language-icon.png' height='32' width='32'/>"+lan+"<br/>";
    var imgInstrument = "<img src='../assets/images/instrument-icon.png' height='32' width='32'/>"+ins+"<br/>" ;
    
    var botao = "<a href='editarMusica.php?id="+cod+"'><button>Editar</button></a>";
                
    div.innerHTML = nomeMusica+imgArtist+imgType+imgCapo+imgLanguage+imgInstrument;
    divB.innerHTML = botao;
    
    
    preencheLetra(nome);
}

//Função executada pela função 'preencheDados(...)
function preencheLetra(musica){
    var div = document.getElementById("letra");
    
    
    
    div.innerHTML = "";
}

//Função executada em 'playlists.php' com o clique do mouse
function preencheTabelaMusicasPlaylists(cod){
    var divB = document.getElementById("buttonFooter");
    
    botao = "<a href='editarPlaylist.php?id="+cod+"'><button>Editar</button></a>";
    
    divB.innerHTML = botao;
}

//função executada em 'editarPlaylist.php' para preencher input escondido com id de musica
//e deixa a linha na cor vermelha.
function pegaId(cod) {
    var campo = document.getElementById("inputId");//isso é o input
    campo.value = cod;
    
    var classes = document.getElementsByClassName('teste');
    var linha = document.getElementById(cod);//isso é a linha
    
    for (i=0; i <= classes.length; i++){
        classes[i].style.background = 'white';
        linha.style.background = "#81F79F";
    }   
}