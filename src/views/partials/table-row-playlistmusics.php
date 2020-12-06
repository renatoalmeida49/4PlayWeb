
<tr>
    <th scope="row"><?=$count + 1;?></th>
    <td><?=$data->nome;?></td>
    <td><?=$data->artista;?></td>
    <td><?=$data->instrumento;?></td>
    <td><?=$data->capotraste;?></td>
    <td>
        <div class="mine-dropdown">
            <button class="btn btn-secondary dropdown">
                Opções
            </button>

            <div class="dropdown-content">
                <a class="dropdown-item" href="<?= $base; ?>/playlist/<?= $id; ?>/remove/<?= $data->id; ?>">Remover da playlist</a>
            </div>
        </div>
    </td>
</tr>
