CREATE TABLE `tbl_user_account` (
  `ID` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `USER_NAME` char(128) COLLATE utf8_unicode_ci NOT NULL,
  
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_NAME` (`USER_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
