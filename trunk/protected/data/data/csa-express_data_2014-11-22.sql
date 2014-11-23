# Host: localhost  (Version: 5.5.24-log)
# Date: 2014-11-22 23:46:31
# Generator: MySQL-Front 5.3  (Build 4.175)

/*!40101 SET NAMES latin1 */;

#
# Data for table "cruge_authitem"
#

INSERT INTO `cruge_authitem` (`name`,`type`,`description`,`bizrule`,`data`) VALUES ('action_dashboard_index',0,'',NULL,'N;'),('action_ui_editprofile',0,'',NULL,'N;'),('action_ui_rbaclistops',0,'',NULL,'N;'),('action_ui_rbaclistroles',0,'',NULL,'N;'),('action_ui_rbacusersassignments',0,'',NULL,'N;'),('action_ui_sessionadmin',0,'',NULL,'N;'),('action_ui_systemupdate',0,'',NULL,'N;'),('action_ui_usermanagementadmin',0,'',NULL,'N;'),('action_ui_usermanagementupdate',0,'',NULL,'N;'),('admin',0,'',NULL,'N;'),('Cruge.ui.*',0,'',NULL,'N;'),('edit-advanced-profile-features',0,'C:\\wamp\\www\\csa-express\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 98',NULL,'N;');

#
# Data for table "cruge_authitemchild"
#


#
# Data for table "cruge_field"
#


#
# Data for table "cruge_session"
#

#INSERT INTO `cruge_session` (`idsession`,`iduser`,`created`,`expire`,`status`,`ipaddress`,`usagecount`,`lastusage`,`logoutdate`,`ipaddressout`) VALUES (1,1,1413047143,1413095143,0,'::1',1,1413047143,1413053765,'::1'),(2,1,1413053788,1413101788,0,'::1',1,1413053788,1413055623,'::1'),(3,1,1413055628,1413103628,0,'::1',2,1413055650,1413055652,'::1'),(4,1,1413056367,1413104367,1,'::1',1,1413056367,NULL,NULL),(5,1,1413490443,1413538443,0,'::1',1,1413490443,1413490494,'::1'),(6,1,1413582983,1413630983,1,'::1',1,1413582983,NULL,NULL),(7,1,1414041149,1414089149,0,'::1',1,1414041149,1414041187,'::1'),(8,1,1416717530,1416765530,1,'::1',1,1416717530,NULL,NULL);

#
# Data for table "cruge_system"
#

INSERT INTO `cruge_system` (`idsystem`,`name`,`largename`,`sessionmaxdurationmins`,`sessionmaxsameipconnections`,`sessionreusesessions`,`sessionmaxsessionsperday`,`sessionmaxsessionsperuser`,`systemnonewsessions`,`systemdown`,`registerusingcaptcha`,`registerusingterms`,`terms`,`registerusingactivation`,`defaultroleforregistration`,`registerusingtermslabel`,`registrationonlogin`) VALUES (1,'default',NULL,800,10,1,-1,-1,0,0,0,0,NULL,0,'','',1);

#
# Data for table "cruge_user"
#

INSERT INTO `cruge_user` (`iduser`,`regdate`,`actdate`,`logondate`,`username`,`email`,`password`,`authkey`,`state`,`totalsessioncounter`,`currentsessioncounter`) VALUES (1,NULL,NULL,1416717531,'admin','alexish1993@gmail.com','admin','admin',1,0,0);

#
# Data for table "cruge_fieldvalue"
#


#
# Data for table "cruge_authassignment"
#

