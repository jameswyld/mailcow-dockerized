<?php
/*
 * English language file
 */

$lang['footer']['loading'] = "Please wait...";
$lang['header']['restart_sogo'] = 'Restart SOGo';
$lang['header']['restart_netfilter'] = 'Restart netfilter';
$lang['footer']['restart_container'] = 'Restart container';
$lang['footer']['restart_now'] = 'Restart now';
$lang['footer']['restart_container_info'] = '<b>Important:</b> A graceful restart may take a while to complete, please wait for it to finish.';

$lang['footer']['confirm_delete'] = 'Confirm deletion';
$lang['footer']['delete_these_items'] = 'Please confirm your changes to the following object id:';
$lang['footer']['delete_now'] = 'Delete now';
$lang['footer']['cancel'] = 'Cancel';

$lang['danger']['dkim_domain_or_sel_invalid'] = "DKIM domain or selector invalid";
$lang['success']['dkim_removed'] = "DKIM key %s has been removed";
$lang['success']['dkim_added'] = "DKIM key has been saved";
$lang['danger']['access_denied'] = "Access denied or invalid form data";
$lang['danger']['domain_invalid'] = "Domain name is invalid";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "Max. quota exceeds domain quota limit";
$lang['danger']['object_is_not_numeric'] = "Value %s is not numeric";
$lang['success']['domain_added'] = "Added domain %s";
$lang['success']['items_deleted'] = "Item %s successfully deleted";
$lang['danger']['alias_empty'] = "Alias address must not be empty";
$lang['danger']['last_key'] = 'Last key cannot be deleted';
$lang['danger']['goto_empty'] = "Goto address must not be empty";
$lang['danger']['policy_list_from_exists'] = "A record with given name exists";
$lang['danger']['policy_list_from_invalid'] = "Record has invalid format";
$lang['danger']['alias_invalid'] = "Alias address is invalid";
$lang['danger']['goto_invalid'] = "Goto address is invalid";
$lang['danger']['alias_domain_invalid'] = "Alias domain is invalid";
$lang['danger']['target_domain_invalid'] = "Goto domain is invalid";
$lang['danger']['object_exists'] = "Object %s already exists";
$lang['danger']['domain_exists'] = "Domain %s already exists";
$lang['danger']['alias_goto_identical'] = "Alias and goto address must not be identical";
$lang['danger']['aliasd_targetd_identical'] = "Alias domain must not be equal to target domain";
$lang['danger']['maxquota_empty'] = 'Max. quota per mailbox must not be 0.';
$lang['success']['alias_added'] = "Alias address/es has/have been added";
$lang['success']['alias_modified'] = "Changes to alias/es %s have been saved";
$lang['success']['mailbox_modified'] = "Changes to mailbox %s have been saved";
$lang['success']['resource_modified'] = "Changes to mailbox %s have been saved";
$lang['success']['object_modified'] = "Changes to object %s have been saved";
$lang['success']['f2b_modified'] = "Changes to Fail2ban parameters have been saved";
$lang['danger']['targetd_not_found'] = "Target domain not found";
$lang['success']['aliasd_added'] = "Added alias domain %s";
$lang['success']['aliasd_modified'] = "Changes to alias domain %s have been saved";
$lang['success']['domain_modified'] = "Changes to domain %s have been saved";
$lang['success']['domain_admin_modified'] = "Changes to domain administrator %s have been saved";
$lang['success']['domain_admin_added'] = "Domain administrator %s has been added";
$lang['success']['admin_modified'] = "Changes to administrator have been saved";
$lang['danger']['username_invalid'] = "Username cannot be used";
$lang['danger']['password_mismatch'] = "Confirmation password is not identical";
$lang['danger']['password_complexity'] = "Password does not meet the policy";
$lang['danger']['password_empty'] = "Password must not be empty";
$lang['danger']['login_failed'] = "Login failed";
$lang['danger']['mailbox_invalid'] = "Mailbox name is invalid";
$lang['danger']['description_invalid'] = 'Resource description is invalid';
$lang['danger']['resource_invalid'] = "Resource name is invalid";
$lang['danger']['is_alias'] = "%s is already known as an alias address";
$lang['danger']['is_alias_or_mailbox'] = "%s is already known as an alias, a mailbox or an alias address expanded from an alias domain.";
$lang['danger']['is_spam_alias'] = "%s is already known as a spam alias address";
$lang['danger']['quota_not_0_not_numeric'] = "Quota must be numeric and >= 0";
$lang['danger']['domain_not_found'] = 'Domain %s not found';
$lang['danger']['max_mailbox_exceeded'] = "Max. mailboxes exceeded (%d of %d)";
$lang['danger']['max_alias_exceeded'] = 'Max. aliases exceeded';
$lang['danger']['mailbox_quota_exceeded'] = "Quota exceeds the domain limit (max. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "Not enough space left (space left: %d MiB)";
$lang['success']['mailbox_added'] = "Mailbox %s has been added";
$lang['success']['resource_added'] = "Resource %s has been added";
$lang['success']['domain_removed'] = "Domain %s has been removed";
$lang['success']['alias_removed'] = "Alias %s has been removed";
$lang['success']['alias_domain_removed'] = "Alias domain %s has been removed";
$lang['success']['domain_admin_removed'] = "Domain administrator %s has been removed";
$lang['success']['mailbox_removed'] = "Mailbox %s has been removed";
$lang['success']['eas_reset'] = "ActiveSync devices for user %s were reset";
$lang['success']['resource_removed'] = "Resource %s has been removed";
$lang['danger']['max_quota_in_use'] = "Mailbox quota must be greater or equal to %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "Domain quota must be greater or equal to %s MiB";
$lang['danger']['mailboxes_in_use'] = "Max. mailboxes must be greater or equal to %d";
$lang['danger']['aliases_in_use'] = "Max. aliases must be greater or equal to %d";
$lang['danger']['sender_acl_invalid'] = "Sender ACL value is invalid";
$lang['danger']['domain_not_empty'] = "Cannot remove non-empty domain";
$lang['danger']['validity_missing'] = 'Please assign a period of validity';
$lang['user']['loading'] = "Loading...";
$lang['user']['force_pw_update'] = 'You <b>must</b> set a new password to be able to access groupware related services.';
$lang['user']['active_sieve'] = "Active filter";
$lang['user']['show_sieve_filters'] = "Show active user sieve filter";
$lang['user']['no_active_filter'] = "No active filter available";
$lang['user']['messages'] = "messages"; // "123 messages"
$lang['user']['in_use'] = "Used";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'User settings';
$lang['user']['mailbox_details'] = 'Mailbox details';
$lang['user']['change_password'] = 'Change password';
$lang['user']['client_configuration'] = 'Show configuration guides for email clients and smartphones';
$lang['user']['new_password'] = 'New password';
$lang['user']['save_changes'] = 'Save changes';
$lang['user']['password_now'] = 'Current password (confirm changes)';
$lang['user']['new_password_repeat'] = 'Confirmation password (repeat)';
$lang['user']['new_password_description'] = 'Requirement: 6 characters long, letters and numbers.';
$lang['user']['spam_aliases'] = 'Temporary email aliases';
$lang['user']['alias'] = 'Alias';
$lang['user']['shared_aliases'] = 'Shared alias addresses';
$lang['user']['shared_aliases_desc'] = 'Shared aliases are not affected by user specific settings such as the spam filter or encryption policy. Corresponding spam filters can only be made by an administrator as a domain-wide policy..';
$lang['user']['direct_aliases'] = 'Direct alias addresses';
$lang['user']['direct_aliases_desc'] = 'Direct alias addresses are affected by spam filter and TLS policy settings.';
$lang['user']['is_catch_all'] = 'Catch-all for domain/s';
$lang['user']['aliases_also_send_as'] = 'Also allowed to send as user';
$lang['user']['aliases_send_as_all'] = 'Do not check sender access for the following domain(s) and its alias domains';
$lang['user']['alias_create_random'] = 'Generate random alias';
$lang['user']['alias_extend_all'] = 'Extend aliases by 1 hour';
$lang['user']['alias_valid_until'] = 'Valid until';
$lang['user']['alias_remove_all'] = 'Remove all aliases';
$lang['user']['alias_time_left'] = 'Time left';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Period of validity';
$lang['user']['sync_jobs'] = 'Sync jobs';
$lang['user']['hour'] = 'Hour';
$lang['user']['hours'] = 'Hours';
$lang['user']['day'] = 'Day';
$lang['user']['week'] = 'Week';
$lang['user']['weeks'] = 'Weeks';
$lang['user']['spamfilter'] = 'Spam filter';
$lang['admin']['spamfilter'] = 'Spam filter';
$lang['user']['spamfilter_wl'] = 'Whitelist';
$lang['user']['spamfilter_wl_desc'] = 'Whitelisted email addresses to <b>never</b> classify as spam. Wildcards may be used. A filter is only applied to direct aliases (aliases with a single target mailbox) excluding catch-all aliases and a mailbox itself.';
$lang['user']['spamfilter_bl'] = 'Blacklist';
$lang['user']['spamfilter_bl_desc'] = 'Blacklisted email addresses to <b>always</b> classify as spam and reject. Wildcards may be used. A filter is only applied to direct aliases (aliases with a single target mailbox) excluding catch-all aliases and a mailbox itself.';
$lang['user']['spamfilter_behavior'] = 'Rating';
$lang['user']['spamfilter_table_rule'] = 'Rule';
$lang['user']['spamfilter_table_action'] = 'Action';
$lang['user']['spamfilter_table_empty'] = 'No data to display';
$lang['user']['spamfilter_table_remove'] = 'remove';
$lang['user']['spamfilter_table_add'] = 'Add item';
$lang['user']['spamfilter_green'] = 'Green: this message is not spam';
$lang['user']['spamfilter_yellow'] = 'Yellow: this message may be spam, will be tagged as spam and moved to your junk folder';
$lang['user']['spamfilter_red'] = 'Red: This message is spam and will be rejected by the server';
$lang['user']['spamfilter_default_score'] = 'Default values:';
$lang['user']['spamfilter_hint'] = 'The first value describes the "low spam score", the second represents the "high spam score".';
$lang['user']['spamfilter_table_domain_policy'] = "n/a (domain policy)";
$lang['user']['waiting'] = "Waiting";
$lang['user']['status'] = "Status";
$lang['user']['running'] = "Running";

$lang['user']['tls_policy_warning'] = '<strong>Warning:</strong> If you decide to enforce encrypted mail transfer, you may lose emails.<br>Messages to not satisfy the policy will be bounced with a hard fail by the mail system.<br>This option applies to your primary email address (login name), all addresses derived from alias domains as well as alias addresses <b>with only this single mailbox</b> as target.';
$lang['user']['tls_policy'] = 'Encryption policy';
$lang['user']['tls_enforce_in'] = 'Enforce TLS incoming';
$lang['user']['tls_enforce_out'] = 'Enforce TLS outgoing';
$lang['user']['no_record'] = 'No record';


$lang['user']['tag_handling'] = 'Set handling for tagged mail';
$lang['user']['tag_in_subfolder'] = 'In subfolder';
$lang['user']['tag_in_subject'] = 'In subject';
$lang['user']['tag_in_none'] = 'Do nothing';
$lang['user']['tag_help_explain'] = 'In subfolder: a new subfolder named after the tag will be created below INBOX ("INBOX/Facebook").<br>
In subject: the tags name will be prepended to the mails subject, example: "[Facebook] My News".';
$lang['user']['tag_help_example'] = 'Example for a tagged email address: me<b>+Facebook</b>@example.org';
$lang['user']['eas_reset'] = 'Reset ActiveSync device cache';
$lang['user']['eas_reset_now'] = 'Reset now';
$lang['user']['eas_reset_help'] = 'In many cases a device cache reset will help to recover a broken ActiveSync profile.<br><b>Attention:</b> All elements will be redownloaded!';

$lang['user']['encryption'] = 'Encryption';
$lang['user']['username'] = 'Username';
$lang['user']['last_run'] = 'Last run';
$lang['user']['excludes'] = 'Excludes';
$lang['user']['interval'] = 'Interval';
$lang['user']['active'] = 'Active';
$lang['user']['action'] = 'Action';
$lang['user']['edit'] = 'Edit';
$lang['user']['remove'] = 'Remove';
$lang['user']['create_syncjob'] = 'Create new sync job';

$lang['start']['mailcow_apps_detail'] = 'Use a mailcow app to access your mails, calendar, contacts and more.';
$lang['start']['mailcow_panel_detail'] = '<b>Domain administrators</b> create, modify or delete mailboxes and aliases, change domains and read further information about their assigned domains.<br>
	<b>Mailbox users</b> are able to create time-limited aliases (spam aliases), change their password and spam filter settings.';
$lang['start']['imap_smtp_server_auth_info'] = 'Please use your full email address and the PLAIN authentication mechanism.<br>
Your login data will be encrypted by the server-side mandatory encryption.';
$lang['start']['help'] = 'Show/Hide help panel';
$lang['header']['mailcow_settings'] = 'Configuration';
$lang['header']['administration'] = 'Administration';
$lang['header']['mailboxes'] = 'Mailboxes';
$lang['header']['user_settings'] = 'User settings';
$lang['mailbox']['booking_0'] = 'Always show as free';
$lang['mailbox']['booking_lt0'] = 'Unlimited, but show as busy when booked';
$lang['mailbox']['booking_custom'] = 'Hard-limit to a custom amount of bookings';
$lang['mailbox']['booking_0_short'] = 'Always free';
$lang['mailbox']['booking_lt0_short'] = 'Soft limit';
$lang['mailbox']['booking_custom_short'] = 'Hard limit';
$lang['mailbox']['domain'] = 'Domain';
$lang['mailbox']['spam_aliases'] = 'Temp. alias';
$lang['mailbox']['multiple_bookings'] = 'Multiple bookings';
$lang['mailbox']['kind'] = 'Kind';
$lang['mailbox']['description'] = 'Description';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['aliases'] = 'Aliases';
$lang['mailbox']['domains'] = 'Domains';
$lang['mailbox']['mailboxes'] = 'Mailboxes';
$lang['mailbox']['resources'] = 'Resources';
$lang['mailbox']['mailbox_quota'] = 'Max. size of a mailbox';
$lang['mailbox']['domain_quota'] = 'Quota';
$lang['mailbox']['active'] = 'Active';
$lang['mailbox']['action'] = 'Action';
$lang['mailbox']['backup_mx'] = 'Backup MX';
$lang['mailbox']['domain_aliases'] = 'Domain aliases';
$lang['mailbox']['target_domain'] = 'Target domain';
$lang['mailbox']['target_address'] = 'Goto address';
$lang['mailbox']['username'] = 'Username';
$lang['mailbox']['fname'] = 'Full name';
$lang['mailbox']['filter_table'] = 'Filter table';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['in_use'] = 'In use (%)';
$lang['mailbox']['msg_num'] = 'Message #';
$lang['mailbox']['remove'] = 'Remove';
$lang['mailbox']['edit'] = 'Edit';
$lang['mailbox']['no_record'] = 'No record for object %s';
$lang['mailbox']['no_record_single'] = 'No record';
$lang['mailbox']['add_domain'] = 'Add domain';
$lang['mailbox']['add_domain_alias'] = 'Add domain alias';
$lang['mailbox']['add_mailbox'] = 'Add mailbox';
$lang['mailbox']['add_resource'] = 'Add resource';
$lang['mailbox']['add_alias'] = 'Add alias';
$lang['mailbox']['add_domain_record_first'] = 'Please add a domain first';
$lang['mailbox']['empty'] = 'No results';
$lang['mailbox']['toggle_all'] = 'Toggle all';
$lang['mailbox']['quick_actions'] = 'Actions';
$lang['mailbox']['activate'] = 'Activate';
$lang['mailbox']['deactivate'] = 'Deactivate';
$lang['mailbox']['owner'] = 'Owner';
$lang['mailbox']['mins_interval'] = 'Interval (min)';
$lang['mailbox']['last_run'] = 'Last run';
$lang['mailbox']['excludes'] = 'Excludes';
$lang['mailbox']['last_run_reset'] = 'Schedule next';
$lang['mailbox']['sieve_info'] = 'You can store multiple filters per user, but only one prefilter and one postfilter can be active at the same time.<br>
Each filter will be processed in the described order. Neither a failed script nor an issued "keep;" will stop processing of further scripts.<br>
Prefilter → User scripts → Postfilter → <a href="https://github.com/mailcow/mailcow-dockerized/blob/master/data/conf/dovecot/sieve_after" target="_blank">global sieve postfilter</a>';
$lang['info']['no_action'] = 'No action applicable';


$lang['edit']['syncjob'] = 'Edit sync job';
$lang['edit']['client_id'] = 'Client ID';
$lang['edit']['client_secret'] = 'Client secret';
$lang['edit']['scope'] = 'Scope';
$lang['edit']['grant_types'] = 'Grant types';
$lang['edit']['redirect_uri'] = 'Redirect/Callback URL';
$lang['edit']['hostname'] = 'Hostname';
$lang['edit']['encryption'] = 'Encryption';
$lang['edit']['maxage'] = 'Maximum age of messages in days that will be polled from remote<br><small>(0 = ignore age)</small>';
$lang['edit']['maxbytespersecond'] = 'Max. bytes per second (0 equals to unlimited)';
$lang['edit']['automap'] = 'Try to automap folders ("Sent items", "Sent" => "Sent" etc.)';
$lang['edit']['skipcrossduplicates'] = 'Skip duplicate messages across folders (first come, first serve)';
$lang['add']['automap'] = 'Try to automap folders ("Sent items", "Sent" => "Sent" etc.)';
$lang['add']['skipcrossduplicates'] = 'Skip duplicate messages across folders (first come, first serve)';
$lang['edit']['subfolder2'] = 'Sync into subfolder on destination<br><small>(empty = do not use subfolder)</small>';
$lang['edit']['mins_interval'] = 'Interval (min)';
$lang['edit']['exclude'] = 'Exclude objects (regex)';
$lang['edit']['save'] = 'Save changes';
$lang['edit']['max_mailboxes'] = 'Max. possible mailboxes';
$lang['edit']['title'] = 'Edit object';
$lang['edit']['target_address'] = 'Goto address/es <small>(comma-separated)</small>';
$lang['edit']['active'] = 'Active';
$lang['edit']['force_pw_update'] = 'Force password update at next login';
$lang['edit']['force_pw_update_info'] = 'This user will only be able to login to mailcow UI.';
$lang['edit']['target_domain'] = 'Target domain';
$lang['edit']['password'] = 'Password';
$lang['edit']['password_repeat'] = 'Confirmation password (repeat)';
$lang['edit']['domain_admin'] = 'Edit domain administrator';
$lang['edit']['domain'] = 'Edit domain';
$lang['edit']['edit_alias_domain'] = 'Edit Alias domain';
$lang['edit']['domains'] = 'Domains';
$lang['edit']['alias'] = 'Edit alias';
$lang['edit']['mailbox'] = 'Edit mailbox';
$lang['edit']['description'] = 'Description';
$lang['edit']['max_aliases'] = 'Max. aliases';
$lang['edit']['max_quota'] = 'Max. quota per mailbox (MiB)';
$lang['edit']['domain_quota'] = 'Domain quota';
$lang['edit']['backup_mx_options'] = 'Backup MX options';
$lang['edit']['relay_domain'] = 'Relay domain';
$lang['edit']['relay_all'] = 'Relay all recipients';
$lang['edit']['relay_all_info'] = '<small>If you choose <b>not</b> to relay all recipients, you will need to add a ("blind") mailbox for every single recipient that should be relayed.</small>';
$lang['edit']['full_name'] = 'Full name';
$lang['edit']['quota_mb'] = 'Quota (MiB)';
$lang['edit']['sender_acl'] = 'Allow to send as';
$lang['edit']['previous'] = 'Previous page';
$lang['edit']['unchanged_if_empty'] = 'If unchanged leave blank';
$lang['edit']['dont_check_sender_acl'] = "Disable sender check for domain %s + alias domains";
$lang['edit']['multiple_bookings'] = 'Multiple bookings';
$lang['edit']['kind'] = 'Kind';
$lang['edit']['resource'] = 'Resource';

$lang['add']['syncjob'] = 'Add sync job';
$lang['add']['syncjob_hint'] = 'Be aware that passwords need to be saved plain-text!';
$lang['add']['hostname'] = 'Hostname';
$lang['add']['port'] = 'Port';
$lang['add']['username'] = 'Username';
$lang['add']['enc_method'] = 'Encryption method';
$lang['add']['mins_interval'] = 'Polling interval (minutes)';
$lang['add']['exclude'] = 'Exclude objects (regex)';
$lang['add']['delete2duplicates'] = 'Delete duplicates on destination';
$lang['add']['delete1'] = 'Delete from source when completed';
$lang['add']['delete2'] = 'Delete messages on destination that are not on source';
$lang['edit']['delete2duplicates'] = 'Delete duplicates on destination';
$lang['edit']['delete1'] = 'Delete from source when completed';
$lang['edit']['delete2'] = 'Delete messages on destination that are not on source';

$lang['add']['domain_matches_hostname'] = 'Domain %s matches hostname';
$lang['add']['domain'] = 'Domain';
$lang['add']['active'] = 'Active';
$lang['add']['multiple_bookings'] = 'Multiple bookings';
$lang['add']['description'] = 'Description';
$lang['add']['max_aliases'] = 'Max. possible aliases';
$lang['add']['max_mailboxes'] = 'Max. possible mailboxes';
$lang['add']['mailbox_quota_m'] = 'Max. quota per mailbox (MiB)';
$lang['add']['domain_quota_m'] = 'Total domain quota (MiB)';
$lang['add']['backup_mx_options'] = 'Backup MX options';
$lang['add']['relay_all'] = 'Relay all recipients';
$lang['add']['relay_domain'] = 'Relay this domain';
$lang['add']['relay_all_info'] = '<small>If you choose <b>not</b> to relay all recipients, you will need to add a ("blind") mailbox for every single recipient that should be relayed.</small>';
$lang['add']['alias_address'] = 'Alias address/es';
$lang['add']['alias_address_info'] = '<small>Full email address/es or @example.com, to catch all messages for a domain (comma-separated). <b>mailcow domains only</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Valid domain names only (comma-separated).</small>';
$lang['add']['target_address'] = 'Goto addresses';
$lang['add']['target_address_info'] = '<small>Full email address/es (comma-separated).</small>';
$lang['add']['alias_domain'] = 'Alias domain';
$lang['add']['select'] = 'Please select...';
$lang['add']['target_domain'] = 'Target domain';
$lang['add']['kind'] = 'Kind';
$lang['add']['mailbox_username'] = 'Username (left part of an email address)';
$lang['add']['full_name'] = 'Full name';
$lang['add']['quota_mb'] = 'Quota (MiB)';
$lang['add']['select_domain'] = 'Please select a domain first';
$lang['add']['password'] = 'Password';
$lang['add']['password_repeat'] = 'Confirmation password (repeat)';
$lang['add']['restart_sogo_hint'] = 'You will need to restart the SOGo service container after adding a new domain!';
$lang['add']['goto_null'] = 'Silently discard mail';
$lang['add']['validation_success'] = 'Validated successfully';
$lang['add']['activate_filter_warn'] = 'All other filters will be deactivated, when active is checked.';
$lang['add']['validate'] = 'Validate';
$lang['mailbox']['add_filter'] = 'Add filter';
$lang['add']['sieve_desc'] = 'Short description';
$lang['edit']['sieve_desc'] = 'Short description';
$lang['add']['sieve_type'] = 'Filter type';
$lang['edit']['sieve_type'] = 'Filter type';
$lang['mailbox']['set_prefilter'] = 'Mark as prefilter';
$lang['mailbox']['set_postfilter'] = 'Mark as postfilter';
$lang['mailbox']['filters'] = 'Filters';
$lang['mailbox']['sync_jobs'] = 'Sync jobs';
$lang['mailbox']['inactive'] = 'Inactive';
$lang['edit']['validate_save'] = 'Validate and save';


$lang['login']['username'] = 'Username';
$lang['login']['password'] = 'Password';
$lang['login']['login'] = 'Login';
$lang['login']['delayed'] = 'Login was delayed by %s seconds.';

$lang['tfa']['tfa'] = "Two-factor authentication";
$lang['tfa']['set_tfa'] = "Set two-factor authentication method";
$lang['tfa']['yubi_otp'] = "Yubico OTP authentication";
$lang['tfa']['key_id'] = "An identifier for your YubiKey";
$lang['tfa']['key_id_totp'] = "An identifier for your key";
$lang['tfa']['api_register'] = 'mailcow uses the Yubico Cloud API. Please get an API key for your key <a href="https://upgrade.yubico.com/getapikey/" target="_blank">here</a>';
$lang['tfa']['u2f'] = "U2F authentication";
$lang['tfa']['none'] = "Deactivate";
$lang['tfa']['delete_tfa'] = "Disable TFA";
$lang['tfa']['disable_tfa'] = "Disable TFA until next successful login";
$lang['tfa']['confirm'] = "Confirm";
$lang['tfa']['totp'] = "Time-based OTP (Google Authenticator etc.)";
$lang['tfa']['select'] = "Please select";
$lang['tfa']['waiting_usb_auth'] = "<i>Waiting for USB device...</i><br><br>Please tap the button on your U2F USB device now.";
$lang['tfa']['waiting_usb_register'] = "<i>Waiting for USB device...</i><br><br>Please enter your password above and confirm your U2F registration by tapping the button on your U2F USB device.";
$lang['tfa']['scan_qr_code'] = "Please scan the following code with your authenticator app or enter the code manually.";
$lang['tfa']['enter_qr_code'] = "Your TOTP code if your device cannot scan QR codes";
$lang['tfa']['confirm_totp_token'] = "Please confirm your changes by entering the generated token";

$lang['admin']['rspamd-com_settings'] = '<a href="https://rspamd.com/doc/configuration/settings.html#settings-structure" target="_blank">Rspamd docs</a>
  - A setting name will be auto-generated, please see the example presets below.';

$lang['admin']['no_new_rows'] = 'No further rows available';
$lang['admin']['additional_rows'] = ' additional rows were added'; // parses to 'n additional rows were added'
$lang['admin']['private_key'] = 'Private key';
$lang['admin']['import'] = 'Import';
$lang['admin']['import_private_key'] = 'Import private key';
$lang['admin']['f2b_parameters'] = 'Fail2ban parameters';
$lang['admin']['f2b_ban_time'] = 'Ban time (s)';
$lang['admin']['f2b_max_attempts'] = 'Max. attempts';
$lang['admin']['f2b_retry_window'] = 'Retry window (s) for max. attempts';
$lang['admin']['f2b_netban_ipv4'] = 'IPv4 subnet size to apply ban on (8-32)';
$lang['admin']['f2b_netban_ipv6'] = 'IPv6 subnet size to apply ban on (8-128)';
$lang['admin']['f2b_whitelist'] = 'Whitelisted networks/hosts';
$lang['admin']['f2b_blacklist'] = 'Blacklisted networks/hosts';
$lang['admin']['f2b_list_info'] = 'A blacklisted host or network will always outweigh a whitelist entity. Blacklist records are created at boot-time of the container. Whitelist records are read each time a ban is about to be applied.';
$lang['admin']['search_domain_da'] = 'Search domains';
$lang['admin']['r_inactive'] = 'Inactive restrictions';
$lang['admin']['r_active'] = 'Active restrictions';
$lang['admin']['r_info'] = 'Greyed out/disabled elements on the list of active restrictions are not known as valid restrictions to mailcow and cannot be moved. Unknown restrictions will be set in order of appearance anyway. <br>You can add new elements in <code>inc/vars.local.inc.php</code> to be able to toggle them.';
$lang['admin']['dkim_key_length'] = 'DKIM key length (bits)';
$lang['admin']['dkim_key_valid'] = 'Key valid';
$lang['admin']['dkim_key_unused'] = 'Key unused';
$lang['admin']['dkim_key_missing'] = 'Key missing';
$lang['admin']['dkim_add_key'] = 'Add ARC/DKIM key';
$lang['admin']['dkim_keys'] = 'ARC/DKIM keys';
$lang['admin']['add'] = 'Add';
$lang['add']['add_domain_restart'] = 'Add domain and restart SOGo';
$lang['add']['add_domain_only'] = 'Add domain only';
$lang['admin']['configuration'] = 'Configuration';
$lang['admin']['password'] = 'Password';
$lang['admin']['password_repeat'] = 'Confirmation password (repeat)';
$lang['admin']['active'] = 'Active';
$lang['admin']['inactive'] = 'Inactive';
$lang['admin']['action'] = 'Action';
$lang['admin']['add_domain_admin'] = 'Add domain administrator';
$lang['admin']['add_settings_rule'] = 'Add settings rule';
$lang['admin']['rsetting_desc'] = 'Short description';
$lang['admin']['rsetting_content'] = 'Rule content';
$lang['admin']['rsetting_none'] = 'No rule available';
$lang['admin']['rsetting_no_selection'] = 'Please select a rule';
$lang['admin']['rsettings_preset_1'] = 'Disable all but DKIM and ratelimit for authenticated users';
$lang['admin']['rsettings_preset_2'] = 'Postmasters want spam';
$lang['admin']['rsettings_insert_preset'] = 'Insert example preset "%s"';
$lang['admin']['rsetting_add_rule'] = 'Add rule';
$lang['admin']['admin_domains'] = 'Domain assignments';
$lang['admin']['domain_admins'] = 'Domain administrators';
$lang['admin']['username'] = 'Username';
$lang['admin']['edit'] = 'Edit';
$lang['admin']['remove'] = 'Remove';
$lang['admin']['save'] = 'Save changes';
$lang['admin']['admin'] = 'Administrator';
$lang['admin']['admin_details'] = 'Edit administrator details';
$lang['admin']['unchanged_if_empty'] = 'If unchanged leave blank';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Access';
$lang['admin']['no_record'] = 'No record';
$lang['admin']['filter_table'] = 'Filter table';
$lang['admin']['empty'] = 'No results';
$lang['admin']['time'] = 'Time';
$lang['admin']['priority'] = 'Priority';
$lang['admin']['message'] = 'Message';
$lang['admin']['refresh'] = 'Refresh';
$lang['admin']['to_top'] = 'Back to top';
$lang['admin']['in_use_by'] = 'In use by';
$lang['admin']['forwarding_hosts'] = 'Forwarding Hosts';
$lang['admin']['forwarding_hosts_hint'] = 'Incoming messages are unconditionally accepted from any hosts listed here. These hosts are then not checked against DNSBLs or subjected to greylisting. Spam received from them is never rejected, but optionally it can be filed into the Junk folder. The most common use for this is to specify mail servers on which you have set up a rule that forwards incoming emails to your mailcow server.';
$lang['admin']['forwarding_hosts_add_hint'] = 'You can either specify IPv4/IPv6 addresses, networks in CIDR notation, host names (which will be resolved to IP addresses), or domain names (which will be resolved to IP addresses by querying SPF records or, in their absence, MX records).';
$lang['admin']['relayhosts_hint'] = 'Define relayhosts here to be able to select them in a domains configuration dialog.';
$lang['admin']['add_relayhost_add_hint'] = 'Please be aware that relayhost authentication data will be stored as plain text.';
$lang['admin']['host'] = 'Host';
$lang['admin']['source'] = 'Source';
$lang['admin']['add_forwarding_host'] = 'Add Forwarding Host';
$lang['admin']['add_relayhost'] = 'Add Relayhost';
$lang['success']['forwarding_host_removed'] = "Forwarding host %s has been removed";
$lang['success']['forwarding_host_added'] = "Forwarding host %s has been added";
$lang['success']['relayhost_removed'] = "Relayhost %s has been removed";
$lang['success']['relayhost_added'] = "Relayhost %s has been added";
$lang['diagnostics']['dns_records'] = 'DNS Records';
$lang['diagnostics']['dns_records_24hours'] = 'Please note that changes made to DNS may take up to 24 hours to correctly have their current state reflected on this page. It is intended as a way for you to easily see how to configure your DNS records and to check whether all your records are correctly stored in DNS.';
$lang['diagnostics']['dns_records_name'] = 'Name';
$lang['diagnostics']['dns_records_type'] = 'Type';
$lang['diagnostics']['dns_records_data'] = 'Correct Data';
$lang['diagnostics']['dns_records_status'] = 'Current State';
$lang['diagnostics']['optional'] = 'This record is optional.';
$lang['diagnostics']['cname_from_a'] = 'Value derived from A/AAAA record. This is supported as long as the record points to the correct resource.';

$lang['admin']['relay_from'] = '"From:" address';
$lang['admin']['relay_run'] = "Run test";
$lang['admin']['api_allow_from'] = "Allow API access from these IPs";
$lang['admin']['api_key'] = "API key";
$lang['admin']['activate_api'] = "Activate API";
$lang['admin']['regen_api_key'] = "Regenerate API key";
$lang['admin']['ban_list_info'] = "See a list of banned IPs below: <b>network (remaining ban time) - [actions]</b>.<br />IPs queued to be unbanned, will be removed from the active ban list within a few seconds.<br />Red labels indicate active permanent bans by blacklisting.";
$lang['admin']['unban_pending'] = "unban pending";
$lang['admin']['queue_unban'] = "queue unban";
$lang['admin']['no_active_bans'] = "No active bans";

$lang['admin']['quarantine'] = "Quarantine";
$lang['admin']['quarantine_retention_size'] = "Retentions per mailbox<br />0 indicates <b>inactive</b>!";
$lang['admin']['quarantine_max_size'] = "Maximum size in MiB (larger elements are discarded)<br />0 does <b>not</b> indicate unlimited!";
$lang['admin']['quarantine_exclude_domains'] = "Exclude domains and alias-domains:";

$lang['admin']['ui_texts'] = "UI labels and texts";
$lang['admin']['help_text'] = "Override help text below login mask (HTML allowed)";
$lang['admin']['title_name'] = '"mailcow UI" website title';
$lang['admin']['main_name'] = '"mailcow UI" name';
$lang['admin']['apps_name'] = '"mailcow Apps" name';

$lang['admin']['duplicity_heading'] = 'Backups';
$lang['admin']['duplicity_backup_settings'] = 'Backup Settings';
$lang['admin']['duplicity_backup_help'] = 'Set up backups here';
$lang['admin']['duplicity_enabled'] = 'Enable Backups?';
$lang['admin']['duplicity_backend'] = 'Backup Storage Backend (non-functional):';
$lang['admin']['duplicity_dst'] = 'Destination path';
$lang['admin']['duplicity_encryption'] = 'Backup Encryption Key';
$lang['admin']['duplicity_credentials_help'] = '(Optional) Storage credentials.  Set what is needed according to your backend above. Duplicity will auto-detect which ones to use based on its destination path.';
$lang['admin']['duplicity_s3_apikey'] = 'S3 API Key';
$lang['admin']['duplicity_s3_apisecret'] = 'S3 API Secret';
$lang['admin']['duplicity_ftp_pass'] = 'FTPS/SFTP password';
$lang['admin']['duplicity_jobs_heading'] = 'Backup Jobs';
$lang['admin']['duplicity_jobs_list'] = 'The list of backup jobs.  Jobs are expressed as ENVIRONMENT VARIABLES in this format:<br/><pre>JOB_100_WHAT: backup-command<br>JOB_200_WHEN: interval</pre>At <i>interval</i> they are executed in order of Job ID number.  EG. JOB_200 will be executed before JOB_201. <br>TESTING.  You can test all configured backups in one go with the following command:<br><pre>docker-compose exec duplicity-backup ./test-backups.sh</pre>';
$lang['admin']['duplicity_job_add'] = 'Add Backup Job';
$lang['admin']['duplicity_job_add_help'] = 'Add a new job.  ID represents the order it runs in.  Command is the job to run.<br>Builtin Jobs:<br>backup = executes the default duplicity backup command.<br>mysql-backup = runs mysql-dump on the mysql-mailcow DB.<br>redis-backup = trigger redis to persist to its disk.';
$lang['admin']['duplicity_job_id'] = 'Job ID';
$lang['admin']['duplicity_job_what'] = 'Command';
$lang['admin']['duplicity_job_when'] = 'Interval to run the job at';

$lang['admin']['customize'] = "Customize";
$lang['admin']['change_logo'] = "Change logo";
$lang['admin']['logo_info'] = "Your image will be scaled to a height of 40px for the top navigation bar and a max. width of 250px for the start page. A scalable graphic is highly recommended.";
$lang['admin']['upload'] = "Upload";
$lang['admin']['app_links'] = "App links";
$lang['admin']['app_name'] = "App name";
$lang['admin']['link'] = "Link";
$lang['admin']['remove_row'] = "Remove row";
$lang['admin']['add_row'] = "Add row";
$lang['admin']['reset_default'] = "Reset to default";
$lang['admin']['merged_vars_hint'] = 'Greyed out rows were merged from <code>vars.(local.)inc.php</code> and cannot be modified.';
$lang['mailbox']['waiting'] = "Waiting";
$lang['mailbox']['status'] = "Status";
$lang['mailbox']['running'] = "Running";

$lang['edit']['spam_score'] = "Set a custom spam score";
$lang['edit']['spam_policy'] = "Add or remove items to white-/blacklist";
$lang['edit']['spam_alias'] = "Create or change time limited alias addresses";

$lang['danger']['img_tmp_missing'] = "Cannot validate image file: Temporary file not found";
$lang['danger']['img_invalid'] = "Cannot validate image file";
$lang['danger']['invalid_mime_type'] = "Invalid mime type";
$lang['success']['upload_success'] = "File uploaded successfully";
$lang['success']['app_links'] = "Saved changes to app links";
$lang['success']['ui_texts'] = "Saved changes to UI texts";
$lang['success']['reset_main_logo'] = "Reset to default logo";
$lang['success']['items_released'] = "Selected items were released";
$lang['danger']['imagick_exception'] = "Error: Imagick exception while reading image";

$lang['quarantine']['quarantine'] = "Quarantine";
$lang['quarantine']['qinfo'] = "The quarantine system will save rejected mail to the database, while the sender will <em>not</em> be given the impression of a delivered mail.";
$lang['quarantine']['release'] = "Release";
$lang['quarantine']['empty'] = 'No results';
$lang['quarantine']['toggle_all'] = 'Toggle all';
$lang['quarantine']['quick_actions'] = 'Actions';
$lang['quarantine']['remove'] = 'Remove';
$lang['quarantine']['received'] = "Received";
$lang['quarantine']['action'] = "Action";
$lang['quarantine']['rcpt'] = "Recipient";
$lang['quarantine']['qid'] = "Rspamd QID";
$lang['quarantine']['sender'] = "Sender";
$lang['quarantine']['show_item'] = "Show item";
$lang['quarantine']['check_hash'] = "Search file hash @ VT";
$lang['quarantine']['qitem'] = "Quarantine item";
$lang['quarantine']['subj'] = "Subject";
$lang['quarantine']['text_plain_content'] = "Content (text/plain)";
$lang['quarantine']['text_from_html_content'] = "Content (converted html)";
$lang['quarantine']['atts'] = "Attachments";

$lang['header']['quarantine'] = "Quarantine";
$lang['header']['debug'] = "Debug";

$lang['quarantine']['release_body'] = "We have attached your message as eml file to this message.";
$lang['danger']['release_send_failed'] = "Message could not be released: %s";
$lang['quarantine']['release_subject'] = "Potentially damaging quarantine item %s";

$lang['mailbox']['bcc_map_type'] = "BCC type";
$lang['mailbox']['bcc_type'] = "BCC type";
$lang['mailbox']['bcc_sender_map'] = "Sender map";
$lang['mailbox']['bcc_rcpt_map'] = "Recipient map";
$lang['mailbox']['bcc_local_dest'] = "Local destination";
$lang['mailbox']['bcc_destinations'] = "BCC destination/s";

$lang['mailbox']['bcc'] = "BCC";
$lang['mailbox']['bcc_maps'] = "BCC maps";
$lang['mailbox']['bcc_to_sender'] = "Switch to sender map type";
$lang['mailbox']['bcc_to_rcpt'] = "Switch to recipient map type";
$lang['mailbox']['add_bcc_entry'] = "Add BCC map";
$lang['mailbox']['bcc_info'] = "BCC maps are used to silently forward copies of all messages to another address. A recipient map type entry is used, when the local destination acts as recipient of a mail. Sender maps conform to the same principle.<br/>
  The local destination will not be informed about a failed delivery.";
$lang['mailbox']['address_rewriting'] = 'Address rewriting';
$lang['mailbox']['recipient_maps'] = 'Recipient maps';
$lang['mailbox']['recipient_map_info'] = 'Recipient maps are used to replace the destination address on a message before it is delivered.';
$lang['mailbox']['recipient_map_old'] = 'Original recipient';
$lang['mailbox']['recipient_map_new'] = 'New recipient';
$lang['mailbox']['add_recipient_map_entry'] = 'Add recipient map';
$lang['mailbox']['add_sender_map_entry'] = 'Add sender map';

$lang['oauth2']['scope_ask_permission'] = 'An application asked for the following permissions';
$lang['oauth2']['profile'] = 'Profile';
$lang['oauth2']['profile_desc'] = 'View personal information: username, full name, created, modified, active';
$lang['oauth2']['permit'] = 'Authorize application';
$lang['oauth2']['authorize_app'] = 'Authorize application';
$lang['oauth2']['deny'] = 'Deny';
$lang['oauth2']['access_denied'] = 'Please login as mailbox owner to grant access via OAuth2.';
