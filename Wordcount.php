<?php
    // file dengan nama Wordcount.php
    class Wordcount {

        // mendefinisikan metode untuk menghitung jumlah kata dalam sebuah kalimat
            public function countWords($sentence) {
            
            // fungsi explode untuk membagi kalimat menjadi sejumlah elemen dalam sebuah array.
            // dalam hal ini membagi kalimat menjadi kata-kata dengan spasi sebagai pemisah.

            // fungsi count untuk menghitung jumlah elemen dalam array yang dihasilkan oleh fungsi explode. 
            // dalam hal ini menghitung jumlah kata dalam kalimat tersebut, 
            // lalu mengembalikannya sebagai hasil fungsi.    
            return count(explode(" ",$sentence));
        }
    }
?>
