<?php
if (isset($_GET['id_film'])) {
    $id_film = $_GET['id_film'];

    $query = mysqli_query(mysql: $koneksi, query: "SELECT * FROM film WHERE id_film='$id_film'");
    $data = mysqli_fetch_array(result: $query);

    if (mysqli_num_rows(result: $query) == 1) {
?>
<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <h4>Edit Film</h4>
            <form action="index.php?page=film_update" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_film" value="<?= $id_film ?>">
                <div class="mb-2">
                    <label for="judul" class="form-label">Judul Film</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Film"
                        value="<?= $data['judul'] ?>">
                </div>
                <div class="mb-2">
                    <label for="poster" class="form-label">Poster Film</label><br>
                    <img src="../assets/img/<?= $data['poster'] ?>" width="100px" alt="">
                    <input type="file" name="poster" id="poster" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="genre" class="form-label">Genre Film</label>
                    <input type="text" name="genre" id="genre" class="form-control" placeholder="Masukan Genre Film"
                        value="<?= $data['genre'] ?>">
                </div>
                <div class="mb-2">
                    <label for="rating_usia" class="form-label">Rating Usia</label>
                    <select name="rating_usia" id="rating_usia" class="form-select">
                        <option value="P" <?php if ($data['rating_usia'] == "P") echo "selected" ?>>P</option>
                        <option value="A" <?php if ($data['rating_usia'] == "A") echo "selected" ?>>A</option>
                        <option value="R" <?php if ($data['rating_usia'] == "R") echo "selected" ?>>R</option>
                        <option value="D" <?php if ($data['rating_usia'] == "D") echo "selected" ?>>D</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="durasi" class="form-label">Durasi Film</label>
                    <input type="text" name="durasi" id="durasi" class="form-control" placeholder="Masukan durasi Film"
                        value="<?= $data['durasi'] ?>">
                </div>
                <div class="mb-2">
                    <label for="sinopsis" class="form-label">Sinopsis Film</label>
                    <textarea name="sinopsis" id="sinopsis" class="form-control"
                        placeholder="Masukan Sinopsis Film"><?= $data['sinopsis'] ?></textarea>
                </div>
                <input type="submit" value="Edit" name="edit" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>
<?php
    } else {
        header(header: "Location: index.php?page=film");
    }
} else {
    header(header: "Location: index.php?page=film");
}
?>