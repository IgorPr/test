<?php

namespace Market\domain\entities;
use AwsS3\Client\AwsStorageInterface;
use Market\Infrastucture\persistents\FileStorageRepository;

/**
 * Represents a single product record stored in DB.
 */
class Product
{
    /**
     * @var int
     */
    private int $id;
    /**
     * @var FileStorageRepository
     */
    private FileStorageRepository $storage;
    /**
     * @var string
     */
    private string $imageFileName;

    private array $s3Images;

    /**
     * @var bool
     */
    private bool $favorites;

    private AwsStorageInterface $awsStorageRepository;

    /**
     * @param FileStorageRepository $fileStorageRepository
     */
    public function __construct(FileStorageRepository $fileStorageRepository, AwsStorageInterface $awsStorageRepository)
    {
        $this->storage = $fileStorageRepository;
        $this->awsStorageRepository = $awsStorageRepository;
    }
    /*...*/
    /**
     * Returns product image URL. *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        if ($this->storage->fileExists($this->imageFileName) !== true) {
            return null;
        }
        return $this->storage->getUrl($this->imageFileName);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getS3Images(): array
    {
        return $this->awsStorageRepository->getFiles($this->id);
        //OR
        //return $this->s3Images = $this->awsStorageRepository->getFiles($this->id);
    }

    /**
     * Returns whether image was successfully updated or not. *
     * @return bool
     */
    public function updateImage(): bool
    {
        /*...*/
        try {
            if ($this->storage->fileExists($this->imageFileName) !== true) {
                $this->storage->deleteFile($this->imageFileName);
            }
            $this->storage->saveFile($this->imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }

    /**
     * @return bool
     */
    public function isFavorites(): bool
    {
        return $this->favorites;
    }
    /*...*/
}
