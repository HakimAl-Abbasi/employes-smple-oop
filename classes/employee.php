<?php 


class Employee extends DB
{
	public  function select()
	{
		$sql ="SELECT * FROM employes";
 
		$result = $this->connect()->query($sql);

		if($result->rowCount() >0)
        {
            while ($row = $result->fetch())
            {
                $data[] = $row;
            }

            return $data;
        }

	}
}