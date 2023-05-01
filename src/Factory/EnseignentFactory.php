<?php

namespace App\Factory;

use App\Entity\Enseignent;
use App\Repository\EnseignentRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Enseignent>
 *
 * @method        Enseignent|Proxy create(array|callable $attributes = [])
 * @method static Enseignent|Proxy createOne(array $attributes = [])
 * @method static Enseignent|Proxy find(object|array|mixed $criteria)
 * @method static Enseignent|Proxy findOrCreate(array $attributes)
 * @method static Enseignent|Proxy first(string $sortedField = 'id')
 * @method static Enseignent|Proxy last(string $sortedField = 'id')
 * @method static Enseignent|Proxy random(array $attributes = [])
 * @method static Enseignent|Proxy randomOrCreate(array $attributes = [])
 * @method static EnseignentRepository|RepositoryProxy repository()
 * @method static Enseignent[]|Proxy[] all()
 * @method static Enseignent[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Enseignent[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Enseignent[]|Proxy[] findBy(array $attributes)
 * @method static Enseignent[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Enseignent[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EnseignentFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'cin' => self::faker()->lastname(),
            'nom' => self::faker()->firstname(),
            'prenom' => self::faker()->realText(10)
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Enseignent $enseignent): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Enseignent::class;
    }
}
