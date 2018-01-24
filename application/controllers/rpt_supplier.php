<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class rpt_supplier extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('m_rptsupplier','m_rptsupplier');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $data['title'] = 'Laporan PDF CodeIgniter dengan DOMPdf'; //judul title
        $data['qSupplier'] = $this->m_rptsupplier->getAllItem(); //query model semua barang
        $this->load->view('report/rptsupplier/rpt_supplier',$data);
    }
 
    // fungsi cetak pdf
    public function cetakpdf(){
        $data['title'] = 'Cetak PDF Barang'; //judul title
        $data['qSupplier'] = $this->m_rptsupplier->getAllItem(); //query model semua barang
 
        $this->load->view('report/rptsupplier/rpt_supplier_print', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("rptsupplier.pdf", array('Attachment'=>0));
    }
}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */
?>