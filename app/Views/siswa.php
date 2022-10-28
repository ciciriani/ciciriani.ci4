     <?= $this->extend("layouts/template"); ?>

    <?= $this->section("content"); ?>
    <h3>Data Siswa</h3>
    <table class="table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Cici Riani</td>
            <td>101</td>
            <td>2006-12-22</td>
        </tr>
        <tr>
            <td>yuyu lis</td>
            <td>102</td>
            <td>2004-1-30</td>
        </tr>
    </table>
    <?= $this->endSection(); ?>
    