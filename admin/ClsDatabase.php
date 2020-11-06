<?
	class ClsDatabase
	{	
		public $link_id ;
		public $status;
		
		function makeConnection($Server,$User,$Password,$Database)
    	{
			//echo $Server.$User.$Password.$Database;
			 $this->link_id=mysql_connect($Server,$User,$Password,$Database) or die('Connetion Failed');
			 mysql_select_db($Database,$this->link_id) or die('Wrong Databse');
		}
		
		//Record insertion code
		function insertRecord($tableName,$data)
		{
			//insert into  userdata (Roll_no,Name,City) values('mca101','Harish','ahmedabad')
			$query="insert into ".$tableName." ( ";
			$fieldName='';
			$fieldvalues='';
			foreach ($data as $key => $value)
			{
				 $fieldName=$fieldName.$key.",";
				 $fieldvalues=$fieldvalues."'".$value."',";
			} 
			$fieldName=rtrim($fieldName,',');
			$fieldvalues=rtrim($fieldvalues,',');
			$query=$query.$fieldName." ) values (".$fieldvalues.")";
			//echo $query; exit;
			if(mysql_query($query))
			{
				$this->status= "Successfully..";
			}
			else
			{
				$this->status= "Fail..";
			}
			return $this->status;
		}
		//Record updation code		
		function updateRecord($tableName,$data,$condition)
		{
			//update userdata set Roll_no='mca101',Name='Harish',City='ahmedabad' where ID=1
			$query="update ".$tableName." set ";
			$temp='';
			foreach ($data as $key => $value)
			{
				 $temp=$temp.$key."='".$value."',";
				
			} 
			$temp=rtrim($temp,',');
			
			$query=$query.$temp.' where '.$condition;
			//echo $query;
			if(mysql_query($query))
			{
				$this->status= "Successfully..";
			}
			else
			{
				$this->status= "Fail..";
			}
		}
		//Record delete code		
		function deleteRecord($tableName,$condition)
		{
			echo $tableName;
			echo $condition;
			$query="delete from ".$tableName.' where '.$condition;
			//echo $query;
			if(mysql_query($query))
			{
				$this->status= "Successfully..";
			}
			else
			{
				$this->status= "Fail..";
			}
		}
		//Record fetch data
		function selectRecord($query)
		{
			//echo $query;
			$rs=mysql_query($query);
				if(mysql_query($query))
				{
					$this->status= "Successfully..";
				}
				else
				{
					$this->status= "Fail..";
				}
			
			return $rs;
		}
		//fetch records from recordset
		function fetchRecord($rs)
		{   
		    return mysql_fetch_array($rs);
		}
		//upload file
		//get the total rows depend on query
		function totalrows()
		 {
		   return $this->num_rows;
	   }
	   function gen_trivial_password($len = 6)
	   {
    		$r = '';
            for($i=0; $i<$len; $i++)
            $r .= chr(rand(0, 25) + ord('a'));
    	    return $r;
	   }
	}
?>