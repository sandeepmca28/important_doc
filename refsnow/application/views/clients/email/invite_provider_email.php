<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Invite a provider</title>
<style>
/* -------------------------------------
		GLOBAL
------------------------------------- */
* {
	margin: 0;
	padding: 0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 100%;
	line-height: 1.6;
}

img {
	max-width: 100%;
}

body {
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: none;
	width: 100%!important;
	height: 100%;
}


/* -------------------------------------
		ELEMENTS
------------------------------------- */
a {
	color: #348eda;
}

.btn-primary {
	text-decoration: none;
	color: #FFF;
	background-color: #348eda;
	border: solid #348eda;
	border-width: 10px 20px;
	line-height: 2;
	font-weight: bold;
	margin-right: 10px;
	text-align: center;
	cursor: pointer;
	display: inline-block;
	border-radius: 25px;
}

.btn-secondary {
	text-decoration: none;
	color: #FFF;
	background-color: #aaa;
	border: solid #aaa;
	border-width: 10px 20px;
	line-height: 2;
	font-weight: bold;
	margin-right: 10px;
	text-align: center;
	cursor: pointer;
	display: inline-block;
	border-radius: 25px;
}

.last {
	margin-bottom: 0;
}

.first {
	margin-top: 0;
}

.padding {
	padding: 10px 0;
}


/* -------------------------------------
		BODY
------------------------------------- */
table.body-wrap {
	width: 100%;
	padding: 20px;
}

table.body-wrap .container {
	border: 1px solid #f0f0f0;
}


/* -------------------------------------
		FOOTER
------------------------------------- */
table.footer-wrap {
	width: 100%;	
	clear: both!important;
}

.footer-wrap .container p {
	font-size: 12px;
	color: #666;
	
}

table.footer-wrap a {
	color: #999;
}


/* -------------------------------------
		TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	color: #000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight: 200;
}

h1 {
	font-size: 21px;
}
h2 {
	font-size: 20px;
}
h3 {
	font-size: 19px;
}

p, ul, ol {
	margin-bottom: 10px;
	font-weight: normal;
	font-size: 14px;
}

ul li, ol li {
	margin-left: 5px;
	list-style-position: inside;
}

/* ---------------------------------------------------
		RESPONSIVENESS
		Nuke it from orbit. It's the only way to be sure.
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display: block!important;
	max-width: 600px!important;
	margin: 0 auto!important; /* makes it centered */
	clear: both!important;
}

/* Set the padding on the td rather than the div for Outlook compatibility */
.body-wrap .container {
	padding: 20px;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	max-width: 600px;
	margin: 0 auto;
	display: block;
}

/* Let's make sure tables in the content area are 100% wide */
.content table {
	width: 100%;
}

</style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap" bgcolor="#f6f6f6">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<!-- content -->
			<div class="content">
			<table>
				<tr>
					<td>
                                                <h1>Hi there,</h1>
						<h1>A Private Invitation for You!</h1>
                                                <h2>"<?php echo ucfirst($client->client_first_name.' '.$client->client_last_name); ?>" has invited you to join RefsNow, the most trusted site for screening & verifying Clients</h2>
						<p><?php echo $message; ?></p>
						<h2>How to sign up for RefsNow</h2>
						<p>Provider memberships are for legitimate escorts with good reviews. If you do not have reviews posted by established reviewers, you will not be approved for a RefsNow.</p>
                                                <p>Once you are approved, you will be able to participate in the RefsNow network and use this value tool to insure the safety of yourself and others as well as save time verifying potential clients.</p>
                                                <p>To sign up please click the link below:</p>
                                                <table>
							<tr>
								<td class="padding">
									<p><a href="https://github.com/leemunroe/html-email-template" class="btn-primary">Refsnow.com</a></p>
								</td>
							</tr>
						</table>
                                                <h1>ENJOY THE FOLLOWING FEATURES!</h1>
                                                <h1>RefsNow providers enjoy the following features:</h1>
                                                <ul>
                                                    <li>
                                                        <span>View references/reviews of Clients by verifiable providers 24/7</span>
                                                    </li>
                                                     <li>
                                                        <span>Save time providing Client references over and over again. Once you have posted a review/reference you can invite providers to view your reference on RefsNow.</p>
                                                    </li>
                                                     <li>
                                                        <span>View providers profile who has verified client</span>
                                                    </li>
                                                     <li>
                                                        <span>Only verifiable providers can see detailed confidential information regarding client.</span>
                                                    </li>
                                                     <li>
                                                        <span>Clients may use RefsNow to invite a provider, request a reference or to view the # of references and overall star rating.</span>
                                                    </li>
                                                     <li>
                                                        <span>Clients will not be able to view detailed references or know who is providing references.</span>
                                                    </li>
                                                     <li>
                                                        <span>Database for providers to view history of each client they have reviewed and provided reference.</span>
                                                    </li>
                                                     <li>
                                                        <span>Free Blacklist for all verifiable Provider members Blacklist alerts through email or text (strictly for Providers only).</span>
                                                    </li>
                                                     <li>
                                                        <span>Earn RefsNow Points each time you post a Client review/references, invite a provider, invite a client to join, make a suggestion.</span>
                                                    </li>
                                                     <li>
                                                        <span>Database for providers to view history of each client they have reviewed and provided reference.</span>
                                                    </li>
                                                    
                                                </ul>
                                                <h3>Any questions about RefsNow should be directed to:support@refsnow.com</h3>
						<h3>I look forward to having you join RefsNow</h3>
                                                <h3>sincerely, <?php echo ucfirst($client->client_first_name.' '.$client->client_last_name); ?></h3>
						
					</td>
				</tr>
			</table>
			</div>
			<!-- /content -->
			
		</td>
		<td></td>
	</tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">
			
			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td align="center">
                                                    <p style="display:none;">Don't like these annoying emails? <a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>.
							</p>
						</td>
					</tr>
				</table>
			</div>
			<!-- /content -->
			
		</td>
		<td></td>
	</tr>
</table>
<!-- /footer -->

</body>
</html>
