<?php
//Function
//Loop,For Loop
//Foreach

function name(){
    return "Hello <br/>";
};


//For Loop
for($i = 1; $i <= 10; $i++){    
echo $i ." : ". name();  //  ."". Concatination
};

//Foreach Loop
$languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
foreach($languages as $item){
    echo $item . '<br/>';
}

//Function with argument
function sayHi($nameId) {
    echo "Good Morning" . " ". $nameId;
}

sayHi("Rohim");

?>