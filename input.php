<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    text-align: center;
}
.container {
    width: 400px;
    margin: auto;
}
</style>
</head>
<body>
<h1>Input Data</h1>
<div class="container">
    <form id="form_dosen" action="proses_inputdosen.php" method="post">
        <fieldset>
            <legend>Input Data Dosen</legend>
            <p>
                <label for="namaDosen">Nama Dosen: </label>
                <input type="text" name="namaDosen" id="namaDosen">
            </p>
            <p>
                <label for="noHP">No HP: </label>
                <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444">
            </p>
        </fieldset>
        <p>
            <input type="submit" name="input" value="Simpan">
        </p>
    </form>
</div>
</body>
</html>