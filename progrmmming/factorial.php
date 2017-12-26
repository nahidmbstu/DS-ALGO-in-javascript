class fact
{

    public function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * $this->factorial($number-1));  

        /// this key word is needed for self rerferenceing
    } 
}

}


$obj =  new fact();

echo ( $obj->factorial(7) );
