<?php
include "inc/header.php";
?>
<?php
$log_acc = Session::get("cmrlogin");		
if($log_acc == false){
header("location:login.php");
}
?>
<style>
.tblone{width:550px; margin: 0 auto; border: 2px solid #ddd;}
.tblone tr td{text-align:justify;}
</style>
 <div class="main">
    <div class="content">
            <div class="section group">
        <?php 
        $id = Session::get("cmrId");
        $cus_pro = $cmr->cus_profile($id);
        if($cus_pro){
            while($value =$cus_pro->fetch_assoc()){
        ?>      
                 <h2 style="text-align:center; padding:10px 0px;">Your Profile</h2>          
             <table class="tblone">
                     <tr>
                             <td width="20%">User name</td>
                             <td width="5%">:</td>
                             <td><?php echo $value['name'];?></td>
                     </tr>
                     <tr>
                             <td>Email</td>
                             <td>:</td>
                             <td><?php echo $value['email'];?></td>
                     </tr>
                     <tr>
                             <td>Adress</td>
                             <td>:</td>
                             <td><?php echo $value['adress'];?></td>
                     </tr>
                     <tr>
                             <td>City</td>
                             <td>:</td>
                             <td><?php echo $value['city'];?></td>
                     </tr>
                     <tr>
                             <td>Country</td>
                             <td>:</td>
                             <td><?php echo $value['country'];?></td>
                     </tr>
                     <tr>
                             <td>Zip</td>
                             <td>:</td>
                             <td><?php echo $value['zip'];?></td>
                     </tr>
                     <tr>
                             <td>Phone</td>
                             <td>:</td>
                             <td><?php echo $value['phone'];?></td>                            
                     </tr>
                     <tr>
                             <td></td>
                             <td></td>
                             <td> <a href="editprofile.php"><h2>Update profile</h2></a></td>
                     </tr>
                    
             </table>
               
        <?php }} ?>     
            

            </div>
    </div>
</div>

<?php
include "inc/footer.php";
?>