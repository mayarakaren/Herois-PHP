<?php
  $universo = $_POST["universo"];
  $heroi = str_replace("-", " ", strtoupper($_POST["heroi"]));
  $imgs = str_replace(" ", "-", $heroi);
  $qtd = $_POST["qtd"];

  $heroiMarvel = array("VIUVA NEGRA","THOR","HOMEM ARANHA","HOMEM DE FERRO","CAPITAO AMERICA");
  $heroiDc = array("BATMAN","SUPERMAN","MULHER MARAVILHA","LANTERNA VERDE","AQUAMAN");

  if($universo == "Marvel"){
    for($i = 0; $i < 5; $i++){
      if($heroi == $heroiMarvel[$i]){
        for($j = 0; $j < $qtd; $j++){
          echo "<img src='imgs/Marvel/".strtolower($imgs).".png'>";
        }
      }
    }
  }
  else if($universo == "DC"){
    for($i = 0; $i < 5; $i++){
      if($heroi == $heroiDc[$i]){
        for($j = 0; $j < $qtd; $j++){
          echo "<img src='imgs/Dc/".strtolower($imgs).".png'>";
        }
      }
    }
  }
  else{
    echo "Nenhum universo válido não foi selecionado.";
  }
?>