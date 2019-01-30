<div class="container">
	<div class="bg-w3layouts-main">
		<h2>Fill out the form to enroll our service</h2>
		<div class="form-content-agileinfo">
			<form data-toggle="validator" action="user/signup" method="post">
				<div class="bottom-w3-agileits-space">
					<input type="text" name="name" placeholder="Полное имя" required>
				</div>
				<div class="main-divs-agileits-w3layouts">
					<div class="bottom-w3-agileits-space form-text1 control-label">
						<input type="text" name="login" placeholder="Никнейм" required>
					</div>
					<div class="bottom-w3-agileits-space form-text2 has-feedback">
						<input type="email" name="email" placeholder="Email" required>
					</div>
				</div>
				<!--
				<div class="bottom-w3-agileits-space form-text1">
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="">Country</option>
						<option value="">Argentina</option>
						<option value="">Brazil</option>
						<option value="">Canada</option>
						<option value="">Denmark</option>
						<option value="">France</option>
						<option value="">France</option>
					</select>
				</div>
				-->
				<div class="main-divs-agileits-w3layouts">
					<div class="bottom-w3-agileits-space form-text1 has-feedback">
						<input type="password" name="password" placeholder="Пароль" required data-error="Минимум шесть символов" data-minlength="6">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
					</div>

					<div class="bottom-w3-agileits-space form-text2 has-feedback">
						<input type="password" placeholder="Повторить пароль" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

					</div>
				</div>
				<!--<div class="bottom-text-wthree">
					<h6>May we send information about us to the mailing address that you provided?</h6>
					<ul class="radio-section">
						<li>
							<input type="radio" id="a-option" name="selector1">
							<label for="a-option">Yes</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option" name="selector1">
							<label for="b-option">No</label>
							<div class="check">
								<div class="inside"></div>
							</div>
						</li>
					</ul>
					<div class="clear"></div>
				</div>-->
				<input type="submit" value="Зарегистрировать">
				<div class="clear"></div>
			</form>
		</div>
	</div>
	<!--copyright-->
	<div class="copy-right-w3-agile">

	</div>
</div>
