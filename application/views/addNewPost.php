<!DOCTYPE html>
<html>
<head>
	<title>Nysc Diary|create blog</title>
	<?php echo $css; ?>
</head>
<body>
<?php echo $header; ?>

<div class="container">
	<div class="row">	
		<form action="<?php echo site_url('/insertNewPost');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="col-md-8 col-sm-12">
				<div class="form-group">
				    <label for="postTitle"><h2>Enter post title here</h2></label>
				    <input type="text" class="form-control" name="postTitle" id="postTitle" placeholder="Post title goes here ">
				</div>
				<div class="form-group">
				    <label for="postContent"><h2>Enter your full content</h2></label>
				    <textarea rows="14" class="form-control col-lg-12" id="postContent" name="postContent" placeholder="You can copy and paste your content here or type it."></textarea>
				</div>
	 
	  			  

		</div>
		<div class="col-md-4 ">
			<div class="col-md-11">
					<div class="form-group">
					    <label for="postExcerpt"><h3>Enter your post pitch</h3></label>
					    <textarea rows="2" class="form-control col-lg-12" id="postExcerpt" name="postExcerpt" placeholder="Give a short description of your post, this is what will be displayed on the blog page"></textarea>
					</div>	
					<div class="form-group">
					    <label for="categories"><h4>Select one or more categories</h4></label>
					    <select class="text form-control" id="categories" placeholder="You can type in a new category" multiple>
					    	<option value="">category 1</option>
					    	<option value="">category 2</option>
					    	<option value="">category 3</option>
					    	<option value="" selected disabled>You can add a new category</option>
					    	<option value="">category 4</option>
					    </select>
					</div>
						<div class="form-group">
						<h4><strong>Upload Post Slider</strong></h4>	
						    <label for="blogPicture1">Featured Image 1</label>
						    <input type="file" id="blogPicture1" name="blogPicture1">
	 					</div>	
	 					<div class="form-group">
						    <label for="blogPicture2">Featured Image 2</label>
						    <input type="file" id="blogPicture2" name="blogPicture2">
	 					</div>	
	 				</div>
		</div>
		<div class=" col-md-12 text-right"><button type="submit" class="btn btn-primary">Submit</button><br><br></div>	  
		</form>
	</div>
</div>
<?php echo $footer; ?>
<script src="<?php echo base_url().'assets/tinymce/js/tinymce/tinymce.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/tinymce/js/tinymce/jquery.tinymce.min.js'; ?>"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "autoresize",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>
<?php echo $js; ?>
</body>
</html>