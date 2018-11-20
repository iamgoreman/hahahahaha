<?php
require_once 'classes/DB.php';
require_once 'classes/StoriesTable.php';

try {
    $conn = DB::getConnection();

    $table = new StoriesTable($conn);
    
   
	$topStories = $table->findAll('Headline',2);
	$trendingStories = $table->findAll('Trending',4);
	$politicsStories = $table->findAll('Politics',3);
	$sportsStories = $table->findAll('Sport',4);
	
    

}
catch (PDOException $e) {
    $conn = null;
    exit("Connection failed: " . $e->getMessage());
}

?>

<!DOCTYPE HTML>
<html>
	<head> 
		<title></title> 
	
		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Heebo|Roboto" rel="stylesheet">
	</head>
	<body>

		<div class="container ">
			<div class="header twelve">			<!-- header wrapper begin -->
				
			<div class="logo_div eight alpha omega">	
				<img src="#"/>
			</div>					
			
			<div class="two alpha omega follow_div">
				<h3 class="follow_head">Follow Us</h3>
				<div class="follow_icon_div">
					<a href="#"><img class="follow_icon" src="images/facebook.png"/></a>
					<a href="#"><img class="follow_icon" src="images/twitter.png"/></a>
					<a href="#"><img class="follow_icon" src="images/youtube.png"/></a>
					<a href="#"><img class="follow_icon" src="images/g+.png"/></a>
				</div>
			</div>
			
			<div class="search two">	<!-- search div begin -->
				
					<div class="search_signin"> <!-- div contaning search bar , checkboxes and button -->
						
						<div class="sign_in_div">
							<a class="sign_in" href="#">Sign in/Up<img class="sign_icon" src="images/sign.png"/></a>
						</div>
						<div class="search_div">
							<form>
								
								<input class="searchbar" type="text" name="searchbar" placeholder="Search">
								<i class="fa fa-search"></i>		
							</form>
						</div>
					</div>
				
			
			</div><!-- search div ends -->
			
			<!-- navbar div begin -->
			<div class=" twelve navbar_div"> 		
				<ul class="navbar">
					<li ><a class="nav_button" href="#">NEWS</a></li>
					<li ><a class="nav_button" href="#">OPINION</a></li>
					<li ><a class="nav_button" href="#">BUSINESS</a></li>
					<li ><a class="nav_button" href="#">SPORTS</a></li>
					<li ><a class="nav_button" href="#">POLITICS</a></li>
					<li ><a class="nav_button" href="#">ENTERTAINMENT</a></li>
					<li ><a class="nav_button" href="#">LIFESTYLE</a></li>
					<li ><a class="nav_button" href="#">TECHNOLOGY</a></li>
					<li ><a class="nav_button" href="#">FASHION</a></li>
				</ul>
				
			</div> 			
			<!-- navbar div ends -->
			
		</div> <!-- header wrapper ends -->
		
			<div class="twelve headlines">
				<h1 class="section_heading_headlines">Headlines</h1>
				<?php
				
					$row = $topStories->fetch();
					
						echo '<div class="eight headline_prime alpha" >';
						echo '<a class="headline" href="#"><h2 class="title_prime">'.$row[StoriesTable::COLUMN_HEADLINE].'</h2></a>';
						echo '<h5 class="author_title_prime">' . $row[StoriesTable::COLUMN_AUTHOR]. ' - '.$row[StoriesTable::COLUMN_TITLE]. '</h5>'; 
						echo '<p class="article_text_prime">' .  subStr($row[StoriesTable::COLUMN_STORY_TEXT],0,250).'...' . '</p>'; 					
						echo '<div class="breaking_back"><h5 class="breaking_head">Breaking<h5></div>';
						echo '<h5 class="timestamp_prime">'. $row[StoriesTable::COLUMN_TIME]. ' - '.$row[StoriesTable::COLUMN_DATE].'</h5>'; 
						echo '</div>';
					
						$row = $topStories->fetch();
						
						echo '<div class="four headline_secondary omega" >';
						echo '<a class="headline" href="#"><h3 class="title_secondary">'.$row[StoriesTable::COLUMN_HEADLINE].'</h3></a>';
						echo '<h5 class="author_title_secondary">' . $row[StoriesTable::COLUMN_AUTHOR]. ' - '.$row[StoriesTable::COLUMN_TITLE]. '</h5>'; 
						echo '<p class="article_text_secondary">' .  subStr($row[StoriesTable::COLUMN_STORY_TEXT],0,100)  . '</p>'; 					
						echo '<div class="topic_back"><h5 class="topic_head">'. $row[StoriesTable::COLUMN_TYPE].'</div>';
						echo '<h5 class="timestamp_secondary">'. $row[StoriesTable::COLUMN_TIME]. ' - '.$row[StoriesTable::COLUMN_DATE].'</h5>'; 
						echo '</div>';
						
				?>
				
			</div>
			<h1 class="section_heading">Trending</h1>
			<div class="twelve trending">
				
				
				<?php 
					$row = $trendingStories->fetch();
					while ($row != null)
					{
						echo '<div class="three headline_tertiary">';
						echo '<a class="headline" href="#"><h3 class="title_tertiary">'.subStr($row[StoriesTable::COLUMN_HEADLINE],0,55).'</h3></a>';
						echo '<h5 class="author_title_tertiary">' . $row[StoriesTable::COLUMN_AUTHOR]. ' - '.$row[StoriesTable::COLUMN_TITLE]. '</h5>'; 
						echo '<p class="article_text_tertiary">' . subStr($row[StoriesTable::COLUMN_STORY_TEXT],0,100) . '...' . '</p>'; 
						echo '<div class="topic_back"><h5 class="topic_head">'. $row[StoriesTable::COLUMN_TYPE].'</div>';
						echo '<h5 class="timestamp_tertiary">'. $row[StoriesTable::COLUMN_TIME]. ' - '.$row[StoriesTable::COLUMN_DATE].'</h5>'; 
						echo '</div>';
						
						$row = $trendingStories->fetch();
					}	

				?>
				
				
			</div>
			
			<h1 class="section_heading">Politics</h1>
			<div class="twelve politics">
				
				<?php 
					$row = $politicsStories->fetch();
					while ($row != null)
					{
						echo '<div class="four headline_secondary" >';
						echo '<a class="headline" href="#"><h3 class="title_secondary">'.subStr($row[StoriesTable::COLUMN_HEADLINE],0,65).'</h3></a>';
						echo '<h5 class="author_title_secondary">' . $row[StoriesTable::COLUMN_AUTHOR]. ' - '.$row[StoriesTable::COLUMN_TITLE]. '</h5>'; 
						echo '<p class="article_text_secondary">' .  subStr($row[StoriesTable::COLUMN_STORY_TEXT],0,120) . '...'. '</p>'; 					
						echo '<div class="topic_back"><h5 class="topic_head">'. $row[StoriesTable::COLUMN_TYPE].'</div>';
						echo '<h5 class="timestamp_secondary">'. $row[StoriesTable::COLUMN_TIME]. ' - '.$row[StoriesTable::COLUMN_DATE].'</h5>'; 
						echo '</div>';
						
						$row = $politicsStories->fetch();
					}	

				?>
				<div class="more_div">
					<a href="#" class="more">More
					<img class="more_arrow" src="images/arrow.png"/>
					</a>
				</div>
				
			</div>
			<h1 class="section_heading">Sports</h1>
			<div class="twelve business">
				
				<?php 
					$row = $sportsStories->fetch();
					while ($row != null)
					{
						echo '<div class="four headline_secondary" >';
						echo '<a class="headline" href="#"><h3 class="title_secondary">'.subStr($row[StoriesTable::COLUMN_HEADLINE],0,65).'</h3></a>';
						echo '<h5 class="author_title_secondary">' . $row[StoriesTable::COLUMN_AUTHOR]. ' - '.$row[StoriesTable::COLUMN_TITLE]. '</h5>'; 
						echo '<p class="article_text_secondary">' .  subStr($row[StoriesTable::COLUMN_STORY_TEXT],0,120). '...'. '</p>'; 					
						echo '<div class="topic_back"><h5 class="topic_head">'. $row[StoriesTable::COLUMN_TYPE].'</div>';
						echo '<h5 class="timestamp_secondary">'. $row[StoriesTable::COLUMN_TIME]. ' - '.$row[StoriesTable::COLUMN_DATE].'</h5>'; 
						echo '</div>';
						
						$row = $sportsStories->fetch();
					}	

				?>
				<div class="more_div">
					<a href="#" class="more">More
					<img class="more_arrow" src="images/arrow.png"/>
					</a>
				</div>
				
			</div>
			<div class="twelve footer"> 
				<div class="two news_footer alpha omega">
					<h5 class="news_head">News</h5>
					<ul class="footer_list">
						<li class="news_button"><a href="#">News</a></li>
						<li class="news_button"><a href="#">Opinion</a></li>
						<li class="news_button"><a href="#">Business</a></li>
						<li class="news_button"><a href="#">Sports</a></li>
						<li class="news_button"><a href="#">Politics</a></li>
						<li class="news_button"><a href="#">Entertainment</a></li>
						<li class="news_button"><a href="#">Lifestyle</a></li>
						<li class="news_button"><a href="#">Technology</a></li>
						<li class="news_button"><a href="#">Fashion</a></li>
					</ul>
				</div>
				
			
				
				<div class="two contact_footer vert_line alpha omega">
					<h5 class="contact_head">Contact Us</h5>
					<ul class="footer_list ">
						<li class="contact_button"><a href="#">Twitter</a></li>
						<li class="contact_button"><a href="#">Facebook</a></li>
						<li class="contact_button"><a href="#">Google +</a></li>
						<li class="contact_button"><a href="#">YouTube</a></li>
						<li class="contact_button"><a href="#">E-Mail</a></li>
						
					</ul>
				</div>
				
				
				
				<div class="two about_footer vert_line alpha omega">
					<h5 class="about_head">About Us</h5>
					<ul class="footer_list ">
						<li class="about_button"><a href="#">About Us</a></li>
						<li class="about_button"><a href="#">Job Offers</a></li>
						<li class="about_button"><a href="#">Mission Statement</a></li>
						<li class="about_button"><a href="#">Help</a></li>
						<li class="about_button"><a href="#">Terms & Conditions</a></li>
						
					</ul>
				</div>
				
				
				
				<div class="two useful_footer vert_line alpha omega">
					<h5 class="useful_head">Useful Links</h5>
					<ul class="footer_list">
						<li class="useful_button"><a href="#">About Us</a></li>
						<li class="useful_button"><a href="#">Job Offers</a></li>
						<li class="useful_button"><a href="form.html">Submit A Story</a></li>
						<li class="useful_button"><a href="#">Help</a></li>
					
					</ul>
				</div>
			</div>
		</div>
		
	</body>
	
</html>   