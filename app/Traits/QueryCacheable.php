<?php

namespace App\Traits;

use App\Query\CacheBuilder as Builder;
use Illuminate\Support\Arr;
use Rennokki\QueryCache\Traits\QueryCacheable as BaseQueryCacheable;

trait QueryCacheable
{
    use BaseQueryCacheable;

    /**
     * Boot the trait.
     *
     * @return void
     */
    public static function bootQueryCacheable()
    {
        static::observe(static::getFlushQueryCacheObserver());
    }

    /**
     * Set the base cache tags that will be present
     * on all queries.
     *
     * @return array
     */
    protected function getCacheBaseTags(): array
    {
        return array_merge([
            (string) static::class,
        ], Arr::wrap(property_exists($this, 'cacheTags') ? $this->cacheTags : []));
    }

    /**
     * {@inheritdoc}
     */
    protected function newBaseQueryBuilder()
    {
        /** @var \Illuminate\Database\Eloquent\Model $this */
        $connection = $this->getConnection();

        $builder = new Builder(
            $connection,
            $connection->getQueryGrammar(),
            $connection->getPostProcessor()
        );

        $builder->dontCache();

        $builder->cacheFor(property_exists($this, 'cacheFor') ? $this->cacheFor : 3600);

        if (method_exists($this, 'cacheForValue')) {
            $builder->cacheFor($this->cacheForValue($builder));
        }

        if (property_exists($this, 'cacheTags')) {
            $builder->cacheTags($this->cacheTags);
        }

        if (method_exists($this, 'cacheTagsValue')) {
            $builder->cacheTags($this->cacheTagsValue($builder));
        }

        if (property_exists($this, 'cachePrefix')) {
            $builder->cachePrefix($this->cachePrefix);
        }

        if (method_exists($this, 'cachePrefixValue')) {
            $builder->cachePrefix($this->cachePrefixValue($builder));
        }

        if (property_exists($this, 'cacheDriver')) {
            $builder->cacheDriver($this->cacheDriver);
        }

        if (method_exists($this, 'cacheDriverValue')) {
            $builder->cacheDriver($this->cacheDriverValue($builder));
        }

        if (property_exists($this, 'cacheUsePlainKey')) {
            $builder->withPlainKey();
        }

        if (method_exists($this, 'cacheUsePlainKeyValue')) {
            $builder->withPlainKey($this->cacheUsePlainKeyValue($builder));
        }

        if (method_exists($this, 'flushedCache')) {
            $builder->flushed(fn ($tag) => $this->flushedCache($tag));
        }

        // @phpstan-ignore-next-line
        return $builder->cacheBaseTags($this->getCacheBaseTags());
    }
}
