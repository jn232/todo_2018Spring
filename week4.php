<?php
      $date = date('Y/m/d', time());
        echo 'The value of $date: '.$date.'<br>';
        $tar = '2017/05/24';
        echo 'The value of $tar: '.$tar.'<br>';
        $year = array('2012', '396', '300', '2000', '1100', '1089');
        echo 'The value of $year: ';
        print_r($year);

        //#Question 2
        $datenew = date('Y/m/d', time());
        echo '<br>'.$datenew;

        //#Question 3
        if ($date < $tar) {
            echo '<br>'.'The future'.'<br>';
        } elseif ($date > $tar) {
            echo '<br>'.'The past'.'<br>';
        } elseif ($date == $tar) {
            echo 'Oops'.'<br>';
        }

        //#Question 4
        $count = 0;
        $find = '/';
        $positions = array();
        for ($i = 0; $i < strlen($date); ++$i) {
            $pos = strpos($date, $find, $count);
            if ($pos == $count) {
                $positions[] = $pos;
            }
            ++$count;
        }
        foreach ($positions as $value) {
            echo $value . ' ';
        }

        //#Question 5
        echo '<br>'.str_word_count("$datenew", 0, '/').'<br>';

        //#Question 6
        echo strlen($date).'<br>';

        //#Question 7
        echo ord($date[0]).'<br>';

        //#Question 8
        echo $date[-2];
        echo $date[-1].'<br>';

        //#Question 9
        $datearray = explode('/', $date);
        print_r($datearray);
        echo '<br>';

        //#Question 10
        foreach ($year as $item) {
            if ($item % 4 == 0) {
                if ($item % 100 == 0) {
                    if ($item % 400 == 0) {
                        echo "$item".':'.'True'.' ';
                    } else {
                        echo "$item".':'.'False'.' ';
                    }
                } else {
                    echo "$item".':'.'True'.' ';
                }
            } else {
                echo "$item".':'.'False'.' ';
            }
        }




?>

