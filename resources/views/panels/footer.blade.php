<!-- BEGIN: Footer-->
<footer
  class="footer footer-light {{ $configData['footerType'] === 'footer-hidden' ? 'd-none' : '' }} {{ $configData['footerType'] }}">
  <div class="menu">
    {{ menu('footer','bootstrap')}}
  </div>
  <p class="clearfix mb-0">
    <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>&nbsp<a class="ms-25" href="https://cyn-communication.fr"
        target="_blank">Cyn Communication</a>,
      <span class="d-none d-sm-inline-block">Tous droits réservés - </span>
    </span>
    <span class="d-none d-md-inline-block"><i data-feather="award" class="text-primary"></i> <a href="verdier-developpement.fr">MVDI</a> </span>
  </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
