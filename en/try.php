

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.tooltip {
  position: relative; 
}

.tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}


</style>
<body style="text-align:center;">


<x class="tooltip"> 
<input type='checkbox' disabled class="" />
  <span class="tooltiptext">Click on Edit Button to Update</span>
</x>


<span class="span_tag" style="display:none">SPAN  TAG</span>


<script>

$( ".tooltip" ).mouseenter(function() {
  //$( "#log" ).append( "Handler for .mouseout() called." );
  alert();
});

</script>

</body>
</html>


