<?php

class Mahasiswa_model {
  private $mhs = [
    [
      "nama" => "Efraim urel palodang",
      "npm" => "1231278492",
      "email" => "kepooya@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Molly aja lah",
      "npm" => "4748292749",
      "email" => "mollynigeng@gmail.com",
      "jurusan" => "Perikanan"
    ],
    [
      "nama" => "Bong ni boss",
      "npm" => "8593028949",
      "email" => "bongnisenggol@gmail.com",
      "jurusan" => "Perkebunan"
    ]
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}