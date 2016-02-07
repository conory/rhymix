<?php
$lang->introduce_title = 'RhymiX 설치';
$lang->enviroment_gather = '설치 환경 수집 동의';
$lang->input_dbinfo_by_dbtype = '%s 정보입력';
$lang->install_progress_menu['language'] = '설치 언어 선택';
$lang->install_progress_menu['license_agreement'] = '사용권 동의';
$lang->install_progress_menu['condition'] = '설치 환경 확인';
$lang->install_progress_menu['ftp'] = 'FTP 정보 입력';
$lang->install_progress_menu['dbSelect'] = 'DB 선택';
$lang->install_progress_menu['dbInfo'] = 'DB 정보 입력';
$lang->install_progress_menu['configInfo'] = '환경 설정';
$lang->install_progress_menu['adminInfo'] = '관리자 계정 생성';
$lang->install_condition_enable = '설치할 수 있습니다';
$lang->install_condition_disable = '설치할 수 없습니다';
$lang->install_details = '자세히';
$lang->install_simply = '간단히';
$lang->advanced_setup = '고급 설정';
$lang->install_ftp_reason = 'FTP 정보를 등록하는 이유.';
$lang->install_checklist_title['php_version'] = 'PHP 버전';
$lang->install_checklist_title['permission'] = 'files 폴더 퍼미션';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session.auto_start 설정';
$lang->install_checklist_title['db_support'] = 'DB 지원';
$lang->install_checklist_desc['php_version'] = '[필수] RhymiX를 설치하려면 PHP 버전이 %s 이상이어야 합니다.';
$lang->install_checklist_desc['php_version_warning'] = '[권장] RhymiX는 PHP %s 이상을 권장합니다.';
$lang->install_checklist_desc['permission'] = '[필수] RhymiX의 설치 경로 또는 ./files 디렉토리의 퍼미션이 777이어야 합니다.';
$lang->install_checklist_desc['xml'] = '[필수] XML통신을 위하여 XML 라이브러리가 필요합니다.';
$lang->install_checklist_desc['session'] = '[필수] RhymiX에서 세션 사용을 위해 php.ini 설정의 session.auto_start=0 이어야 합니다.';
$lang->install_checklist_desc['iconv'] = 'UTF-8과 다른 언어셋의 변환을 위한 iconv설치가 필요합니다.';
$lang->install_checklist_desc['gd'] = '이미지변환 기능을 사용하기 위해 GD라이브러리가 설치되어 있어야 합니다.';
$lang->install_checklist_xml = 'XML 라이브러리 설치';
$lang->install_without_xml = 'XML 라이브러리가 설치되어 있지 않습니다.';
$lang->install_checklist_gd = 'GD 라이브러리 설치';
$lang->install_without_gd = '이미지 변환을 위한 GD 라이브러리가 설치되어 있지 않습니다.';
$lang->install_without_iconv = '문자열을 처리하기 위한 iconv 라이브러리가 설치되어 있지 않습니다.';
$lang->install_session_auto_start = 'php설정의 session.auto_start==1 이라 세션 처리에 문제가 발생할 수 있습니다.';
$lang->install_permission_denied = '설치대상 디렉토리의 퍼미션이 777이 아닙니다.';
$lang->install_notandum = '작성하신 모든 항목은 설치 후 관리 모듈에서 수정할 수 있습니다.';
$lang->cmd_install_refresh_page = '새로고침';
$lang->cmd_install_next = '설치를 진행합니다.';
$lang->cmd_ignore = '무시';
$lang->cmd_recommended = '권장';
$lang->db_desc['mysqli'] = 'mysqli 모듈을 사용하여 MySQL DB에 접속합니다.<br />MyISAM 저장엔진을 사용하므로 트랜잭션이 이루어지지 않으며 데이터 손상의 위험이 있습니다.';
$lang->db_desc['mysqli_innodb'] = 'mysqli 모듈을 사용하여 MySQL DB에 접속합니다.<br />InnoDB 저장엔진은 트랜잭션을 지원하여 데이터 손상의 위험이 낮으며, 동시 처리 능력이 뛰어납니다.';
$lang->db_desc['mysql'] = 'PHP의 mysql_*() 함수를 사용하여 MySQL DB에 접속합니다.<br />MyISAM 저장엔진을 사용하므로 트랜잭션이 이루어지지 않으며 데이터 손상의 위험이 있습니다.';
$lang->db_desc['mysql_innodb'] = 'PHP의 mysql_*() 함수를 사용하여 MySQL DB에 접속합니다.<br />InnoDB 저장엔진은 트랜잭션을 지원하여 데이터 손상의 위험이 낮으며, 동시 처리 능력이 뛰어납니다.';
$lang->db_desc['cubrid'] = 'CUBRID DB를 이용합니다. <a href="http://www.cubrid.com/zbxe/?mid=bbs_developer_tutorial&category=47452" target="_blank">Manual</a>';
$lang->db_desc['mssql'] = 'Microsoft SQL Server를 이용합니다.';
$lang->can_use_when_installed = '설치되어 있지 않음';
$lang->form_title = 'DB &amp; 관리자 정보 입력';
$lang->db_title = 'DB 정보 입력';
$lang->db_type = 'DB 종류';
$lang->select_db_type = '사용하려는 DB를 선택해주세요.';
$lang->db_hostname = 'DB 서버 주소';
$lang->db_port = 'DB 서버 포트';
$lang->db_userid = 'DB 아이디';
$lang->db_password = 'DB 비밀번호';
$lang->db_name = 'DB 이름';
$lang->db_database_file = 'DB 데이터베이스 파일';
$lang->db_table_prefix = '테이블 접두사';
$lang->db_info_desc = 'DB 아이디, 비밀번호, 서버 주소, 포트 등의 정보는 호스팅 관리자에게 문의하세요.';
$lang->db_prefix_desc = 'DB 테이블 접두사는 사용자가 선택할 수 있습니다. 영문 소문자를 권장하며, 특수 문자를 사용할 수 없습니다.';
$lang->admin_title = '관리자 정보';
$lang->env_title = '환경 설정';
$lang->use_optimizer = 'Optimizer 사용';
$lang->about_optimizer = 'Optimizer를 사용하면 다수의 CSS/JS파일을 통합/압축 전송하여 매우 빠르게 사이트 접속이 가능하게 합니다.<br />다만 CSS나 JS에 따라서 문제가 생길 수 있습니다. 이때는 Optimizer 비활성화 하면 정상적인 동작은 가능합니다.';
$lang->use_rewrite = '짧은 주소 사용';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr> 사용';
$lang->about_rewrite = '이 기능을 사용하면 <em>http://yourdomain/</em><strong>?document_srl=123</strong> 과 같이 복잡한 주소를 <em>http://yourdomain/</em><strong>123</strong> 과 같이 간단하게 줄일 수 있습니다. 웹 서버에서 mod_rewrite를 지원해야 합니다. 지원 여부는 서버 관리자에게 문의하세요.';
$lang->checking_rewrite = '짧은 주소를 사용할 수 있는지 확인하는 중입니다...';
$lang->disable_rewrite = '짧은 주소를 사용할 수 없습니다. 웹 서버 담당자에게 mod_rewrite 지원 여부를 확인 바랍니다.';
$lang->disable_rewrite_can_proceed = '짧은 주소를 사용할 수 없더라도 RhymiX 설치와 사용에는 지장이 없습니다.';
$lang->about_nginx_rewrite = 'nginx에서 짧은 주소를 사용하려면 rewrite 설정이 필요합니다. <a href="https://github.com/xpressengine/xe-core/wiki/Nginx-rewite-%EC%84%A4%EC%A0%95%ED%95%98%EA%B8%B0" target="_blank">여기</a>를 참고하세요.';
$lang->time_zone = '표준 시간대';
$lang->about_time_zone = '서버의 시간과 주 사용자의 시간이 다를 경우 (예: 해외 서버인 경우) 원하는 표준 시간대를 선택할 수 있습니다.';
$lang->use_ssl = 'SSL 사용';
$lang->ssl_options['none'] = '사용 안함';
$lang->ssl_options['optional'] = '선택적으로';
$lang->ssl_options['always'] = '항상 사용';
$lang->about_database_file = 'Sqlite는 파일에 데이터를 저장합니다. 데이터베이스 파일의 위치를 웹에서 접근할 수 없는 곳으로 해야 합니다.<br/><span style="color:red">데이터 파일은 777퍼미션 설정된 곳으로 지정해주세요.</span>';
$lang->success_installed = '설치가 되었습니다.';
$lang->msg_cannot_proc = '설치 환경이 갖춰지지 않아 요청을 실행할 수가 없습니다.';
$lang->msg_already_installed = '이미 설치가 되어 있습니다.';
$lang->msg_dbconnect_failed = 'DB접속 오류가 발생하였습니다. DB정보를 다시 확인해주세요.';
$lang->msg_table_is_exists = '이미 DB에 테이블이 생성되어 있습니다. config 파일을 재생성하였습니다.';
$lang->msg_install_completed = '설치가 완료되었습니다. 감사합니다.';
$lang->msg_install_failed = '설치 파일 생성 시에 오류가 발생하였습니다.';
$lang->msg_create_table_failed = 'DB 테이블 생성에 실패했습니다.';
$lang->msg_table_already_exists = 'DB 테이블이 이미 존재합니다. 다른 사이트에서 사용중인 DB라면 테이블 접두사를 바꾸어 보십시오.';
$lang->ftp_get_list = '목록 가져오기';
$lang->ftp_form_title = 'FTP 계정 정보 입력';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTP 서버 주소';
$lang->ftp_port = 'FTP 서버 포트';
$lang->about_ftp_password = '비밀번호는 FTP 경로 확인을 위한 FTP 접속 시 필요하며 사용 후 저장하지 않습니다.';
$lang->cmd_check_ftp_connect = 'FTP 접속 확인';
$lang->msg_safe_mode_ftp_needed = 'PHP의 <strong>safe_mode=On</strong>일 경우 RhymiX의 정상적인 동작을 돕습니다.';
$lang->msg_safe_mode_ftp_needed2 = '모듈의 쉬운 설치 또는 업데이트가 가능해 집니다.';
$lang->msg_safe_mode_ftp_config = '이 정보는 <strong>files/config/ftp.config.php</strong> 파일에 저장 됩니다. 설치 후 환경설정 페이지에서도 등록, 변경, 제거 할 수 있습니다.';
$lang->msg_ftp_not_connected = 'localhost로의 FTP 접속 오류가 발생했습니다. FTP 포트 번호를 확인하거나 FTP 서비스가 가능한지 확인해주세요.';
$lang->msg_ftp_invalid_auth_info = '입력한 FTP 정보로 로그인을 하지 못했습니다. FTP정보를 확인해주세요.';
$lang->msg_ftp_mkdir_fail = 'FTP를 이용한 디렉토리 생성 명령에 실패했습니다. FTP 서버의 설정을 확인해주세요.';
$lang->msg_ftp_chmod_fail = 'FTP를 이용한 디렉토리의 속성 변경에 실패했습니다. FTP 서버의 설정을 확인해주세요.';
$lang->msg_ftp_connect_success = 'FTP 접속 및 인증에 성공했습니다.';
$lang->ftp_path_title = 'FTP 경로 정보 입력';
$lang->msg_ftp_installed_realpath = '설치된 RhymiX의 절대경로';
$lang->msg_ftp_installed_ftp_realpath = 'RhymiX 설치 경로';
$lang->db_config_php_validation = 'db.config.php 유효성 확인';
$lang->msg_possible_only_file = '파일만 업로드 가능합니다.';
