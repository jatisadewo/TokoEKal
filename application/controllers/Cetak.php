<?php

class Cetak extends CI_Controller
{
    public function cetak_order_pdf()
    {		
        $data['order'] = $this->ModelCetak->getallorder();//ambil data order
        $this->load->view('pages/admin/order/cetak_pdf', $data);
        $sroot  = $_SERVER['DOCUMENT_ROOT'];
        include $sroot."/tokoekal/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $dompdf->set_paper($paper_size, $orientation);
		
		$dompdf->load_html($html);
		$dompdf->render();

		$dompdf->stream("Laporan Penjualan.pdf", array('Attachment' => 0));

    }

    public function export_excel()
    {
        $data = array('title' => 'Laporan Order',
        'order' => $this->ModelCetak->getallorder());
       
        $this->load->view('pages/admin/order/export_excel', $data);
        // echo'<pre>';
        // print_r($data);
    }
}
   