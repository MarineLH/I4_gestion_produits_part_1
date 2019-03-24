<?php

    require 'vendor/autoload.php';

    use Aws\S3\S3Client;

    const bucket_name = "images_storage";

    $s3 = new S3Client([
        'version'   => 'latest',
        'region'    => 'eu-west-3',
        'endpoint'  => 'http://minio:9000',
        'user_path_style_endpoint' => true,
        'credentials' => [
            'key'       => 'minioAccessKey',
            'secret'    => 'minioSecretKey',
        ],
    ]);


    if (!$s3->doesBucketExist(bucket_name)){
        try {
            $s3->createBucket([
                    'Bucket' => $bucket_name
            ]);
        } catch (Exception $e) {
            return null;
        }
    }



    function upload_image($key, $body){
        global $s3;
        return $s3->putObject([
            'Bucket' => bucket_name,
            'Key' => $key,
            'Body' => $body
        ]);
    }

    function get_image($key){
        global $s3;
        return $s3->getObject([
            'Bucket' => bucket_name,
            'Key' => $key
        ]);
    }

    function delete_objet($key){
        global $s3;
        return $s3->deleteObject([
            'Bucket' => bucket_name,
            'Key' => $key,
        ]);
    }
?>