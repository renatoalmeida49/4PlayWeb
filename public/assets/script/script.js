// ADICIONANDO AS FUNÇÕES NOS BOTÕES

if(document.querySelectorAll('.modal-music')) {

    $('.modal-music').bind('click', function(e){
        var id = $(this).data('music-id');

        $.ajax({
            type: 'GET',
            url: BASE+'/ajax/music/',
            data: {'id' : id},
            success: function(e){
                $('#id-music').val(e['id'])
                $('#name-edit').val(e['nome'])
                $('#artist-edit').val(e['artista'])
                $('#instrumento-edit').val(e['instrumento'])
                $('#capotraste-edit').val(e['capotraste'])

                $('#modalEditarMusica').modal('show')
            },
            error: function(e){
                console.log('Fail ajax')
                console.log(e)
            }
        })
    })
}

if(document.querySelectorAll('.modal-playlists')) {

    $('.modal-playlists').bind('click', function(e){

        let idMusic = $(this).data('music-id')

        $('.tbody-playlists').html('')

        $.ajax({
            type: 'GET',
            url: BASE+'/ajax/playlists/',
            success: function(e){
                console.log(e)
                // Deve-se criar as linhas da tabela

                e.forEach(createTable)
                    
                function createTable(e, index) {
                    let html = "<tr>"
                    html += "<td>" + parseInt(index+1) + "</td>"
                    html += "<td>" + e['name'] + "</td>"
                    html += "<td>" + e['descricao'] + "</td>"
                    html += "<td><a href='"+BASE+"/playlist/" + e['id'] + "/addMusic/" + idMusic + "'>Add</a></td>"
                    html += "</tr>"

                    $('.tbody-playlists').append(html)
                }

                $('#modalAdicionarAPlaylist').modal('show')
            },
            error: function(e){
                console.log('Fail ajax')
                console.log(e)
            }
        })
    })
}
