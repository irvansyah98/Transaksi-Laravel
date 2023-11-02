-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carp_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initiator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initiator_div` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initiator_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_div` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effectiveness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`id`, `create_date`, `carp_code`, `category`, `initiator`, `initiator_div`, `initiator_branch`, `recipient`, `recipient_div`, `recipient_branch`, `verified_by`, `due_date`, `effectiveness`, `status_date`, `stage`, `status`, `created_at`, `updated_at`) VALUES
(1,	'15-Nov-21',	'CARP00089',	'internal audit findings, non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'ELLIE CAMACHO',	'OPERATION',	'JKT',	NULL,	'15-Dec-21',	NULL,	'15-Nov-21',	'Open',	'Open',	NULL,	NULL),
(2,	'15-Nov-21',	'CARP00088',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'FIN CASEY',	'KEY ACCOUNT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'15-Dec-21',	'Effective',	'16-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(3,	'15-Nov-21',	'CARP00087',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'GAMORA',	'OPERATION',	'SUB',	NULL,	'15-Dec-21',	NULL,	'15-Nov-21',	'Open',	'Open',	NULL,	NULL),
(4,	'04-Nov-21',	'CARP00086',	'oportunity for improvement',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'NAMORITA \"NITA\" PRENTISS',	'COMMERCIAL',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'04-Dec-21',	'Effective',	'17-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(5,	'22-Oct-21',	'CARP00085',	'non conformity',	'BARBARA \"BOBBI\" MORSE',	'SALES',	'SUB',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	NULL,	'21-Nov-21',	NULL,	'22-Oct-21',	'Open',	'Open',	NULL,	NULL),
(6,	'15-Oct-21',	'CARP00084',	'internal audit findings, non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'KEY ACCOUNT',	'SUB',	NULL,	'14-Nov-21',	NULL,	'15-Oct-21',	'Open',	'Open',	NULL,	NULL),
(7,	'15-Oct-21',	'CARP00083',	'internal audit findings, non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'KEY ACCOUNT',	'SUB',	NULL,	'14-Nov-21',	NULL,	'15-Oct-21',	'Voided',	'Canceled',	NULL,	NULL),
(8,	'14-Oct-21',	'CARP00082',	'non conformity, external complain',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CATHRINE MORA',	'KEY ACCOUNT',	'SUB',	NULL,	'13-Nov-21',	NULL,	'14-Oct-21',	'Open',	'Open',	NULL,	NULL),
(9,	'07-Oct-21',	'CARP00081',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'06-Nov-21',	'Effective',	'16-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(10,	'07-Oct-21',	'CARP00080',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'PATSY WALKER',	'CR',	'JKT',	NULL,	'06-Nov-21',	NULL,	'07-Oct-21',	'Open',	'Open',	NULL,	NULL),
(11,	'27-Sep-21',	'CARP00079',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Oct-21',	'Effective',	'16-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(12,	'27-Sep-21',	'CARP00078',	'internal audit findings, safety non compliance',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Oct-21',	'Effective',	'26-Oct-21',	'Closed',	'Closed',	NULL,	NULL),
(13,	'27-Sep-21',	'CARP00077',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'ELEKTRA NATCHIOS',	'HSE',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Oct-21',	'Effective',	'12-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(14,	'23-Aug-21',	'CARP00074',	'non conformity',	'NAMORITA \"NITA\" PRENTISS',	'COMMERCIAL',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'08-Oct-21',	NULL,	'08-Sep-21',	'Open',	'Open',	NULL,	NULL),
(15,	'20-Aug-21',	'CARP00073',	'non conformity',	'NAMORITA \"NITA\" PRENTISS',	'COMMERCIAL',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'19-Sep-21',	NULL,	'27-Aug-21',	'Open',	'Open',	NULL,	NULL),
(16,	'20-Aug-21',	'CARP00071',	'internal complain, kpi bsc monitoring',	'JOHN JONAH JAMESON',	'COMMERCIAL',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'19-Sep-21',	NULL,	'20-Aug-21',	'Voided',	'Canceled',	NULL,	NULL),
(17,	'20-Aug-21',	'CARP00070',	'internal complain, kpi bsc monitoring',	'JOHN JONAH JAMESON',	'COMMERCIAL',	'SUB',	'ROBERT BRUCE BANNER',	'CR',	'SUB',	NULL,	'19-Sep-21',	NULL,	'20-Aug-21',	'Voided',	'Canceled',	NULL,	NULL),
(18,	'20-Aug-21',	'CARP00069',	'internal complain, kpi bsc monitoring',	'JOHN JONAH JAMESON',	'COMMERCIAL',	'SUB',	'ROBERT BRUCE BANNER',	'CR',	'SUB',	NULL,	'19-Sep-21',	NULL,	'20-Aug-21',	'Voided',	'Canceled',	NULL,	NULL),
(19,	'05-Aug-21',	'CARP00068',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CAMELLIA',	'CC',	'SUB',	NULL,	'04-Sep-21',	NULL,	'05-Aug-21',	'Open',	'Open',	NULL,	NULL),
(20,	'05-Aug-21',	'CARP00067',	'non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'04-Sep-21',	NULL,	'27-Aug-21',	'Open',	'Open',	NULL,	NULL),
(21,	'05-Aug-21',	'CARP00066',	'non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'04-Sep-21',	NULL,	'05-Aug-21',	'Voided',	'Canceled',	NULL,	NULL),
(22,	'30-Jul-21',	'CARP00065',	'non conformity',	'JANET VAN DYNE',	'KEY ACCOUNT',	'SUB',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	NULL,	'29-Aug-21',	NULL,	'30-Jul-21',	'Open',	'Open',	NULL,	NULL),
(23,	'30-Jul-21',	'CARP00064',	'non conformity',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'29-Aug-21',	NULL,	'23-Sep-21',	'Open',	'Open',	NULL,	NULL),
(24,	'30-Jul-21',	'CARP00063',	'non conformity, external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'KEY ACCOUNT',	'SUB',	NULL,	'29-Aug-21',	NULL,	'30-Jul-21',	'Open',	'Open',	NULL,	NULL),
(25,	'02-Jul-21',	'CARP00062',	'safety non compliance, external complain',	'ELEKTRA NATCHIOS',	'HSE',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	'ELEKTRA NATCHIOS',	'01-Aug-21',	'Effective',	'15-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(26,	'02-Jul-21',	'CARP00061',	'safety non compliance, external complain',	'ELEKTRA NATCHIOS',	'HSE',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	NULL,	'01-Aug-21',	NULL,	'02-Jul-21',	'Voided',	'Canceled',	NULL,	NULL),
(27,	'14-Jun-21',	'CARP00060',	'internal audit findings, oportunity for improvement',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CAIN MARKO',	'HR&GA',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'14-Jul-21',	'Effective',	'01-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(28,	'14-Jun-21',	'CARP00059',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CAIN MARKO',	'HR&GA',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'14-Jul-21',	'Effective',	'07-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(29,	'02-Jun-21',	'CARP00058',	'internal audit findings, non conformity, external complain',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'02-Jul-21',	NULL,	'02-Jun-21',	'Open',	'Open',	NULL,	NULL),
(30,	'28-May-21',	'CARP00057',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JEAN GREY',	'PROCUREMENT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Jun-21',	'Effective',	'08-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(31,	'28-May-21',	'CARP00056',	'internal audit findings, oportunity for improvement',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JEAN GREY',	'PROCUREMENT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Jun-21',	'Effective',	'08-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(32,	'28-May-21',	'CARP00055',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JEAN GREY',	'PROCUREMENT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'27-Jun-21',	'Effective',	'08-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(33,	'25-May-21',	'CARP00054',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'MILES BULLOCK',	'HR&GA',	'SUB',	NULL,	'24-Jun-21',	NULL,	'25-May-21',	'Open',	'Open',	NULL,	NULL),
(34,	'25-May-21',	'CARP00053',	'internal audit findings, oportunity for improvement',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'MILES BULLOCK',	'HR&GA',	'SUB',	NULL,	'24-Jun-21',	NULL,	'25-May-21',	'Open',	'Open',	NULL,	NULL),
(35,	'25-May-21',	'CARP00052',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'NAMORITA \"NITA\" PRENTISS',	'COMMERCIAL',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'24-Jun-21',	'Effective',	'06-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(36,	'25-May-21',	'CARP00051',	'internal complain',	'CAMELLIA',	'OPERATION',	'SUB',	'MILES BULLOCK',	'HR&GA',	'SUB',	NULL,	'24-Jun-21',	NULL,	'27-May-21',	'Open',	'Open',	NULL,	NULL),
(37,	'25-May-21',	'CARP00050',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'24-Jun-21',	'Not Effective',	'25-May-21',	'Re-Open',	'Open',	NULL,	NULL),
(38,	'19-May-21',	'CARP00049',	'oportunity for improvement',	'CATHRINE MORA',	'KEY ACCOUNT',	'SUB',	'GAMORA',	'OPERATION',	'SUB',	'CATHRINE MORA',	'18-Jun-21',	'Effective',	'14-Oct-21',	'Closed',	'Closed',	NULL,	NULL),
(39,	'18-May-21',	'CARP00048',	'internal audit findings, non conformity',	'JANET VAN DYNE',	'MANAGEMENT',	'SUB',	'FIN CASEY',	'KEY ACCOUNT',	'SUB',	NULL,	'17-Jun-21',	NULL,	'18-May-21',	'Open',	'Open',	NULL,	NULL),
(40,	'28-Apr-21',	'CARP00047',	'internal audit findings, oportunity for improvement',	'JANET VAN DYNE',	'MANAGEMENT',	'SUB',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	'JANET VAN DYNE',	'28-May-21',	'Not Effective',	'19-May-21',	'Closed',	'Closed',	NULL,	NULL),
(41,	'27-Apr-21',	'CARP00046',	'non conformity, external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'27-May-21',	NULL,	'27-Apr-21',	'Open',	'Open',	NULL,	NULL),
(42,	'27-Apr-21',	'CARP00045',	'non conformity, external complain',	'MATT MURDOCK',	'HSE',	'SUB',	'GAMORA',	'OPERATION',	'SUB',	NULL,	'27-May-21',	NULL,	'06-Jul-21',	'Open',	'Open',	NULL,	NULL),
(43,	'26-Apr-21',	'CARP00044',	'oportunity for improvement, external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'26-May-21',	NULL,	'06-Jul-21',	'Open',	'Open',	NULL,	NULL),
(44,	'26-Apr-21',	'CARP00043',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'26-May-21',	NULL,	'26-Apr-21',	'Open',	'Open',	NULL,	NULL),
(45,	'26-Apr-21',	'CARP00042',	'oportunity for improvement, external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'26-May-21',	NULL,	'26-Apr-21',	'Voided',	'Canceled',	NULL,	NULL),
(46,	'23-Apr-21',	'CARP00041',	'external complain',	'JANET VAN DYNE',	'MANAGEMENT',	'SUB',	'CAMELLIA',	'CR',	'SUB',	NULL,	'23-May-21',	NULL,	'24-May-21',	'Open',	'Open',	NULL,	NULL),
(47,	'22-Apr-21',	'CARP00040',	'safety non compliance',	'MATT MURDOCK',	'HSE',	'SUB',	'CLINT BARTON',	'TRUCKING',	'SUB',	'MATT MURDOCK',	'23-May-21',	'Effective',	'04-May-21',	'Closed',	'Closed',	NULL,	NULL),
(48,	'16-Apr-21',	'CARP00039',	'non conformity',	'JANET VAN DYNE',	'MANAGEMENT',	'SUB',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	'JANET VAN DYNE',	'16-May-21',	'Effective',	'15-Nov-21',	'Closed',	'Closed',	NULL,	NULL),
(49,	'14-Apr-21',	'CARP00038',	'internal audit findings, oportunity for improvement',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JAMES MADROX',	'IT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'14-May-21',	'Effective',	'05-May-21',	'Closed',	'Closed',	NULL,	NULL),
(50,	'06-Apr-21',	'CARP00037',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'08-May-21',	NULL,	'15-Jul-21',	'Open',	'Open',	NULL,	NULL),
(51,	'26-Mar-21',	'CARP00036',	'non conformity',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'25-Apr-21',	NULL,	'06-Apr-21',	'Open',	'Open',	NULL,	NULL),
(52,	'18-Mar-21',	'CARP00035',	'non conformity, external complain',	'JANET VAN DYNE',	'MANAGEMENT',	'SUB',	'CATHRINE MORA',	'KEY ACCOUNT',	'SUB',	'JANET VAN DYNE',	'17-Apr-21',	'Not Effective',	'14-Oct-21',	'Closed',	'Closed',	NULL,	NULL),
(53,	'18-Mar-21',	'CARP00034',	'internal audit findings',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JEAN GREY',	'PROCUREMENT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'17-Apr-21',	'Effective',	'23-Apr-21',	'Closed',	'Closed',	NULL,	NULL),
(54,	'09-Mar-21',	'CARP00033',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	'WANDA MAXIMOFF',	'08-Apr-21',	'Not Effective',	'22-Nov-21',	'Verified',	'Open',	NULL,	NULL),
(55,	'09-Mar-21',	'CARP00032',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'08-Apr-21',	NULL,	'09-Mar-21',	'Voided',	'Canceled',	NULL,	NULL),
(56,	'09-Mar-21',	'CARP00031',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'08-Apr-21',	NULL,	'09-Mar-21',	'Voided',	'Canceled',	NULL,	NULL),
(57,	'04-Mar-21',	'CARP00030',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'JEAN GREY',	'PROCUREMENT',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'03-Apr-21',	'Effective',	'18-Mar-21',	'Closed',	'Closed',	NULL,	NULL),
(58,	'03-Mar-21',	'CARP00029',	'safety non compliance, external complain',	'DEREK MORGAN',	'CR',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'02-Apr-21',	NULL,	'05-Jul-21',	'Responded',	'Open',	NULL,	NULL),
(59,	'02-Mar-21',	'CARP00028',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'STEPHEN VINCENT STRANGE',	'KEY ACCOUNT',	'SUB',	'WANDA MAXIMOFF',	'02-Apr-21',	'Effective',	'12-Mar-21',	'Closed',	'Closed',	NULL,	NULL),
(60,	'23-Feb-21',	'CARP00027',	'safety non compliance, external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'PATSY WALKER',	'OPERATION',	'JKT',	NULL,	'25-Mar-21',	NULL,	'24-Feb-21',	'Open',	'Open',	NULL,	NULL),
(61,	'23-Feb-21',	'CARP00026',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	'WANDA MAXIMOFF',	'25-Mar-21',	'Not Effective',	'04-May-21',	'Closed',	'Closed',	NULL,	NULL),
(62,	'22-Feb-21',	'CARP00025',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'24-Mar-21',	'Effective',	'07-Jul-21',	'Closed',	'Closed',	NULL,	NULL),
(63,	'19-Feb-21',	'CARP00024',	'non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'DEREK MORGAN',	'CR',	'SUB',	NULL,	'21-Mar-21',	'Not Effective',	'19-May-21',	'Re-Open',	'Open',	NULL,	NULL),
(64,	'08-Feb-21',	'CARP00023',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	'WANDA MAXIMOFF',	'17-Mar-21',	'Effective',	'22-Apr-21',	'Closed',	'Closed',	NULL,	NULL),
(65,	'02-Feb-21',	'CARP00022',	'internal audit findings, non conformity',	'NATALIA ALIANOVNA ROMANOVA',	'IC',	'SUB',	'CAIN MARKO',	'HR&GA',	'SUB',	'NATALIA ALIANOVNA ROMANOVA',	'04-Mar-21',	'Effective',	'01-Mar-21',	'Closed',	'Closed',	NULL,	NULL),
(66,	'28-Jan-21',	'CARP00021',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'CC',	'SUB',	NULL,	'27-Feb-21',	NULL,	'28-Jan-21',	'Voided',	'Canceled',	NULL,	NULL),
(67,	'28-Jan-21',	'CARP00020',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'27-Feb-21',	'Not Effective',	'02-Jun-21',	'Re-Open',	'Open',	NULL,	NULL),
(68,	'27-Jan-21',	'CARP00019',	'external complain',	'WANDA MAXIMOFF',	'SALES',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'27-Feb-21',	NULL,	'28-Jan-21',	'Voided',	'Canceled',	NULL,	NULL),
(69,	'14-Jan-21',	'CARP00016',	'non conformity, external complain',	'DEREK MORGAN',	'CR',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'13-Feb-21',	NULL,	'09-Apr-21',	'Responded',	'Open',	NULL,	NULL),
(70,	'13-Jan-21',	'CARP00015',	'non conformity, external complain',	'DEREK MORGAN',	'CR',	'SUB',	'CAMELLIA',	'OPERATION',	'SUB',	NULL,	'19-Mar-21',	NULL,	'15-Mar-21',	'Responded',	'Open',	NULL,	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5,	'2014_10_12_000000_create_users_table',	1),
(6,	'2014_10_12_100000_create_password_resets_table',	1),
(7,	'2019_08_19_000000_create_failed_jobs_table',	1),
(8,	'2021_09_13_141017_create_items_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `photo`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	NULL,	'Admin',	'admin@gmail.com',	NULL,	'$2y$10$kvjv4A6mZVEZir7TUwHIHOVYOKwW4WUbc87WfP2GubXrbLRzbf7Ei',	'admin',	NULL,	'2023-11-02 00:21:10',	'2023-11-02 00:21:10'),
(2,	NULL,	'Member',	'member@gmail.com',	NULL,	'$2y$10$vxKKHdOTlnjhSuEKyKQ2DuoTKZBqZVLabnWMZhi6UHY24LUS7qtXy',	'member',	NULL,	'2023-11-02 00:21:10',	'2023-11-02 00:21:10');

-- 2023-11-02 13:55:50
