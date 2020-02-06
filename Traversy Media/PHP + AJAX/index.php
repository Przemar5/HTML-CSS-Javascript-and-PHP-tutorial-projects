<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		
		<link href="https://bootswatch.com/4/darkly/bootstrap.css" rel="stylesheet">
		<link href="https://bootswatch.com/_assets/css/custom.min.css" rel="stylesheet">
		
		<script>
			function showSuggestion(str) {
				if(str.length == 0) {
					document.getElementById('output').innerHTML = '';
					
				} else {
					//	AJAX Request
					var request = new XMLHttpRequest();
					
					request.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							document.getElementById('output').innerHTML = this.responseText;
						}
					}
					
					request.open('GET', 'suggest.php?q=' + str, true);
					request.send();
				}
			}
		</script>
		
	</head>
	
	<body>
		
		<div class="container">
			
			<h2>Search users</h2>
			
			<form>
				Search User:
				<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
			</form>
			
			<p>Suggestions: <span id="output" style="font-weight:bold;"></span></p>
			
		</div>
		
	</body>
	
</html>