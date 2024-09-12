<?php
function calculateRentalCost($days, $dailyRateFirst5, $dailyRateNext10, $dailyRateBeyond15, $miles, $costPerMileFirst100, $costPerMileNext200, $costPerMileBeyond300) {
    
    if ($days <= 5) {
        $dailyRentalCost = $days * $dailyRateFirst5;
    } elseif ($days <= 15) {
        $dailyRentalCost = (5 * $dailyRateFirst5) + (($days - 5) * $dailyRateNext10);
    } else {
        $dailyRentalCost = (5 * $dailyRateFirst5) + (10 * $dailyRateNext10) + (($days - 15) * $dailyRateBeyond15);
    }


    if ($miles <= 100) {
        $mileageCost = $miles * $costPerMileFirst100;
    } elseif ($miles <= 300) {
        $mileageCost = (100 * $costPerMileFirst100) + (($miles - 100) * $costPerMileNext200);
    } else {
        $mileageCost = (100 * $costPerMileFirst100) + (200 * $costPerMileNext200) + (($miles - 300) * $costPerMileBeyond300);
    }

    // Calculate total cost
    $totalCost = $dailyRentalCost + $mileageCost;

    return $totalCost;
}
?>
