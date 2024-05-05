# Algeria-Wilayas for Laravel

[![Stable Version](https://img.shields.io/github/v/tag/abdomassoun/Algeria-Wilayas)](https://github.com/abdomassoun/Algeria-Wilayas/releases/tag/v1.0)
[![Latest Release](https://img.shields.io/github/v/release/abdomassoun/Algeria-Wilayas?color=%233D9970)](https://github.com/abdomassoun/Algeria-Wilayas/releases/latest)
[![License](https://img.shields.io/packagist/l/abdomassoun/algeria-wilayas)](https://packagist.org/packages/abdomassoun/algeria-wilayas)

<!-- [![Total Downloads](https://img.shields.io/github/downloads/abdomassoun/Algeria-Wilayas/total)](https://github.com/abdomassoun/Algeria-Wilayas/releases) -->

This package is designed to help Laravel developers integrate wilayas data into their projects in the easiest way possible. It includes an enum of wilayas and provides the ability to create a table that includes all the data of wilayas with their information (optional to create a table of wilayas). It also includes a Wilaya model (class).

## Usage
Here are the step-by-step instructions on how to install:

1. Run the following command to install the package:
    ```shell
    composer require abdomassoun/algeria-wilayas
    ```
   This command will add the `Wilaya` class to your project, along with a migration for it. It will also create an enum called `WilayaEnum` which includes various functions to work with the enum.

2. (Optional) If you want to create a database seed, run the following command:
    ```shell
    php artisan vendor:publish --tag=seeders
    ```
   This command will publish the seeders for the package, allowing you to seed the wilayas data into your database.

3. You can now use the `Wilaya` class and the `WilayaEnum` enum in your Laravel project. Here's an example of how to use the enum:

   ```php
   use App\Enums\WilayaEnum;

   // Get all wilayas
   $wilayas = WilayaEnum::all();

   // Get the name of a wilaya by its code
   $wilayaName = WilayaEnum::getNameByCode('01');

   // Get the code of a wilaya by its name
   $wilayaCode = WilayaEnum::getCodeByName('Adrar');
   ```

   Feel free to explore the `Wilaya` class and the `WilayaEnum` enum to discover more functions and features.

   For more information, please refer to the [package documentation](https://github.com/abdomassoun/Algeria-Wilayas).

## Contributing
We welcome and encourage contributions to further develop this package. We appreciate any help and ideas. Please check the [issues](https://github.com/abdomassoun/Algeria-Wilayas/issues) to see how you can contribute.
## License
This package is licensed under the MIT License (MIT).