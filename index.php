<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">


<div class="flex-wrapper">
<section class="flex-item" id="sponsors">
<div class="colorOfTop"></div>
  <div class="arrow_box"><h1 class="centerText">The Boards Sponsors</h1>

  </div>
<div class="marqueeevent" id="marqueeSponsorHeight">
       <?php query_posts('pagename= sponsor'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>


  </div>
  
</section>
<section class="flex-item" id="logoCase">
  <div id="logo"><?php query_posts('pagename= logo'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?></div>
</section>

<section class="flex-item" id="event">
<div class="colorOfTop"></div>
<div class="arrow_box"><h1 class="centerText">Upcomming</h1></div>
   <div class="marqueeevent" id="marqueeEventHeight">

   <?php query_posts('pagename=upcomming'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>


           
  </div>
</section>

<section id="mainBar">
  <span id="clock"></span>
  <div id="banner" class="marquee"><span id="parsha"></span></div>
  <div id="hebrewDate"></div>
</section>
<section class="flex-item" id="picChange">
<?php query_posts('pagename=picture change'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
  
 
</section>
<section class="flex-item" id="mainContent">
<div id="upperMain">
   <div id="WeeklySchedule"> 
   <div class="colorOfTop"></div>
             <div class="arrow_box"><h1 class="centerText">Weekly Schedule</h1></div>
             <div class="marqueeevent" id="marqueeWeeklyScheduleHeight">
<?php query_posts('pagename=weekly schedule'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>


         
             </div>
    </div>

    <div id="shabatSchedule">
    <div class="colorOfTop"></div>
      <div class="arrow_box"><h1 class="centerText">Shabos Schedule</h1></div>
         <div class="marqueeevent" id="marqueeshabosScheduleHeight">
         <?php query_posts('pagename=shabbos schedule'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>

</div>
    </div>
  </div>
  

  <div id="lowerMain">
       <div id="shabosTimes">
       <div class="colorOfTop"></div>
           <div class="arrow_box"><h1 id="parshaInTimes" class="centerText">Erev Pesach</h1></div>
         <div class="marqueeevent" id="marqueeshabosParshaTimesHeight">
            
           <p id="candleLighting"></p>
           </div>
       </div>
       <div id="extraInfo">
       <div class="colorOfTop"></div>
           <div class="arrow_box"><h1 id="parshaInTimes" class="centerText">Calender</h1></div>
               <div class="marqueeevent" id="marqueeshabosCalenderHeight">
              <!-- <p id="calender">
        
           </p>-->
           <!--sunrise:06:33<br>sof zman tefila gra:11:03<br>talis ma:05:40<br>tzeis 595 degrees:20:32<br>chatzos:13:18<br>mincha ketana gra:17:15<br>plag mincha ma:18:39<br>sof zman shema gra:09:55<br>sof zman tefila ma:10:34<br>tzeis 42 minutes:20:46<br>tzeis 72 minutes:21:16<br>tzeis 850 degrees:20:47<br>sunset:20:04<br>sof zman shema ma:09:12<br>alos ma:05:05<br>mincha gedola ma:13:52<br></div>-->
  </div>
</div></section>
<section class="flex-item" id="eventPic">
<?php query_posts('pagename=event picture'); ?>
<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>

				<?php the_content( 'Continue...' ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
                <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
  
  
</section>

</div>





<?php get_footer(); // This fxn gets the footer.php file and renders it ?>