<?php
/**
 * 2016-2018 roanja.com
 *
 * NOTICE OF LICENSE
 *
 *  @author Romell Jaramillo <info@roanja.com>
 *  @copyright 2016-2018 roanja.com
 *  @license GNU General Public License version 2
 *
 * You can not resell or redistribute this software.
 */
$sqlseeder = array();
$sqlseeder[] = 'INSERT INTO `' . _DB_PREFIX_ . 'rj_nacionalidad` (`id_nacionalidad`, `nacionalidad`) VALUES
          (4, "AFGANISTAN"),
          (8, "ALBANIA"),
          (10, "ANTARTIDA"),
          (12, "ARGELIA"),
          (16, "SAMOA AMERICANA"),
          (20, "ANDORRA"),
          (24, "ANGOLA"),
          (28, "ANTIGUA Y BARBUDA"),
          (31, "AZERBAYAN"),
          (32, "ARGENTINA"),
          (36, "AUSTRALIA"),
          (40, "AUSTRIA"),
          (44, "BAHAMAS"),
          (48, "BAHREIN"),
          (50, "BANGLADESH"),
          (51, "ARMENIA"),
          (52, "BARBADOS"),
          (56, "BELGICA"),
          (60, "BERMUDAS"),
          (64, "BUTAN"),
          (68, "BOLIVIA"),
          (70, "BOSNIA - HERZEGOVINA"),
          (72, "BOTSWANA"),
          (74, "BOUVET, ISLA"),
          (76, "BRASIL"),
          (84, "BELICE"),
          (86, "OCEANO INDICO, TERRIT. BRITAN."),
          (90, "SALOMON, ISLAS"),
          (92, "VIRGENES (BRITANICAS), ISLAS"),
          (96, "BRUNEI DARUSSALAM"),
          (100, "BULGARIA"),
          (104, "MYANMAR"),
          (108, "BURUNDI"),
          (112, "BELARUS"),
          (116, "CAMBOYA"),
          (120, "CAMERUN"),
          (124, "CANADA"),
          (132, "CABO VERDE"),
          (136, "CAIMANES, ISLAS"),
          (140, "CENTROAFRICANA, REPUBLICA"),
          (144, "SRI LANKA"),
          (148, "CHAD"),
          (152, "CHILE"),
          (156, "CHINA"),
          (158, "TAIWAN, PROVINCIA DE CHINA"),
          (162, "CHRISTMAS, ISLA"),
          (166, "COCOS (KEELING), ISLAS"),
          (170, "COLOMBIA"),
          (174, "COMORES"),
          (175, "MAYOTTE"),
          (178, "CONGO"),
          (180, "ZAIRE"),
          (184, "COOK, ISLAS"),
          (188, "COSTA RICA"),
          (191, "CROACIA"),
          (192, "CUBA"),
          (196, "CHIPRE"),
          (203, "CHECA, REPUBLICA"),
          (204, "BENIN"),
          (208, "DINAMARCA"),
          (212, "DOMINICA"),
          (214, "DOMINICANA, REPUBLICA"),
          (218, "ECUADOR"),
          (222, "EL SALVADOR"),
          (226, "GUINEA ECUATORIAL"),
          (231, "ETIOPIA"),
          (232, "ERITREA"),
          (233, "ESTONIA"),
          (234, "FEROE, ISLAS"),
          (238, "FALKLAND, ISLAS (MALVINAS)"),
          (239, "GEORGIA DEL SUR E ISLAS SANDW."),
          (242, "FIDJI"),
          (246, "FINLANDIA"),
          (250, "FRANCIA"),
          (254, "GUAYANA FRANCESA"),
          (258, "POLINESIA FRANCESA"),
          (260, "TIERRAS AUSTRALES FRANCESAS"),
          (262, "DJIBUTI"),
          (266, "GABON"),
          (268, "GEORGIA"),
          (270, "GAMBIA"),
          (276, "ALEMANIA, REPUBLICA FEDERAL"),
          (288, "GHANA"),
          (292, "GIBRALTAR"),
          (296, "KIRIBATI"),
          (300, "GRECIA"),
          (304, "GROENLANDIA"),
          (308, "GRANADA"),
          (312, "GUADALUPE"),
          (316, "GUAM"),
          (320, "GUATEMALA"),
          (324, "GUINEA"),
          (328, "GUAYANA"),
          (332, "HAITI"),
          (334, "HEARD Y MC DONALD, ISLAS"),
          (336, "VATICANO, EST.DE LA CIUDAD DEL"),
          (340, "HONDURAS"),
          (344, "HONG KONG"),
          (348, "HUNGRIA"),
          (352, "ISLANDIA"),
          (356, "INDIA"),
          (360, "INDONESIA"),
          (364, "IRAN (REPUBLICA ISLAMICA DE)"),
          (368, "IRAQ"),
          (372, "IRLANDA"),
          (376, "ISRAEL"),
          (380, "ITALIA"),
          (384, "COSTA DE MARFIL"),
          (388, "JAMAICA"),
          (392, "JAPON"),
          (398, "KAZAKSTAN"),
          (400, "JORDANIA"),
          (404, "KENIA"),
          (408, "COREA, REPUBLICA POPULAR DEM."),
          (410, "COREA, REPUBLICA DE"),
          (414, "KUWAIT"),
          (417, "KIRGHIZISTAN"),
          (418, "LAOS, REPUBLICA DEM. POPULAR"),
          (422, "LIBANO"),
          (426, "LESOTHO"),
          (428, "LETONIA"),
          (430, "LIBERIA"),
          (434, "LIBIA, JAMAHIRIYA ARABE"),
          (438, "LIECHTENSTEIN"),
          (440, "LITUANIA"),
          (442, "LUXEMBURGO"),
          (446, "MACAO"),
          (450, "MADAGASCAR"),
          (454, "MALAWI"),
          (458, "MALASIA"),
          (462, "MALDIVAS"),
          (466, "MALI"),
          (470, "MALTA"),
          (474, "MARTINICA"),
          (478, "MAURITANIA"),
          (480, "MAURICIO"),
          (484, "MEJICO"),
          (492, "MONACO"),
          (496, "MONGOLIA"),
          (498, "MOLDAVIA, REPUBLICA DE"),
          (500, "MONTSERRAT"),
          (504, "MARRUECOS"),
          (508, "MOZAMBIQUE"),
          (512, "OMAN"),
          (516, "NAMIBIA"),
          (520, "NAURU"),
          (524, "NEPAL"),
          (528, "PAISES BAJOS"),
          (532, "ANTILLAS NEERLANDESAS"),
          (533, "ARUBA"),
          (540, "NUEVA CALEDONIA"),
          (548, "VANUATU"),
          (554, "NUEVA ZELANDA"),
          (558, "NICARAGUA"),
          (562, "NIGER"),
          (566, "NIGERIA"),
          (570, "NIUE"),
          (574, "NORFOLK, ISLA"),
          (578, "NORUEGA"),
          (580, "MARIANAS DEL NORTE, ISLAS"),
          (583, "MICRONESIA"),
          (584, "MARSHALL, ISLAS"),
          (585, "PALAU"),
          (586, "PAKISTAN"),
          (591, "PANAMA"),
          (598, "PAPUA, NUEVA GUINEA"),
          (600, "PARAGUAY"),
          (604, "PERU"),
          (608, "FILIPINAS"),
          (612, "PITCAIRN"),
          (616, "POLONIA"),
          (620, "PORTUGAL"),
          (624, "GUINEA BISSAU"),
          (626, "TIMOR ORIENTAL"),
          (634, "QATAR"),
          (638, "REUNION"),
          (642, "RUMANIA"),
          (643, "RUSIA, FEDERACION DE"),
          (646, "RUANDA"),
          (654, "SANTA HELENA"),
          (659, "SAN CRISTOBAL Y NIEVES"),
          (660, "ANGUILA"),
          (662, "SANTA LUCIA"),
          (666, "SAN PEDRO Y MIQUELON"),
          (670, "SAN VICENTE Y GRANADINAS"),
          (674, "SAN MARINO"),
          (678, "SANTO TOMAS Y PRINCIPE"),
          (682, "ARABIA SAUDI"),
          (686, "SENEGAL"),
          (690, "SEYCHELLES"),
          (694, "SIERRA LEONA"),
          (702, "SINGAPUR"),
          (703, "ESLOVAQUIA"),
          (704, "VIETNAM"),
          (705, "ESLOVENIA"),
          (706, "SOMALIA"),
          (710, "AFRICA DEL SUR"),
          (716, "ZIMBABWE"),
          (724, "ESPA�A"),
          (732, "SAHARA OCCIDENTAL"),
          (736, "SUDAN"),
          (740, "SURINAM"),
          (744, "SVALBARD E ISLA JUAN MAYEN"),
          (748, "SWAZILANDIA"),
          (752, "SUECIA"),
          (756, "SUIZA"),
          (760, "SIRIA, REPUBLICA ARABE"),
          (764, "TAILANDIA"),
          (768, "TOGO"),
          (772, "TOKELAU"),
          (776, "TONGA"),
          (780, "TRINIDAD Y TOBAGO"),
          (784, "EMIRATOS ARABES UNIDOS"),
          (788, "TUNEZ"),
          (792, "TURQUIA"),
          (795, "TURQUESTAN"),
          (796, "TURKS Y CAICOS, ISLAS"),
          (798, "TUVALU"),
          (800, "UGANDA"),
          (804, "UCRANIA"),
          (818, "EGIPTO"),
          (826, "REINO UNIDO"),
          (834, "TANZANIA, REPUBLICA UNIDA DE"),
          (840, "ESTADOS UNIDOS"),
          (850, "VIRGENES (USA), ISLAS"),
          (854, "BURKINA FASO"),
          (858, "URUGUAY"),
          (860, "UZBEKISTAN"),
          (862, "VENEZUELA"),
          (876, "WALLIS Y FUTUNA"),
          (882, "SAMOA"),
          (887, "YEMEN"),
          (891, "YUGOSLAVIA"),
          (894, "ZAMBIA"),
          (999, "APATRIDA");';