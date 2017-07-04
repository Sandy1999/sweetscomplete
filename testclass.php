<?php
class user{
   public $firstname = '';
   public $lastname ='';
   public $accountno=0;
   public $balance =0;
   public $ismember = FALSE;
   public $preferences = array();

   // time to create a method to get users;
   public function __construct($f_nm,$l_nm,$acc_no,$bal,$is_mem,$pref){
       $this->firstname=$f_nm;
       $this->lastname=$l_nm;
       $this->accountno = $acc_no;
       $this->balance =$bal;
       $this->ismember = $is_mem;
       $this->preferences = $pref;
   }
   // Method to print users;
   public function print_users(){
       printf("First Name:%s</br> Last Name: %s<br/>", $this->firstname , $this->lastname);
       printf("Account Number %d posses $ %8.2f", $this->accountno , $this->balance);
       echo"<br/>Preferences:<ul>";
       foreach($this->preferences as $items){
           echo"<li>{$items}</li>";
       }
       echo"</ul>";
   } 
} 
$user = new user('Sanidhya','Mangal',980690,23300505.23,FALSE,array('JETS','Yatch','Real Estate'));
if($user->ismember){
    $user -> print_users();
}else{
     echo $user->firstname." Not a user";
}

class makehtml{
    public function makeh1($content){
        return "<h1>".$content."</h1><hr/>";
    }

    public function makeul($content){
        $output="<ul>";
        foreach($content as $li){
            $output.="<li>{$li}</li>";
        }
        $output.="</ul>";
        return $output;
    }
}
$html  = new makehtml;
echo $html->makeh1('Fruits');
echo $html->makeul(array('Apple','Orange','Mango','Peach'));

class test{
    public function divide($opperand1,$opperand2){
        if($opperand2==0){
            $output="<br/>Cant Divide by Zero!!";
        }else $output=sprintf("Quotient=%8.2f",$opperand1/$opperand2);
        return $output;
    }
}
$div = new test;
try{
    echo $div->divide(22,11);
    echo $div->divide(22,0);
}catch(Exception $e){
    echo $e->getMessage();
}
try{
$date = "2021-01-01";
$futuredate = new DateTime($date);
echo "<br/>Date:".$futuredate->format('l,d F y');
$date = "2021-33-31";
$futuredate = new DateTime($date);
echo "<br/>Date:".$futuredate->format('l,d F y');
}catch(Exception $e){
    echo"<br/>Unable to process date/time <br/>";
    $e->getMessage();
    $e->getTraceAsString();
}
?>