<?php

namespace Korkoshko\BestChange\Transformers;

abstract class AbstractTransformer
{

    /**
     * @var string
     */
    protected $delimiter = ';';

    /**
     * @param string $delimiter
     *
     * @return $this
     */
    public function setDelimiter(string $delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelimiter(): string
    {
        return $this->delimiter;
    }

    /**
     * @param string $data
     *
     * @return array
     */
    public function transform(string $data): array
    {
        return explode($this->delimiter, $data);
    }
}
