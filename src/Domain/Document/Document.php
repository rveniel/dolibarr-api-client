<?php


namespace Dolibarr\Client\Domain\Document;


use JMS\Serializer\Annotation as JMS;

/**
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
class Document
{
    /**
     * @JMS\Type("string")
     */
    private $filename;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("content-type")
     */
    private $contentType;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("file-size")
     */
    private $fileSize;

    /**
     * @JMS\Type("string")
     */
    private $content;

    /**
     * @JMS\Type("string")
     */
    private $encoding;

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     */
    public function setContentType($contentType): void
    {
        $this->contentType = $contentType;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     */
    public function setFileSize($fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param mixed $encoding
     */
    public function setEncoding($encoding): void
    {
        $this->encoding = $encoding;
    }
}
