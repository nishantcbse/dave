/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : dave

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2014-01-11 21:43:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `login_confirm`
-- ----------------------------
DROP TABLE IF EXISTS `login_confirm`;
CREATE TABLE `login_confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_confirm
-- ----------------------------

-- ----------------------------
-- Table structure for `login_integration`
-- ----------------------------
DROP TABLE IF EXISTS `login_integration`;
CREATE TABLE `login_integration` (
  `user_id` int(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `yahoo` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_integration
-- ----------------------------

-- ----------------------------
-- Table structure for `login_levels`
-- ----------------------------
DROP TABLE IF EXISTS `login_levels`;
CREATE TABLE `login_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(255) NOT NULL,
  `level_level` int(1) NOT NULL,
  `level_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `redirect` varchar(255) DEFAULT NULL,
  `welcome_email` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `level_level` (`level_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_levels
-- ----------------------------
INSERT INTO login_levels VALUES ('1', 'Admin', '1', '0', null, '0');
INSERT INTO login_levels VALUES ('2', 'Special', '2', '0', null, '0');
INSERT INTO login_levels VALUES ('3', 'User', '3', '0', null, '0');

-- ----------------------------
-- Table structure for `login_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `login_profiles`;
CREATE TABLE `login_profiles` (
  `p_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pfield_id` int(255) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `profile_value` longtext,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_profiles
-- ----------------------------

-- ----------------------------
-- Table structure for `login_profile_fields`
-- ----------------------------
DROP TABLE IF EXISTS `login_profile_fields`;
CREATE TABLE `login_profile_fields` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `label` varchar(255) NOT NULL,
  `public` tinyint(4) NOT NULL,
  `signup` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_profile_fields
-- ----------------------------

-- ----------------------------
-- Table structure for `login_settings`
-- ----------------------------
DROP TABLE IF EXISTS `login_settings`;
CREATE TABLE `login_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_settings
-- ----------------------------
INSERT INTO login_settings VALUES ('1', 'site_address', 'http://localhost/dave/');
INSERT INTO login_settings VALUES ('2', 'default_session', '0');
INSERT INTO login_settings VALUES ('3', 'admin_email', 'no-reply@localhost');
INSERT INTO login_settings VALUES ('4', 'block-msg-enable', '1');
INSERT INTO login_settings VALUES ('5', 'block-msg', '<h1>Sorry, Hank.</h1>\r\n\r\n<p>We have detected that your user level does not entitle you to view the page requested.</p>\r\n\r\n<p>Please contact the website administrator if you feel this is in error.</p>\r\n\r\n<h5>What to do now?</h5>\r\n<p>To see this page you must <a href=\'logout.php\'>logout</a> and login with sufficiant privileges.</p>');
INSERT INTO login_settings VALUES ('6', 'block-msg-out', 'You need to login to do that.');
INSERT INTO login_settings VALUES ('7', 'block-msg-out-enable', '1');
INSERT INTO login_settings VALUES ('8', 'email-welcome-msg', 'Hello {{full_name}} !\r\n\r\nThanks for registering at {{site_address}}. Here are your account details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}\r\nPassword: *hidden*\r\n\r\nYou will first have to activate your account by clicking on the following link:\r\n\r\n{{activate}}');
INSERT INTO login_settings VALUES ('9', 'email-activate-msg', 'Hi there {{full_name}} !\r\n\r\nYour account at {{site_address}} has been successfully activated :). \r\n\r\nFor your reference, your username is <strong>{{username}}</strong>. \r\n\r\nSee you soon!');
INSERT INTO login_settings VALUES ('10', 'email-activate-subj', 'You\'ve activated your account at Jigowatt !');
INSERT INTO login_settings VALUES ('11', 'email-activate-resend-subj', 'Here\'s your activation link again for Jigowatt');
INSERT INTO login_settings VALUES ('12', 'email-activate-resend-msg', 'Why hello, {{full_name}}. \r\n\r\nI believe you requested this:\r\n{{activate}}\r\n\r\nClick the link above to activate your account :)');
INSERT INTO login_settings VALUES ('13', 'email-welcome-subj', 'Thanks for signing up with Jigowatt :)');
INSERT INTO login_settings VALUES ('14', 'email-forgot-success-subj', 'Your password has been reset at Jigowatt');
INSERT INTO login_settings VALUES ('15', 'email-forgot-success-msg', 'Welcome back, {{full_name}} !\r\n\r\nI\'m just letting you know your password at {{site_address}} has been successfully changed. \r\n\r\nHopefully you were the one that requested this password reset !\r\n\r\nCheers');
INSERT INTO login_settings VALUES ('16', 'email-forgot-subj', 'Lost your password at Jigowatt?');
INSERT INTO login_settings VALUES ('17', 'email-forgot-msg', 'Hi {{full_name}},\r\n\r\nYour username is <strong>{{username}}</strong>.\r\n\r\nTo reset your password at Jigowatt, please click the following password reset link:\r\n{{reset}}\r\n\r\nSee you soon!');
INSERT INTO login_settings VALUES ('18', 'email-add-user-subj', 'You\'re registered with Jigowatt !');
INSERT INTO login_settings VALUES ('19', 'email-add-user-msg', 'Hello {{full_name}} !\r\n\r\nYou\'re now registered at {{site_address}}. Here are your account details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}\r\nPassword: {{password}}');
INSERT INTO login_settings VALUES ('20', 'pw-encrypt-force-enable', '0');
INSERT INTO login_settings VALUES ('21', 'pw-encryption', 'MD5');
INSERT INTO login_settings VALUES ('22', 'phplogin_db_version', '1212300');
INSERT INTO login_settings VALUES ('23', 'email-acct-update-subj', 'Confirm your account changes');
INSERT INTO login_settings VALUES ('24', 'email-acct-update-msg', 'Hi {{full_name}} !\r\n\r\nYou ( {{username}} ) requested a change to update your password or email. Click the link below to confirm this change.\r\n\r\n{{confirm}}\r\n\r\nThanks!\r\n{{site_address}}');
INSERT INTO login_settings VALUES ('25', 'email-acct-update-success-subj', 'Your account has been updated');
INSERT INTO login_settings VALUES ('26', 'email-acct-update-success-msg', 'Hello {{full_name}},\r\n\r\nYour account details at {{site_address}} has been updated. \r\n\r\nYour username: {{username}}\r\n\r\nSee you around!');
INSERT INTO login_settings VALUES ('27', 'guest-redirect', 'http://localhost/dave/login.php?e=1');
INSERT INTO login_settings VALUES ('28', 'signout-redirect-referrer-enable', '1');
INSERT INTO login_settings VALUES ('29', 'signin-redirect-referrer-enable', '1');
INSERT INTO login_settings VALUES ('30', 'default-level', 'a:1:{i:0;s:1:\"3\";}');
INSERT INTO login_settings VALUES ('31', 'new-user-redirect', 'http://localhost/dave/profile.php');
INSERT INTO login_settings VALUES ('32', 'user-activation-enable', '1');
INSERT INTO login_settings VALUES ('33', 'email-new-user-subj', 'A new user has registered !');
INSERT INTO login_settings VALUES ('34', 'email-new-user-msg', 'Hello,\r\n\r\nThere\'s been a new registration at &lt;a href=&quot;{{site_address}}&quot;&gt;your site&lt;/a&gt;.\r\n\r\nHere\'s the user\'s details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}');

-- ----------------------------
-- Table structure for `login_timestamps`
-- ----------------------------
DROP TABLE IF EXISTS `login_timestamps`;
CREATE TABLE `login_timestamps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_timestamps
-- ----------------------------

-- ----------------------------
-- Table structure for `login_users`
-- ----------------------------
DROP TABLE IF EXISTS `login_users`;
CREATE TABLE `login_users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_level` longtext NOT NULL,
  `restricted` int(1) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_users
-- ----------------------------
INSERT INTO login_users VALUES ('1', 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"1\";i:2;s:1:\"2\";}', '0', 'admin', 'Demo Admin', 'no-reply@localhost', '0895c4ac6b8d9a7bb474312b9200c480', '2014-01-11 21:39:35');
INSERT INTO login_users VALUES ('2', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '0', 'special', 'Demo Special', 'test.special@jigowatt.co.uk', '0bd6506986ec42e732ffb866d33bb14e', '2014-01-11 21:39:35');
INSERT INTO login_users VALUES ('3', 'a:1:{i:0;s:1:\"3\";}', '0', 'user', 'Demo User', 'test.user@jigowatt.co.uk', 'ee11cbb19052e40b07aac0ca060c23ee', '2014-01-11 21:39:35');
