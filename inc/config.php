<?php
define( 'SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/edu-academy/' );
define( 'SITE_URI', $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/' );
define( 'SITE_TITLE', 'Edu. Academy' );

function dbConnect() {
   $host = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = 'edu-academy';
   return mysqli_connect( $host, $dbUser, $dbPass, $dbName );
}

function isLoggedIn() {
   if ( ! empty( $_SESSION['user']['ID'] ) ) {
      return true;
   }

   return false;
}