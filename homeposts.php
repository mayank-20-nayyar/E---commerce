<!DOCTYPE html>
<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"f_woostyle")or die(mysqli_error($con));
$query = mysqli_query($con,"SELECT id, username, tagline, description, category, image FROM post");
$str8="Check It Out";
$str9="21";
while ($temp = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
$count=1;
echo "<div class='col-md-4 product simpleCart_shelfItem text-center'>";


echo "<a href='single.html?link=".$count."'>.$str8.";
echo '<img src="data:image/jpeg;base64,'.base64_encode( $temp['image'] ).'"/>';
echo "</a>";
echo "<div class='mask'>";
echo "<a href='single.html?link=".$count."'>".$str8."</a>";
echo "</div>";

echo "<a class='product_name' href='single.html?link=".$count."'>".$temp['tagline']."</a>";
echo "<p>";
echo "<a href='#'>";
echo "<span class='glyphicon glyphicon-star'>";
echo "</span>";
echo "</a>";
echo "</p>";
echo "<p>";
echo "<a href='#'>";
echo "<span class='glyphicon glyphicon-star'>";
echo "</span>";
echo "</a>";
echo "</p>";
echo "<p>";
echo "<a href='#' class='item_add'>";
echo "<span class='item_price'>";
echo "</span>";
echo "</a>";
echo "</p>";
echo "</div>";
}
?>