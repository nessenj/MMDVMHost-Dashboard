<?php
?>
  <div class="panel panel-default">
  <!-- Standard-Panel-Inhalt -->
  <div class="panel-heading">YSFGateway-Infos<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
  <div class="panel-body">
  <!-- Tabelle -->
  <table class="table">
    <tr>
    <td><span class="label <?php
      if (isProcessRunning("YSFGateway")) {
         echo "label-success";
         ?>">YSFGateway Process is running</span></td><?php
      } else {
         echo "label-danger\" title=\"YSFGateway is down!";
         ?>">YSFGateway Process is down!</span></td><?php
      }
    ?>
    </tr>
  </table>
</div>
</div>
  <div class="panel panel-default">
  <!-- Standard-Panel-Inhalt -->
  <div class="panel-heading">YSFReflectors reported active<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
  <div class="panel-body">
  <!-- Tabelle -->
  <div class="table-responsive">
  <table id="ysfGateways" class="table ysfGateways table-condensed table-striped table-hover">

<?php

      if (count($activeYSFReflectors) > 0) {
      ?>
         <thead>
         <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Description</th>
            <th>ID</th>
            <th>Connections</th>
         </tr>
         </thead>
         <tbody>
<?php
         $counter = 1;
         foreach ($activeYSFReflectors as $reflector) {
            echo "<tr>";
            echo "<td>$counter</td>";
            for ($i = 0; $i < 4; $i++) {
               echo"<td>$reflector[$i]</td>";
            }
            echo "</tr>\n";
            $counter++;
         }
      }
?>
         <tbody>
  </table>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
var ysfGatewaysT = $('#ysfGateways').dataTable( {
    "aaSorting": [[0,'asc']]
  } );
});
</script>
