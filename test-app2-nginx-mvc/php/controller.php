<?php
 include("model.php");
 include("view.php");
 
class controller{
function index(){
   $data['nama']= model->getNama();
   $data['nik']= model->getNik();
   view->index($data);
  }
 }
?> 