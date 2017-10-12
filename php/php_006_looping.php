<?php
    $fuel = 10;

    // while loops
    while ($fuel > 1) {
        echo "Keep driving, there's enough fuel";
        --$fuel;
    }

    // do while loops
    $count = 0;
    do {
        echo "counting to 10 " . $count;
    } while (++$count <= 10);

    // for loops
    // (initialization ; condition ; modification)
    for ($count=1; $count<=10; ++$count)
        echo "counting to 10 " . $count;
    
    // breaking out from loop
    for ($row=1; $row<=10; ++$row) {
        if ($row == 5) break;
    }

    // multi level break
    for ($row=1; $row<=10; ++$row) {
        for ($col=1; $col<=10; ++$col) {
            echo "Row:" . $row . " Col:" . $col;
            if ($row == $col) break 2;
        }
    }

    // countinue statement (next iteration)
    $j = 10;

    while ($j > -10) {
        $j--;
        if ($j == 0) continue;
        echo (10 / $j) . "<br>";
    }
?>