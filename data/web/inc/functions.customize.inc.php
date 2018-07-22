<?php
function customize($_action, $_item, $_data = null) {
	global $redis;
	global $lang;
  switch ($_action) {
    case 'add':
      if ($_SESSION['mailcow_cc_role'] != "admin") {
        $_SESSION['return'] = array(
          'type' => 'danger',
          'msg' => sprintf($lang['danger']['access_denied'])
        );
        return false;
      }
      switch ($_item) {
        case 'main_logo':
          if (in_array($_data['main_logo']['type'], array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png', 'image/svg+xml'))) {
            try {
              if (file_exists($_data['main_logo']['tmp_name']) !== true) {
                $_SESSION['return'] = array(
                  'type' => 'danger',
                  'msg' => $lang['danger']['img_tmp_missing']
                );
                return false;
              }
              $image = new Imagick($_data['main_logo']['tmp_name']);
              if ($image->valid() !== true) {
                $_SESSION['return'] = array(
                  'type' => 'danger',
                  'msg' => $lang['danger']['img_invalid']
                );
                return false;
              }
              $image->destroy();
            }
            catch (ImagickException $e) {
              $_SESSION['return'] = array(
                'type' => 'danger',
                'msg' => $lang['danger']['img_invalid']
              );
              return false;
            }
          }
          else {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => $lang['danger']['invalid_mime_type']
            );
            return false;
          }
          try {
            $redis->Set('MAIN_LOGO', 'data:' . $_data['main_logo']['type'] . ';base64,' . base64_encode(file_get_contents($_data['main_logo']['tmp_name'])));
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
          $_SESSION['return'] = array(
            'type' => 'success',
            'msg' => $lang['success']['upload_success']
          );
        break;
      }
    break;
    case 'edit':
      if ($_SESSION['mailcow_cc_role'] != "admin") {
        $_SESSION['return'] = array(
          'type' => 'danger',
          'msg' => sprintf($lang['danger']['access_denied'])
        );
        return false;
      }
      switch ($_item) {
        case 'app_links':
          $apps = (array)$_data['app'];
          $links = (array)$_data['href'];
          $out = array();
          if (count($apps) == count($links)) {
            for ($i = 0; $i < count($apps); $i++) {
              $out[] = array($apps[$i] => $links[$i]);
            }
            try {
              $redis->set('APP_LINKS', json_encode($out));
            }
            catch (RedisException $e) {
              $_SESSION['return'] = array(
                'type' => 'danger',
                'msg' => 'Redis: '.$e
              );
              return false;
            }
          }
          $_SESSION['return'] = array(
            'type' => 'success',
            'msg' => $lang['success']['app_links']
          );
        break;
        case 'ui_texts':
          $title_name = $_data['title_name'];
          $main_name = $_data['main_name'];
          $apps_name = $_data['apps_name'];
          $help_text = $_data['help_text'];
          try {
            $redis->set('TITLE_NAME', htmlspecialchars($title_name));
            $redis->set('MAIN_NAME', htmlspecialchars($main_name));
            $redis->set('APPS_NAME', htmlspecialchars($apps_name));
            $redis->set('HELP_TEXT', $help_text);
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
          $_SESSION['return'] = array(
            'type' => 'success',
            'msg' => $lang['success']['ui_texts']
          );
        break;
        case 'duplicity_settings':
          $duplicity_enabled = $_data['duplicity_enabled'];
          $duplicity_dst = $_data['duplicity_dst'];
          $duplicity_options = $_data['duplicity_options'];
          $duplicity_encryption = $_data['duplicity_encryption'];
          $duplicity_s3_apikey = $_data['duplicity_s3_apikey'];
          $duplicity_s3_apisecret = $_data['duplicity_s3_apisecret'];
          $duplicity_ftp_pass = $_data['duplicity_ftp_pass'];
          try {
            $redis->set('DUPLICITY_ENABLED', $duplicity_enabled);
            $redis->set('DUPLICITY_DST', $duplicity_dst);
            $redis->set('DUPLICITY_OPTIONS', $duplicity_options);
            $redis->set('DUPLICITY_ENCRYPTION', $duplicity_encryption);
            $redis->set('DUPLICITY_S3_APIKEY', $duplicity_s3_apikey);
            $redis->set('DUPLICITY_S3_APISECRET', $duplicity_s3_apisecret);
            $redis->set('DUPLICITY_FTP_PASS', $duplicity_ftp_pass);
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
          $_SESSION['return'] = array(
            'type' => 'success',
            'msg' => $lang['success']['duplicity_settings']
          );
        break;
      }
    break;
    case 'delete':
      if ($_SESSION['mailcow_cc_role'] != "admin") {
        $_SESSION['return'] = array(
          'type' => 'danger',
          'msg' => sprintf($lang['danger']['access_denied'])
        );
        return false;
      }
      switch ($_item) {
        case 'main_logo':
          try {
            if ($redis->del('MAIN_LOGO')) {
              $_SESSION['return'] = array(
                'type' => 'success',
                'msg' => $lang['success']['reset_main_logo']
              );
              return true;
            }
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
        break;
      }
    break;
    case 'get':
      switch ($_item) {
        case 'app_links':
          try {
            $app_links = json_decode($redis->get('APP_LINKS'), true);
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
          return ($app_links) ? $app_links : false;
        break;
        case 'main_logo':
          try {
            return $redis->get('MAIN_LOGO');
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
        break;
        case 'ui_texts':
          try {
            $data['title_name'] = ($title_name = $redis->get('TITLE_NAME')) ? $title_name : 'mailcow UI';
            $data['main_name'] = ($main_name = $redis->get('MAIN_NAME')) ? $main_name : 'mailcow UI';
            $data['apps_name'] = ($apps_name = $redis->get('APPS_NAME')) ? $apps_name : 'mailcow Apps';
            $data['help_text'] = ($help_text = $redis->get('HELP_TEXT')) ? $help_text : false;
            return $data;
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
        break;
        case 'duplicity_settings':
          try {
            $data['duplicity_enabled'] = ($duplicity_enabled = $redis->get('DUPLICITY_ENABLED')) ? $duplicity_enabled : false;
            $data['duplicity_dst'] = ($duplicity_dst = $redis->get('DUPLICITY_DST')) ? $duplicity_dst : 'file:///tmp/backups';
            $data['duplicity_options'] = ($duplicity_options = $redis->get('DUPLICITY_OPTIONS')) ? $duplicity_options : '--full-if-older-than 1M';
            $data['duplicity_encryption'] = ($duplicity_encryption = $redis->get('DUPLICITY_ENCRYPTION')) ? $duplicity_encryption : '';
            $data['duplicity_s3_apikey'] = ($duplicity_s3_apikey = $redis->get('DUPLICITY_S3_APIKEY')) ? $duplicity_s3_apikey : '';
            $data['duplicity_s3_apisecret'] = ($duplicity_s3_apisecret = $redis->get('DUPLICITY_S3_APISECRET')) ? $duplicity_s3_apisecret : 'default';
            $data['duplicity_ftp_pass'] = ($duplicity_ftp_pass = $redis->get('DUPLICITY_FTP_PASS')) ? $duplicity_ftp_pass : 'default';
            return $data;
          }
          catch (RedisException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => 'Redis: '.$e
            );
            return false;
          }
        break;
        case 'main_logo_specs':
          try {
            $image = new Imagick();
            $img_data = explode('base64,', customize('get', 'main_logo'));
            if ($img_data[1]) {
              $image->readImageBlob(base64_decode($img_data[1]));
            }
            return $image->identifyImage();
          }
          catch (ImagickException $e) {
            $_SESSION['return'] = array(
              'type' => 'danger',
              'msg' => $lang['danger']['imagick_exception']
            );
            return false;
          }
        break;
      }
    break;
  }
}