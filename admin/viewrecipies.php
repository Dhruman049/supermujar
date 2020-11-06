<?php 
include("ClsDatabase.php");
include("config.php"); 
include("header.php");

//http://stackoverflow.com/questions/13336624/php-display-hide-dropdown-list-due-to-selection

$query="select * from  tbl_forntartical";
$user = new ClsDatabase();
$result=$user->selectRecord($query);
    ?>
<?

$page_name="viewrecipies.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}

$eu = ($start - 0); 
$limit = 5;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


/////////////// WE have to find out the number of records in our table. We will use this to break the pages///////
$query2="SELECT * FROM  tbl_forntartical";
$result2=mysql_query($query2);
echo mysql_error();
$nume=mysql_num_rows($result2);
$query=" SELECT * FROM  tbl_forntartical limit $eu, $limit ";
$result=mysql_query($query);
echo mysql_error();

/////////////////////////////// 
if($nume > $limit ){ // Let us display bottom links if sufficient records are there for paging


}// end of if checking sufficient records are there to display bottom navigational link. 
?>





<div class="clear"></div>
  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Manage Articel</h1>
    
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      <table width="100%" border="0" cellpadding="0" cellspacing="0" id="data">
      
      
      
        <tr>
          <th width="15" align="center" scope="col"><label>
                  <input type="checkbox" name="checkbox1" id="checkbox1" onClick="return checkall()" />
                  <?php /*?> <a href="deleteaddrep.php?did=<?php echo $record["rep_id"];?>" onClick="return confirmdeleteall();" ><img src="images/icon_delete.gif" alt="Delete" width="16" height="16" border="0" /></a><?php */?>
          </label></th>
          <th width="80" scope="col"><a href="#">Artical Name</a></th>
          <th width="80" scope="col"><a href="#">Artical status</a></th>
       
        
        </tr>
<!-- <script language="javascript">
		window.location="addcmspage.php?iid=1";
	</script> -->
<?php
while($record= mysql_fetch_array($result))
{
?>
 
        <tr>
          <td width="15" align="center"><input type="checkbox" name="checkbox2[]" id="checkbox2[]" 
          value="<?php echo $record["art_id"]; ?>" /></td>
          <td width="80"> <?php echo $record["art_name"]; ?></td>
          <td><?php echo $record["art_status"]; ?></td>
          
            
          
          <td width="40" align="center"><a href="updaterecipies.php?edid=<?php echo $record["art_id"];?>">
          <img src="images/icon_edit.gif" alt="Edit" width="16" height="16" border="0" /></a>&nbsp;&nbsp;
             <?php /*?> <a href="deleteaddrep.php?did=<?php echo $record["rep_id"];?>" onClick="return confirmdelete();" >
              <img src="images/icon_delete.gif" alt="Delete" width="16" height="16" border="0" /></a><?php */?></td></tr>
  
              <?php
}
  ?>
            <tr>
      <th colspan="9" class="pagination" scope="col"><? if($back >=0) { 
				print "<a href='$page_name?start=$back'><font>Prev</font></a>"; }?> 
|			 <?  echo "</td>";
				$i=0;
				$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
	if($i <> $eu){
			echo " <a href='$page_name?start=$i'>$l</a> ";
}
			else { echo "$l";}$l=$l+1;
}
				echo "</td>"; ?>|  <? 
				if($this1 < $nume) { 
					print "<a href='$page_name?start=$next'><font>Next</font></a>";} ?></th>
                    </tr>

</table>
   
<!--<script language="javascript">
		window.location="addcmspage.php?iid=3";
	</script> -->

<!DOCTYPE html>

    
		  

 
 <?php 
 /*
$p = $_GET["iid"];       
if($p == 1)
{
?>
            <p class="success">Cms add successfully.....<span>X</span></p>
 <?php
 }
else if($p == 3)
{
    ?>
         <p class="success">Cms successfully Updated.....<span>X</span></p>   
<?php 

}*/
  ?>  
            
<!--END SYSTEM MESSAGE EXAMPLES--> 

<!--FORM ELEMENTS EXAMPLE-->  


    </div>
<!--END FORM ELEMENTS EXAMPLE-->     
    
<!--TABBED PANEL EXAMPLE-->     

<!-- END TABBED PANEL EXAMPLE-->   

   
  </div>
<!-- END LEFT CONTENT-->  

<!-- START RIGHT CONTENT - Widget menu -->    
  <div class="grid_3">
  <!-- TODO WIDGET -->
  	<div class="widget" id="todo">
   	  <h3 class="todo">To-do list</h3>
   	  <p class="todoitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi.<a class="close" href="#">X</a></p>
   	  <p class="todoitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a class="close" href="#">X</a></p>
      <p class="todoitem">Nam sapien dolor, ultrices a rutrum quis, convallis nec nisi.<a class="close" href="#">X</a></p>
      <a href="#" class="view_all">View all todo items.</a>  	</div>
	<br />
    <!-- CALENDAR WIDGET -->
    <div class="widget">
    	<h3 class="calendar">Calendar</h3>
		<div id="datepicker" align="center"></div>
    </div>
	<br />
    <!-- COMMENTS WIDGET -->
    <div class="widget" id="comments">
      <h3 class="comments">Latest Comments</h3>
      <p><span><a href="#">by Mayur - 15/02/2013 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>
      <p><span><a href="#">by Krunal - 15/02/2013 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>
      <p><span><a href="#">by sami - 15/02/2013 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>            
      <a href="#" class="view_all">View full comment list.</a>    </div>  
	<br />
    <!-- PHOTOS WIDGET -->
    <div class="widget" id="photos">
      <h3 class="photos">Photos</h3>
      <p><img alt="image" src="images/cnt_img_1.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_2.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_3.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_4.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_5.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_6.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_7.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_8.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_9.jpg" width="50" height="50" /></p>
      <div class="clear"></div>
      <a href="#" class="view_all">View all photos.</a>
    </div>
    <br />
    <!-- BLANK WIDGET -->
    <div class="widget">
    	<h3>Basic Blank Widget</h3>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi. Morbi lorem est,  pellentesque ac suscipit ut, fringilla sit amet elit. Cras blandit  turpis vitae augue laoreet gravida. Suspendisse potenti.</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi. Morbi lorem est,  pellentesque ac suscipit ut, fringilla sit amet elit. Cras blandit  turpis vitae augue laoreet gravida. Suspendisse potenti.</p>
   		 <a href="#" class="view_all">A "more of this" link.</a>
    </div>        
  </div>
  <!-- end .grid_13 - RIGHT CONTENT - Widget menu  -->
  <div class="clear"></div>
  <!--FOOTER START-->
  <div class="grid_12 cnt" id="footer">This is a basic Footer - Copyright and other information can go here. | <a href="#">link 1</a> | <a href="#">link 2</a> | <a href="#">link 3</a> | <a href="#">link 4</a></div>
  <!--FOOTER END-->
  <div class="clear"></div>
</div>
</body>
</html>
