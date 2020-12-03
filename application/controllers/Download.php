<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function excel()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/petugas', $data);
        $this->load->view('templates/footer');

        require(APPPATH . 'PHPExcel/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("Aji Prast");
        $object->getProperties()->setLastModifiedBy("Disperindag Kab.Pekalongan");
        $object->getProperties()->setTitle("Daftar Petugas Pendataan Industri");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Petugas');
        $object->getActiveSheet()->setCellValue('C1', 'Desa');
        $object->getActiveSheet()->setCellValue('D1', 'Kecamatan');

        $baris = 2;
        $no = 1;

        foreach ($data['petugas'] as $p) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $p->name);
            $object->getActiveSheet()->setCellValue('C' . $baris, $p->desa);
            $object->getActiveSheet()->setCellValue('D' . $baris, $p->kecamatan);

            $baris++;
        }

        $filename = "Data Petugas Pendataan" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Petugas Pendataan");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExel_IOFactory::createwriter($object, 'Excel2007');
        $writer = save('php://output');

        exit;
    }
}
