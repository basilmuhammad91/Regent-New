".
											if($row['user_id'] == $_SESSION['user_id'])
											{
											."
												<a class='dropdown-item' href='Regent-Enteries.php?edit_id=". $row[0] ."'>Edit</a>
												<a class='dropdown-item' href='Regent-Reporrts.php?delete_id=". $row[0]."'>Delete</a>
											".
											}
											else if($role == 'Admin')
											{
												."
												<a class='dropdown-item' href='Regent-Enteries.php?edit_id=." $row[0] ."'>Edit</a>
												<a class='dropdown-item' href='Regent-Reporrts.php?delete_id=". $row[0] ."'>Delete</a>
												".
											}
											."