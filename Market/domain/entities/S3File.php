<?php

namespace Market\domain\entities;

use AwsS3\AwsUrlInterface;

class S3File implements AwsUrlInterface
{
    private string $imageUrl;

    public function __constructs(string $fileUrl) {
        $this->imageUrl = $fileUrl;
    }

    public function __toString(): string
    {
        return $this->imageUrl;
    }
}
