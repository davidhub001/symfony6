<?php 
namespace App\Service;

use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class OptionService
{
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function getOption(string $name)
    {
        return $this->cache->get($name, function (ItemInterface $item) {
            // Définir une valeur par défaut ou charger la valeur initiale
            return 'default_value';
        });
    }

    public function setOption(string $name, $value)
    {
        $this->cache->get($name, function (ItemInterface $item) use ($value) {
            $item->set($value);
            return $value;
        });
    }

    public function deleteOption(string $name)
    {
        $this->cache->delete($name);
    }
}
