<?php
  echo "<html>";
  echo "<head>";
  echo "<title>" . $title . "</title>";
  echo '<link rel="stylesheet" type="text/css" href="/style.css"/>';
  echo "<body>";
  echo '<div class="content">';
  echo "<h1>" . $title . "</h1>";
  echo '<hr/>';
  if (isset($prev) || isset($next)) {
  echo '<div style="text-align:right">';
    if (isset($prev)) {
      echo '<a href="' . $prev . '">';
      echo '<img border="0" src="/img/button_prev.png"/>';
      echo '</a>';
    }

    echo '&nbsp;';
    echo '&nbsp;';

    if (isset($next)) {
      echo '<a href="' . $next . '">';
      echo '<img border="0" src="/img/button_next.png"/>';
      echo '</a>';
    }

    if (isset($words)) {
      echo '<a href="' . $words . '">';
      echo '<img border="0" src="/img/button_words.png"/>';
      echo '</a>';
    }
  echo '</div>';
  }
?>
