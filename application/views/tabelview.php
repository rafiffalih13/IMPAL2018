<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-s6z2{text-align:center}
  </style>
</head>
<body>
  <div style="margin-left: 30px">
    Nama toko : <?php echo $namatoko; ?> 
  </div>
  <table class="tg" style="undefined;table-layout: fixed; width: 353px; margin-left: 30px">
    <colgroup>
      <col style="width: 46px">
      <col style="width: 139px">
      <col style="width: 168px">
    </colgroup>
    <tr>
      <th class="tg-s6z2" rowspan="2">No</th>
      <th class="tg-s6z2" colspan="2">Rasa</th>
    </tr>
    <tr>
      <td class="tg-s6z2">Lemon</td>
      <td class="tg-s6z2">Blackcurrant</td>
    </tr>
    <tr>
      <?php 
        foreach ($stockLemon as $l ) { 
      ?>
      <td class="tg-s6z2">1</td>
      <td class="tg-s6z2"><?php echo $l->stock1;?> Stock</td>
      <?php 
        foreach ($stockblack as $b ) { 
      ?>
      <td class="tg-s6z2"><?php echo $b->stock1;?> Stock</td>
    </tr>
    <tr>
      <td class="tg-s6z2">2</td>
      <td class="tg-s6z2"><?php echo $l->stock2;?> Stock</td>
      <td class="tg-s6z2"><?php echo $b->stock2;?> Stock</td>
    </tr>
    <tr>
      <td class="tg-s6z2">3</td>
      <td class="tg-s6z2"><?php echo $l->stock3;?> Stock</td>
      <td class="tg-s6z2"><?php echo $b->stock3;?> Stock</td>
    <?php }?>
    <?php }?>
    </tr>
  </table>
</body>
</html>