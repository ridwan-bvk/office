<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2017-03-02 04:14:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:14:40 --> No URI present. Default controller set.
DEBUG - 2017-03-02 04:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:14:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:14:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:14:40 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 04:14:40 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 04:14:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 04:14:40 --> Total execution time: 0.0480
DEBUG - 2017-03-02 04:14:42 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:14:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:14:42 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:14:42 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 04:14:42 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 04:14:42 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 04:14:42 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:14:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:14:42 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:14:42 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 04:14:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:14:42 --> Total execution time: 0.1830
DEBUG - 2017-03-02 04:14:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:14:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:14:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:14:46 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:14:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:14:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:14:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 04:14:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;n&quot;
LINE 9:           n.detail_link link,
                  ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:14:47 --> Query error: ERROR:  missing FROM-clause entry for table "n"
LINE 9:           n.detail_link link,
                  ^ - Invalid query: SELECT s.surat_id id, s.agenda_id, 
							   (s.jenis_agenda || '-' || s.agenda_id) no_agenda,
							   ('No. <strong>' || s.surat_no || '</strong> Tgl. <strong>' || s.status_berkas ||
							    '</strong><br> <strong>Mitra : </strong>' || s.status_berkas ||
							    'Tanggal Berlaku: <strong>' || to_char(s.surat_tgl, 'DD-MM-YYYY') || '</strong> s/d <strong>' || to_char(s.surat_tgl_masuk, 'DD-MM-YYYY')||
								'</strong><br> <strong>Perihal : </strong>' || s.surat_perihal ||
								'<br> <strong>Status : </strong>' || COALESCE(fp.title, 'Proses Batal')
							   ) deskripsi,
							   n.detail_link link,
								s.status
						  FROM surat s
						
						  LEFT JOIN org_struc_archive osa ON(osa.ref_type = 'surat' AND osa.ref_id = s.surat_id  AND osa.organization_structure_id = 156)
						  LEFT JOIN system_security.flow_process fp ON(fp.function_ref_id = 1 AND fp.flow_seq = s.status)
						 WHERE  s.jenis_agenda = 'CM' AND s.status <> 99  ORDER BY s.created_time DESC
DEBUG - 2017-03-02 04:15:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:15:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:15:01 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 04:15:01 --> Severity: Notice --> Undefined property: stdClass::$link C:\xampp\htdocs\eoffice\appl\modules\global\views\my_workspace.php 105
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:15:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:15:01 --> Total execution time: 0.2286
DEBUG - 2017-03-02 04:15:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:15:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:15:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:15:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:15:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:15:58 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:15:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:15:58 --> Total execution time: 0.2390
DEBUG - 2017-03-02 04:16:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:16:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:16:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:16:03 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:16:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:16:03 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:16:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:16:03 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:16:08 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:16:08 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:16:08 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:16:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:16:08 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:16:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:16:08 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:16:12 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:16:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:16:12 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:16:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:16:12 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:16:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:16:12 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:16:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:16:12 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:33:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:33:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:33:45 --> External MX_Controller Initialized
DEBUG - 2017-03-02 04:33:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:33:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:33:45 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 04:33:45 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 04:33:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 04:33:45 --> Total execution time: 0.0312
DEBUG - 2017-03-02 04:33:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:33:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:33:48 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:33:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:33:48 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:33:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:33:48 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:33:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:33:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:33:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:33:52 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:33:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:33:52 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:33:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:33:52 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:33:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:33:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:33:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:33:53 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:33:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 119
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 134
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 141
ERROR - 2017-03-02 04:33:53 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\external_incoming_form_view.php 148
ERROR - 2017-03-02 04:33:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:33:53 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:34:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:34:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:34:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:34:40 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:34:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:34:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:34:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:34:40 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 04:34:40 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 04:34:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 04:34:40 --> Total execution time: 0.0312
DEBUG - 2017-03-02 04:34:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:34:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:34:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:34:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:34:43 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:34:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 134
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 141
ERROR - 2017-03-02 04:34:43 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 04:34:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:34:43 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:34:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:34:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:34:47 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:34:47 --> Total execution time: 0.1900
DEBUG - 2017-03-02 04:36:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:36:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:36:14 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:36:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:36:14 --> Total execution time: 0.2382
DEBUG - 2017-03-02 04:36:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:36:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:36:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:36:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:36:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:36:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:36:32 --> Total execution time: 0.1742
DEBUG - 2017-03-02 04:36:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:36:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:36:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:36:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:36:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:36:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:36:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:36:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 04:36:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;DD&quot;
LINE 5: ...MM-YYYY') || s/d ' || to_char(s.surat_tgl_masuk, 'DD-MM-YYYY...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:36:54 --> Query error: ERROR:  syntax error at or near "DD"
LINE 5: ...MM-YYYY') || s/d ' || to_char(s.surat_tgl_masuk, 'DD-MM-YYYY...
                                                             ^ - Invalid query: SELECT s.surat_id id, s.agenda_id, 
							   (s.jenis_agenda || '-' || s.agenda_id) no_agenda,
							   ('No. <strong>' || s.surat_no || '</strong> Tgl. <strong>' || s.status_berkas ||
							    '</strong><br> <strong>Mitra : </strong>' || s.status_berkas ||
							    '<strong><br>Tanggal Berlaku: </strong>' || to_char(s.surat_tgl, 'DD-MM-YYYY') || s/d ' || to_char(s.surat_tgl_masuk, 'DD-MM-YYYY')||
								'<br> <strong>Perihal : </strong>' || s.surat_perihal ||
								'<br> <strong>Status : </strong>' || COALESCE(fp.title, 'Proses Batal')
							   ) deskripsi,
							   n.detail_link link,
								s.status
						  FROM surat s
						  JOIN notify n ON(n.ref_id = s.surat_id AND n.function_ref_id = s.function_ref_id)
						  LEFT JOIN org_struc_archive osa ON(osa.ref_type = 'surat' AND osa.ref_id = s.surat_id  AND osa.organization_structure_id = 156)
						  LEFT JOIN system_security.flow_process fp ON(fp.function_ref_id = 1 AND fp.flow_seq = s.status)
						 WHERE  s.jenis_agenda = 'CM' AND s.status <> 99  ORDER BY s.created_time DESC
DEBUG - 2017-03-02 04:37:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:37:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:37:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:37:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:37:18 --> Total execution time: 0.2252
DEBUG - 2017-03-02 04:37:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:37:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:37:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:37:58 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 04:37:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 04:37:58 --> Total execution time: 0.3516
DEBUG - 2017-03-02 04:38:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:38:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:38:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:38:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 134
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 141
ERROR - 2017-03-02 04:38:04 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 04:38:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:38:04 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:38:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:38:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:38:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:38:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:38:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined index: 01-03-2017 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 134
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 141
ERROR - 2017-03-02 04:38:11 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 04:38:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:38:11 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:39:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:39:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:39:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:39:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:39:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:17 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined property: stdClass::$Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 119
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 134
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 141
ERROR - 2017-03-02 04:39:17 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 04:39:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:39:17 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:39:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:39:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:39:34 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:39:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined index: mitra_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 134
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 141
ERROR - 2017-03-02 04:39:34 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 04:39:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:39:34 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 04:45:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 04:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 04:45:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 04:45:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 04:45:35 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 04:45:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 04:45:35 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:45:35 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:45:35 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 04:45:35 --> Severity: Notice --> Undefined index: kode_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 04:45:35 --> Severity: Notice --> Undefined index: jenis_kontrak_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 150
ERROR - 2017-03-02 04:45:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 04:45:35 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:12:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:12:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:12:53 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:12:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:12:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:12:53 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:12:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 05:12:53 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:14:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:14:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:14:55 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:14:55 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:14:55 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:14:55 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 05:14:55 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:17:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:17:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:17:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:17:27 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:17:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:17:27 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:17:27 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:17:27 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:17:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 05:17:27 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:38:42 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:38:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:38:42 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:38:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:38:42 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:38:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:38:42 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:38:42 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:38:42 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:38:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 05:38:42 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:39:19 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:39:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:39:19 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:39:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:39:19 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:39:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:39:19 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:39:19 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:39:19 --> Severity: Notice --> Undefined property: CI::$func_eks_masuk C:\xampp\htdocs\eoffice\appl\third_party\MX\Controller.php 69
ERROR - 2017-03-02 05:39:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 05:39:19 --> Query error: ERROR:  syntax error at or near "AND"
LINE 2: ...security.flow_process fp ON(fp.function_ref_id =  AND fp.flo...
                                                             ^ - Invalid query: SELECT s.*, fp.title, fp.title process_title, fp.role_handle, fp.permission_handle, fp.position_handle, fp.modify FROM surat s
				JOIN system_security.flow_process fp ON(fp.function_ref_id =  AND fp.flow_seq = s.status AND fp.status = 1)
				WHERE s.surat_id = '53d6a950-23e8-4fda-99de-b4e95677f697' 
DEBUG - 2017-03-02 05:41:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:41:58 --> No URI present. Default controller set.
DEBUG - 2017-03-02 05:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:41:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:41:58 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 05:41:58 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 05:41:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 05:41:58 --> Total execution time: 0.1248
DEBUG - 2017-03-02 05:42:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:06 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 05:42:06 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 05:42:06 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 05:42:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:06 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 05:42:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:42:06 --> Total execution time: 0.0780
DEBUG - 2017-03-02 05:42:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:09 --> Admin MX_Controller Initialized
DEBUG - 2017-03-02 05:42:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:42:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Mail_model.php
DEBUG - 2017-03-02 05:42:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:42:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:42:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:42:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/org_structure.php
DEBUG - 2017-03-02 05:42:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:42:10 --> Total execution time: 0.4680
DEBUG - 2017-03-02 05:42:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:20 --> Admin MX_Controller Initialized
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Mail_model.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/org_structure_form.php
DEBUG - 2017-03-02 05:42:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:42:20 --> Total execution time: 0.4836
DEBUG - 2017-03-02 05:42:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:28 --> User MX_Controller Initialized
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/users.php
DEBUG - 2017-03-02 05:42:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:42:28 --> Total execution time: 0.1404
DEBUG - 2017-03-02 05:42:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:42:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:42:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:42:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:42:31 --> User MX_Controller Initialized
DEBUG - 2017-03-02 05:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:42:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:42:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:42:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/user_posisi.php
DEBUG - 2017-03-02 05:42:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/user_form_edit.php
DEBUG - 2017-03-02 05:42:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:42:32 --> Total execution time: 0.1560
DEBUG - 2017-03-02 05:43:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:43:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:43:01 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:43:01 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 05:43:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:43:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:43:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:43:01 --> Total execution time: 0.1404
DEBUG - 2017-03-02 05:43:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:43:36 --> No URI present. Default controller set.
DEBUG - 2017-03-02 05:43:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:43:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:43:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:43:37 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 05:43:37 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 05:43:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 05:43:37 --> Total execution time: 0.0624
DEBUG - 2017-03-02 05:43:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:43:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:43:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:43:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:43:55 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 05:43:55 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 05:43:55 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 05:43:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:43:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:43:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:43:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:43:55 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 05:43:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:43:55 --> Total execution time: 0.1872
DEBUG - 2017-03-02 05:44:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 05:44:30 --> 404 Page Not Found: ../modules/surat/controllers//index
DEBUG - 2017-03-02 05:44:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 05:44:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:44:32 --> Total execution time: 0.1872
DEBUG - 2017-03-02 05:44:35 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:35 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:35 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 05:44:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:44:35 --> Total execution time: 0.1560
DEBUG - 2017-03-02 05:44:49 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:49 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:49 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:49 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:49 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:49 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:49 --> Total execution time: 0.1190
DEBUG - 2017-03-02 05:44:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:53 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:44:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:53 --> Total execution time: 0.1500
DEBUG - 2017-03-02 05:44:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:53 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:53 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:53 --> Total execution time: 0.0920
DEBUG - 2017-03-02 05:44:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:54 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:54 --> Total execution time: 0.1236
DEBUG - 2017-03-02 05:44:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:54 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:54 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:54 --> Total execution time: 0.1080
DEBUG - 2017-03-02 05:44:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:55 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:55 --> Total execution time: 0.1250
DEBUG - 2017-03-02 05:44:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:55 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:44:55 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:44:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:44:55 --> Total execution time: 0.1110
DEBUG - 2017-03-02 05:44:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:44:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:44:58 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 05:44:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:44:58 --> Total execution time: 0.1780
DEBUG - 2017-03-02 05:45:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:45:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:45:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:45:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:45:01 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:45:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:45:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:45:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:45:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:45:01 --> Total execution time: 0.1120
DEBUG - 2017-03-02 05:45:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:45:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:45:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:45:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:45:59 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:45:59 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 05:45:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:45:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 108
ERROR - 2017-03-02 05:45:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
DEBUG - 2017-03-02 05:45:59 --> The filetype you are attempting to upload is not allowed.
DEBUG - 2017-03-02 05:45:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:45:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:45:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:45:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 05:45:59 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/sheets
DEBUG - 2017-03-02 05:46:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:46:02 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 05:46:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:46:02 --> Total execution time: 0.1660
DEBUG - 2017-03-02 05:46:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:46:52 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:46:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:46:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:46:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:46:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 05:46:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:46:53 --> Total execution time: 0.2640
DEBUG - 2017-03-02 05:46:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:46:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 05:46:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:46:54 --> Total execution time: 0.1990
DEBUG - 2017-03-02 05:46:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:46:55 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:46:55 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 05:46:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:46:55 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 108
ERROR - 2017-03-02 05:46:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
DEBUG - 2017-03-02 05:46:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 05:46:55 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/sheets
DEBUG - 2017-03-02 05:46:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:46:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:46:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:46:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:46:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 05:46:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:46:57 --> Total execution time: 0.1716
DEBUG - 2017-03-02 05:47:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:47:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:47:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:47:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:47:01 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:47:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:47:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:47:01 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:47:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:47:01 --> Total execution time: 0.1180
DEBUG - 2017-03-02 05:47:08 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:47:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:47:08 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:47:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:47:08 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 05:47:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:47:08 --> Total execution time: 0.2028
DEBUG - 2017-03-02 05:47:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:47:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:47:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:47:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:47:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:47:11 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:47:11 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:47:11 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:47:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:47:11 --> Total execution time: 0.1092
DEBUG - 2017-03-02 05:47:23 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:47:23 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:47:23 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 05:47:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:47:23 --> Total execution time: 0.1872
DEBUG - 2017-03-02 05:47:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:47:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:47:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 05:47:29 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 451
ERROR - 2017-03-02 05:47:29 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 452
ERROR - 2017-03-02 05:47:29 --> Severity: Notice --> Undefined variable: surat_from_ref_data C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 453
DEBUG - 2017-03-02 05:47:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:47:29 --> Total execution time: 0.1560
DEBUG - 2017-03-02 05:48:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:48:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:48:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:48:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:48:27 --> External MX_Controller Initialized
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_add.php
DEBUG - 2017-03-02 05:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:48:27 --> Total execution time: 0.3276
DEBUG - 2017-03-02 05:54:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:54:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:54:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:54:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:54:52 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 05:54:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 05:54:52 --> Total execution time: 0.1720
DEBUG - 2017-03-02 05:55:41 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:55:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:55:41 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:55:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:55:41 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:55:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:55:41 --> Total execution time: 0.1410
DEBUG - 2017-03-02 05:56:05 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 05:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 05:56:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 05:56:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 05:56:05 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 05:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 05:56:05 --> Total execution time: 0.1840
DEBUG - 2017-03-02 06:02:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 06:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 06:02:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 06:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 06:02:48 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 06:02:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 06:02:48 --> Total execution time: 0.5156
DEBUG - 2017-03-02 07:19:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:19:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:19:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:19:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:19:34 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:19:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:19:34 --> Total execution time: 0.2260
DEBUG - 2017-03-02 07:19:42 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:19:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:19:42 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:19:42 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:19:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:19:43 --> Total execution time: 0.1250
DEBUG - 2017-03-02 07:46:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:46:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:46:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:46:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:46:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:46:11 --> Total execution time: 0.1910
DEBUG - 2017-03-02 07:47:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:47:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:47:13 --> External MX_Controller Initialized
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_edit.php
DEBUG - 2017-03-02 07:47:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:47:13 --> Total execution time: 0.1660
DEBUG - 2017-03-02 07:47:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:47:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:47:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:47:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:47:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:47:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:47:18 --> Total execution time: 0.4010
DEBUG - 2017-03-02 07:47:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:47:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:47:28 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:47:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:47:28 --> Total execution time: 0.1340
DEBUG - 2017-03-02 07:51:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:51:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:51:59 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:51:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:51:59 --> Total execution time: 0.3006
DEBUG - 2017-03-02 07:52:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:52:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:52:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:52:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:52:01 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:52:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:52:01 --> Total execution time: 0.1340
DEBUG - 2017-03-02 07:52:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:52:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:52:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:52:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:52:17 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:52:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:52:17 --> Total execution time: 0.1556
DEBUG - 2017-03-02 07:52:19 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:52:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:52:19 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:52:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:52:19 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:52:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:52:19 --> Total execution time: 0.1170
DEBUG - 2017-03-02 07:53:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:02 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:53:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:53:02 --> Total execution time: 0.2170
DEBUG - 2017-03-02 07:53:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:53:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:53:04 --> Total execution time: 0.1230
DEBUG - 2017-03-02 07:53:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:26 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:53:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:53:26 --> Total execution time: 0.1672
DEBUG - 2017-03-02 07:53:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:27 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:53:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:53:27 --> Total execution time: 0.1270
DEBUG - 2017-03-02 07:53:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:38 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:53:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:53:38 --> Total execution time: 0.1616
DEBUG - 2017-03-02 07:53:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:53:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:53:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:53:39 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:53:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:53:40 --> Total execution time: 0.4330
DEBUG - 2017-03-02 07:54:15 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:54:15 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:54:15 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:54:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:54:15 --> Total execution time: 0.2206
DEBUG - 2017-03-02 07:54:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:54:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:54:16 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:54:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:54:16 --> Total execution time: 0.1210
DEBUG - 2017-03-02 07:54:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:54:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:54:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:54:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:54:57 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:54:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:54:57 --> Total execution time: 0.6626
DEBUG - 2017-03-02 07:54:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:54:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:54:59 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:54:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:54:59 --> Total execution time: 0.1270
DEBUG - 2017-03-02 07:55:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:55:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:55:09 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:55:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:55:09 --> Total execution time: 0.1696
DEBUG - 2017-03-02 07:55:10 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:55:10 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:55:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:55:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:55:11 --> Total execution time: 0.1340
DEBUG - 2017-03-02 07:56:05 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:56:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:56:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:56:05 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:56:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:56:05 --> Total execution time: 0.2186
DEBUG - 2017-03-02 07:56:08 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:56:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:56:08 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:56:08 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:56:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:56:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:56:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:56:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:56:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:56:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:56:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:56:09 --> Total execution time: 0.1270
DEBUG - 2017-03-02 07:56:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:56:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:56:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:56:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:56:47 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:56:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:56:47 --> Total execution time: 0.1636
DEBUG - 2017-03-02 07:56:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:56:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:56:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:56:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:56:48 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:56:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:56:48 --> Total execution time: 0.1250
DEBUG - 2017-03-02 07:57:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:57:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:57:03 --> Total execution time: 0.1996
DEBUG - 2017-03-02 07:57:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:57:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:57:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:57:05 --> Total execution time: 0.1230
DEBUG - 2017-03-02 07:57:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:57:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:57:32 --> Total execution time: 0.1595
DEBUG - 2017-03-02 07:57:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:57:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:57:33 --> Total execution time: 0.1170
DEBUG - 2017-03-02 07:57:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:45 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:57:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:57:45 --> Total execution time: 0.1570
DEBUG - 2017-03-02 07:57:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:46 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:57:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:57:46 --> Total execution time: 0.1320
DEBUG - 2017-03-02 07:57:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:55 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:57:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:57:55 --> Total execution time: 0.3376
DEBUG - 2017-03-02 07:57:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:57:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:57:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:57:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:57:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:57:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:57:57 --> Total execution time: 0.1250
DEBUG - 2017-03-02 07:58:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:58:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:58:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:58:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:58:11 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:58:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:58:11 --> Total execution time: 0.1566
DEBUG - 2017-03-02 07:58:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:58:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:58:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:58:13 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:58:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:58:13 --> Total execution time: 0.1250
DEBUG - 2017-03-02 07:58:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:58:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:58:35 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:58:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:58:35 --> Total execution time: 0.1710
DEBUG - 2017-03-02 07:58:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:58:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:58:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:58:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:58:36 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:58:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:58:36 --> Total execution time: 0.1160
DEBUG - 2017-03-02 07:59:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:59:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:59:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:59:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:59:04 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 07:59:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 07:59:04 --> Total execution time: 0.2280
DEBUG - 2017-03-02 07:59:08 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:59:08 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:59:08 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:59:08 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:59:08 --> Total execution time: 0.1190
DEBUG - 2017-03-02 07:59:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 07:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 07:59:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 07:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 07:59:16 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 07:59:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 07:59:16 --> Total execution time: 0.1050
DEBUG - 2017-03-02 08:01:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:20 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:01:20 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 08:01:20 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 08:01:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:20 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 08:01:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:20 --> Total execution time: 0.1092
DEBUG - 2017-03-02 08:01:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:22 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_permission.php
DEBUG - 2017-03-02 08:01:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:22 --> Total execution time: 0.0780
DEBUG - 2017-03-02 08:01:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:25 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_form.php
DEBUG - 2017-03-02 08:01:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:25 --> Total execution time: 0.0936
DEBUG - 2017-03-02 08:01:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:36 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:01:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_permission.php
DEBUG - 2017-03-02 08:01:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:37 --> Total execution time: 0.0780
DEBUG - 2017-03-02 08:01:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:40 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_form.php
DEBUG - 2017-03-02 08:01:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:40 --> Total execution time: 0.0936
DEBUG - 2017-03-02 08:01:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:01:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:01:58 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_form.php
DEBUG - 2017-03-02 08:01:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:01:58 --> Total execution time: 0.1248
DEBUG - 2017-03-02 08:02:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:02:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:02:00 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:02:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:02:00 --> Total execution time: 0.2270
DEBUG - 2017-03-02 08:02:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:02:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:02:06 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:02:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:02:07 --> Total execution time: 0.1250
DEBUG - 2017-03-02 08:03:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:03:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:03:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:03:47 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:03:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:03:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:03:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:03:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:03:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:03:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:03:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:03:48 --> Total execution time: 0.1896
DEBUG - 2017-03-02 08:03:49 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:03:49 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:03:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:03:49 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:03:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:03:49 --> Total execution time: 0.1250
DEBUG - 2017-03-02 08:12:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:12:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:12:58 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:12:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:12:58 --> Total execution time: 0.2940
DEBUG - 2017-03-02 08:13:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:13:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:13:00 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:13:00 --> Total execution time: 0.1260
DEBUG - 2017-03-02 08:13:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:13:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:13:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:13:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:13:32 --> Total execution time: 0.1546
DEBUG - 2017-03-02 08:13:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:13:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:13:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:13:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:13:33 --> Total execution time: 0.1260
DEBUG - 2017-03-02 08:13:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:13:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:13:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:13:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:13:50 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:13:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:13:50 --> Total execution time: 0.1550
DEBUG - 2017-03-02 08:13:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:13:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:13:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:13:52 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:13:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:13:52 --> Total execution time: 0.1250
DEBUG - 2017-03-02 08:14:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:14:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:14:31 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:14:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:14:31 --> Total execution time: 0.2126
DEBUG - 2017-03-02 08:14:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:14:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:14:32 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:14:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:14:32 --> Total execution time: 0.1200
DEBUG - 2017-03-02 08:15:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:15:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:15:04 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:15:05 --> Total execution time: 0.1576
DEBUG - 2017-03-02 08:15:05 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:15:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:15:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:15:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:15:05 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:15:05 --> Total execution time: 0.1220
DEBUG - 2017-03-02 08:16:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:04 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:16:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:16:04 --> Total execution time: 0.2086
DEBUG - 2017-03-02 08:16:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:05 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:16:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:16:05 --> Total execution time: 0.1190
DEBUG - 2017-03-02 08:16:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:27 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:16:27 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:16:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:28 --> Total execution time: 0.1670
DEBUG - 2017-03-02 08:16:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:28 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:16:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:16:28 --> Total execution time: 0.1470
DEBUG - 2017-03-02 08:16:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:43 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:16:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:16:43 --> Total execution time: 0.1260
DEBUG - 2017-03-02 08:16:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:16:51 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:51 --> Total execution time: 0.1210
DEBUG - 2017-03-02 08:16:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:16:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:16:51 --> Total execution time: 0.1740
DEBUG - 2017-03-02 08:16:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:16:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:16:54 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:16:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:16:54 --> Total execution time: 0.1580
DEBUG - 2017-03-02 08:26:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:26:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:26:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:26:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:26:03 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:26:03 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:26:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:26:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:26:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:26:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:26:03 --> User MX_Controller Initialized
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_form.php
DEBUG - 2017-03-02 08:26:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:26:03 --> Total execution time: 0.0780
DEBUG - 2017-03-02 08:27:12 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:27:12 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:27:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:27:12 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:27:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:27:12 --> Total execution time: 0.2026
DEBUG - 2017-03-02 08:27:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:27:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:27:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:27:13 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:27:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:27:13 --> Total execution time: 0.1330
DEBUG - 2017-03-02 08:27:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:27:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:27:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:27:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:27:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:27:37 --> Total execution time: 0.1190
DEBUG - 2017-03-02 08:28:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:28:26 --> No URI present. Default controller set.
DEBUG - 2017-03-02 08:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:28:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:28:26 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:28:26 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:28:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:28:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:28:26 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 08:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:28:26 --> Total execution time: 0.0780
DEBUG - 2017-03-02 08:29:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:11 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:29:11 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:29:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:11 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:29:11 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:29:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 08:29:11 --> Total execution time: 0.0312
DEBUG - 2017-03-02 08:29:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:18 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:29:18 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 08:29:18 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 08:29:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 08:29:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:29:18 --> Total execution time: 0.1560
DEBUG - 2017-03-02 08:29:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:29:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:29:33 --> Total execution time: 0.1580
DEBUG - 2017-03-02 08:29:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:37 --> External MX_Controller Initialized
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_edit.php
DEBUG - 2017-03-02 08:29:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:29:37 --> Total execution time: 0.2720
DEBUG - 2017-03-02 08:29:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:29:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:29:40 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:29:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:29:40 --> Total execution time: 0.2120
DEBUG - 2017-03-02 08:31:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:31:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:31:34 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 08:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:31:34 --> Total execution time: 0.2496
DEBUG - 2017-03-02 08:31:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:31:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:31:37 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:31:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:31:37 --> Total execution time: 0.2140
DEBUG - 2017-03-02 08:31:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:31:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:31:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:31:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:31:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:31:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:31:39 --> Total execution time: 0.1510
DEBUG - 2017-03-02 08:31:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:31:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:31:43 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:31:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:31:43 --> Total execution time: 0.2160
DEBUG - 2017-03-02 08:31:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:31:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:31:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:31:44 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:31:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:31:44 --> Total execution time: 0.1330
DEBUG - 2017-03-02 08:32:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:32:03 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:03 --> Total execution time: 0.2130
DEBUG - 2017-03-02 08:32:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:32:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:32:03 --> Total execution time: 0.2490
DEBUG - 2017-03-02 08:32:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:06 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:32:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:32:06 --> Total execution time: 0.1360
DEBUG - 2017-03-02 08:32:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:27 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:32:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:32:27 --> Total execution time: 0.1766
DEBUG - 2017-03-02 08:32:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:32:29 --> Total execution time: 0.1290
DEBUG - 2017-03-02 08:32:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:32:32 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:32 --> Total execution time: 0.0790
DEBUG - 2017-03-02 08:32:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:32:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:32:32 --> Total execution time: 0.1770
DEBUG - 2017-03-02 08:32:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:32:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:32:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:32:36 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:32:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:32:36 --> Total execution time: 0.1160
DEBUG - 2017-03-02 08:37:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:13 --> No URI present. Default controller set.
DEBUG - 2017-03-02 08:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:13 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 08:37:13 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 08:37:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:13 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 08:37:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:37:13 --> Total execution time: 0.1740
DEBUG - 2017-03-02 08:37:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:14 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:37:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:37:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:37:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:37:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:37:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:37:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:37:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:37:15 --> Total execution time: 0.2340
DEBUG - 2017-03-02 08:37:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:37:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:37:18 --> Total execution time: 0.2000
DEBUG - 2017-03-02 08:37:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:20 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 08:37:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 08:37:20 --> Total execution time: 0.2606
DEBUG - 2017-03-02 08:37:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 08:37:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 08:37:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 08:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 08:37:22 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 08:37:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 08:37:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 08:37:23 --> Total execution time: 0.1300
DEBUG - 2017-03-02 09:05:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:05:27 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:05:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:05:27 --> Total execution time: 0.1980
DEBUG - 2017-03-02 09:05:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 09:05:29 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/incoming_view
DEBUG - 2017-03-02 09:05:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 09:05:34 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/incoming_view
DEBUG - 2017-03-02 09:05:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 09:05:38 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/incoming_view
DEBUG - 2017-03-02 09:05:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:05:50 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:05:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:05:50 --> Total execution time: 0.2580
DEBUG - 2017-03-02 09:05:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:05:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:05:54 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:05:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:05:54 --> Total execution time: 0.1766
DEBUG - 2017-03-02 09:14:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:14:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:14:55 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:14:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:14:55 --> Total execution time: 0.4030
DEBUG - 2017-03-02 09:14:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:14:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:14:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:14:58 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:14:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:14:58 --> Total execution time: 0.1820
DEBUG - 2017-03-02 09:15:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:15:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:15:04 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:15:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:15:04 --> Total execution time: 0.2500
DEBUG - 2017-03-02 09:15:05 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:15:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:15:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:15:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:15:05 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:15:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:15:05 --> Total execution time: 0.1510
DEBUG - 2017-03-02 09:15:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:15:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:15:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:15:36 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:15:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:15:36 --> Total execution time: 0.2486
DEBUG - 2017-03-02 09:15:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:15:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:15:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:15:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:15:37 --> Total execution time: 0.1740
DEBUG - 2017-03-02 09:19:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:19:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:19:39 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:19:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:19:39 --> Total execution time: 0.2496
DEBUG - 2017-03-02 09:19:41 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:19:41 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:19:41 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:19:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:19:41 --> Total execution time: 0.1340
DEBUG - 2017-03-02 09:20:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:20:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:20:03 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:20:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:20:03 --> Total execution time: 0.2250
DEBUG - 2017-03-02 09:21:19 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:21:19 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:21:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:21:19 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:21:19 --> Total execution time: 0.2652
DEBUG - 2017-03-02 09:21:21 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:21:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:21:21 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:21:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:21:21 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:21:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:21:21 --> Total execution time: 0.1540
DEBUG - 2017-03-02 09:21:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:21:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:21:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:21:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:21:25 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:21:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:21:25 --> Total execution time: 0.1560
DEBUG - 2017-03-02 09:21:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:21:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:21:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:21:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:21:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:21:51 --> Total execution time: 0.1872
DEBUG - 2017-03-02 09:21:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:21:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:21:52 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:21:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:21:52 --> Total execution time: 0.1860
DEBUG - 2017-03-02 09:22:05 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:22:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:22:05 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:22:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:22:05 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:22:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:22:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:22:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:22:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:22:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:22:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:22:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:22:06 --> Total execution time: 0.1872
DEBUG - 2017-03-02 09:22:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:22:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:22:07 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 09:22:07 --> Total execution time: 0.1540
DEBUG - 2017-03-02 09:22:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:22:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:22:44 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:22:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:22:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:22:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:22:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:22:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:22:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:22:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:22:45 --> Total execution time: 0.2960
DEBUG - 2017-03-02 09:22:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:22:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:22:46 --> External MX_Controller Initialized
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:22:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 09:22:46 --> Total execution time: 0.1530
DEBUG - 2017-03-02 09:23:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:23:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:23:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:23:00 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 09:23:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:23:00 --> Total execution time: 0.3020
DEBUG - 2017-03-02 09:23:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:23:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:23:09 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 09:23:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:23:09 --> Total execution time: 0.2480
DEBUG - 2017-03-02 09:23:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:23:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:23:13 --> External MX_Controller Initialized
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 09:23:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 09:23:13 --> Total execution time: 0.1430
DEBUG - 2017-03-02 09:28:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:28:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:28:46 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 09:28:46 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 09:28:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:28:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:28:46 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 09:28:46 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 09:28:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 09:28:46 --> Total execution time: 0.0312
DEBUG - 2017-03-02 09:28:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:28:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:28:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:28:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:28:53 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 09:28:53 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 09:28:53 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 09:28:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:28:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:28:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:28:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:28:53 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 09:28:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:28:53 --> Total execution time: 0.0936
DEBUG - 2017-03-02 09:29:24 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:29:24 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:29:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:29:24 --> User MX_Controller Initialized
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_permission.php
DEBUG - 2017-03-02 09:29:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:29:24 --> Total execution time: 0.1092
DEBUG - 2017-03-02 09:29:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 09:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 09:29:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 09:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 09:29:26 --> User MX_Controller Initialized
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/role_form.php
DEBUG - 2017-03-02 09:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 09:29:26 --> Total execution time: 0.1092
DEBUG - 2017-03-02 10:12:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:12:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:12:53 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:12:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:12:53 --> Total execution time: 0.4240
DEBUG - 2017-03-02 10:12:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:12:56 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:12:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:12:56 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:12:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:12:56 --> Total execution time: 0.3346
DEBUG - 2017-03-02 10:12:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:12:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:12:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:12:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:12:59 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:12:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 10:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 10:13:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:13:00 --> Total execution time: 0.3080
DEBUG - 2017-03-02 10:13:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:13:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:13:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:13:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:13:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:13:57 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:13:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 10:13:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
ERROR - 2017-03-02 10:13:57 --> Severity: Notice --> Undefined variable: surat_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 154
ERROR - 2017-03-02 10:13:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;ref_id&quot; violates not-null constraint
DETAIL:  Failing row contains (ed66d8af-5302-47e0-8e11-4be09bfee4ba, 6bc2304e-86c1-4100-b686-9a4096be9094, 5, surat, null, 0, 1, Surat Contract Maintenance dibuat oleh Staff TU, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 2017-03-02 16:11:07.229674). C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 10:13:57 --> Query error: ERROR:  null value in column "ref_id" violates not-null constraint
DETAIL:  Failing row contains (ed66d8af-5302-47e0-8e11-4be09bfee4ba, 6bc2304e-86c1-4100-b686-9a4096be9094, 5, surat, null, 0, 1, Surat Contract Maintenance dibuat oleh Staff TU, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 2017-03-02 16:11:07.229674). - Invalid query: INSERT INTO "process_notes" ("function_ref_id", "organization_id", "flow_type", "table", "ref_id", "user_id", "flow_seq", "note") VALUES ('5', '6bc2304e-86c1-4100-b686-9a4096be9094', 1, 'surat', NULL, '5fc0a3dc-2512-4534-a2e5-025c100280b3', 0, 'Surat Contract Maintenance dibuat oleh Staff TU')
DEBUG - 2017-03-02 10:14:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:14:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:14:47 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:14:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 10:14:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:14:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:14:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 10:14:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:14:48 --> Total execution time: 0.2970
DEBUG - 2017-03-02 10:14:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:14:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:14:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:14:51 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:14:51 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:14:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 10:14:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
ERROR - 2017-03-02 10:14:51 --> Severity: Notice --> Undefined variable: agenda C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 160
ERROR - 2017-03-02 10:14:51 --> Severity: Notice --> Undefined variable: surat_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 160
ERROR - 2017-03-02 10:14:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;agenda&quot; violates not-null constraint
DETAIL:  Failing row contains (633, 5, 3ae28664-df2d-415d-b520-017e77049ab3, null, Surat Contract Maintenance dibuat oleh Staff TU, surat/kontrak/sheets_view/, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 0, 0, 2017-03-02 16:12:01.214053). C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 10:14:51 --> Query error: ERROR:  null value in column "agenda" violates not-null constraint
DETAIL:  Failing row contains (633, 5, 3ae28664-df2d-415d-b520-017e77049ab3, null, Surat Contract Maintenance dibuat oleh Staff TU, surat/kontrak/sheets_view/, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 0, 0, 2017-03-02 16:12:01.214053). - Invalid query: INSERT INTO "notify" ("function_ref_id", "ref_id", "agenda", "note", "detail_link", "notify_user_id", "status", "read") VALUES ('5', '3ae28664-df2d-415d-b520-017e77049ab3', NULL, 'Surat Contract Maintenance dibuat oleh Staff TU', 'surat/kontrak/sheets_view/', '5fc0a3dc-2512-4534-a2e5-025c100280b3', 0, 0)
ERROR - 2017-03-02 10:14:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\eoffice\core\core\Exceptions.php:272) C:\xampp\htdocs\eoffice\core\core\Common.php 573
DEBUG - 2017-03-02 10:18:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:18:50 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:18:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:18:50 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:18:50 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:18:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:18:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:18:50 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:18:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:18:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:18:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:18:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:18:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:18:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:18:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:18:51 --> Total execution time: 0.1092
DEBUG - 2017-03-02 10:19:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:19:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:19:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:19:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:19:51 --> Total execution time: 0.2610
DEBUG - 2017-03-02 10:19:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:19:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:19:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:19:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:19:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:19:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:19:54 --> Total execution time: 0.4370
DEBUG - 2017-03-02 10:19:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:19:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:19:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:19:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:19:55 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:19:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 10:19:55 --> Total execution time: 0.1830
DEBUG - 2017-03-02 10:20:15 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:20:15 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:20:15 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:20:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:20:15 --> Total execution time: 0.2300
DEBUG - 2017-03-02 10:21:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:21:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:21:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:21:18 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:21:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:21:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:21:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:21:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:21:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:21:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 10:21:19 --> Total execution time: 0.2170
DEBUG - 2017-03-02 10:21:23 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:21:23 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:21:23 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_add.php
DEBUG - 2017-03-02 10:21:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:21:23 --> Total execution time: 0.2880
DEBUG - 2017-03-02 10:21:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:21:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:21:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:21:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:21:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:21:55 --> Total execution time: 0.4080
DEBUG - 2017-03-02 10:21:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:21:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:21:57 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:21:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 10:21:57 --> Total execution time: 0.1790
DEBUG - 2017-03-02 10:22:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:22:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:22:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:22:02 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:22:02 --> Total execution time: 0.2940
DEBUG - 2017-03-02 10:22:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:22:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:22:07 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:22:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 10:22:07 --> Total execution time: 0.1870
DEBUG - 2017-03-02 10:22:10 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:22:10 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:22:10 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:22:10 --> Total execution time: 0.2866
DEBUG - 2017-03-02 10:22:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:22:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:22:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:22:27 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:22:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:22:27 --> Total execution time: 0.3096
DEBUG - 2017-03-02 10:23:23 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:23 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:23 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:23:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:23 --> Total execution time: 0.2816
DEBUG - 2017-03-02 10:23:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:31 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:23:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:31 --> Total execution time: 0.2600
DEBUG - 2017-03-02 10:23:35 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:35 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:35 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:23:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:36 --> Total execution time: 0.2796
DEBUG - 2017-03-02 10:23:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:40 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:40 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:23:40 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:23:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:40 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:23:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:40 --> Total execution time: 0.2810
DEBUG - 2017-03-02 10:23:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:43 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:23:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:43 --> Total execution time: 0.2710
DEBUG - 2017-03-02 10:23:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:23:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:23:55 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:23:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:23:55 --> Total execution time: 0.4606
DEBUG - 2017-03-02 10:24:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:44 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:24:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:24:44 --> Total execution time: 0.1210
DEBUG - 2017-03-02 10:24:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:47 --> External MX_Controller Initialized
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:24:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_view.php
DEBUG - 2017-03-02 10:24:47 --> Total execution time: 0.1420
DEBUG - 2017-03-02 10:24:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:51 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:51 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:24:51 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:24:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:24:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:24:51 --> Total execution time: 0.1930
DEBUG - 2017-03-02 10:24:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:53 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:24:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:24:53 --> Total execution time: 0.3490
DEBUG - 2017-03-02 10:24:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:24:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:24:57 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:24:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:24:57 --> Total execution time: 0.2470
DEBUG - 2017-03-02 10:25:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:25:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:25:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:25:00 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:25:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:25:00 --> Total execution time: 0.2030
DEBUG - 2017-03-02 10:25:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:25:02 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:25:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:25:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:25:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:25:02 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:25:02 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:25:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:25:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:25:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:25:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:25:02 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:25:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:25:02 --> Total execution time: 0.2580
DEBUG - 2017-03-02 10:25:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:25:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:25:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:25:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:25:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:25:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:25:03 --> Total execution time: 0.2570
DEBUG - 2017-03-02 10:27:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:27:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:27:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:27:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:27:31 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 10:27:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:27:31 --> Total execution time: 0.2710
DEBUG - 2017-03-02 10:27:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:27:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:27:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:27:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:27:50 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:27:50 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 10:27:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
DEBUG - 2017-03-02 10:27:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:27:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:27:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:27:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:27:50 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:27:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:27:50 --> Total execution time: 0.2630
DEBUG - 2017-03-02 10:27:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:27:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:27:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:27:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:27:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:27:54 --> Total execution time: 0.3910
DEBUG - 2017-03-02 10:27:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:27:56 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:27:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 10:27:56 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/kontrak_view
DEBUG - 2017-03-02 10:28:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:28:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:28:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 10:28:44 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/kontrak_view
DEBUG - 2017-03-02 10:28:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:28:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:28:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:28:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 10:28:47 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/kontrak_view
DEBUG - 2017-03-02 10:29:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:17 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:17 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:29:17 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:29:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:17 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:29:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:29:17 --> Total execution time: 0.2660
DEBUG - 2017-03-02 10:29:21 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:21 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:21 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:29:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:29:21 --> Total execution time: 0.2290
DEBUG - 2017-03-02 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:26 --> No URI present. Default controller set.
DEBUG - 2017-03-02 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:26 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 10:29:26 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:26 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 10:29:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:29:26 --> Total execution time: 0.2910
DEBUG - 2017-03-02 10:29:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:28 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:29:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:29:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:29:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:29:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:29:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:29:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:29:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:29:29 --> Total execution time: 0.2676
DEBUG - 2017-03-02 10:29:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:29:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:29:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:29:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 10:29:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 10:29:30 --> Total execution time: 0.1510
DEBUG - 2017-03-02 10:37:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:37:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:37:33 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 10:37:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 10:37:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:37:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:37:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 10:37:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 10:37:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 10:37:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 10:37:34 --> Total execution time: 0.4140
DEBUG - 2017-03-02 10:37:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 10:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 10:37:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 10:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 10:37:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 10:37:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 10:37:37 --> Total execution time: 0.1800
DEBUG - 2017-03-02 11:10:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:10:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:10:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:10:29 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 11:10:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:10:29 --> Total execution time: 0.2390
DEBUG - 2017-03-02 11:33:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:33:37 --> No URI present. Default controller set.
DEBUG - 2017-03-02 11:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:33:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:33:37 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 11:33:37 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 11:33:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 11:33:37 --> Total execution time: 0.0936
DEBUG - 2017-03-02 11:34:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:13 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 11:34:13 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 11:34:13 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 11:34:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:13 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 11:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:34:13 --> Total execution time: 0.2184
DEBUG - 2017-03-02 11:34:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:20 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 11:34:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:34:20 --> Total execution time: 0.2340
DEBUG - 2017-03-02 11:34:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:46 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 11:34:46 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 11:34:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
DEBUG - 2017-03-02 11:34:46 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:46 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:46 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:34:46 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 11:34:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:34:47 --> Total execution time: 0.2808
DEBUG - 2017-03-02 11:34:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:53 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 11:34:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:34:53 --> Total execution time: 0.4056
DEBUG - 2017-03-02 11:34:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:34:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:34:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:34:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:34:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 11:34:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 11:34:57 --> Total execution time: 0.2340
DEBUG - 2017-03-02 11:35:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:35:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:35:07 --> External MX_Controller Initialized
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_edit.php
DEBUG - 2017-03-02 11:35:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:35:07 --> Total execution time: 0.4056
DEBUG - 2017-03-02 11:35:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:35:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:35:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:35:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:35:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 11:35:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:35:18 --> Total execution time: 0.2340
DEBUG - 2017-03-02 11:35:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:35:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:35:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 11:35:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 11:35:29 --> Total execution time: 0.1248
DEBUG - 2017-03-02 11:35:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:35:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:35:37 --> External MX_Controller Initialized
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_edit.php
DEBUG - 2017-03-02 11:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 11:35:37 --> Total execution time: 0.4368
DEBUG - 2017-03-02 11:50:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:50:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:50:25 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 11:50:25 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 11:50:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 11:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 11:50:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 11:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 11:50:25 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 11:50:25 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 11:50:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 11:50:25 --> Total execution time: 0.0570
DEBUG - 2017-03-02 14:29:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:29:55 --> No URI present. Default controller set.
DEBUG - 2017-03-02 14:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:29:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:29:55 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 14:29:55 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 14:29:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 14:29:55 --> Total execution time: 0.0910
DEBUG - 2017-03-02 14:29:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:29:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:29:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:29:59 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 14:29:59 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 14:29:59 --> Severity: Notice --> Undefined property: stdClass::$eksternal_id C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 107
DEBUG - 2017-03-02 14:29:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:29:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:29:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:29:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:29:59 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 14:29:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:29:59 --> Total execution time: 0.2110
DEBUG - 2017-03-02 14:30:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:01 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:30:01 --> Total execution time: 0.1892
DEBUG - 2017-03-02 14:30:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:09 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:30:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:30:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:30:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:30:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:30:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:30:10 --> Total execution time: 0.1556
DEBUG - 2017-03-02 14:30:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:13 --> External MX_Controller Initialized
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/arsip/models/Arsip_model.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/arsip/views/my_archive.php
DEBUG - 2017-03-02 14:30:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:30:13 --> Total execution time: 0.1520
DEBUG - 2017-03-02 14:30:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:30:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:30:18 --> Total execution time: 0.1716
DEBUG - 2017-03-02 14:30:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:22 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:30:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:30:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:30:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
ERROR - 2017-03-02 14:30:22 --> Severity: Compile Error --> Cannot redeclare Kontrak_model::proses_data() C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 903
DEBUG - 2017-03-02 14:30:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:30:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:30:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:30:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
ERROR - 2017-03-02 14:30:30 --> Severity: Compile Error --> Cannot redeclare Kontrak_model::proses_data() C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 903
DEBUG - 2017-03-02 14:30:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:30:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:30:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:30:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:30:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
ERROR - 2017-03-02 14:30:33 --> Severity: Compile Error --> Cannot redeclare Kontrak_model::proses_data() C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 903
DEBUG - 2017-03-02 14:31:49 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:31:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:31:49 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:31:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:31:49 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:31:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:31:49 --> Total execution time: 0.1276
DEBUG - 2017-03-02 14:31:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:31:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:31:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:31:54 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:31:54 --> Total execution time: 0.2956
DEBUG - 2017-03-02 14:31:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:31:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:31:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:31:58 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:31:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:31:58 --> Total execution time: 0.1340
DEBUG - 2017-03-02 14:32:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:29 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:32:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:32:29 --> Total execution time: 0.1466
DEBUG - 2017-03-02 14:32:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:32:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:32:30 --> Total execution time: 0.1290
DEBUG - 2017-03-02 14:32:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:33 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:32:33 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 14:32:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:43 --> Total execution time: 9.9626
DEBUG - 2017-03-02 14:32:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:43 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:32:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:32:43 --> Total execution time: 0.1340
DEBUG - 2017-03-02 14:32:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:51 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:32:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:32:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:56 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:56 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:32:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:32:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:32:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:32:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:32:58 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:32:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:33:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:33:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:33:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:33:20 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 14:33:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:33:20 --> Total execution time: 0.1986
DEBUG - 2017-03-02 14:33:23 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:33:23 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:33:23 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:33:23 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:33:23 --> Total execution time: 0.1800
DEBUG - 2017-03-02 14:33:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:33:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:33:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:33:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 14:33:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:33:30 --> Total execution time: 0.1966
DEBUG - 2017-03-02 14:35:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:25 --> No URI present. Default controller set.
DEBUG - 2017-03-02 14:35:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:25 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 14:35:25 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 14:35:25 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:25 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:25 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:35:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:35:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:25 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 14:35:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:26 --> Total execution time: 0.1930
DEBUG - 2017-03-02 14:35:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:28 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:35:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:28 --> Total execution time: 0.1990
DEBUG - 2017-03-02 14:35:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:30 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:35:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:30 --> Total execution time: 0.1530
DEBUG - 2017-03-02 14:35:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:35:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:35:33 --> Total execution time: 0.1090
DEBUG - 2017-03-02 14:35:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 14:35:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:37 --> Total execution time: 0.2140
DEBUG - 2017-03-02 14:35:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:45 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:35:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:45 --> Total execution time: 0.1536
DEBUG - 2017-03-02 14:35:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:48 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:35:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:35:48 --> Total execution time: 0.1306
DEBUG - 2017-03-02 14:35:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:50 --> External MX_Controller Initialized
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/external_incoming_form_edit.php
DEBUG - 2017-03-02 14:35:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:50 --> Total execution time: 0.2436
DEBUG - 2017-03-02 14:35:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:35:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:35:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:35:52 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:35:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:35:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:35:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:35:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:35:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:35:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:35:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:35:53 --> Total execution time: 0.2620
DEBUG - 2017-03-02 14:48:21 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:21 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:22 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:48:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:22 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 14:48:22 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 14:48:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/views/login.php
DEBUG - 2017-03-02 14:48:22 --> Total execution time: 0.0312
DEBUG - 2017-03-02 14:48:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:26 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:48:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:48:26 --> Total execution time: 0.2256
DEBUG - 2017-03-02 14:48:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:27 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:48:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 14:48:27 --> Severity: Parsing Error --> syntax error, unexpected '<' C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 278
DEBUG - 2017-03-02 14:48:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:39 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:48:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:48:39 --> Total execution time: 0.1426
DEBUG - 2017-03-02 14:48:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:40 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:48:40 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:48:40 --> Total execution time: 0.1106
DEBUG - 2017-03-02 14:48:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:50 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:48:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:48:50 --> Total execution time: 0.1656
DEBUG - 2017-03-02 14:48:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:48:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:48:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:48:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:48:51 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:48:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:48:51 --> Total execution time: 0.1210
DEBUG - 2017-03-02 14:49:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:49:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:49:36 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:49:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:49:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:49:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:49:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:49:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:49:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:49:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:49:37 --> Total execution time: 0.2250
DEBUG - 2017-03-02 14:49:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:49:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:49:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:49:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:49:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:49:38 --> Total execution time: 0.1080
DEBUG - 2017-03-02 14:49:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:49:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:49:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:49:59 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:49:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:49:59 --> Total execution time: 0.2956
DEBUG - 2017-03-02 14:50:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:00 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 14:50:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:50:00 --> Total execution time: 0.1910
DEBUG - 2017-03-02 14:50:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:50:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:50:03 --> Total execution time: 0.1750
DEBUG - 2017-03-02 14:50:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:06 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:50:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:50:06 --> Total execution time: 0.1080
DEBUG - 2017-03-02 14:50:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:16 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:50:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:50:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:50:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:50:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:50:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:50:17 --> Total execution time: 0.1816
DEBUG - 2017-03-02 14:50:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:18 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:50:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:50:18 --> Total execution time: 0.1060
DEBUG - 2017-03-02 14:50:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:50:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:50:51 --> Total execution time: 0.1636
DEBUG - 2017-03-02 14:50:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:50:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:50:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:50:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:50:52 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:50:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:50:52 --> Total execution time: 0.1746
DEBUG - 2017-03-02 14:51:03 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:51:03 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:51:03 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:51:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:51:03 --> Total execution time: 0.2156
DEBUG - 2017-03-02 14:51:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:51:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:51:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:51:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:51:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:51:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:51:04 --> Total execution time: 0.1146
DEBUG - 2017-03-02 14:51:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:51:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:51:16 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:51:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:51:16 --> Total execution time: 0.1436
DEBUG - 2017-03-02 14:51:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:51:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:51:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:51:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:51:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 14:51:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 14:51:17 --> Total execution time: 0.1116
DEBUG - 2017-03-02 14:59:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:59:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:59:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:59:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:59:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:59:18 --> Total execution time: 0.3136
DEBUG - 2017-03-02 14:59:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:59:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:59:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:59:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 14:59:20 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) C:\xampp\htdocs\eoffice\appl\modules\surat\controllers\Kontrak.php 156
DEBUG - 2017-03-02 14:59:52 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:59:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:59:52 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 14:59:52 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 14:59:52 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 14:59:52 --> Total execution time: 0.3576
DEBUG - 2017-03-02 14:59:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 14:59:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 14:59:56 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 14:59:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 14:59:56 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) C:\xampp\htdocs\eoffice\appl\modules\surat\controllers\Kontrak.php 187
DEBUG - 2017-03-02 15:00:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:00:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:00:48 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:00:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:00:48 --> Total execution time: 0.1386
DEBUG - 2017-03-02 15:00:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:00:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:00:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:00:50 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:00:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 15:00:50 --> Total execution time: 0.1140
DEBUG - 2017-03-02 15:25:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:25:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:25:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:25:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_add.php
DEBUG - 2017-03-02 15:25:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:25:57 --> Total execution time: 0.2340
DEBUG - 2017-03-02 15:26:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:26:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:26:48 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:26:48 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 15:26:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\libraries\Lx.php 487
DEBUG - 2017-03-02 15:26:48 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:26:48 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:26:48 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 15:26:48 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:26:48 --> Total execution time: 0.1430
DEBUG - 2017-03-02 15:26:51 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:26:51 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:26:51 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:26:51 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:26:51 --> Total execution time: 0.3190
DEBUG - 2017-03-02 15:26:53 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:26:53 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:26:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:26:53 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:26:53 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 15:26:53 --> Total execution time: 0.1216
DEBUG - 2017-03-02 15:26:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:26:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:26:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:26:55 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:26:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:26:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:26:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:26:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:26:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:26:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 15:26:56 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 174
ERROR - 2017-03-02 15:26:56 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 174
ERROR - 2017-03-02 15:26:56 --> Severity: Notice --> Undefined index: ref_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 175
ERROR - 2017-03-02 15:26:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 15:26:56 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ - Invalid query: UPDATE surat
				   SET status = (CASE WHEN status =  THEN  ELSE status + 1 END)
				 WHERE surat_id = ''
DEBUG - 2017-03-02 15:34:10 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:34:10 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:34:10 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:34:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:34:10 --> Total execution time: 0.2890
DEBUG - 2017-03-02 15:34:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:34:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:34:11 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:34:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:34:11 --> Total execution time: 0.1686
DEBUG - 2017-03-02 15:34:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:34:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:34:13 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:34:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 15:34:13 --> Total execution time: 0.1216
DEBUG - 2017-03-02 15:34:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:34:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:34:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:34:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:34:14 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 2
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 2
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 2
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 29
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 29
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 30
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 30
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 31
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 31
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 32
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 32
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 33
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 33
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 34
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 34
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 36
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 36
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 3
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 3
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 28
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 33
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 33
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 38
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 38
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 43
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 43
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 52
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 52
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 52
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 52
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 52
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 57
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 57
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 57
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 57
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 57
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 62
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 62
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 67
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 67
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 67
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 67
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 53
ERROR - 2017-03-02 15:34:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 53
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 109
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 109
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 109
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 109
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 109
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 126
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 126
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 134
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 134
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 145
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 145
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 155
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 155
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: attachment C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 198
ERROR - 2017-03-02 15:34:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 198
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 381
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 381
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 385
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 385
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: process C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 406
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 406
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 412
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 412
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: surat C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 416
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 416
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Undefined variable: process C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 419
ERROR - 2017-03-02 15:34:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 419
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:34:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:34:14 --> Total execution time: 0.1850
DEBUG - 2017-03-02 15:38:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:38:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:38:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:38:13 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:38:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:38:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:38:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:38:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:38:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:38:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:38:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:38:14 --> Total execution time: 0.3150
DEBUG - 2017-03-02 15:38:15 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:38:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:38:15 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:38:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:38:16 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:38:16 --> Total execution time: 0.1696
DEBUG - 2017-03-02 15:38:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:38:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:38:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:38:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:38:16 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:38:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 15:38:16 --> Total execution time: 0.1226
DEBUG - 2017-03-02 15:38:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:38:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:38:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:38:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:38:18 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:38:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:38:18 --> Total execution time: 0.1740
DEBUG - 2017-03-02 15:42:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:42:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:42:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:42:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:42:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:42:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:42:11 --> Total execution time: 0.2596
DEBUG - 2017-03-02 15:42:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:42:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:42:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:42:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:42:31 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:42:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:42:31 --> Total execution time: 0.1820
DEBUG - 2017-03-02 15:43:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:43:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:43:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:43:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:43:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:43:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:43:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:43:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:43:05 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:43:05 --> Total execution time: 0.2422
DEBUG - 2017-03-02 15:43:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:43:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:43:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
ERROR - 2017-03-02 15:43:11 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 366
ERROR - 2017-03-02 15:43:11 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 397
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:43:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:43:11 --> Total execution time: 0.1826
DEBUG - 2017-03-02 15:43:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:43:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:43:43 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:43:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:43:43 --> Total execution time: 0.1680
DEBUG - 2017-03-02 15:44:31 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 15:44:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 15:44:31 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 15:44:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 15:44:31 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 15:44:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 15:44:31 --> Total execution time: 0.2830
DEBUG - 2017-03-02 16:19:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:19:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:19:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:19:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:19:45 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:19:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:19:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:19:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:19:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:19:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
ERROR - 2017-03-02 16:19:45 --> Severity: Parsing Error --> syntax error, unexpected '=' C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 225
DEBUG - 2017-03-02 16:20:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:20:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:20:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:20:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:20:09 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:20:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:20:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:20:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:20:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 16:20:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 16:20:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:20:10 --> Total execution time: 0.2926
DEBUG - 2017-03-02 16:20:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:20:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:20:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:20:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:20:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:20:30 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 16:20:31 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:20:31 --> Total execution time: 0.1640
DEBUG - 2017-03-02 16:21:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:21:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:21:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:21:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:21:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:21:37 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:21:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:21:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;0&quot;
LINE 1: UPDATE &quot;surat&quot; SET 0 = ''
                           ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:21:37 --> Query error: ERROR:  syntax error at or near "0"
LINE 1: UPDATE "surat" SET 0 = ''
                           ^ - Invalid query: UPDATE "surat" SET 0 = ''
WHERE "surat_id" = '1da204c2-7256-4c53-88da-a32ff32db8ea'
DEBUG - 2017-03-02 16:24:40 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:24:40 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:24:40 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:24:40 --> LX Form Validation Class Initialized
ERROR - 2017-03-02 16:24:40 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 225
DEBUG - 2017-03-02 16:25:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:25:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:25:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:25:37 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:25:37 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:25:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:25:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:25:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 16:25:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:25:38 --> Total execution time: 0.2630
DEBUG - 2017-03-02 16:26:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:26:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:26:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:26:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:26:17 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:26:17 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 235
ERROR - 2017-03-02 16:26:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;status_berkas&quot; of relation &quot;addendum&quot; does not exist
LINE 1: INSERT INTO &quot;addendum&quot; (&quot;agenda_id&quot;, &quot;status_berkas&quot;, &quot;sifat...
                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:26:17 --> Query error: ERROR:  column "status_berkas" of relation "addendum" does not exist
LINE 1: INSERT INTO "addendum" ("agenda_id", "status_berkas", "sifat...
                                             ^ - Invalid query: INSERT INTO "addendum" ("agenda_id", "status_berkas", "sifat_surat", "jenis_surat", "surat_no", "surat_tgl", "surat_perihal", "function_ref_id", "jenis_agenda", "surat_from_ref", "surat_ringkasan", "surat_tgl_masuk", "surat_unit_lampiran", "addendum_id", "surat_id", "status", "created_id", "organization_id") VALUES (NULL, 'PT. Mitra 2', 'addendum_1', 'addendum_Lengkap', 'add. 0987.009.8765', '2017-03-02 00:00:00', 'pembuatan ruang bersalin', '5', 'CM', 'Contract', '700.000.000', '2017-05-31 00:00:00', '02-03-2017', 'd37d78e1-2abd-4ff8-a52b-ad9ff09f234b', '1da204c2-7256-4c53-88da-a32ff32db8ea', 1, '5fc0a3dc-2512-4534-a2e5-025c100280b3', '6bc2304e-86c1-4100-b686-9a4096be9094')
DEBUG - 2017-03-02 16:26:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:26:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:26:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:26:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 16:26:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:26:57 --> Total execution time: 0.2330
DEBUG - 2017-03-02 16:31:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:31:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:31:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:31:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:31:27 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:31:27 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:31:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:31:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 235
ERROR - 2017-03-02 16:31:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;surat_from_ref&quot; of relation &quot;addendum&quot; does not exist
LINE 1: ...urat_perihal&quot;, &quot;function_ref_id&quot;, &quot;jenis_agenda&quot;, &quot;surat_fro...
                                                             ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:31:27 --> Query error: ERROR:  column "surat_from_ref" of relation "addendum" does not exist
LINE 1: ...urat_perihal", "function_ref_id", "jenis_agenda", "surat_fro...
                                                             ^ - Invalid query: INSERT INTO "addendum" ("agenda_id", "status_berkas", "sifat_surat", "jenis_surat", "surat_no", "surat_tgl", "surat_perihal", "function_ref_id", "jenis_agenda", "surat_from_ref", "surat_ringkasan", "surat_tgl_masuk", "surat_unit_lampiran", "addendum_id", "surat_id", "status", "created_id", "organization_id") VALUES (NULL, 'PT. Mitra 2', 'addendum_1', 'addendum_Lengkap', 'add.1234.5678', '2017-03-02 00:00:00', 'pembuatan ruang bersalin', '5', 'CM', 'Contract', '700.000.000', '2017-05-31 00:00:00', '02-03-2017', '5eb8cd3f-1cc4-4aa2-93d4-fc67c3fa6504', '1da204c2-7256-4c53-88da-a32ff32db8ea', 1, '5fc0a3dc-2512-4534-a2e5-025c100280b3', '6bc2304e-86c1-4100-b686-9a4096be9094')
DEBUG - 2017-03-02 16:35:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:35:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:35:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:35:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 16:35:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:35:38 --> Total execution time: 0.1900
DEBUG - 2017-03-02 16:35:41 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:35:41 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:35:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:35:41 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:35:41 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:35:41 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:35:41 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 235
ERROR - 2017-03-02 16:35:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;agenda_id&quot; violates not-null constraint
DETAIL:  Failing row contains (dbc71112-95d7-4ee4-8145-de5fc48507e2, 1da204c2-7256-4c53-88da-a32ff32db8ea, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 2017-03-02 22:32:52.207461, -, null, 6bc2304e-86c1-4100-b686-9a4096be9094, 5, 1, CM, null, PT. Mitra 2, addendum_1, addendum_Lengkap, Contract, add.1234.5678, 2017-03-02, -, 02-03-2017, 2017-05-31 00:00:00, pembuatan ruang bersalin, 700.000.000, null, null, null, null, null). C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:35:41 --> Query error: ERROR:  null value in column "agenda_id" violates not-null constraint
DETAIL:  Failing row contains (dbc71112-95d7-4ee4-8145-de5fc48507e2, 1da204c2-7256-4c53-88da-a32ff32db8ea, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 2017-03-02 22:32:52.207461, -, null, 6bc2304e-86c1-4100-b686-9a4096be9094, 5, 1, CM, null, PT. Mitra 2, addendum_1, addendum_Lengkap, Contract, add.1234.5678, 2017-03-02, -, 02-03-2017, 2017-05-31 00:00:00, pembuatan ruang bersalin, 700.000.000, null, null, null, null, null). - Invalid query: INSERT INTO "addendum" ("agenda_id", "status_berkas", "sifat_surat", "jenis_surat", "surat_no", "surat_tgl", "surat_perihal", "function_ref_id", "jenis_agenda", "surat_from_ref", "surat_ringkasan", "surat_tgl_masuk", "surat_unit_lampiran", "addendum_id", "surat_id", "status", "created_id", "organization_id") VALUES (NULL, 'PT. Mitra 2', 'addendum_1', 'addendum_Lengkap', 'add.1234.5678', '2017-03-02 00:00:00', 'pembuatan ruang bersalin', '5', 'CM', 'Contract', '700.000.000', '2017-05-31 00:00:00', '02-03-2017', 'dbc71112-95d7-4ee4-8145-de5fc48507e2', '1da204c2-7256-4c53-88da-a32ff32db8ea', 1, '5fc0a3dc-2512-4534-a2e5-025c100280b3', '6bc2304e-86c1-4100-b686-9a4096be9094')
DEBUG - 2017-03-02 16:36:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:36:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:36:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:36:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:36:26 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:36:26 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:36:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:36:26 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 246
ERROR - 2017-03-02 16:36:26 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 246
ERROR - 2017-03-02 16:36:26 --> Severity: Notice --> Undefined index: surat_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 247
ERROR - 2017-03-02 16:36:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:36:26 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ - Invalid query: UPDATE surat
				   SET status = (CASE WHEN status =  THEN  ELSE status + 1 END)
				 WHERE surat_id = ''
ERROR - 2017-03-02 16:36:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\eoffice\core\core\Exceptions.php:272) C:\xampp\htdocs\eoffice\core\core\Common.php 573
DEBUG - 2017-03-02 16:38:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:38:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:38:44 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:38:44 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:38:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 16:38:45 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 246
ERROR - 2017-03-02 16:38:45 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 246
ERROR - 2017-03-02 16:38:45 --> Severity: Notice --> Undefined index: surat_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 247
ERROR - 2017-03-02 16:38:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 16:38:45 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ - Invalid query: UPDATE surat
				   SET status = (CASE WHEN status =  THEN  ELSE status + 1 END)
				 WHERE surat_id = ''
ERROR - 2017-03-02 16:38:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\eoffice\core\core\Exceptions.php:272) C:\xampp\htdocs\eoffice\core\core\Common.php 573
DEBUG - 2017-03-02 16:40:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:16 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:40:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 16:40:17 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 16:40:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:17 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:40:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:40:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 16:40:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:40:18 --> Total execution time: 0.2290
DEBUG - 2017-03-02 16:40:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:20 --> No URI present. Default controller set.
DEBUG - 2017-03-02 16:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:20 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 16:40:20 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 16:40:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:20 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 16:40:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:40:20 --> Total execution time: 0.1930
DEBUG - 2017-03-02 16:40:24 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:24 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:24 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 16:40:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 16:40:24 --> Total execution time: 0.1736
DEBUG - 2017-03-02 16:40:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:40:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:40:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:40:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 16:40:29 --> Total execution time: 0.1426
DEBUG - 2017-03-02 16:41:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 16:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 16:41:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 16:41:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 16:41:22 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 16:41:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 16:41:22 --> Total execution time: 0.1080
DEBUG - 2017-03-02 17:14:19 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:14:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:14:19 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:14:19 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:14:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:14:19 --> Total execution time: 0.2070
DEBUG - 2017-03-02 17:14:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:14:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:14:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:14:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:14:20 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:14:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:14:20 --> Severity: Parsing Error --> syntax error, unexpected '$addendum' (T_VARIABLE) C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 16
DEBUG - 2017-03-02 17:19:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:19:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:19:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:19:59 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:19:59 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:19:59 --> Total execution time: 0.2232
DEBUG - 2017-03-02 17:20:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:20:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:20:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:20:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:20:01 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:20:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:20:01 --> Severity: Parsing Error --> syntax error, unexpected '$addendum' (T_VARIABLE) C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 17
DEBUG - 2017-03-02 17:21:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:21:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:21:13 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:21:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:21:13 --> Total execution time: 0.2400
DEBUG - 2017-03-02 17:21:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:21:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:21:14 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:21:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:21:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:21:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:21:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:21:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:21:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:21:15 --> Severity: Parsing Error --> syntax error, unexpected '<' C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 252
DEBUG - 2017-03-02 17:22:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:22:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:22:37 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:22:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:22:37 --> Total execution time: 0.1936
DEBUG - 2017-03-02 17:22:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:22:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:22:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 17:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:22:38 --> Total execution time: 0.1590
DEBUG - 2017-03-02 17:26:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:26:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:26:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:26:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:26:45 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:26:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:26:45 --> Total execution time: 0.1870
DEBUG - 2017-03-02 17:26:47 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:26:47 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:26:47 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 143
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 148
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 155
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 155
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 155
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 155
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 159
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 159
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 159
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 159
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 17:26:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 165
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 165
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 165
ERROR - 2017-03-02 17:26:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 165
DEBUG - 2017-03-02 17:26:47 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:26:47 --> Total execution time: 0.1320
DEBUG - 2017-03-02 17:30:01 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:30:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:30:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:30:01 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:30:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:30:01 --> Total execution time: 0.2430
DEBUG - 2017-03-02 17:30:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:30:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:30:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:30:02 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:30:02 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:30:02 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:30:02 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
DEBUG - 2017-03-02 17:30:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:30:02 --> Total execution time: 0.1390
DEBUG - 2017-03-02 17:31:24 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:31:24 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:31:24 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:31:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:31:24 --> Total execution time: 0.2106
DEBUG - 2017-03-02 17:31:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:31:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:31:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:31:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:31:26 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:31:26 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 298
ERROR - 2017-03-02 17:31:26 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Object of class stdClass to string conversion C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Undefined variable: Object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
ERROR - 2017-03-02 17:31:26 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
DEBUG - 2017-03-02 17:31:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:31:26 --> Total execution time: 0.1360
DEBUG - 2017-03-02 17:31:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:31:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:31:33 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:31:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:31:33 --> Total execution time: 0.1506
DEBUG - 2017-03-02 17:31:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:31:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:31:34 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 17:31:34 --> Severity: Notice --> Undefined index: PT. Mitra 2 C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 309
DEBUG - 2017-03-02 17:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:31:34 --> Total execution time: 0.1370
DEBUG - 2017-03-02 17:34:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:34:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:34:02 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:34:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:34:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:34:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:34:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:34:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:34:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:34:03 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:34:03 --> Total execution time: 0.2000
DEBUG - 2017-03-02 17:34:04 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:34:04 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:34:04 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 17:34:04 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:34:04 --> Total execution time: 0.1340
DEBUG - 2017-03-02 17:34:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:34:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:34:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:34:32 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 17:34:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 17:34:32 --> Total execution time: 0.1486
DEBUG - 2017-03-02 17:34:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 17:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 17:34:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 17:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 17:34:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 17:34:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 17:34:33 --> Total execution time: 0.1300
DEBUG - 2017-03-02 18:02:35 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:02:35 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:02:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:02:35 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:02:35 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:02:35 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:02:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:02:35 --> Total execution time: 0.2276
DEBUG - 2017-03-02 18:02:35 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 18:02:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:02:35 --> Total execution time: 0.2310
DEBUG - 2017-03-02 18:02:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:02:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:02:36 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:02:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 18:02:36 --> Total execution time: 0.1300
DEBUG - 2017-03-02 18:06:37 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:06:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:06:37 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:06:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:06:37 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 18:06:37 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:06:37 --> Total execution time: 0.2330
DEBUG - 2017-03-02 18:06:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:06:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:06:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:06:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:06:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 18:06:38 --> Total execution time: 0.1230
DEBUG - 2017-03-02 18:21:59 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:21:59 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2017-03-02 18:21:59 --> 404 Page Not Found: ../modules/surat/controllers/Kontrak/input_addendum2
DEBUG - 2017-03-02 18:22:02 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:02 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:02 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 18:22:02 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:22:02 --> Total execution time: 0.2000
DEBUG - 2017-03-02 18:22:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:09 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 18:22:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:22:09 --> Total execution time: 0.1616
DEBUG - 2017-03-02 18:22:10 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:10 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:10 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 18:22:10 --> Total execution time: 0.1210
DEBUG - 2017-03-02 18:22:12 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:12 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:12 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:13 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 18:22:36 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:36 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:36 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:36 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:36 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 18:22:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:38 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 18:22:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:39 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:39 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 18:22:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:39 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:39 --> Severity: Parsing Error --> syntax error, unexpected ''last_flow'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 42
DEBUG - 2017-03-02 18:22:50 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:22:50 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:22:50 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:22:50 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:22:50 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:22:50 --> Severity: Parsing Error --> syntax error, unexpected '}' C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 129
DEBUG - 2017-03-02 18:23:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:23:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:23:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:23:57 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:23:57 --> Severity: Notice --> Undefined index: addendum_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 83
ERROR - 2017-03-02 18:23:57 --> Severity: Notice --> Undefined index: addendum_Lengkap C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 107
ERROR - 2017-03-02 18:23:57 --> Severity: Notice --> Undefined index: PT. Mitra 2 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 112
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:23:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:23:57 --> Total execution time: 0.2186
DEBUG - 2017-03-02 18:24:24 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:24:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:24:24 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:24:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:24:24 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:24:24 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:24:24 --> Severity: Notice --> Undefined index: addendum_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 84
ERROR - 2017-03-02 18:24:24 --> Severity: Notice --> Undefined index: addendum_Lengkap C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 108
ERROR - 2017-03-02 18:24:24 --> Severity: Notice --> Undefined index: PT. Mitra 2 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 113
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:24:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:24:24 --> Total execution time: 0.1966
DEBUG - 2017-03-02 18:24:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:24:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:24:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:24:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:24:38 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:24:38 --> Severity: Notice --> Undefined index: addendum_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 84
ERROR - 2017-03-02 18:24:38 --> Severity: Notice --> Undefined index: addendum_Lengkap C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 108
ERROR - 2017-03-02 18:24:38 --> Severity: Notice --> Undefined index: PT. Mitra 2 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 113
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:24:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:24:38 --> Total execution time: 0.2006
DEBUG - 2017-03-02 18:26:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:26:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:26:16 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:26:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:26:17 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:26:17 --> Severity: Notice --> Undefined index: addendum_1 C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 84
ERROR - 2017-03-02 18:26:17 --> Severity: Notice --> Undefined index: addendum_Lengkap C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 108
DEBUG - 2017-03-02 18:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:26:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:26:17 --> Total execution time: 0.2086
DEBUG - 2017-03-02 18:28:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:28:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:28:01 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:28:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:28:01 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:28:01 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
ERROR - 2017-03-02 18:28:01 --> Severity: Notice --> Undefined variable: opt_kode_add C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 84
ERROR - 2017-03-02 18:28:01 --> Severity: Notice --> Undefined variable: opt_jenis_add C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_ref.php 108
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:28:01 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:28:01 --> Total execution time: 0.2226
DEBUG - 2017-03-02 18:28:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:28:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:28:26 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:28:26 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:28:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:28:26 --> Total execution time: 0.2056
DEBUG - 2017-03-02 18:30:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:30:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:30:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:30:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:30:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:30:17 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:30:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:30:17 --> Total execution time: 0.1906
DEBUG - 2017-03-02 18:30:32 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:30:32 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:30:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:30:32 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:30:32 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:30:33 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:30:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:30:33 --> Total execution time: 0.2252
DEBUG - 2017-03-02 18:30:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:30:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:30:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:30:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:30:34 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:30:34 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:30:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:30:34 --> Total execution time: 0.1856
DEBUG - 2017-03-02 18:30:58 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:30:58 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:30:58 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:30:58 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:30:58 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:30:58 --> Total execution time: 0.2280
DEBUG - 2017-03-02 18:39:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:39:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:39:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:39:11 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:39:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:39:11 --> Total execution time: 0.1876
DEBUG - 2017-03-02 18:39:21 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:39:21 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:39:21 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:39:21 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:39:21 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:39:21 --> Total execution time: 0.1910
DEBUG - 2017-03-02 18:39:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:39:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:39:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:39:29 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:39:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:39:29 --> Total execution time: 0.1826
DEBUG - 2017-03-02 18:39:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:39:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:39:39 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:39:39 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:39:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:39:39 --> Total execution time: 0.1796
DEBUG - 2017-03-02 18:40:06 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:40:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:40:06 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:40:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:40:06 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:40:06 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:40:06 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:40:06 --> Total execution time: 0.1776
DEBUG - 2017-03-02 18:40:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:40:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:40:14 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:40:14 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:40:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:40:14 --> Total execution time: 0.1926
DEBUG - 2017-03-02 18:40:26 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:40:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:40:26 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:40:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:40:26 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:40:26 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:40:26 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:40:26 --> Total execution time: 0.1996
DEBUG - 2017-03-02 18:40:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:40:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:40:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:40:38 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:40:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:40:38 --> Total execution time: 0.1670
DEBUG - 2017-03-02 18:40:44 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:40:44 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:40:44 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:40:44 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:40:44 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:40:44 --> Total execution time: 0.1926
DEBUG - 2017-03-02 18:41:00 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:00 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:00 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:00 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:00 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:00 --> Total execution time: 0.2516
DEBUG - 2017-03-02 18:41:10 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:10 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:10 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:10 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:10 --> Total execution time: 0.1776
DEBUG - 2017-03-02 18:41:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:17 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:17 --> Total execution time: 0.1616
DEBUG - 2017-03-02 18:41:24 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:24 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:24 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:24 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:24 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:24 --> Total execution time: 0.1650
DEBUG - 2017-03-02 18:41:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:29 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:29 --> Total execution time: 0.1886
DEBUG - 2017-03-02 18:41:38 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:41:38 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:41:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:41:38 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
ERROR - 2017-03-02 18:41:38 --> Severity: Notice --> Undefined variable: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\views\addendum_form.php 44
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:41:38 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:41:38 --> Total execution time: 0.1920
DEBUG - 2017-03-02 18:42:45 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 18:42:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 18:42:45 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 18:42:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 18:42:45 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 18:42:45 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 18:42:45 --> Total execution time: 0.1916
DEBUG - 2017-03-02 19:31:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:07 --> No URI present. Default controller set.
DEBUG - 2017-03-02 19:31:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:07 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 19:31:07 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:31:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:07 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 19:31:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:31:07 --> Total execution time: 0.4710
DEBUG - 2017-03-02 19:31:16 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:16 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:16 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 19:31:16 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:31:16 --> Total execution time: 0.1722
DEBUG - 2017-03-02 19:31:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 19:31:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:31:18 --> Total execution time: 0.1912
DEBUG - 2017-03-02 19:31:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:20 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:31:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 19:31:20 --> Total execution time: 0.1202
DEBUG - 2017-03-02 19:31:22 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:22 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:22 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_form.php
DEBUG - 2017-03-02 19:31:22 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:31:22 --> Total execution time: 0.1736
DEBUG - 2017-03-02 19:31:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:34 --> No URI present. Default controller set.
DEBUG - 2017-03-02 19:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:34 --> Login MX_Controller Initialized
DEBUG - 2017-03-02 19:31:34 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:31:34 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:31:34 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:31:34 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:31:34 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:31:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:31:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:31:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 19:31:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:31:35 --> Total execution time: 0.1450
DEBUG - 2017-03-02 19:32:12 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:32:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:32:12 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:32:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:32:12 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 19:32:12 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:32:12 --> Total execution time: 0.1662
DEBUG - 2017-03-02 19:32:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:32:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:32:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:32:13 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:32:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:32:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:32:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:32:14 --> Total execution time: 0.1696
DEBUG - 2017-03-02 19:32:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:32:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:32:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:32:14 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:32:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:32:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 19:32:15 --> Total execution time: 0.1112
DEBUG - 2017-03-02 19:32:17 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:32:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:32:17 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:32:17 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum2_form.php
DEBUG - 2017-03-02 19:32:17 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:32:17 --> Total execution time: 0.1902
DEBUG - 2017-03-02 19:32:39 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:32:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:32:39 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:32:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:32:39 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum2_form.php
DEBUG - 2017-03-02 19:32:39 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:32:39 --> Total execution time: 0.1860
DEBUG - 2017-03-02 19:33:35 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:33:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:33:35 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:33:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:33:35 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum2_form.php
DEBUG - 2017-03-02 19:33:35 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:33:35 --> Total execution time: 0.1870
DEBUG - 2017-03-02 19:36:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:36:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:36:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum_ref.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/addendum2_form.php
DEBUG - 2017-03-02 19:36:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:36:57 --> Total execution time: 0.2126
DEBUG - 2017-03-02 19:37:33 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:37:33 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:37:33 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:37:33 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:37:33 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 19:37:33 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 346
ERROR - 2017-03-02 19:37:33 --> Severity: Notice --> Undefined index: last_flow C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 346
ERROR - 2017-03-02 19:37:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 19:37:33 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 2:        SET status = (CASE WHEN status =  THEN  ELSE status +...
                                                 ^ - Invalid query: UPDATE surat
				   SET status = (CASE WHEN status =  THEN  ELSE status + 1 END)
				 WHERE surat_id = '1da204c2-7256-4c53-88da-a32ff32db8ea'
DEBUG - 2017-03-02 19:39:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:39:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:39:28 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:39:28 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:39:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 19:39:28 --> Severity: Notice --> Undefined index: function_handler C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 358
ERROR - 2017-03-02 19:39:28 --> Severity: Notice --> Undefined index: function_handler C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 359
ERROR - 2017-03-02 19:39:28 --> Severity: Error --> Method name must be a string C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 359
DEBUG - 2017-03-02 19:39:49 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:39:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:39:49 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:39:49 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:39:49 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:39:49 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 19:39:49 --> Severity: Notice --> Undefined index: surat_no C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 361
ERROR - 2017-03-02 19:39:49 --> Severity: Notice --> Undefined index: status_berkas C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 361
ERROR - 2017-03-02 19:39:49 --> Severity: Notice --> Undefined index: surat_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 363
ERROR - 2017-03-02 19:39:49 --> Severity: Notice --> Undefined index: agenda_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 363
ERROR - 2017-03-02 19:39:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;ref_id&quot; violates not-null constraint
DETAIL:  Failing row contains (638, 5, null, CM-, Addendum 1 Contract Maintenance No.  dari , surat/kontrak/kontrak_view/1da204c2-7256-4c53-88da-a32ff32db8ea, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 1, 0, 2017-03-03 01:36:59.92). C:\xampp\htdocs\eoffice\core\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-03-02 19:39:49 --> Query error: ERROR:  null value in column "ref_id" violates not-null constraint
DETAIL:  Failing row contains (638, 5, null, CM-, Addendum 1 Contract Maintenance No.  dari , surat/kontrak/kontrak_view/1da204c2-7256-4c53-88da-a32ff32db8ea, 5fc0a3dc-2512-4534-a2e5-025c100280b3, 1, 0, 2017-03-03 01:36:59.92). - Invalid query: INSERT INTO "notify" ("function_ref_id", "ref_id", "agenda", "note", "detail_link", "notify_user_id", "status", "read") VALUES ('5', NULL, 'CM-', 'Addendum 1 Contract Maintenance No.  dari ', 'surat/kontrak/kontrak_view/1da204c2-7256-4c53-88da-a32ff32db8ea', '5fc0a3dc-2512-4534-a2e5-025c100280b3', 1, 0)
ERROR - 2017-03-02 19:39:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\eoffice\core\core\Exceptions.php:272) C:\xampp\htdocs\eoffice\core\core\Common.php 573
DEBUG - 2017-03-02 19:43:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:43:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:43:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:43:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:43:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:43:57 --> LX Form Validation Class Initialized
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 19:43:57 --> Severity: Notice --> Undefined index: agenda_id C:\xampp\htdocs\eoffice\appl\modules\surat\models\Kontrak_model.php 363
ERROR - 2017-03-02 19:43:57 --> The upload path does not appear to be valid.
DEBUG - 2017-03-02 19:43:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:43:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:43:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:43:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:43:57 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/dashboard.php
DEBUG - 2017-03-02 19:43:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:43:57 --> Total execution time: 0.1770
DEBUG - 2017-03-02 19:44:07 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:44:07 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:44:07 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 19:44:07 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:44:07 --> Total execution time: 0.2080
DEBUG - 2017-03-02 19:44:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:44:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:44:09 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:44:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 19:44:09 --> Total execution time: 0.1290
DEBUG - 2017-03-02 19:46:14 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:46:14 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:46:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:46:14 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 19:46:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:46:14 --> Total execution time: 0.2186
DEBUG - 2017-03-02 19:46:15 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:46:15 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:46:15 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:46:15 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 19:46:15 --> Total execution time: 0.1446
DEBUG - 2017-03-02 19:55:27 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:55:27 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:55:27 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 19:55:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 19:55:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:55:27 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 19:55:28 --> Total execution time: 0.2200
DEBUG - 2017-03-02 19:55:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 19:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 19:55:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 19:55:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 19:55:28 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 19:55:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 19:55:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 19:55:29 --> Total execution time: 0.1386
DEBUG - 2017-03-02 20:03:09 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:03:09 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:03:09 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:03:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:03:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:03:09 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:03:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:03:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:03:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:03:10 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:03:10 --> Total execution time: 0.2446
DEBUG - 2017-03-02 20:03:11 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:03:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:03:11 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:03:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:03:11 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 17
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 209
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 209
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 219
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 226
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 237
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 237
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 237
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 245
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 245
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 245
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 260
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 267
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 271
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\eoffice\appl\helpers\LX_date_helper.php 35
ERROR - 2017-03-02 20:03:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\eoffice\appl\modules\surat\views\contract_maintenance_form_view.php 277
DEBUG - 2017-03-02 20:03:11 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:03:11 --> Total execution time: 0.1420
DEBUG - 2017-03-02 20:03:13 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:03:13 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:03:13 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:03:13 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:03:14 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:03:14 --> Total execution time: 0.3450
DEBUG - 2017-03-02 20:04:18 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:04:18 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:04:18 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:04:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:04:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:04:18 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:04:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:04:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:04:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:04:19 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:04:19 --> Total execution time: 0.2066
DEBUG - 2017-03-02 20:04:20 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:04:20 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:04:20 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:04:20 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:04:20 --> Total execution time: 0.1336
DEBUG - 2017-03-02 20:04:55 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:04:55 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:04:55 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:04:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:04:55 --> Total execution time: 0.3526
DEBUG - 2017-03-02 20:04:57 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:04:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:04:57 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:04:57 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:04:57 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:04:57 --> Total execution time: 0.1496
DEBUG - 2017-03-02 20:05:28 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:05:28 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:05:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:05:28 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:05:28 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:05:28 --> Total execution time: 0.1756
DEBUG - 2017-03-02 20:05:30 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:05:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:05:30 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:05:30 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:05:30 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:05:30 --> Total execution time: 0.1396
DEBUG - 2017-03-02 20:07:42 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:07:42 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:07:42 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:07:42 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:07:42 --> Total execution time: 0.2426
DEBUG - 2017-03-02 20:07:43 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:07:43 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:07:43 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:07:43 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:07:43 --> Total execution time: 0.1400
DEBUG - 2017-03-02 20:10:54 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:10:54 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:10:54 --> Dashboard MX_Controller Initialized
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Dashboard_model.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/left_menu.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/header.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/my_workspace.php
DEBUG - 2017-03-02 20:10:55 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/views/footer.php
DEBUG - 2017-03-02 20:10:55 --> Total execution time: 0.2750
DEBUG - 2017-03-02 20:10:56 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:10:56 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:10:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:10:56 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:10:56 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:10:56 --> Total execution time: 0.1476
DEBUG - 2017-03-02 20:11:29 --> UTF-8 Support Enabled
DEBUG - 2017-03-02 20:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-03-02 20:11:29 --> Config file loaded: C:\xampp\htdocs\eoffice\appl\config/xconf.php
DEBUG - 2017-03-02 20:11:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2017-03-02 20:11:29 --> Kontrak MX_Controller Initialized
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/auth/models/User_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/global/models/Admin_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Eksternal_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Surat_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Disposisi_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/models/Kontrak_model.php
DEBUG - 2017-03-02 20:11:29 --> File loaded: C:\xampp\htdocs\eoffice\appl\modules/surat/views/contract_maintenance_form_view.php
DEBUG - 2017-03-02 20:11:29 --> Total execution time: 0.1480
