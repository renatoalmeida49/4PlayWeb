
    <tr>
        <a href="<?= $base ?>">
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
                        <a class="dropdown-item" href="<?= $base; ?>/suasMusicas/editar/<?= $data->id; ?>">Editar</a>
                        <a class="dropdown-item" href="<?= $base; ?>/">Adicionar à playlist</a>
                        <a class="dropdown-item" href="<?= $base; ?>/suasMusicas/excluir/<?= $data->id; ?>">Excluir</a>
                    </div>
                </div>
            </td>
        </a>
    </tr>
