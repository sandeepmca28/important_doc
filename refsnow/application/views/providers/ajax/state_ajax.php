<option value=""> Select State </option>
<?php 
foreach($states as $key => $value)
{
  ?>
    <option <?php if($stateid == $value->id){ echo "selected"; } ?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
  <?php
}
?>