    <script src="<?php bloginfo('template_url');?>/script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var simple = document.querySelector('.js_simple');
        lory(simple, {
          infinite: 1
      });
    });
</script>
<footer id="footer">
    <div class="row">
        <div class="col-8">
          <ul>
              <li><a href="<?php echo home_url(); ?>" title="Accueil">ACCUEIL</a></li>
              <li><a href="?page_id=56" title="Pourquoi voter blanc">POURQUOI VOTER BLANC</a></li>
              <li><a href="?page_id=52" title="Le Programme">LE PROGRAMME</a></li>
              <li><a href="?page_id=54" title="Comité de soutien">COMITÉ DE SOUTIEN</a></li>
              <li><a href="?page_id=60" title="Blog">BLOG</a></li>
              <li><a href="?page_id=50" title="Contact">CONTACT</a></li>
          </ul>
      </div>
      <div class="col-4 left">© Copyright 2016 - HETIC</div>
  </div>
</footer>
</body>
</html>
