<?php
// mendeklarasikan penggunaan kelas TestCase yang sudah disediakan oleh PHPUnit. 
// TestCase adalah kelas dasar untuk membuat tes dalam PHPUnit.
use PHPUnit\Framework\TestCase;

// mengimpor (include) file "Wordcount.php". 
// menghubungkan file pengujian dengan kelas Wordcount, 
// sehingga kita bisa nguji.
require_once "Wordcount.php"; 

// mendeklarasikan kelas SimpleTest, yang merupakan kelas pengujian. 
// kelas merupukan turunan dari kelas TestCase yang disediakan oleh PHPUnit.
class SimpleTest extends TestCase {

    // metode pengujian yang akan mengevaluasi metode countWords. 
    // metode ini diawali dengan kata 'test', jadi dianggap sebagai metode pengujian oleh PHPUnit.
    public function testCountWords() {

        // Membuat objek $Wc dari kelas WordCount. 
        // untuk memanggil metode countWords yang akan diuji.
        $Wc =  new Wordcount();

        // mendefinisikan variabel $TestSentence yang berisi 1 kalimat
        // yang terdiri dari 4 kata
        // yang akan diuji oleh metode countWords.
        $TestSentence = "My name is Melinda"; //4 Kata

        // objek $WordCount untuk memanggil metode countWords 
        // dengan argumen $testSentence dan hasilnya disimpan dalam variabel $result. 
        // metode countWords akan menghitung jumlah kata dalam kalimat dan mengembalikan hasilnya.
        $Wordcount = $Wc->countWords($TestSentence);

        // merupakan pernyataan pengujian 
        // yang menggunakan metode assertEquals yang disediakan oleh PHPUnit. 
        // pernyataan ini membandingkan nilai yang diharapkan (4) 
        // dengan hasil yang dikembalikan oleh metode countWords (yang disimpan dalam $result). 
        // kalau nilainya sama, maka pengujian dianggap berhasil.
        // kalau nilainya tidak sama dengan 4, maka pengujiannya gagal.
        $this->assertEquals(4, $Wordcount);
    }

}
?>