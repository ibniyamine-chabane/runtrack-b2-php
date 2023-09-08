<?php 

class student {

    //attribut 
    public ?int $id;
    public ?int $grade_id;
    public ?string $email;
    public ?string $fullname;
    public ?datetime $birthdate;
    public string $gender;

    //constructeur 

    public function __construct(int $id = 2, int $grade_id = 2, string $email = "tedy@tu.io", string $fullname = "ted", $birthdate = new datatime("1998-02-03"), $gender = "male") {
        
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        
    }
    
}

?>