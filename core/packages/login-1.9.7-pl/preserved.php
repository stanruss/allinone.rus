<?php return array (
  '31a19c88fcbd45eca7b7af14b54dd2d5' => 
  array (
    'criteria' => 
    array (
      'name' => 'login',
    ),
    'object' => 
    array (
      'name' => 'login',
      'path' => '{core_path}components/login/',
      'assets_path' => '{assets_path}components/login/',
    ),
  ),
  '00f7b5991b6b8ba82c7c2ee6e97a4821' => 
  array (
    'criteria' => 
    array (
      'key' => 'login.forgot_password_email_subject',
    ),
    'object' => 
    array (
      'key' => 'login.forgot_password_email_subject',
      'value' => 'Password Retrieval Email',
      'xtype' => 'textfield',
      'namespace' => 'login',
      'area' => 'security',
      'editedon' => NULL,
    ),
  ),
  '25b173aa94033afc6ef3475365ec800f' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.public_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.public_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'login',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  'd16a303ae7dc230a7196a0d255d1b4c5' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.private_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.private_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'login',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  '5b6e55e4e80734ff2a4cc4ec6da56548' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.use_ssl',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.use_ssl',
      'value' => 'false',
      'xtype' => 'combo-boolean',
      'namespace' => 'login',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  '952069b037f77600053263d0c7c1bd6c' => 
  array (
    'criteria' => 
    array (
      'category' => 'Login',
    ),
    'object' => 
    array (
      'id' => 12,
      'parent' => 0,
      'category' => 'Login',
      'rank' => 0,
    ),
  ),
  '0cf9bd9002a62a04a913e7523972c975' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnLoginTpl',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnLoginTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="loginForm">
    <div class="loginMessage">[[+errors]]</div>
    <div class="loginLogin">
        <form class="loginLoginForm" action="[[~[[*id]]]]" method="post">
            
            <fieldset class="loginLoginFieldset">
                
                <label class="loginUsernameLabel">
                    <input class="loginUsername form-control" type="text" name="username" placeholder="Логин" required autofocus />
                </label>
                
                <label class="loginPasswordLabel">
                    <input class="loginPassword form-control" id="inputPassword"  type="password" name="password" placeholder="Пароль" required />
                </label>
                <input class="returnUrl" type="hidden" name="returnUrl" value="[[+request_uri]]" />

                [[+login.recaptcha_html]]
                
                <input class="loginLoginValue" type="hidden" name="service" value="login" />
                <span class="loginLoginButton"><button class="btn-sm btn-primary" type="submit">Войти</button></span>

<div class="forg"><span><a class="left" href="[[~8]]">Забыли пароль?</a></span><span> / </span><span> <a class="right" href="[[~10]]"> Регистрация </a ></span></div>
            </fieldset>
        </form>
    </div>
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="loginForm">
    <div class="loginMessage">[[+errors]]</div>
    <div class="loginLogin">
        <form class="loginLoginForm" action="[[~[[*id]]]]" method="post">
            
            <fieldset class="loginLoginFieldset">
                
                <label class="loginUsernameLabel">
                    <input class="loginUsername form-control" type="text" name="username" placeholder="Логин" required autofocus />
                </label>
                
                <label class="loginPasswordLabel">
                    <input class="loginPassword form-control" id="inputPassword"  type="password" name="password" placeholder="Пароль" required />
                </label>
                <input class="returnUrl" type="hidden" name="returnUrl" value="[[+request_uri]]" />

                [[+login.recaptcha_html]]
                
                <input class="loginLoginValue" type="hidden" name="service" value="login" />
                <span class="loginLoginButton"><button class="btn-sm btn-primary" type="submit">Войти</button></span>

<div class="forg"><span><a class="left" href="[[~8]]">Забыли пароль?</a></span><span> / </span><span> <a class="right" href="[[~10]]"> Регистрация </a ></span></div>
            </fieldset>
        </form>
    </div>
</div>',
    ),
  ),
  '88c00f1fc85f099c509a73460acac530' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnLogoutTpl',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnLogoutTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="loginMessage">[[+errors]]</div>
<br />
<div class="loginLogin">
    <div class="loginRegister pull-right">
        <div class="butt"><a href="[[+logoutUrl]]" title="[[+actionMsg]]"><button class="btn-sm btn-primary out" type="submit">Выйти</button></a>
       <span> Добро пожаловать <b>[[+modx.user.id:userinfo=`username`]]</b></span></div>
        
    </div>
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="loginMessage">[[+errors]]</div>
<br />
<div class="loginLogin">
    <div class="loginRegister pull-right">
        <div class="butt"><a href="[[+logoutUrl]]" title="[[+actionMsg]]"><button class="btn-sm btn-primary out" type="submit">Выйти</button></a>
       <span> Добро пожаловать <b>[[+modx.user.id:userinfo=`username`]]</b></span></div>
        
    </div>
</div>',
    ),
  ),
  '969daf401372a954bf718609c3646d71' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnErrTpl',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnErrTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<p class="error">[[+msg]]</p>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<p class="error">[[+msg]]</p>',
    ),
  ),
  '7e438bd723c0734894efae69b37ca0af' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnForgotPassEmail',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnForgotPassEmail',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<p>[[+username]],</p>

<p>Для активации аккаунта, нажмите пожалуйста на ссылку снизу:</p>

<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>

<p>Если все прошло удачно, можете уже авторизоваться в системе:</p>

<p><strong>Password:</strong> [[+password]]</p>

<p>Если вы не заказывали активацию, проигнорируйте это письмо.</p>

<p>Спасибо,<br />
<em>Администратор сайта [[+sname]]</em></p>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<p>[[+username]],</p>

<p>Для активации аккаунта, нажмите пожалуйста на ссылку снизу:</p>

<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>

<p>Если все прошло удачно, можете уже авторизоваться в системе:</p>

<p><strong>Password:</strong> [[+password]]</p>

<p>Если вы не заказывали активацию, проигнорируйте это письмо.</p>

<p>Спасибо,<br />
<em>Администратор сайта [[+sname]]</em></p>',
    ),
  ),
  'dab2ee104ee442b61cc06f9d3318faec' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnForgotPassSentTpl',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnForgotPassSentTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '
<h2 class="center">Уважаемый пользователь!</h2>
<p class="center">Ваши данные были посланы на ваш почтовый ящик [[+email]].</p>





',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '
<h2 class="center">Уважаемый пользователь!</h2>
<p class="center">Ваши данные были посланы на ваш почтовый ящик [[+email]].</p>





',
    ),
  ),
  'd953c59b6b5bb09266eb9dae28ac9c44' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnForgotPassTpl',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnForgotPassTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="loginFPErrors">[[+loginfp.errors]]</div>
<div class="loginFP">
    <form class="loginFPForm" action="[[~[[*id]]]]" method="post">
        <fieldset class="loginFPFieldset">
            <legend class="loginFPLegend">[[%login.forgot_password]]</legend>
            <label class="loginFPUsernameLabel">[[%login.username]] <br/>
                <input class="loginFPUsername" type="text" name="username" value="[[+loginfp.post.username]]" />
            </label>
            
            <p>[[%login.or_forgot_username]]</p>
            
            <label class="loginFPEmailLabel">[[%login.email]]
                <input class="loginFPEmail" type="text" name="email" value="[[+loginfp.post.email]]" />
            </label>
            
            <input class="returnUrl" type="hidden" name="returnUrl" value="[[+loginfp.request_uri]]" />
            
            <input class="loginFPService" type="hidden" name="login_fp_service" value="forgotpassword" />
            <span class="loginFPButton"><input type="submit" name="login_fp" value="[[%login.reset_password]]" /></span>
        </fieldset>
    </form>
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="loginFPErrors">[[+loginfp.errors]]</div>
<div class="loginFP">
    <form class="loginFPForm" action="[[~[[*id]]]]" method="post">
        <fieldset class="loginFPFieldset">
            <legend class="loginFPLegend">[[%login.forgot_password]]</legend>
            <label class="loginFPUsernameLabel">[[%login.username]] <br/>
                <input class="loginFPUsername" type="text" name="username" value="[[+loginfp.post.username]]" />
            </label>
            
            <p>[[%login.or_forgot_username]]</p>
            
            <label class="loginFPEmailLabel">[[%login.email]]
                <input class="loginFPEmail" type="text" name="email" value="[[+loginfp.post.email]]" />
            </label>
            
            <input class="returnUrl" type="hidden" name="returnUrl" value="[[+loginfp.request_uri]]" />
            
            <input class="loginFPService" type="hidden" name="login_fp_service" value="forgotpassword" />
            <span class="loginFPButton"><input type="submit" name="login_fp" value="[[%login.reset_password]]" /></span>
        </fieldset>
    </form>
</div>',
    ),
  ),
  'cec40d9ae4fb27ee043fe94ec85c2d0c' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnResetPassTpl',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnResetPassTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<!DOCTYPE html>
<html lang="ru">
	<head>
		[[$Head]]
        <style>
 body{background-color:#192626;color: #fff;} 
 .loginResetPass a{text-decoration: underline; color: red;}
section.pwbreak{width:320px;margin:40px auto;}
section.pwbreak p{font-size: 18px}
.fa-arrow-circle-right {margin-right: 5px;}
</style>
	</head>
	<body>
	    



<section class="pwbreak">

<div class="loginResetPass">
<p class="loginResetPassHeader">[[+username]],</p>

<p class="loginResetPassText center">Ваш пароль был сброшен. Возвратитесь <a href="[[+loginUrl]]"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>сюда</a> для авторизации.</p>  
</div>
</section>
[[$Scripts?]]
        
	</body>
</html>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<!DOCTYPE html>
<html lang="ru">
	<head>
		[[$Head]]
        <style>
 body{background-color:#192626;color: #fff;} 
 .loginResetPass a{text-decoration: underline; color: red;}
section.pwbreak{width:320px;margin:40px auto;}
section.pwbreak p{font-size: 18px}
.fa-arrow-circle-right {margin-right: 5px;}
</style>
	</head>
	<body>
	    



<section class="pwbreak">

<div class="loginResetPass">
<p class="loginResetPassHeader">[[+username]],</p>

<p class="loginResetPassText center">Ваш пароль был сброшен. Возвратитесь <a href="[[+loginUrl]]"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>сюда</a> для авторизации.</p>  
</div>
</section>
[[$Scripts?]]
        
	</body>
</html>',
    ),
  ),
  '97d383edd2e66c31c617bb5741b50580' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnRegisterFormTpl',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnRegisterFormTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" placeholder="Обязательно" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" placeholder="Обязательно"/>
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" placeholder="Обязательно"  />
        
        <label for="fullname">[[%register.fullname]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="login-register-btn" value="Register" />
        </div>
    </form>
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" placeholder="Обязательно" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" placeholder="Обязательно"/>
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" placeholder="Обязательно"  />
        
        <label for="fullname">[[%register.fullname]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="login-register-btn" value="Register" />
        </div>
    </form>
</div>',
    ),
  ),
  '10d084d7588e33cc9a32e6e98f28a6e2' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnActivateEmailTpl',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnActivateEmailTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<p>[[+username]],</p>

<p>Спасибо за регистрацию и интерес к нашему сайту [[+sname]], для активации аккаунта нажмите на ссылку:</p>

<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>

<p>После активации аккаунта, вы можете использовать свои логин и пароль:</p>

<p>
Логин: <strong>[[+username]]</strong><br />
Пароль: <strong>[[+password]]</strong></p>

<p>Если вы не регистрировались на сайте [[+sname]], проигнорируйте это письмо.</p>

<p>Спасибо,<br />
<em>Администратор сайта [[+sname]] </em></p>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<p>[[+username]],</p>

<p>Спасибо за регистрацию и интерес к нашему сайту [[+sname]], для активации аккаунта нажмите на ссылку:</p>

<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>

<p>После активации аккаунта, вы можете использовать свои логин и пароль:</p>

<p>
Логин: <strong>[[+username]]</strong><br />
Пароль: <strong>[[+password]]</strong></p>

<p>Если вы не регистрировались на сайте [[+sname]], проигнорируйте это письмо.</p>

<p>Спасибо,<br />
<em>Администратор сайта [[+sname]] </em></p>',
    ),
  ),
  'd22ea77a9e54d2be32d1aedb08e045e6' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnActiveUser',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnActiveUser',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<li>[[+username]]</li>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<li>[[+username]]</li>',
    ),
  ),
  'dfffc10b7b13f9e45a090c8164d7bb17' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnResetPassChangePassTpl',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnResetPassChangePassTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[!+logcp.error_message:notempty=`<p style="color: red;">[[+logcp.error_message]]</p>`]]

<form class="form inline" action="" method="post">
    <input type="hidden" name="nospam:blank" value="" />

    <div class="ff">
        <label for="password_new">[[!%login.password_new]]
            <span class="error">[[+logcp.error.password_new]]</span>
        </label>
        <input type="password" name="password_new:required" id="password_new" value="[[+logcp.password_new]]" />
    </div>

    <div class="ff">
        <label for="password_new_confirm">[[!%login.password_new_confirm]]
            <span class="error">[[+logcp.error.password_new_confirm]]</span>
        </label>
        <input type="password" name="password_new_confirm:required" id="password_new_confirm" value="[[+logcp.password_new_confirm]]" />
    </div>

    <br class="clear" />

    <div class="form-buttons">
        <input type="submit" name="logcp-submit" value="[[!%login.change_password]]" />
    </div>
</form>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '[[!+logcp.error_message:notempty=`<p style="color: red;">[[+logcp.error_message]]</p>`]]

<form class="form inline" action="" method="post">
    <input type="hidden" name="nospam:blank" value="" />

    <div class="ff">
        <label for="password_new">[[!%login.password_new]]
            <span class="error">[[+logcp.error.password_new]]</span>
        </label>
        <input type="password" name="password_new:required" id="password_new" value="[[+logcp.password_new]]" />
    </div>

    <div class="ff">
        <label for="password_new_confirm">[[!%login.password_new_confirm]]
            <span class="error">[[+logcp.error.password_new_confirm]]</span>
        </label>
        <input type="password" name="password_new_confirm:required" id="password_new_confirm" value="[[+logcp.password_new_confirm]]" />
    </div>

    <br class="clear" />

    <div class="form-buttons">
        <input type="submit" name="logcp-submit" value="[[!%login.change_password]]" />
    </div>
</form>',
    ),
  ),
  'a5aa2840670bb56169d8ba2cc2471090' => 
  array (
    'criteria' => 
    array (
      'name' => 'lgnExpiredTpl',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'lgnExpiredTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<style>
 body{background-color:#f8e6c0}   
section.pwofbad{width:300px;margin:40px auto;}
section.pwofbad p{font-size: 18px}
</style>
        
<section class="pwofbad">
<p class="center"><strong>Информация по сбросу пароля</strong></p>
<p class="center">Ваш пароль уже был сброшен или ссылка не актуальна. Если вы желаете сбросить пароль снова, нажмите <a href="http://[[+sname]]/forgot-password.html">здесь</a>.</p>
</section>

',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<style>
 body{background-color:#f8e6c0}   
section.pwofbad{width:300px;margin:40px auto;}
section.pwofbad p{font-size: 18px}
</style>
        
<section class="pwofbad">
<p class="center"><strong>Информация по сбросу пароля</strong></p>
<p class="center">Ваш пароль уже был сброшен или ссылка не актуальна. Если вы желаете сбросить пароль снова, нажмите <a href="http://[[+sname]]/forgot-password.html">здесь</a>.</p>
</section>

',
    ),
  ),
  '656780bc5f9782f8a10212de3a983287' => 
  array (
    'criteria' => 
    array (
      'name' => 'ActiveUsers',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ActiveUsers',
      'description' => 'Shows a list of active, logged-in users.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Login
 *
 * Copyright 2010 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * Shows a list of active, signed-on users
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 *
 * @package login
 **/
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ActiveUsers\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:9:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:20:"prop_activeusers.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"lgnActiveUser";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"tplType";a:7:{s:4:"name";s:7:"tplType";s:4:"desc";s:24:"prop_activeusers.tplType";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:23:"prop_activeusers.sortBy";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"username";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:24:"prop_activeusers.sortDir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ASC";s:4:"text";s:16:"opt_register.asc";}i:1;a:2:{s:5:"value";s:4:"DESC";s:4:"text";s:17:"opt_register.desc";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:22:"prop_activeusers.limit";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"10";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:23:"prop_activeusers.offset";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"classKey";a:7:{s:4:"name";s:8:"classKey";s:4:"desc";s:25:"prop_activeusers.classKey";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"modUser";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:39:"prop_activeusers.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"au.";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:35:"prop_activeusers.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Login
 *
 * Copyright 2010 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * Shows a list of active, signed-on users
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 *
 * @package login
 **/
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ActiveUsers\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '3df27a7aa4a5b9bc8ea4dac06d7f2415' => 
  array (
    'criteria' => 
    array (
      'name' => 'ChangePassword',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ChangePassword',
      'description' => 'Processes a form for changing the password for a User.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Login
 *
 * Copyright 2010 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * ChangePassword snippet
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 * 
 * @package login
 **/
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ChangePassword\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:10:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:34:"prop_changepassword.submitvar_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"logcp-submit";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:16:"fieldOldPassword";a:7:{s:4:"name";s:16:"fieldOldPassword";s:4:"desc";s:41:"prop_changepassword.fieldoldpassword_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"password_old";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:16:"fieldNewPassword";a:7:{s:4:"name";s:16:"fieldNewPassword";s:4:"desc";s:41:"prop_changepassword.fieldnewpassword_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"password_new";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:23:"fieldConfirmNewPassword";a:7:{s:4:"name";s:23:"fieldConfirmNewPassword";s:4:"desc";s:48:"prop_changepassword.fieldconfirmnewpassword_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:20:"password_new_confirm";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"preHooks";a:7:{s:4:"name";s:8:"preHooks";s:4:"desc";s:33:"prop_changepassword.prehooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"postHooks";a:7:{s:4:"name";s:9:"postHooks";s:4:"desc";s:34:"prop_changepassword.posthooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"redirectToLogin";a:7:{s:4:"name";s:15:"redirectToLogin";s:4:"desc";s:40:"prop_changepassword.redirecttologin_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"reloadOnSuccess";a:7:{s:4:"name";s:15:"reloadOnSuccess";s:4:"desc";s:40:"prop_changepassword.reloadonsuccess_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"successMessage";a:7:{s:4:"name";s:14:"successMessage";s:4:"desc";s:39:"prop_changepassword.successmessage_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:42:"prop_changepassword.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"logcp.";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Login
 *
 * Copyright 2010 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * ChangePassword snippet
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 * 
 * @package login
 **/
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ChangePassword\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '4ac3f5856e9d748214827829e639f768' => 
  array (
    'criteria' => 
    array (
      'name' => 'ConfirmRegister',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ConfirmRegister',
      'description' => 'Handles activation of registered user.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Confirm Register Activation Snippet. Snippet to place on an activation
 * page that the user using the Register snippet would be sent to via the
 * activation email.
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ConfirmRegister\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:5:{s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:36:"prop_confirmregister.redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"redirectParams";a:7:{s:4:"name";s:14:"redirectParams";s:4:"desc";s:40:"prop_confirmregister.redirectparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"authenticate";a:7:{s:4:"name";s:12:"authenticate";s:4:"desc";s:38:"prop_confirmregister.authenticate_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:20:"authenticateContexts";a:7:{s:4:"name";s:20:"authenticateContexts";s:4:"desc";s:46:"prop_confirmregister.authenticatecontexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"errorPage";a:7:{s:4:"name";s:9:"errorPage";s:4:"desc";s:35:"prop_confirmregister.errorpage_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Confirm Register Activation Snippet. Snippet to place on an activation
 * page that the user using the Register snippet would be sent to via the
 * activation email.
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ConfirmRegister\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '293a32abf76e3a78d0f34932ce63819d' => 
  array (
    'criteria' => 
    array (
      'name' => 'ForgotPassword',
    ),
    'object' => 
    array (
      'id' => 30,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ForgotPassword',
      'description' => 'Displays a forgot password form.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * ForgotPassword
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * ForgotPassword is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ForgotPassword is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ForgotPassword; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx ForgotPassword Snippet. Displays a form for users who have forgotten
 * their password and gives them the ability to retrieve it.
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ForgotPassword\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:13:{s:8:"emailTpl";a:7:{s:4:"name";s:8:"emailTpl";s:4:"desc";s:33:"prop_forgotpassword.emailtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"lgnForgotPassEmail";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:11:"emailTplAlt";a:7:{s:4:"name";s:11:"emailTplAlt";s:4:"desc";s:36:"prop_forgotpassword.emailtplalt_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"emailTplType";a:7:{s:4:"name";s:12:"emailTplType";s:4:"desc";s:37:"prop_forgotpassword.emailtpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"sentTpl";a:7:{s:4:"name";s:7:"sentTpl";s:4:"desc";s:32:"prop_forgotpassword.senttpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:20:"lgnForgotPassSentTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:11:"sentTplType";a:7:{s:4:"name";s:11:"sentTplType";s:4:"desc";s:36:"prop_forgotpassword.senttpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:28:"prop_forgotpassword.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"lgnForgotPassTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"tplType";a:7:{s:4:"name";s:7:"tplType";s:4:"desc";s:32:"prop_forgotpassword.tpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:6:"errTpl";a:7:{s:4:"name";s:6:"errTpl";s:4:"desc";s:31:"prop_forgotpassword.errtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"lgnErrTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"errTplType";a:7:{s:4:"name";s:10:"errTplType";s:4:"desc";s:35:"prop_forgotpassword.errtpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"emailSubject";a:7:{s:4:"name";s:12:"emailSubject";s:4:"desc";s:37:"prop_forgotpassword.emailsubject_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"resetResourceId";a:7:{s:4:"name";s:15:"resetResourceId";s:4:"desc";s:40:"prop_forgotpassword.resetresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:35:"prop_forgotpassword.redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"redirectParams";a:7:{s:4:"name";s:14:"redirectParams";s:4:"desc";s:39:"prop_forgotpassword.redirectparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ForgotPassword
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * ForgotPassword is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ForgotPassword is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ForgotPassword; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx ForgotPassword Snippet. Displays a form for users who have forgotten
 * their password and gives them the ability to retrieve it.
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ForgotPassword\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  'eebb5510bab855ed82a550d3afc762b7' => 
  array (
    'criteria' => 
    array (
      'name' => 'isLoggedIn',
    ),
    'object' => 
    array (
      'id' => 31,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'isLoggedIn',
      'description' => 'Checks to see if the user is logged in. If not, redirects to Unauthorized Page.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * isLoggedIn
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun@modx.com>
 *
 * isLoggedIn is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * isLoggedIn is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * isLoggedIn; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx isLoggedIn Snippet. Will check to see if user is logged into the current
 * or specific context. If not, redirects to unauthorized page.
 *
 * @package login
 */
/* setup default properties */
$ctxs = !empty($ctxs) ? $ctxs : $modx->context->get(\'key\');
if (!is_array($ctxs)) $ctxs = explode(\',\',$ctxs);

if (!$modx->user->hasSessionContext($ctxs)) {
    if (!empty($redirectTo)) {
        $redirectParams = !empty($redirectParams) ? $modx->fromJSON($redirectParams) : \'\';
        $url = $modx->makeUrl($redirectTo,\'\',$redirectParams,\'full\');
        $modx->sendRedirect($url);
    } else {
        $modx->sendUnauthorizedPage();
    }
}
return \'\';',
      'locked' => 0,
      'properties' => 'a:3:{s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:29:"prop_isloggedin.contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"redirectto";a:7:{s:4:"name";s:10:"redirectto";s:4:"desc";s:31:"prop_isloggedin.redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"redirectparams";a:7:{s:4:"name";s:14:"redirectparams";s:4:"desc";s:35:"prop_isloggedin.redirectparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * isLoggedIn
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun@modx.com>
 *
 * isLoggedIn is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * isLoggedIn is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * isLoggedIn; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx isLoggedIn Snippet. Will check to see if user is logged into the current
 * or specific context. If not, redirects to unauthorized page.
 *
 * @package login
 */
/* setup default properties */
$ctxs = !empty($ctxs) ? $ctxs : $modx->context->get(\'key\');
if (!is_array($ctxs)) $ctxs = explode(\',\',$ctxs);

if (!$modx->user->hasSessionContext($ctxs)) {
    if (!empty($redirectTo)) {
        $redirectParams = !empty($redirectParams) ? $modx->fromJSON($redirectParams) : \'\';
        $url = $modx->makeUrl($redirectTo,\'\',$redirectParams,\'full\');
        $modx->sendRedirect($url);
    } else {
        $modx->sendUnauthorizedPage();
    }
}
return \'\';',
    ),
  ),
  'd1659c708aba688d3d20c8a36d9f996a' => 
  array (
    'criteria' => 
    array (
      'name' => 'Login',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Login',
      'description' => 'Displays a login and logout form.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:22:{s:9:"actionKey";a:7:{s:4:"name";s:9:"actionKey";s:4:"desc";s:25:"prop_login.actionkey_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"service";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"loginKey";a:7:{s:4:"name";s:8:"loginKey";s:4:"desc";s:24:"prop_login.loginkey_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"login";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"logoutKey";a:7:{s:4:"name";s:9:"logoutKey";s:4:"desc";s:25:"prop_login.logoutkey_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"logout";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"tplType";a:7:{s:4:"name";s:7:"tplType";s:4:"desc";s:23:"prop_login.tpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"loginTpl";a:7:{s:4:"name";s:8:"loginTpl";s:4:"desc";s:24:"prop_login.logintpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"lgnLoginTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"logoutTpl";a:7:{s:4:"name";s:9:"logoutTpl";s:4:"desc";s:25:"prop_login.logouttpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"lgnLogoutTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"preHooks";a:7:{s:4:"name";s:8:"preHooks";s:4:"desc";s:24:"prop_login.prehooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"postHooks";a:7:{s:4:"name";s:9:"postHooks";s:4:"desc";s:25:"prop_login.posthooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:6:"errTpl";a:7:{s:4:"name";s:6:"errTpl";s:4:"desc";s:22:"prop_login.errtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"lgnErrTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"errTplType";a:7:{s:4:"name";s:10:"errTplType";s:4:"desc";s:26:"prop_login.errtpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"loginResourceId";a:7:{s:4:"name";s:15:"loginResourceId";s:4:"desc";s:31:"prop_login.loginresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:19:"loginResourceParams";a:7:{s:4:"name";s:19:"loginResourceParams";s:4:"desc";s:35:"prop_login.loginresourceparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:16:"logoutResourceId";a:7:{s:4:"name";s:16:"logoutResourceId";s:4:"desc";s:32:"prop_login.logoutresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:20:"logoutResourceParams";a:7:{s:4:"name";s:20:"logoutResourceParams";s:4:"desc";s:36:"prop_login.logoutresourceparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"loginMsg";a:7:{s:4:"name";s:8:"loginMsg";s:4:"desc";s:24:"prop_login.loginmsg_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"logoutMsg";a:7:{s:4:"name";s:9:"logoutMsg";s:4:"desc";s:25:"prop_login.logoutmsg_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"redirectToPrior";a:7:{s:4:"name";s:15:"redirectToPrior";s:4:"desc";s:31:"prop_login.redirecttoprior_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:22:"redirectToOnFailedAuth";a:7:{s:4:"name";s:22:"redirectToOnFailedAuth";s:4:"desc";s:38:"prop_login.redirecttoonfailedauth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"rememberMeKey";a:7:{s:4:"name";s:13:"rememberMeKey";s:4:"desc";s:29:"prop_login.remembermekey_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"rememberme";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:24:"prop_login.contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:29:"prop_login.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"recaptchaTheme";a:7:{s:4:"name";s:14:"recaptchaTheme";s:4:"desc";s:33:"prop_register.recaptchatheme_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"red";s:4:"text";s:16:"opt_register.red";}i:1;a:2:{s:5:"value";s:5:"white";s:4:"text";s:18:"opt_register.white";}i:2;a:2:{s:5:"value";s:5:"clean";s:4:"text";s:18:"opt_register.clean";}i:3;a:2:{s:5:"value";s:10:"blackglass";s:4:"text";s:23:"opt_register.blackglass";}}s:5:"value";s:5:"clean";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '85fd17b268b739f5c470320949e0f35d' => 
  array (
    'criteria' => 
    array (
      'name' => 'Profile',
    ),
    'object' => 
    array (
      'id' => 33,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Profile',
      'description' => 'Displays Profile data for a User.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
      'locked' => 0,
      'properties' => 'a:3:{s:6:"prefix";a:7:{s:4:"name";s:6:"prefix";s:4:"desc";s:24:"prop_profile.prefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:22:"prop_profile.user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:11:"useExtended";a:7:{s:4:"name";s:11:"useExtended";s:4:"desc";s:29:"prop_profile.useextended_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
    ),
  ),
  'a61021009c70c787fe3402d248b030b6' => 
  array (
    'criteria' => 
    array (
      'name' => 'Register',
    ),
    'object' => 
    array (
      'id' => 34,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Register',
      'description' => 'Handles forms for registering users on the front-end.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:40:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:28:"prop_register.submitvar_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"usergroups";a:7:{s:4:"name";s:10:"usergroups";s:4:"desc";s:29:"prop_register.usergroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"usergroupsField";a:7:{s:4:"name";s:15:"usergroupsField";s:4:"desc";s:34:"prop_register.usergroupsfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:19:"submittedResourceId";a:7:{s:4:"name";s:19:"submittedResourceId";s:4:"desc";s:38:"prop_register.submittedresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"usernameField";a:7:{s:4:"name";s:13:"usernameField";s:4:"desc";s:32:"prop_register.usernamefield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"username";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"passwordField";a:7:{s:4:"name";s:13:"passwordField";s:4:"desc";s:32:"prop_register.passwordfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"password";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:16:"validatePassword";a:7:{s:4:"name";s:16:"validatePassword";s:4:"desc";s:35:"prop_register.validatepassword_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:16:"generatePassword";a:7:{s:4:"name";s:16:"generatePassword";s:4:"desc";s:35:"prop_register.generatepassword_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"trimPassword";a:7:{s:4:"name";s:12:"trimPassword";s:4:"desc";s:31:"prop_register.trimpassword_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:22:"ensurePasswordStrength";a:7:{s:4:"name";s:22:"ensurePasswordStrength";s:4:"desc";s:41:"prop_register.ensurePasswordStrength_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:21:"passwordWordSeparator";a:7:{s:4:"name";s:21:"passwordWordSeparator";s:4:"desc";s:40:"prop_register.passwordWordSeparator_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:" ";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:30:"minimumStrongPasswordWordCount";a:7:{s:4:"name";s:30:"minimumStrongPasswordWordCount";s:4:"desc";s:49:"prop_register.minimumStrongPasswordWordCount_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"3";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:32:"maximumPossibleStrongerPasswords";a:7:{s:4:"name";s:32:"maximumPossibleStrongerPasswords";s:4:"desc";s:51:"prop_register.maximumPossibleStrongerPasswords_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"25";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:33:"ensurePasswordStrengthSuggestions";a:7:{s:4:"name";s:33:"ensurePasswordStrengthSuggestions";s:4:"desc";s:52:"prop_register.ensurePasswordStrengthSuggestions_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"5";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:32:"prop_register.allowedfields_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"emailField";a:7:{s:4:"name";s:10:"emailField";s:4:"desc";s:29:"prop_register.emailfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"email";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"successMsg";a:7:{s:4:"name";s:10:"successMsg";s:4:"desc";s:29:"prop_register.successmsg_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"persistParams";a:7:{s:4:"name";s:13:"persistParams";s:4:"desc";s:32:"prop_register.persistparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"preHooks";a:7:{s:4:"name";s:8:"preHooks";s:4:"desc";s:27:"prop_register.prehooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"postHooks";a:7:{s:4:"name";s:9:"postHooks";s:4:"desc";s:28:"prop_register.posthooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:11:"useExtended";a:7:{s:4:"name";s:11:"useExtended";s:4:"desc";s:30:"prop_register.useextended_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"excludeExtended";a:7:{s:4:"name";s:15:"excludeExtended";s:4:"desc";s:34:"prop_register.excludeextended_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"activation";a:7:{s:4:"name";s:10:"activation";s:4:"desc";s:29:"prop_register.activation_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"activationttl";a:7:{s:4:"name";s:13:"activationttl";s:4:"desc";s:32:"prop_register.activationttl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"180";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:20:"activationResourceId";a:7:{s:4:"name";s:20:"activationResourceId";s:4:"desc";s:39:"prop_register.activationresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"activationEmail";a:7:{s:4:"name";s:15:"activationEmail";s:4:"desc";s:34:"prop_register.activationemail_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:22:"activationEmailSubject";a:7:{s:4:"name";s:22:"activationEmailSubject";s:4:"desc";s:41:"prop_register.activationemailsubject_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:22:"activationEmailTplType";a:7:{s:4:"name";s:22:"activationEmailTplType";s:4:"desc";s:41:"prop_register.activationemailtpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:18:"activationEmailTpl";a:7:{s:4:"name";s:18:"activationEmailTpl";s:4:"desc";s:37:"prop_register.activationemailtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"lgnActivateEmailTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:21:"activationEmailTplAlt";a:7:{s:4:"name";s:21:"activationEmailTplAlt";s:4:"desc";s:40:"prop_register.activationemailtplalt_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:19:"moderatedResourceId";a:7:{s:4:"name";s:19:"moderatedResourceId";s:4:"desc";s:38:"prop_register.moderatedresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:26:"removeExpiredRegistrations";a:7:{s:4:"name";s:26:"removeExpiredRegistrations";s:4:"desc";s:45:"prop_register.removeexpiredregistrations_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:36:"prop_register.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:14:"recaptchaTheme";a:7:{s:4:"name";s:14:"recaptchaTheme";s:4:"desc";s:33:"prop_register.recaptchatheme_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"red";s:4:"text";s:16:"opt_register.red";}i:1;a:2:{s:5:"value";s:5:"white";s:4:"text";s:18:"opt_register.white";}i:2;a:2:{s:5:"value";s:5:"clean";s:4:"text";s:18:"opt_register.clean";}i:3;a:2:{s:5:"value";s:10:"blackglass";s:4:"text";s:23:"opt_register.blackglass";}}s:5:"value";s:5:"clean";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"mathMinRange";a:7:{s:4:"name";s:12:"mathMinRange";s:4:"desc";s:31:"prop_register.mathminrange_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"10";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"mathMaxRange";a:7:{s:4:"name";s:12:"mathMaxRange";s:4:"desc";s:31:"prop_register.mathmaxrange_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"mathField";a:7:{s:4:"name";s:9:"mathField";s:4:"desc";s:28:"prop_register.mathfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"math";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"mathOp1Field";a:7:{s:4:"name";s:12:"mathOp1Field";s:4:"desc";s:31:"prop_register.mathop1field_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"op1";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"mathOp2Field";a:7:{s:4:"name";s:12:"mathOp2Field";s:4:"desc";s:31:"prop_register.mathop2field_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"op2";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:17:"mathOperatorField";a:7:{s:4:"name";s:17:"mathOperatorField";s:4:"desc";s:36:"prop_register.mathoperatorfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"operator";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '601d4b4474a956cdcfb6b63a43b1de29' => 
  array (
    'criteria' => 
    array (
      'name' => 'ResetPassword',
    ),
    'object' => 
    array (
      'id' => 35,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ResetPassword',
      'description' => 'Resets a password from a confirmation email.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * ResetPassword
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * ResetPassword is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ResetPassword is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ResetPassword; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx ResetPassword Snippet. Snippet to place on an activation
 * page that the user using the ForgotPassword snippet would be sent to via the
 * reset email.
 *
 * @package login
 */
if (empty($_REQUEST[\'lp\']) || empty($_REQUEST[\'lu\'])) {
    return \'\';
}
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ResetPassword\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:3:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:27:"prop_resetpassword.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"lgnResetPassTpl";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:7:"tplType";a:7:{s:4:"name";s:7:"tplType";s:4:"desc";s:31:"prop_resetpassword.tpltype_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:8:"modChunk";s:4:"text";s:18:"opt_register.chunk";}i:1;a:2:{s:5:"value";s:4:"file";s:4:"text";s:17:"opt_register.file";}i:2;a:2:{s:5:"value";s:6:"inline";s:4:"text";s:19:"opt_register.inline";}i:3;a:2:{s:5:"value";s:8:"embedded";s:4:"text";s:21:"opt_register.embedded";}}s:5:"value";s:8:"modChunk";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"loginResourceId";a:7:{s:4:"name";s:15:"loginResourceId";s:4:"desc";s:39:"prop_resetpassword.loginresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ResetPassword
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * ResetPassword is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ResetPassword is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ResetPassword; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx ResetPassword Snippet. Snippet to place on an activation
 * page that the user using the ForgotPassword snippet would be sent to via the
 * reset email.
 *
 * @package login
 */
if (empty($_REQUEST[\'lp\']) || empty($_REQUEST[\'lu\'])) {
    return \'\';
}
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'ResetPassword\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '53109f0cbea68960f07a783995a5c774' => 
  array (
    'criteria' => 
    array (
      'name' => 'UpdateProfile',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'UpdateProfile',
      'description' => 'Allows front-end updating of a users own profile.',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * Login
 *
 * Copyright 2010-2012 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx UpdateProfile Snippet. Handles updating of User Profiles.
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'UpdateProfile\');
return $controller->run($scriptProperties);',
      'locked' => 0,
      'properties' => 'a:13:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:33:"prop_updateprofile.submitvar_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:28:"prop_updateprofile.user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"redirectToLogin";a:7:{s:4:"name";s:15:"redirectToLogin";s:4:"desc";s:39:"prop_updateprofile.redirecttologin_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"reloadOnSuccess";a:7:{s:4:"name";s:15:"reloadOnSuccess";s:4:"desc";s:39:"prop_updateprofile.reloadonsuccess_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:12:"syncUsername";a:7:{s:4:"name";s:12:"syncUsername";s:4:"desc";s:36:"prop_updateprofile.syncusername_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:10:"emailField";a:7:{s:4:"name";s:10:"emailField";s:4:"desc";s:34:"prop_updateprofile.emailfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"email";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:11:"useExtended";a:7:{s:4:"name";s:11:"useExtended";s:4:"desc";s:35:"prop_updateprofile.useextended_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:15:"excludeExtended";a:7:{s:4:"name";s:15:"excludeExtended";s:4:"desc";s:39:"prop_updateprofile.excludeextended_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:37:"prop_updateprofile.allowedfields_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:21:"allowedExtendedFields";a:7:{s:4:"name";s:21:"allowedExtendedFields";s:4:"desc";s:45:"prop_updateprofile.allowedextendedfields_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:8:"preHooks";a:7:{s:4:"name";s:8:"preHooks";s:4:"desc";s:32:"prop_updateprofile.prehooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:9:"postHooks";a:7:{s:4:"name";s:9:"postHooks";s:4:"desc";s:33:"prop_updateprofile.posthooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:41:"prop_updateprofile.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"login:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Login
 *
 * Copyright 2010-2012 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx UpdateProfile Snippet. Handles updating of User Profiles.
 *
 * @var modX $modx
 * @var Login $login
 * @var array $scriptProperties
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'UpdateProfile\');
return $controller->run($scriptProperties);',
    ),
  ),
);