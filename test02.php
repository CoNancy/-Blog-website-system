<?php
session_start();
//�����û���¼�ɹ�����������û�����
$userinfo = array(
    'uid'  => 10000,
    'name' => 'spark',
    'email' => 'spark@imooc.com',
    'sex'  => 'man',
    'age'  => '18'
);
header("content-type:text/html; charset=utf-8");

/* ���û���Ϣ���浽session�� */
$_SESSION['uid'] = $userinfo['uid'];
$_SESSION['name'] = $userinfo['name'];
$_SESSION['userinfo'] = $userinfo;

//* ���û����ݱ��浽cookie�е�һ���򵥷��� */
$secureKey = 'imooc'; //������Կ
$str = serialize($userinfo); //���û���Ϣ���л�
//�û���Ϣ����ǰ
$str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
//�û���Ϣ���ܺ�
//�����ܺ���û����ݴ洢��cookie��
setcookie('userinfo', $str);

//����Ҫʹ��ʱ���н���
$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
$uinfo = unserialize($str);
echo "���ܺ���û���Ϣ��<br>";
print_r($uinfo);