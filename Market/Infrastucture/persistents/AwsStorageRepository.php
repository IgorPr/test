<?php

namespace Market\Infrastucture\persistents;

use AwsS3\AwsUrlInterface;
use AwsS3\Client\AwsStorageInterface;

/**
 * Repository for Market's filesystem and static storage.
 */
final class AwsStorageRepository implements AwsStorageInterface
{
    private $externalAwsS3Lib;

    public function __construct($externalAwsS3Lib)
    {
        $this->externalAwsS3Lib = $externalAwsS3Lib;
    }

    /**
     * @return bool
     */
    public function isAuthorized(): bool
    {
        //Some logic
        return true;
    }

    /**
     * @return AwsUrlInterface[]
     */
    public function getFiles(int $productId): array
    {
        return $this->isAuthorized() ? $this->externalAwsS3Lib->getFilesList() : [];
    }

    /**
     * Deletes a file in the filesystem and throws an exception in case of errors. *
     * @param string $fileName
     * @return void
     */
    public function deleteFile(string $fileName): void
    {
        /*...*/
    }

    /**
     * Saves a file in the filesystem and throws an exception in case of errors. *
     * @param string $fileName
     * @return void
     */
    public function addFile(string $fileName): void
    {
        /*...*/
    }
}
