
	<!-- Scripts -->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery.scrollex.min.js"></script>
  <script src="/assets/js/jquery.scrolly.min.js"></script>
  <script src="/assets/js/browser.min.js"></script>
  <script src="/assets/js/breakpoints.min.js"></script>
  <script src="/assets/js/util.min.js"></script>
  <script src="/assets/js/main.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>

  <!-- Magnific Popup core JS file -->
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/switchery.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('.js-switch').prop("checked","checked");
      $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
      });
      $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
      });
      $('.js-switch').change(function(){
        location.href ="/<?php echo $lang = 'es' ? 'en' : 'es'; ?>/";
      });
    });
  </script>

  <script type="text/javascript">
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
      var switchery = new Switchery(html,{ size: 'small',secondaryColor: '#2186DD'});
    });
  </script>