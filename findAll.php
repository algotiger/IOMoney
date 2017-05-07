<?php
/**
 * Created by PhpStorm.
 * User: Black
 * Date: 5/7/2017
 * Time: 19:50
 */
include "connect.php";
$sql = "SELECT c.name as category, sc.name as subCategory, e.amount as amount, e.creationDate as date
FROM  expense e 
INNER JOIN subcategory sc ON e.idSubCategory = sc.id
INNER JOIN category c ON sc.idCategory = c.id
ORDER BY date
";
$stmt = $pdo->query($sql);