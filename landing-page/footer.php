	<footer class="footer">
		<div class="footer__container">
			<p>
				<small>&copy; Copyright 2017. Email Marketing by Victor Themes </small>
			</p>
			<div class="footer__socials">
				<a class="footer__socials--link" href="//www.bancopan.com.br" title="Twitter" target="_blank">
					<span class="icon icon-twitter"></span>
				</a>
				<a class="footer__socials--link" href="//www.bancopan.com.br" title="Facebook" target="_blank">
					<span class="icon icon-facebook"></span>
				</a>
				<a class="footer__socials--link" href="//www.bancopan.com.br" title="Google Plus" target="_blank">
					<span class="icon icon-googleplus"></span>
				</a>
				<a class="footer__socials--link" href="//www.bancopan.com.br" title="Youtube" target="_blank">
					<span class="icon icon-youtube"></span>
				</a>
			</div>
		</div>
	</footer>
	<script defer async src="/assets/scripts/scripts.min.js"></script>

	<script>
		if ('serviceWorker' in navigator && 'PushManager' in window) {
		  console.log('Service Worker and Push is supported');
		  navigator.serviceWorker.register('/sw.js')
		  .then(function(swReg) {
		    console.log('Service Worker is registered', swReg);
		    swRegistration = swReg;
		  })
		  .catch(function(error) {
		    console.error('Service Worker Error', error);
		  });
		} else {
		  console.warn('Push messaging is not supported');
		  pushButton.textContent = 'Push Not Supported';
		}
	</script>

  </body>
</html>
