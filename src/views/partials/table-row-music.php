
    <tr>
    <a href="<?= $base ?>">
        <th scope="row"><?=$count + 1;?></th>
        <td><?=$data->nome;?></td>
        <td><?=$data->artista;?></td>
        <td><?=$data->instrumento;?></td>
        <td><?=$data->capotraste;?></td>
        <td><a href="<?= $base; ?>/suasMusicas/<?= $data->id; ?>">...</a></td>
        </a>
    </tr>
