<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	public function index()
	{
        echo "<h1>Haiii Perkenalkan</h1>"; 
        echo"Nama saya DEDI MURPHY 
            Saya tingga di daerah Rumpin 
            olah raga yang saya sukai adalah 
            Bulutangkis"; 
	}
    
    public function dataDiri()
    {
        echo "<h1>Perkenalan</h1>"; 
        echo "<p>Nama : Dedi Murphy</p>";
        echo "<p>Kelas : 17.6A.27</p>";
        echo "<p>Program Studi : Teknik Informatika</p>";
        echo "<p>Semester : 6</p>";
        echo "<p>Alamat : Kec Rumpin Kp. Jampang RT 001/004</p>";
    }
}
