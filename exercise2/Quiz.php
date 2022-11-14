<html>
    <body>
        <h1>Questions and Answers:</h1>
        <?php
        $q1 = $_POST["1"];
        $q2 = $_POST["2"];
        $q3 = $_POST["3"];
        $q4 = $_POST["4"];
        $q5 = $_POST["5"];
        $correct = 0;
        echo "<br>Question 1: How many Infinity Stones are there?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q1;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: 6";
        if($q1 == "HTML") {
            $correct++;
        }
        echo "<br><br>Question 2: What is the only food that cannot go bad?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q2;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Honey";
        if($q2 == "PHP") {
            $correct++;
        }
        echo "<br><br>Question 3: What 90s boy band member bought Myspace in 2011<";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q3;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Justin Timberlake";
        if($q3 == "KS") {
            $correct++;
        }
        echo "<br><br>Question 4: What is the most visited tourist attraction in the world?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q4;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Eiffel Tower";
        if($q4 == "MSDOS") {
            $correct++;
        }
        echo "<br><br>Question 5: Who made the the third most 3-pointers in the Playoffs in NBA history?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q5;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Lebron James";
        if($q5 == "Querty") {
            $correct++;
        }

        echo "<h3>You answered a total of ".$correct." questions correctly</h3>";
        echo "<h4>Your score: ".($correct*20)."%</h4>";
        ?>
    </body>
</html>