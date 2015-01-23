<?php
$title = 'Contact Us';
$page = 'contact';
?>	
<?php
include 'header.php';
?>
<script type="text/javascript" charset="utf-8" src="js/jquery.uniform.js"></script>
<script type="text/javascript" charset="utf-8">
	$('li#li_contact').addClass('current');
	$(function(){
		$('select').uniform();
	});
</script>
			<div id="content">
				<div id="contact">
					<h1>We're Excited to Work With You</h1>
					<hr />
					<div class="col">
						<p>Please use our handy contact form below to get started on a project or learn more about our services and how we can work with you to craft a solution that drives your business forward:</p>
						<hr />
						<form action="form.php" name="" id="workForm" method="post">
							<fieldset>
								<ul>
									<li>
										<label for="reason">I'm contacting Marah</label>
										<div>
										<select name="reason" id="reason" size="1"}>
											<option value="work">to get started on a project</option>
											<option value="hello">to say 'Hello'</option>
										</select>
										</div>
									</li>
								</ul>
							</fieldset>
							<fieldset>
								<ul>
									<li><label for="name">Full Name:</label><input type="text" name="name" id="name" /></li>
									<li><label for="company">Company:</label><input type="text" name="company" id="company" /></li>
									<li><label for=""></label><input type="" /></li>
								</ul>
							</fieldset>
							<fieldset>
								<ul>
									<li><label for=""></label><input type="" /></li>
									<li><label for=""></label><input type="" /></li>
									<li><label for=""></label><input type="" /></li>
								</ul>
							</fieldset>
							<fieldset>
								<ul>
									<li><label for=""></label><textarea id="message"></textarea></li>
								</ul>
							</fieldset>
							<fieldset id="" class="">
								<ul>
									<li><label for=""></label><input type="submit" class="submit" /></li>
								</ul>
							</fieldset>
						</form>
					</div>
					<div class="col2">
						<h3>Marah Media</h3><br />
						<p>Testing, testing, 1, 2, 3</p>
					</div>
					
<!--					<p>Please drop us a line so we can stay in touch. We're working on building a web-based form that will help evaluate your interest with <strong>marah</strong><span class="m_green">.</span></p>
					<h1><a href="mailto:info@marahmedia.com?subject=Tell Me More About Marah" class="marahmail">&rarr;&nbsp;info@marahmedia.com</a></h1>-->
				</div>
			</div>
				
		</div>
<?php
include 'footer.php';
?>
