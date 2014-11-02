use 'utils\getUser.php';
session_start();
if(isset($_SESSION['user']) getUserName($_SESSION['user']) == 'Admin'){
	echo 'Welcome admin';
}else{
	echo '504';
}
