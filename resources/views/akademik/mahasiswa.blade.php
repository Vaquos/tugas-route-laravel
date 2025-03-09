<x-layout>
    <x-slot:title>List Mahasiswa</x-slot:title>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>
                    <?= $mahasiswa[0] ?>
                </td>
                <td>123456789</td>
                <td>Teknik Informatika</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <?= $mahasiswa[1]?>
                </td>
                <td>987654321</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <?=$mahasiswa[2] ?>
                </td>
                <td>112233445</td>
                <td>Teknik Komputer</td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <?= $mahasiswa[3] ?>
                </td>
                <td>556677889</td>
                <td>Teknik Elektro</td>
            </tr>
        </tbody>
    </table>
</x-layout>