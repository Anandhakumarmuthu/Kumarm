<style>
   .table{
    margin: 0px;
    width: 100%;
    height: 100% !important;
    text-align: center;
   } 
    </style>
<script src="script.js"></script>
<?php
    if(isset($_POST['call'])){
        $id = $_POST['id'];
        $price = $_POST['price'];
        $name = $_POST['name'];
        $Trans = $_POST['Trans'];
        $ref = $_POST['ref'];
        $serial = $_POST['serial'];
        $number = $_POST['number'];
        $Details = $_POST['Details'];
        $date = $_POST['date'];
        $det = $_POST['det'];
        $Duration = $_POST['Duration'];
        $dnum = $_POST['dnum'];
        $status = $_POST['status'];
        ?>
        
<div class="box">
    <table class="table">                     
        <tr>           
            <td><?php echo $id ?></td>
            <td><?php echo $price ?></td>
        </tr>
        <tr>
            <td id="name"> <?php echo $name ?></td>
            <td id="Details"> <?php echo $Details ?></td>
        </tr>
        <tr>
            <td id="Trans"><?php echo $Trans ?></td>
            <td id="ref"><?php echo $ref ?></td>
        </tr>
        <tr>
            <td id="serial"><?php echo $serial?></td>
            <td id="number"><?php echo $number ?></td>
        </tr>
    </table>
    <table class="table">       
        <tr>
            <th colspan="2"><?php echo $status ?></th>
        </tr>
        <tr>
            <td> <?php echo $date ?></td>
            <td> </td>
        </tr>
        <tr>
            <td><?php echo $det ?></td>
            <td></td>
        </tr>
        <tr>
            <td><?php echo $Duration ?>:</td>
            <td><?php echo $dnum ?></td>
        </tr>
    </table>
</div>    
   <?php }
?>