<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include '/var/www/html/tech/aws/aws-autoloader.php';

use Aws\S3\S3Client;

$bucket = "atlantis-brafton";
$keyname = "vhG7O1yu91HJ4/MjUlHh3EaJe105/n1iJYhLAkvj";
//$keyname = "AKIAJIKUWNBSBD4SBDFQ";
$file = "http://tech.brafton.com/email_templates/gronk.html";

$s3 = S3Client::factory();

$result = $s3->putObject(array(
    'Bucket'       => $bucket,
    'Key'          => $keyname,
    'SourceFile'   => $filepath,
    'ContentType'  => 'text/html',
    'ACL'          => 'public-read',
    'StorageClass' => 'REDUCED_REDUNDANCY',
));

echo '<pre>';
var_dump($result);

echo 'hello';