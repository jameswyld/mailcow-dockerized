<?php

function duplicityjob($_action, $_data = null) {
	global $redis;
	global $lang;
  switch ($_action) {
    case 'add':
      global $lang;
      if ($_SESSION['mailcow_cc_role'] != "admin") {
        $_SESSION['return'] = array(
          'type' => 'danger',
          'msg' => sprintf($lang['danger']['access_denied'])
        );
        return false;
      }
      $duplicity_job_id = $_data['duplicity_job_id'];
      $duplicity_job_what = $_data['duplicity_job_what'];

      // take the intervals and make them a single string
      // eg. "daily weekly monthly"
      $duplicity_job_intervals = $_data['duplicity_job_when'];
      $duplicity_job_when = "";
      if (is_array($duplicity_job_intervals)) {
        foreach ($duplicity_job_intervals as $interval) {
          $duplicity_job_when .= $interval . " ";
          }
        } else {
        $duplicity_job_when = $duplicity_job_intervals;
      }
      $duplicity_job_when = trim($duplicity_job_when);

      // build the tecnativa/duplicity job envvar format
      $dup_job_env_what = 'JOB_' . $duplicity_job_id . '_WHAT';
      $dup_job_env_when = 'JOB_' . $duplicity_job_id . '_WHEN';

      // Add/update the job in redis
      try {
        $redis->hSet('DUPLICITY_JOBS', $dup_job_env_what, $duplicity_job_what);
        $redis->hSet('DUPLICITY_JOBS', $dup_job_env_when, $duplicity_job_when);
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
        'msg' => sprintf($lang['success']['duplicity_job_added'], htmlspecialchars($duplicity_job_id))
      );
    break;
    case 'delete':
      $jobs = (array)$_data['duplicityjob'];
      foreach ($jobs as $job) {
        try {
          $redis->hDel('DUPLICITY_JOBS', $job);
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
        'msg' => sprintf($lang['success']['duplicity_job_removed'], htmlspecialchars(implode(', ', $jobs)))
      );
    break;
    case 'get':
      if ($_SESSION['mailcow_cc_role'] != "admin") {
        return false;
      }
      $duplicityjobsdata = array();
      try {
        $jobs = $redis->hGetAll('DUPLICITY_JOBS');
        if (!empty($jobs)) {
        foreach ($jobs as $job => $value) {
          $duplicityjobsdata[] = array(
            'job' => $job,
            'value' => $value
          );
        }
        }
      }
      catch (RedisException $e) {
        $_SESSION['return'] = array(
          'type' => 'danger',
          'msg' => 'Redis: '.$e
        );
        return false;
      }
      return $duplicityjobsdata;
    break;
  }
}