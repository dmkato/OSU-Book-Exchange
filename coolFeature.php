<!DOCTYPE HTML>
<?php
    $headerTitle = "The Oregon State Book Exchange || Cool Feature";
    $coolFeatureNav = "active";
    ?>
<?php include("_header.php");?>
<style>
#map{ height: 300px }
</style>
<h3>Cool Feature</h3></br>

<div id="map"></div><br />
<script src="googleMaps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvRUpaXhO8ugmSuiQlhceZHqW6TMszJeE&callback=initMap" async defer></script>

<?php include("_footer.php");?>
