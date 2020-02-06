<?php
	include_once 'includes/header.php';
?>

<br>


<main role="main" class="container">
  <div class="row mt-5">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h1 class="blog-post-title">Sample blog post</h1>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <h2>Heading</h2>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <pre><code>Example code block</code></pre>
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        <ol>
          <li>Vestibulum id ligula porta felis euismod semper.</li>
          <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
          <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
        </ol>
        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
	  </div><!-- /.blog-post -->
		
		<h3>Comments</h3>
		
		<div class="comment-aera">
			<form>
			  <div class="form-group">
				<label for="name">Nick</label>
				<input type="text" name="name" class="form-control" id="name" aria-describedby="nick" placeholder="Enter name">
			  </div>
			  
			  <div class="form-group">
				<label for="website">Website (optional)</label>
				<input type="text" name="name" class="form-control" id="website" aria-describedby="optionalWebsite" placeholder="">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Comment</label>
				<textarea name="comment" class="form-control" id="exampleInputPassword1" placeholder="Comment" cols="60" rows="10"></textarea>
			  </div>
			  
			  <button type="submit" name="post_comment" class="btn btn-primary">Post comment</button>
			</form>
			
			<div style="height:50px;"></div>
			<hr>
			<div style="height:15px;"></div>
			
			<div class="media border p-3 comment">
			  <img src="img_avatar3.png" class="mr-3 mt-3 rounded-circle" style="width:50px;">
			  <div class="media-body">
				<h4><span class="comment_name">John Doe</span> <small><i>Posted on February <span class="comment_date">19, 2016</span></i></small></h4>
				<p>Lorem ipsum...</p>
			  </div>
			</div>
			
		</div>
		
    </div><!-- /.blog-main -->

<?php
	include_once 'includes/sidebar.php';
	include_once 'includes/footer.php';
?>