<?php
	$error = '';

	if(isset($_POST["submit"]))
	{
		if(empty($_POST["name"]))
		{
			$error = "<label class='text-danger'>( Enter a name please. )</label>";
		}
		else if(empty($_POST["email"]))
		{
			$error = "<label class='text-danger'>( Enter a email address please. ) </label>";
		}
		else
		{
			if(file_exists('data.json'))
			{
				$current_data = file_get_contents('data.json');
				$array_data = json_decode($current_data, true);
				$form_data = array(
					'name' => $_POST['name'],
					'email' => $_POST['email']
				);
				$array_data[] = $form_data;
				$data_proccesed = json_encode($array_data, JSON_PRETTY_PRINT);

				if(file_put_contents('data.json', $data_proccesed))
				{
					header("Location: index.php");
					exit();
				}
			}
			else
			{
				$error = "<label class='text-danger'>File not found!</label>";
			}
		}

	}
	?>