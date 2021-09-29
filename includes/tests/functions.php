<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    //formatAll Success tests:
    public function testFormatAllReturnsOnlyListTagsGivenEmptyArray()
    {
        //Arrange
        $expected = '<ul></ul>';
        $input = [];

        //Act
        $result = formatAll($input);

        //Assert
        $this->assertEquals($expected, $result);
    }

    public function testFormatAllReturnsOnlyListTagsGivenValidArray()
    {
        //Arrange
        $expected = '<ul>';
        $expected .= '<li>';
        $expected .= '<img src="images/1.jpg" alt="Flower">';
        $expected .= '<p class="artist">George</p>';
        $expected .= '<p class="title">Flower</p>';
        $expected .= '<p class="medium">cheese</p>';
        $expected .= '<p class="size">giant</p>';
        $expected .= '</li>';
        $expected .= '</ul>';
        $input = [[
            'image' => '1.jpg',
            'artist' => 'George',
            'title' => 'Flower',
            'medium' => 'cheese',
            'size' => 'giant'
        ]];

        //Act
        $result = formatAll($input);

        //Assert
        $this->assertEquals($expected, $result);
    }

    //formatAll Malformed test:
    public function testFormatAllMalformed()
    {
        //Arrange
        $input = 99.9;
        // TypeError when given wrong datatype:
        $this->expectException(TypeError::class);

        //Act
        $result = formatAll($input);
    }

    //getImagePath Success tests:
    public function testGetImagePathReturnsPlaceholderIfNoImageFileExists()
    {
        //Arrange
        $expected = 'https://via.placeholder.com/350/150';
        $input = '';

        //Act
        $result = getImagePath($input);

        //Assert
        $this->assertEquals($expected, $result);
    }

    public function testGetImagePathReturnsHttpImagePathIfImageFileBeginsWithHttp()
    {
        //Arrange
        $expected = 'https://cheeseflower';
        $input = 'https://cheeseflower';

        //Act
        $result = getImagePath($input);

        //Assert
        $this->assertEquals($expected, $result);
    }


    public function testGetImagePathReturnsLocalImagePathIfImageFileDoesNotBeginWithHttp()
    {
        //Arrange
        $expected = 'images/Cheeseflower.jpg';
        $input = 'Cheeseflower.jpg';

        //Act
        $result = getImagePath($input);

        //Assert
        $this->assertEquals($expected, $result);
    }


//    public function testAddNewArtSuccess()
//    {
//        //Arrange
//        $expected = '';
//        $input = '';
//
//        //Act
//        $result = addNewArt($input);
//
//        //Assert
//        $this->assertEquals($expected, $result);
//    }
}