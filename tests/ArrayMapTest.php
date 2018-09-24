<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\ArrayMap;
use PHPUnit\Framework\TestCase;

class ArrayMapTest extends TestCase
{
    /** @var ArrayMap */
    private $sut;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->sut = new ArrayMap();
    }

    /**
     * @dataProvider getInputs
     * @param array $input
     * @param callable $callback
     * @param array $expectedOutput
     */
    public function testArrayMapReturnsExpectedArray(array $input, callable $callback, array $expectedOutput)
    {
        $result = $this->sut->arrayMap($input, $callback);

        $this->assertEquals($expectedOutput, $result);
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            [
                // Returns all elements < 10.
                'input' => [1, 43, 23, 5, 7, 132],
                'callback' => function ($arrayElement) {
                    return ($arrayElement < 10) ? $arrayElement : null;
                },
                'expectedOutput' => [1, 5, 7]
            ],
            [
                // Returns all even elements.
                'input' => [2, 43, 28, 5, 74, 150],
                'callback' => function ($arrayElement) {
                    return ($arrayElement % 2 == 0) ? $arrayElement : null;
                },
                'expectedOutput' => [2, 28, 74, 150]
            ],
            [
                // Concatenates the first and line name of all given NameDto objects.
                'input' => [
                    (new NameDto())->setFirstName('Steve')->setLastName('Jobs'),
                    (new NameDto())->setFirstName('Bill')->setLastName('Gates'),
                    new \stdClass(),
                    ['invalid data type']
                ],
                'callback' => function ($arrayElement) {
                    if (!$arrayElement instanceof NameDto) {
                        return null;
                    }

                    return sprintf('%s %s', $arrayElement->getFirstName(), $arrayElement->getLastName());
                },
                'expectedOutput' => ['Steve Jobs', 'Bill Gates']
            ]
        ];
    }
}

class NameDto
{
    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $firstName
     * @return NameDto
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     * @return NameDto
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}
