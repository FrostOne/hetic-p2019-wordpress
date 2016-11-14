    <script src="<?php bloginfo('template_url'); ?>/script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var simple = document.querySelector('.js_simple');
        lory(simple, {
          infinite: 1
      });
    });
</script>
<footer id="footer">
</footer>
<?php wp_footer();  ?>
</body>
</html>
