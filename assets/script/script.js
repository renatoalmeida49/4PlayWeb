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

//Função executada em 'editarMusica.php'
function preencheCampos(n){
    var nome = document.getElementById("nome");
    var artista = document.getElementById("artista");
    var tipo = document.getElementById("tipo");
    var capostraste = document.getElementById("capotraste");
    var instrumento = document.getElementById("instrumeto");
    var letra = document.getElementById("letra");
    
    nome.value = " "+n;
}

function welcome(){
    alert("Você chegou")
}
