<?php
echo 
'<div class="navbar">
  <a href="/">Home</a>
  <div class="dropdown">
    <button class="dropbtn"> About Me &#9660;
    </button>
    <div class="dropdown-content">
			<a href="/about">About</a>
			<a href="/cv">CV</a>
			<a href="/failure_cv">Failure CV</a>
			<a href="/shrug">¯\_(ツ)_/¯</a>
		</div>
	</div>

	<div class = "dropdown">
		<button class="dropbtn"> Around the Web &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/pastwork">Past Work</a>
			<a href="/booklist">Book Reviews</a>
			<a href="/links">Links</a>
			<a href="/quotes">Quotes</a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"> Blogs &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/blog">Current Blog</a>
			<a href="https://figtwo.wordpress.com">Fig Two (QCJC)</a>
			<a href="http://campuspress.yale.edu/chunyangding/">Campuspress (Yale)</a>
			<a href="https://seattlechunny.wordpress.com">Seattlechunny (HS)</a>
		</div>
	</div>
	
	
	<div class="dropdown">
		<button class="dropbtn"> Interests &#9660; </button>
		<div class="dropdown-content">
			<a href="/food">Cooking</a>
			<!--a href="/finance">Finance</a-->
			<a href="/guitar">Guitar</a>
			<a href="/photos">Photography</a>
			<a href="/zelda">Zelda</a>
			<a href="/quine">Server Design</a>
			<a href="/physics-ref">Physics/Math References</a>
			<a href="/useful-uchicago-links">Useful UChicago Links</a>
		</div>
	</div>
</div>';
?>