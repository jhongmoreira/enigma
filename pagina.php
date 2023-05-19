<?php
  class Pagina
  {
      private $pagina;

      public function __construct()
      {
        if (!isset($_GET["pg"]))
        {
          $_GET["pg"] = 0;
        }

        $this->pagina = $_GET["pg"];


        if (!isset($this->pagina))
        {
          $this->pagina = 0;
        }

        switch ($this->pagina)
        {
          case 0:
            include "p1.php";
            break;

          case 1:
            include "p2.php";
            break;
        }

      }
  }
?>
