<?php
namespace Okred\Bundle\JobBundle\Twig;

use Twig_Extension;
use Twig_SimpleFilter;

class OkredTwigExtension extends Twig_Extension
{
    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('nonempty', array($this, 'nonemptyFilter')),
            new Twig_SimpleFilter('map', array($this, 'mapFilter')),
        );
    }

    public function getName()
    {
        return 'okred_twig_extension';
    }

    public function nonemptyFilter($value)
    {
        if (!is_array($value)) {
            return $value;
        }
        return array_filter($value);
    }

    public function mapFilter($value, array $mapping)
    {
        return array_key_exists($value, $mapping) ? $mapping[$value] : $value;
    }
}
