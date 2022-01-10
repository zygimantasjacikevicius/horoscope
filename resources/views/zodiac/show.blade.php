<?php
session_start();
?>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h1>2022 prediction for {{ $zodiac->name }}</h1>
                    </div>
                    <div class="legend">
                        <h2>Legend</h2>
                        <p>
                        <div class='box green'></div>Great day (score between 7 - 10) </p>
                        <p>
                        <div class='box yellow'></div>Average day (score between 4 - 6)</p>
                        <p>
                        <div class='box red'></div>Bad day (score between 1 - 3)</p>
                    </div>
                    <?php
                    
                    $year = 2022; // change this to another year 2017 or  2018 or 2019 Or ...
                    if (strlen($year) != 4) {
                        $year = date('Y'); // Current Year is taken if year is not set in above line.
                    }
                    
                    $row = 4; //to set the number of rows and columns in yearly calendar ( 1 to 12 )
                    ///// No Edit below //////
                    $row_no = 0; //
                    echo "<table class='main'>"; // Outer table
                    ////// Starting of for loop///
                    ///  Creating calendars for each month by looping 12 times ///
                    $highestMonth = [];
                    for ($m = 1; $m <= 12; $m++) {
                        $month = date($m); // Month
                        $dateObject = DateTime::createFromFormat('!m', $m);
                        $monthName = $dateObject->format('F'); // Month name to display at top
                    
                        $d = 2; // To Finds today's date
                        //$no_of_days = date('t',mktime(0,0,0,$month,1,$year)); //This is to calculate number of days in a month
                        $no_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year); //calculate number of days in a month
                    
                        $j = date('w', mktime(0, 0, 0, $month, 1, $year)); // This will calculate the week day of the first day of the month
                        //echo $j;// Sunday=0 , Saturday =6
                        //// if starting day of the week is Monday then add following two lines ///
                        $j = $j - 1;
                        if ($j < 0) {
                            $j = 6;
                        } // if it is Sunday //
                        //// end of if starting day of the week is Monday ////
                    
                        $adj = str_repeat("<td bgcolor='#FFFFFF'>*&nbsp;</td>", $j); // Blank starting cells of the calendar
                        $blank_at_end = 42 - $j - $no_of_days; // Days left after the last day of the month
                        if ($blank_at_end >= 7) {
                            $blank_at_end = $blank_at_end - 7;
                        }
                        $adj2 = str_repeat("<td bgcolor='#FFFFF'>*&nbsp;</td>", $blank_at_end); // Blank ending cells of the calendar
                    
                        /// Starting of top line showing year and month to select ///////////////
                        if ($row_no % $row == 0) {
                            echo '</tr><tr>';
                        }
                    
                        echo "<td><table class='main' ><td colspan=6 align=center> $monthName $year
                            
                            
                             </td></tr>";
                        echo '<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr><tr>';
                        ////// End of the top line showing name of the days of the week//////////
                    
                        //////// Starting of the days//////////
                    
                        foreach ($ratings as $rating) {
                            if ($rating->zodiac_id == $zodiac->id) {
                                // {{-- <div><h3>Zodiac id: {{$rating->zodiac_id}} Day: {{$rating->day}}, Rating: {{$rating->rating}}</h3></div> --}}
                    
                                $hDate = DateTime::createFromFormat('Y z', '2022 ' . ($rating->day - 1));
                                $hResult = $hDate->format("'n','j','Y'");
                    
                                $dayArrMult[] = [$hResult => $rating->rating];
                    
                                $dayArr = call_user_func_array('array_merge', $dayArrMult);
                            }
                        }
                    
                        $count = [];
                    
                        for ($i = 1; $i <= $no_of_days; $i++) {
                            $pv = "'$month'" . ',' . "'$i'" . ',' . "'$year'";
                    
                            if ($dayArr[$pv] <= 3) {
                                $color = 'red';
                            } elseif ($dayArr[$pv] >= 4 && $dayArr[$pv] <= 6) {
                                $color = 'yellow';
                            } elseif ($dayArr[$pv] >= 7) {
                                $color = '#50C878';
                            } else {
                                $color = 'blue';
                            }
                    
                            echo $adj . "<td bgcolor='" . $color . "'><a href='#' onclick=\"post_value($pv);\">$i</a>"; // This will display the date inside the calendar cell
                            echo ' </td>';
                            $adj = '';
                            $j++;
                    
                            if ($j == 7) {
                                echo '</tr><tr>'; // start a new row
                                $j = 0;
                            }
                    
                            $count[] = $dayArr[$pv];
                        }
                    
                        $highestMonth[] = array_sum($count);
                    
                        echo $adj2; // Blank the balance cell of calendar at the end
                    
                        echo '</tr></table></td>';
                    
                        $row_no = $row_no + 1;
                    } // end of for loop for 12 months
                    echo '</table>';
                    $pointsOverall1 = array_sum($highestMonth);
                    // var_dump($pointsOverall1);
                    $maxs = array_keys($highestMonth, max($highestMonth));
                    $maxs = implode('', $maxs) + 1;
                    $dateObj = DateTime::createFromFormat('!m', $maxs);
                    $monthName = $dateObj->format('F');
                    
                    ?>
                    <h2 class="best">The best month for {{ $zodiac->name }} is <b>{{ $monthName }}</b> </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
