<?php

	if(!empty($_FILES['image'])){

		$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

                $image = time().'.'.$ext;

                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/'.$image);

		echo "Image uploaded successfully as ".$image;

	}else{

		echo "Image Is Empty";

	}

?>