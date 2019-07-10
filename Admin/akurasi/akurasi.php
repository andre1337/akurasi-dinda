<?php
  class bayesian{
    public $data_train;
    public $data_test;
    public $kelas;
    public $jum_kelas;
    public $mean;
    public $jum_fitur;
    public $sdev;
    public $likelihood;
    public $hasil_kelas;
    public function __construct($nama_file, $jum_fitur){
      $file = $nama_file;
      $this->jum_fitur = $jum_fitur;
      $fileku = fopen($file,'r') or die("File tidak bisa dibuka");
      $buff = fread($fileku,filesize($file));
      $data_buff = explode(';',$buff);
      foreach ($data_buff as $value) {
        $this->data_train[] = explode(",",$value);
      }
      echo "<table border=\"1\" style=\"border:1px solid black;\">";
      foreach ($this->data_train as $value) {
        echo "<tr>";
        foreach ($value as $key) {
          echo "<td>".$key."</td>";
        }
        echo"</tr>";
      }
      echo "</table>";
    }
    public function input_data_test($nama_file){
      $file = $nama_file;
      $fileku = fopen($file,'r') or die("File tidak bisa dibuka");
      $buff = fread($fileku,filesize($file));
      $data_buff = explode(';',$buff);
      foreach ($data_buff as $value) {
        $this->data_test[] = explode(",",$value);
      }
      echo "<table style=\"border:1px solid black;\">";
      foreach ($data_train as $value) {
        echo "<tr>";
        foreach ($value as $key) {
          echo "<td>".$key."</td>";
        }
        echo"</tr>";
      }
      echo "</table>";
    }
    public function get_first(){
      echo $this->data_train[0][4]+$this->data_train[0][5];
    }
    public function cari_kelas(){
      $this->kelas[0] = $this->data_train[0][4];
      $j_k = 1;
      $this->jum_kelas[0] = $j_k++;
      $k = 0;
      for($i = 1; $i<120;$i++){
        if($this->data_train[$i][4]!=$this->data_train[$i-1][4]){
          $this->kelas[++$k] = $this->data_train[$i][4];
          $j_k=1;
        }
        $this->jum_kelas[$k] = $j_k++;
      }
    }
    public function print_kelas(){
      for ($i = 0; $i<sizeof($this->jum_kelas); $i++) {
        echo $this->kelas[$i]."   ";
      }
    }
    public function print_jkelas(){
      echo"<br>";
      for ($i = 0; $i<sizeof($this->jum_kelas); $i++) {
        echo $this->jum_kelas[$i]."   ";
      }
      echo"<br>";
    }
    public function mean_xi(){
      $x = 0;
      $y = 0;
      $total = 0;
      for($i=0; $i<sizeof($this->jum_kelas);$i++){ // jumlah kelas
        for($j=0;$j<$this->jum_kelas[$i];$j++){ // jumlah data set per kelas
          for($k=0;$k<$this->jum_fitur;$k++){ // jumlah attribut per kelas
            for($l=0; $l<$this->jum_kelas[$i];$l++){ // cari mean
                $total += $this->data_train[$x+$y][$k+1];
                $x++;
            }
            $this->mean[$i][$k] = $total/=$this->jum_kelas[$i];
            $total=0;
            $x=0;
          }
        }
          $y+=$this->jum_kelas[$i];
      }
    }
    public function print_mean(){
      echo "Mean Fitur<br>";
      for($i=0; $i<sizeof($this->jum_kelas);$i++){
        for($j=0;$j<$this->jum_fitur;$j++){
          echo $this->mean[$i][$j]."   ";
        }
        echo "<br>";
      }
    }
    public function hitung_sdev(){
      $x = 0;
      $y = 0;
      $total = 0;
      for($i=0; $i<sizeof($this->jum_kelas);$i++){
        for($j=0;$j<$this->jum_kelas[$i];$j++){
          for($k=0;$k<$this->jum_fitur;$k++){
            for($l=0; $l<$this->jum_kelas[$i];$l++){
                $total += pow(($this->data_train[$y+$x][$k]-$this->mean[$i][$k]),2);
                $x++;
            }
            $this->sdev[$i][$k] = sqrt($total/($this->jum_kelas[$i]-1));
            $total=0;
            $x=0;
          }
        }
        $y+=$this->jum_kelas[$i];
      }
    }
    public function print_sdev(){
      echo "Standar Deviasi<br>";
      for($i=0; $i<sizeof($this->jum_kelas);$i++){
        for($j=0;$j<$this->jum_fitur;$j++){
          echo $this->sdev[$i][$j]."   ";
        }
        echo "<br>";
        }
      }
    public function load_data_test($nama_file){
      $file = $nama_file;
      $fileku = fopen($file,'r') or die("File tidak bisa dibuka");
      $buff = fread($fileku,filesize($file));
      $data_buff = explode(';',$buff);
      foreach ($data_buff as $value) {
        $this->data_test[] = explode(",",$value);
      }
    }
    public function htg_likelihoodxprior(){
      for($i = 0; $i<sizeof($this->data_test)-1; $i++){
        $total = 0;
        for($j = 0; $j<sizeof($this->jum_kelas); $j++){
          $total = 1;
          for($k = 0; $k<$this->jum_fitur; $k++){
            $kiri = 1/(sqrt(2*3.14*pow($this->sdev[$j][$k],2)));
            $kanan = (pow($this->data_test[$i][$k]-$this->sdev[$j][$k],2)/(2*pow($this->sdev[$j][$k],2)));
            $hitung = $kiri * pow(10,(-$kanan));
            $total*=$hitung;
          }
          $this->likelihood[$i][$j] = $total ;
        }
      }
    }
    public function print_likelihood(){
      echo "Likelihood<br>";
      for($i=0; $i<sizeof($this->likelihood);$i++){
        for($j=0;$j<sizeof($this->jum_kelas);$j++){
            echo $this->likelihood[$i][$j]."<br>";
        }
        echo "<br>";
        }
      }
      public function print_datatest(){
          echo "<br>Data Test<br>";
        echo "<table border=\"1\" style=\"border:1px solid black;\">";
        foreach ($this->data_test as $value) {
          echo "<tr>";
          foreach ($value as $key) {
            echo "<td>".$key."</td>";
          }
          echo"</tr>";
        }
        echo "</table>";
        echo "<br>Data Test<br>";
        // for($i=0; $i<sizeof($this->data_test)-1;$i++){
        //   for($j=0;$j<$this->jum_fitur;$j++){
        //     echo $this->data_test[$i][$j]."     ";
        //   }
        //   echo "<br>";
        //   }
        }
      public function cari_kelas_sesuai(){
          echo " Hasil Pencarian :<br>" ;
          for($i = 0; $i<sizeof($this->likelihood); $i++){
            echo "data ke ".($i+1);
            $kelas = array_search(max($this->likelihood[$i]),$this->likelihood[$i]);
            $this->hasil_kelas[$i] = $this->kelas[$kelas];
            echo "= ".$this->kelas[$kelas]."<br>";
          }
      }
      public function hitung_akurasi(){
        echo "<br>";
          $total = 0;
          for($i=0; $i<sizeof($this->data_test)-1;$i++){
            if($this->data_test[$i][4]==$this->hasil_kelas[$i]){
              $total++;
            }
          }
          $akurasi = $total/(sizeof($this->data_test)-1)*100;
          echo "Akurasi Penghitungan = $akurasi %";
      }
    }
    $bay = new bayesian("source 5.txt",4);
    $bay->cari_kelas();
    $bay->print_kelas();
    $bay->mean_xi();
    $bay->hitung_sdev();
    $bay->load_data_test("test 5.txt");
    $bay->print_datatest();
    $bay->htg_likelihoodxprior();
    $bay->cari_kelas_sesuai();
    $bay->hitung_akurasi();
 ?>
