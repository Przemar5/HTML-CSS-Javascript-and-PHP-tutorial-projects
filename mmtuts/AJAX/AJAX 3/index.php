<?php
	include_once 'db.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>

		<script>
			$(document).ready(function() {
				var commentCount = 2;
				
				$('button').click(function() {
					commentCount += 2;
					
					$('#comments').load('load-comments.php', {
						commentNewCount: commentCount
					});
				});
			});
		</script>
	</head>
	
	<body>
		<div id="comments">
			<?php
				$sql = 'SELECT * FROM comments LIMIT 2';
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo '<p>';
						echo $row['author'];
						echo '<br>';
						echo $row['message'];
						echo '</p>';
					}
				} else {
					echo 'There are no comments';
				}
			?>
		</div>

		<button id="btn">Show more comments</button>
	</body>
</html>