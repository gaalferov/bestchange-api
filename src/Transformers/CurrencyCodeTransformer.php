<?php

namespace Korkoshko\BestChange\Transformers;

class CurrencyCodeTransformer extends AbstractTransformer
{
    protected const ID = 0;
    protected const NAME = 1;

    /**
     * @var array
     */
    protected $map = [
        self::ID   => 'id',
        self::NAME => 'name',
    ];

    /**
     * @param string $data
     *
     * @return array
     */
    public function transform(string $data): array
    {
        $data = parent::transform($data);

        return [
            $this->map[self::ID]   => (int) $data[self::ID],
            $this->map[self::NAME] => $data[self::NAME],
        ];
    }
}
