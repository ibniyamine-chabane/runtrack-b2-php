<?php 

class student {

    //attribut 
    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?datetime $birthdate;
    private string $gender;

    //constructeur 

    public function __construct() {
        $this->id = 0;
        $this->grade_id = 0;
        $this->email = "nonn@toto.com";
        $this->fullname = "nene";
        $this->birthdate = new datetime("00-00-0000");
        $this->gender = "";
        
    }
    
}

?>