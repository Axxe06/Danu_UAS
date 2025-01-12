<?php
// koneksi
require_once '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // CREATE
    if ($action == 'save') {
        // menyimpan data ke db
        $nama = $_POST['nama'];
        $tujuan = $_POST['tujuan'];
        $tanggal = $_POST['tanggal'];

        // cek inputan
        if (empty($nama) || empty($tujuan) || empty($tanggal)) {
            $response = ['status' => false, 'msg' => 'Inputan wajib diisi'];
        } else {
            // Menentukan harga berdasarkan tujuan
            $harga_per_kg = 0;
            switch ($tujuan) {
                case 'gunung rinjani':
                    $harga = 15000000;
                    break;
                case 'gunung bromo':
                    $harga = 10000000;
                    break;
                case 'gunung kerinci':
                    $harga = 3000000;
                    break;
                case 'gunung sindoro':
                    $harga = 4000000;
                    break;
                case 'gunung leuser':
                    $harga = 50000000;
                    break;
                case 'gunung merbabu':
                    $harga = 4000000;
                    break;
                default:
                    $response = ['status' => false, 'msg' => 'Tujuan tidak valid'];
                    echo json_encode($response);
                    exit;
            }

            // Prepare query to prevent SQL injection
            $stmt = $koneksi->prepare("INSERT INTO regis (nama, tujuan, tanggal, harga) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssi", $nama, $tujuan, $tanggal, $harga);

            if ($stmt->execute()) {
                $response = ['status' => true, 'msg' => 'Data Berhasil disimpan'];
            } else {
                $response = ['status' => false, 'msg' => 'Gagal menyimpan data'];
            }
            $stmt->close();
        }

        echo json_encode($response);
    }

    // UPDATE
    if ($action == 'update') {
        // menyimpan data ke db
        $id = intval($_POST['id']);
        $nama = $_POST['nama'];
        $tujuan = $_POST['tujuan'];
        $tanggal = $_POST['tanggal'];

        // cek inputan
        if (empty($nama) || empty($tujuan) || empty($tanggal)) {
            $response = ['status' => false, 'msg' => 'Inputan wajib diisi'];
        } else {
            // Menentukan harga berdasarkan tujuan
            $harga = 0;
            switch ($tujuan) {
                 case 'gunung rinjani':
                    $harga = 15000000;
                    break;
                case 'gunung bromo':
                    $harga = 10000000;
                    break;
                case 'gunung kerinci':
                    $harga = 3000000;
                    break;
                case 'gunung sindoro':
                    $harga = 4000000;
                    break;
                case 'gunung leuser':
                    $harga = 50000000;
                    break;
                case 'gunung merbabu':
                    $harga = 4000000;
                    break;
                default:
                    $response = ['status' => false, 'msg' => 'Tujuan tidak valid'];
                    echo json_encode($response);
                    exit;
            }

            // Prepare query to prevent SQL injection
            $stmt = $koneksi->prepare("UPDATE regis SET nama=?, tujuan=?, tanggal=?, harga=? WHERE id=?");
            $stmt->bind_param("sssii", $nama, $tujuan, $tanggal, $harga, $id);

            if ($stmt->execute()) {
                $response = ['status' => true, 'msg' => 'Data berhasil diperbarui'];
            } else {
                $response = ['status' => false, 'msg' => 'Gagal memperbarui data'];
            }
            $stmt->close();
        }

        echo json_encode($response);
    }

    // DELETE
    if ($action == 'delete') {
        $id = intval($_POST['id']);
        // Prepare query to prevent SQL injection
        $stmt = $koneksi->prepare("DELETE FROM regis WHERE id=?");
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $response = ['status' => true, 'msg' => 'Data Berhasil Dihapus'];
        } else {
            $response = ['status' => false, 'msg' => 'Gagal menghapus data'];
        }
        $stmt->close();
        echo json_encode($response);
    }
}
?>
