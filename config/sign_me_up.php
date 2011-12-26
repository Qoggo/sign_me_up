<?php

$config['SignMeUp'] = array(
	'from' => 'Qoggo.com <no-reply@qoggo.com>',
	'layout' => 'default',
	'welcome_subject' => 'Welcome to Qoggo.com',
	'sendAs' => 'text',
	'activation_template' => 'activate',
	'activation_subject' => 'Hi there %username%, please click this link to activate your Qoggo account',
	'welcome_template' => 'welcome',
	'password_reset_field' => 'password_reset',
	'password_reset_template' => 'forgotten_password',
	'password_reset_subject' => 'Password reset from Qoggo.com',
	'new_password_template' => 'new_password',
	'new_password_subject' => 'Your new password from Qoggo.com',
	'xMailer' => 'Qoggo.com Email',
	'contactus_subject' => '%username% submitted a support request',
);
