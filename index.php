<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Objects</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Javascript Objects</h1>

        <p id="myHouseObject"></p>

        <p id="personObject"></p>

        <p id="carObject"></p>

        <p id="familyObject"></p>

        <p id="recipeObject"></p>

        <h1>Javascript Object Methods</h1>

        <p>Objects with functions built insode of them have built in methods. These methods are specific to the obj and typically perform a task related to the obj properties, Some of these built in methods include document.write() doc.getElementById() and console.log().</p>

        <p>document.write(myGreeting)</p>

        <p>In the above example, document is the object name and write() is the method. Somewhere in the main doc obj there exists a method function called write() that is told to perform a certain action when invoked.</p>

        <p>There are thousands of other methods (ex. toUpperCase, toLowerCase etc.) Each was built for a different purpose. While you are working with JS the best thing to keep in mind is that everything is an obj and almost all JS obj have built in methods, You reference more obj and methods by using the MDN.</p>






















        <h1>PHP Classes &amp; Objects</h1>

        <p>In PHP, instead of objects we largey use classes. The difference between an obj and class is that a class is usually the parent of an object. Think of a class in php as a template and when you create anything based off of these templates you create an object.</p>

        <!-- Add your site or application content here -->
        <?php 
        /* Below is a basic PHP Class */

        class Console {

            //declare our properties
            public $brand = 'Microsoft';
            public $version = 'Xbox One';

            //declare a method
            public function showConsole() {
                echo ('<br>' . $this->brand . ' ' .$this->version');
            }
        }

        // Create an object from the above class and invoke the method.
        $myConsole = new Console();
        $myConsole->showConsole();

        /* Getters and Setters are prevalent in OOP languages such as JS, Java, Ruby and more. Getters and Setters are used to get the properties and set properties within a class. */

        // Create a new class using the class keyword 
        class Student {
            var $name;
            // using a setter to set a property to accept a parameter as its value.
            function set_name($my_name) {
                this->name = $my_name;
            }
        
        // Using a getter to retrieve the name value.
            function get_name() {
                return $this->name;
                echo('<br>Your name is ' . $name);
            }
        }

        // Create Objects from the student class 
        $sharon = new Student();
        $sharon->set_name('Sharon Kerr');

        $corey = new Student();
        $corey->set_name('Corey Gilford');

        $mike = new Student();
        $mike->set_name('Mike Robinson');

        // Call the mothod on the student class using the student objects.
        echo('<br> Student #1: ' . $sharon->get_name());
        echo('<br> Student #2: ' . $corey->get_name());
        echo('<br> Student #3: ' . $mike->get_name());















        ?> 

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
