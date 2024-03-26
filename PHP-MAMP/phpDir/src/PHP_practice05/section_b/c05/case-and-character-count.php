<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  <?php echo strtolower($text) . '<br/>' .
        strtoupper($text) . '<br/>' .
       'Length is: ' . strlen($text) . '<br/>' .
       'Number of words: ' . str_word_count($text)
  ?>
</p>

<?php include 'includes/footer.php'; ?>