<?php
$track = new App\Track();
$rows = $track->tampil();
?>

<h2> Data Track </h2>
<a href="index.php?page=track_input" >Tambah+</a>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA TRACK</th>
        <th>NAMA ARTIST</th>
        <th>NAMA ALBUM</th>
		<th>EDIT</th>
	</tr>
	<?php foreach($rows as $row){ ?>
	<tr>
		<td><?php echo $row['track_id']; ?></td>
		<td><?php echo $row['track_name']; ?></td>
		<td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
		<td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
        <td>
			<a href="index.php?page=edit_artist&id=<?php echo $row['artist_id']; ?> page=edit_album&id=<?php echo $row['album_id']; ?>">Edit</a>										
        </td>
    </tr>
    <?php } ?>
</table>