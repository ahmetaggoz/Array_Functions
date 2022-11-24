<?php


$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];



function project_x($array, $value){
    $filter = array_filter($array);
    $random = array_rand($filter, $value);
    $result = array_map(function ($item) use ($filter){
        return $filter[$item];
    }, $random);
    return $result;
}

echo "<pre>";
print_r(project_x($planets, 2));
print_r(project_x($planets, 3));
print_r(project_x($planets, 2));
print_r(project_x($planets, 4));
print_r(project_x($planets, 5));


