@extends('layouts.secretariatnav')

@section('content')
<script language="javascript" type="text/javascript">
function printdiv(divID)
{
  var headstr = "<html><head><title></title></head><body>";
  var footstr = "</body>";
  var newstr = document.all.item(divID).innerHTML;
  var oldstr = document.body.innerHTML;
  document.body.innerHTML = headstr+newstr+footstr;
  window.print();
  document.body.innerHTML = oldstr;
  return false;
}
</script>
<?php
  $timezone = "Europe/London";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");


$annees = substr($today,2,2);

$mois = substr($today,5,2);
$jour = substr($today,8,2);
?>


<div id="divID">
  <h1>  <?php echo 'CM'.$annees.$mois.$jour.$patients->id; ?></h1>
</div>
<input name="b_print" type="button" onclick="printdiv('divID');" value=" Print " />
@endsection
