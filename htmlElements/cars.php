<?php

$cars = array('BMW', 'Audi', 'Mercedes', 'Suzuki', 'Opel', 'Chrysler');

$html = "<select class='form-control'>";

foreach ($cars as $car) {
    $html .= "<option>$car</option>";
}

$html .= "</select>";

echo $html;
