<?php
while($row = $userList['data']->fetch_assoc()) {
	echo $row['id'].PHP_EOL;
}