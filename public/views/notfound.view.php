<?php require('views/common/header.php'); ?>
    <div class="not-found">
      <h1>404!</h1>
      <h4>My bad! I can't find the page you're looking for.</h4>
      <button id="btn">Go Back</button>
    </div>
    <script>
      var btn = document.getElementById('btn');
      btn.addEventListener('click', function() {
        window.location.href = '/';
      })
    </script>
<?php require('views/common/footer.php'); ?>