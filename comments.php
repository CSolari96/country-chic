<?php

	foreach ($comments as $comment) {

		echo "<div class='comment'>";
		echo "<div class='row'>";
		echo "<div class='comment-avatar col-2'>";
		echo get_avatar($comment, 32);
		echo "</div>";

		echo "<div class='comment-author col-10'>" . get_comment_author_link() . "</div></div>";

		echo "<div class='comment-date'>" . get_comment_date() . "</div>";

		echo "<div class='comment-text'>" . get_comment_text() . "</div></div>";
	}

	comment_form();
?>