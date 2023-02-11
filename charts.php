<?php

require_once('path/to/pChart/class/pData.class.php');
require_once('path/to/pChart/class/pDraw.class.php');
require_once('path/to/pChart/class/pImage.class.php');

$myData = new pData();

// Add the data for the customer's income and expenses
$myData->addPoints($income, "Income");
$myData->addPoints($expense, "Expense");
$myData->setSerieDescription("Income", "Income");
$myData->setSerieDescription("Expense", "Expense");

// Add the dates
$myData->addPoints($dates, "Dates");
$myData->setAbscissa("Dates");

// Create a pImage object
$myImage = new pImage(700,230,$myData);
$myImage->setFontProperties(array("FontName"=>"path/to/pChart/fonts/verdana.ttf","FontSize"=>10));

// Draw the line chart
$myImage->drawLineChart();

// Output the chart to the browser
$myImage->autoOutput("temporal-graph.png");

?>
