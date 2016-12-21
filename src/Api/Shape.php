<?php
namespace AwsSDK\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = [
            'structure' => 'AwsSDK\Api\StructureShape',
            'map'       => 'AwsSDK\Api\MapShape',
            'list'      => 'AwsSDK\Api\ListShape',
            'timestamp' => 'AwsSDK\Api\TimestampShape',
            'integer'   => 'AwsSDK\Api\Shape',
            'double'    => 'AwsSDK\Api\Shape',
            'float'     => 'AwsSDK\Api\Shape',
            'long'      => 'AwsSDK\Api\Shape',
            'string'    => 'AwsSDK\Api\Shape',
            'byte'      => 'AwsSDK\Api\Shape',
            'character' => 'AwsSDK\Api\Shape',
            'blob'      => 'AwsSDK\Api\Shape',
            'boolean'   => 'AwsSDK\Api\Shape'
        ];

        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }

        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: '
                . print_r($definition, true));
        }

        $type = $map[$definition['type']];

        return new $type($definition, $shapeMap);
    }

    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }

    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
