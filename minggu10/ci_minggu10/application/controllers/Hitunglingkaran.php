<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
 
function __construct(){
parent::__construct();
$this->load->library('lingkaran');
}
 
function index(){
$this->benchmark->mark('start');
$this->lingkaran->keliling('21');
echo "<hr/>";
$this->lingkaran->luas('14');
$this->benchmark->mark('end');

echo $this->benchmark->elapsed_time('start','end');
 echo $this->benchmark->memory_usage('start','end');
 }
}
?>