 <?php
    class view{
        function index($data){
            echo $data['nama'];
            echo "<br />";
            echo $data['nik'];
        }
    }
?>