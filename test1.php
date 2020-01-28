<?php
    // Initializing Array of student with name, id , class and class
    $student=array(
        "101"=>array("name"=>"Prateek","class"=>12,"marks"=>array("Hindi"=>90,"English"=>70,"Maths"=>90)),
        "102"=>array("name"=>"Kunal","class"=>11,"marks"=>array("Hindi"=>10,"English"=>80,"Maths"=>90)),
        "103"=>array("name"=>"Yogita","class"=>9,"marks"=>array("Hindi"=>20,"English"=>90,"Maths"=>80)),
        "104"=>array("name"=>"Yash","class"=>9,"marks"=>array("Hindi"=>70,"English"=>20,"Maths"=>70)),
        "105"=>array("name"=>"Zubin","class"=>11,"marks"=>array("Hindi"=>50,"English"=>40,"Maths"=>40)),
        "106"=>array("name"=>"Ankit","class"=>10,"marks"=>array("Hindi"=>30,"English"=>50,"Maths"=>30)),
        "107"=>array("name"=>"Hemant","class"=>12,"marks"=>array("Hindi"=>80,"English"=>60,"Maths"=>10)),
        "108"=>array("name"=>"Mahek","class"=>12,"marks"=>array("Hindi"=>50,"English"=>70,"Maths"=>90)),
        "109"=>array("name"=>"Ankita","class"=>11,"marks"=>array("Hindi"=>98,"English"=>40,"Maths"=>10)),
        "110"=>array("name"=>"Ekansh","class"=>9,"marks"=>array("Hindi"=>55,"English"=>71,"Maths"=>68)),
        "111"=>array("name"=>"Kaniska","class"=>10,"marks"=>array("Hindi"=>74,"English"=>46,"Maths"=>20)),
        "112"=>array("name"=>"Archit","class"=>10,"marks"=>array("Hindi"=>70,"English"=>11,"Maths"=>50)),
    );
    // loop for getting total marks for all students
    foreach($student as $id => $std)
    {
        $total_marks=array_sum($std["marks"]);
        array_push($student[$id],$total_marks);
    }
    $tweleth_class=array();         //array initialized for tweleth class
    $eleventh_class=array();        //array initialized for eleventh class
    $tenth_class=array();           //array initialized for tenth class
    $ninth_class=array();           //array initialized for nineth class

    //retriving all students according to its classes
    foreach ($student as $id=>$std)
    { 
        if($std["class"]==12)                               //if data is of class tweleth then it will go to tweleth_class array
        {
            array_push($tweleth_class,$std);
        }
        else if($std["class"]==11)                          //if data is of class eleventh then it will go to eleventh_class array
        {
            array_push($eleventh_class,$std);
        }
        else if($std["class"]==10)                          //if data is of class tenth then it will go to tenth_class array
        {
            array_push($tenth_class,$std);
        }
        else if($std["class"]==9)                           //if data is of class nineth then it will go to nineth_class array
        {
            array_push($ninth_class,$std);
        }
    } 

    $final_list=array_merge($tweleth_class,$eleventh_class,$tenth_class,$ninth_class);      //All classes merged in order
?>
<!-- table of sorted Data of students grouped by classes and arranged in descending marks -->
<html>
    <head>
    </head>
    <body>
        <table>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Total Marks</th>
            <?php
                foreach($final_list as $id=>$std)       //retrival of all info of all students from final list array
                {
                    echo "<tr><td>".$id."</td><td>".$std['name']."</td><td>".$std["class"]."</td><td>".$std["0"]."</td></tr>";
                }

            ?>
        </table>
    </body>
</html>
