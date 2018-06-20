<?php
    class Process
    {
        public $Name;
        public  $LaNa;
        public $Age;
        public $Dni;

        function __construct()
        {
            $this->Name=$_POST['Name'];
            $this->LaNa=$_POST['LaName'];
            $this->Age=$_POST['Ag'];
            $this->Dni=$_POST['Dni'];
            //self::Showw($this->Name,$this->LaNa,$this->Age,$this->Dni);
        }

        public  function Dataa()
        {
            self::Showw($this->Name,$this->LaNa,$this->Age,$this->Dni);
        }

        public function Showw($N,$L,$A,$D)
        {
            echo "My name is: ". $N." | ". "My last name is: " . $L. " | ". "My age is: ".$A." | ". "My dni is:". $D." ". "<br>";
        }
    }

    $Shower=new Process();
    $Shower->Dataa();


?>
