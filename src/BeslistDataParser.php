<?php

namespace Wienkit\BeslistOrdersClient;

use Wienkit\BeslistOrdersClient\Entities\BaseModel;
use SimpleXMLElement;

class BeslistDataParser
{
    /**
     * Create an array with entity classes, based on XML string or SimpleXMLElement
     *
     * @param string $entity
     * @param string|SimpleXMLElement $xmlString
     * @return array
     */
    public static function createCollectionFromResponse($entity, $xmlString)
    {
        if ($xmlString instanceof SimpleXMLElement) {
            $xmlElements = $xmlString;
        } else {
            $xmlElements = self::parseXmlResponse($xmlString);
        }

        $collection = [];
        foreach ($xmlElements as $xmlElement) {
            $collection[] = self::createEntityFromResponse($entity, $xmlElement);
        }
        return $collection;
    }

    /**
     * Returns a single filled entity from SimpleXMLElement response
     *
     * @param string $entity
     * @param SimpleXMLElement $xmlElement
     * @return BaseModel
     */
    public static function createEntityFromResponse($entity, $xml)
    {
        $entity = 'Wienkit\\BeslistOrdersClient\\Entities\\' . $entity;
        if ($xml instanceof SimpleXMLElement) {
            $xmlElement = $xml;
        } else {
            $model = new $entity;
            $xmlElement = self::parseXmlResponse($xml);
        }

        $object = self::fillModelFromXmlObject(new $entity, $xmlElement);
        return $object;
    }

    /**
     * Fills one empty entity model with data from SimpleXMLElement
     * @param BaseModel $model
     * @param SimpleXMLElement $xmlObject
     * @return BaseModel
     */
    public static function fillModelFromXmlObject(BaseModel $model, SimpleXMLElement $xmlObject)
    {
        /* @var SimpleXMLElement $child */
        foreach ($xmlObject as $name => $child)
        {
            if ($model->attributeExists($name))
            {
                $model->$name = (string)$child;
            } elseif ($model->nestedEntityExists($name))
            {
                $model->$name = self::createEntityFromResponse($model->getNestedEntity($name), $child);
            } elseif ($model->childEntityExists($name))
            {
                $model->$name = self::createCollectionFromResponse($model->getChildEntity($name)['entityClass'], $child);
            }
        }

        return $model;
    }

    /**
     * Parse a namespaced XML response and turn it into a SimpleXMLElement with the root data
     *
     * @param string $xmlString
     * @return SimpleXMLElement
     */
    public static function parseXmlResponse($xmlString)
    {
        return new SimpleXMLElement($xmlString);
    }
}
