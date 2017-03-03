<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Store.php";

    $server = 'mysql:host=localhost:8889;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StoreTest extends PHPUnit_Framework_TestCase
    {
        function tearDown()
        {
            Store::deleteAll();
        }

        function test_getName()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getName();

            // Assert
            $this->assertEquals($name, $result);
        }

        function test_getPhoneNumber()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getPhoneNumber();

            // Assert
            $this->assertEquals($phone_number, $result);
        }

        function test_getStreet()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getStreet();

            // Assert
            $this->assertEquals($street, $result);
        }

        function test_getCity()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getCity();

            // Assert
            $this->assertEquals($city, $result);
        }

        function test_getState()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getState();

            // Assert
            $this->assertEquals($state, $result);
        }

        function test_getZip()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $result = $new_store->getZip();

            // Assert
            $this->assertEquals($zip, $result);
        }

        function test_save()
        {
            // Arrange
            $name = "Foot Locker";
            $phone_number = "503-493-7148";
            $street = "1022 Lloyd Center Space H-204";
            $city = "Portland";
            $state = "OR";
            $zip = 97232;
            $new_store = new Store($name, $phone_number, $street, $city, $state, $zip);

            // Act
            $new_store->save();
            $result = Store::getAll();

            // Assert
            $this->assertEquals($new_store, $result[0]);
        }
    }
?>
