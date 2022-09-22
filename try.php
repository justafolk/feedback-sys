<?php

$activeRoll = [194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034];

//$activeRoll = json_encode($activeRoll);

for($i=0;$i<sizeof($activeRoll);$i++){
  echo $activeRoll[$i] . "<br>";
}


?>

<th scope="col">Sr. No</th>
<th scope="col">Subject</th>
<th scope="col">Course Code</th>
<th scope="col">Teacher Name</th>
<th scope="col">Date</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
<th scope="col">View</th>

<?php
if($check['active']){
  ?><input class="btn btn-success" type="submit" name="id<?php echo $i; ?>" value="Active"></td><?php
}
else{
  ?><input class="btn btn-danger" type="submit" name="id<?php echo $i; ?>" value="Inactive"></td><?php
}
?>
