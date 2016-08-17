<!DOCTYPE html>
<html lang="en">
<?php include "head_css.php"; ?>
<body>

<?php include "header.php"; ?>

<div id="youtubelist">
<ul id="applications" class="image-grid">
  <li data-id="id-1" data-type="util">
	<figure class="effect-oscar">
        <figcaption>
            <h2>Nature</h2>         
			<p class="btnPlay"> <a href="https://www.youtube.com/watch?v=oIlIVFBBbNw"></a></p>
			<p>Lily likes to play with crayons and pencils</p>
            <strong>Activity Monitor</strong>
			<span data-type="size">300 KB</span>
        </figcaption>
    </figure>
  </li>
  <li data-id="id-2" data-type="app">
	<figure class="effect-oscar">
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="https://www.youtube.com/watch?v=wuLKvcn-c7A" title="1">View more</a></p>
            <strong>Address Book</strong> 
			<span data-type="size">1904 KB</span>
        </figcaption>
    </figure>    
  </li>
  <li data-id="id-3" data-type="app">
	<figure class="effect-oscar">
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="https://www.youtube.com/watch?v=nY4uOZrzv0s" title="1">View more</a></p>
            <strong>Finder</strong> 
			<span data-type="size">1337 KB</span>
        </figcaption>
    </figure>
  </li>
  <li data-id="id-4" data-type="app">
	<figure class="effect-oscar">
        
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="https://www.youtube.com/watch?v=f61PbjjVuF0" title="1">View more</a></p>
            <strong>Front Row</strong> 
			<span data-type="size">401 KB</span>
        </figcaption>
    </figure>
  </li>
  <li data-id="id-5" data-type="app">
	<figure class="effect-oscar">
        
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="https://www.youtube.com/watch?v=DcqJvYF1ewA" title="1">View more</a></p>
            <strong>Google Pokémon</strong> 
			<span data-type="size">12875 KB</span>
        </figcaption>
    </figure>
  </li>
  <li data-id="id-6" data-type="app">
	<figure class="effect-oscar">
       
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="https://www.youtube.com/watch?v=YrddaP6ml1M" title="1">View more</a></p>
            <strong>iCal</strong> 
			<span data-type="size">5273 KB</span>
        </figcaption>
    </figure>  
  </li>
</ul>
</div>


<?php include "javascript.php"; ?>
</body>
<script>

jQuery(function(){ // on DOM load
	//syntax $(selector).youtubegallery()
	$('#youtubelist').youtubegallery()
})

</script>
</html>