<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../files/sty.css">

    <title>php data types</title>
</head>

<body>
    <div class="mainContent">
        <div class="slider"></div>
        <div class="content">
            <div class="main">
                <div class="heading">
                    <h1>PHP data types</h1>
                </div>
                <div class="defination">
                    <h4>In PHP, data types represent the different kinds of values that can be stored and manipulated
                        within a program. PHP supports several built-in data types, each serving a specific purpose.
                        Here is a brief explanation of the commonly used data types in PHP:</h4>
                    <h4>
                        <ol>
                            <li><span> String:</span> The string data type represents a sequence of characters. Strings
                                are enclosed in single quotes ('') or double quotes ("") in PHP. They can contain
                                alphanumeric characters, special characters, and even numeric values. Example: $name =
                                "John Doe";</li>

                            <li><span> Integer:</span> The integer data type represents whole numbers without decimal
                                points. Integers can be positive or negative. Example: $age = 25;</li>


                            <li><span> Float/Double: </span>The float (or double) data type represents numbers with
                                decimal points. Floats can store both whole and fractional numbers. Example: $price =
                                9.99;</li>



                            <li><span> Boolean: </span>The boolean data type represents a binary value, either true or
                                false. Booleans are useful for logical comparisons and conditional statements. Example:
                                $isReady = true;</li>


                            <li><span> Array:</span> The array data type represents an ordered collection of elements.
                                Arrays can store multiple values of different data types under a single variable.
                                Elements in an array are accessed using an index. Example: $fruits = array("apple",
                                "banana", "orange");

                            </li>

                            <li><span> Object: </span> The object data type represents an instance of a class. Objects
                                encapsulate data and behavior (methods) related to a specific entity. Example: $person =
                                new Person();</li>

                            <li><span>Null: </span>The null data type represents the absence of a value. It is often
                                used to indicate that a variable does not have any assigned value. Example: $name =
                                null;</li>

                            <li><span>Resource: </span>The resource data type represents a reference to an external
                                resource, such as a database connection or file handle. Resources are typically created
                                and managed by functions provided by PHP extensions.</li>
                            <li>
                                <span> Callable:</span> The callable data type represents a variable that can be invoked
                                like a function. It can store functions, methods, and anonymous functions.
                            </li>
                        </ol>
                    </h4>
                    <h4>These are the basic data types in PHP. It's important to note that PHP is a loosely typed
                        language, meaning variables can change their data type dynamically during runtime. Additionally,
                        PHP 7 introduced scalar type declarations that allow developers to enforce specific data types
                        for function arguments and return values, such as int, float, string, and bool.</h4>


                </div>
            </div>
            <div class="main">
                <div class="heading">
                    <h1>String:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="string()"></span>
                        <textarea id="codeArea" class="string" readonly>
         
         // String data type
         name = "John Doe";
         cho "Name: " . $name ;
         
        //output : Name: John Doe
                             </textarea>
                            </div>

                </div>
            </div>


            <div class="main">
                <div class="heading">
                    <h1>integer:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                               <span class="mdi mdi-content-copy" onclick="integer()"></span>
                               <textarea id="codeArea" class="integer" readonly>
        // Integer data type
        $age = 25;
        echo "Age: " . $age ;
        
        //output : Age: 25
                               </textarea>
                    </div>

                </div>
            </div>




            <div class="main">
                <div class="heading">
                    <h1>Float/Double:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="float()"></span>
                        <textarea id="codeArea" class="float" readonly>
           // Float/Double data type
           $price = 9.99;
           echo "Price: $" . $price ;

           //output Price: $9.99
                        </textarea>
                    </div>

                </div>
            </div>


            
            <div class="main">
                <div class="heading">
                    <h1> Boolean:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="boolean()"></span>
                        <textarea id="codeArea" class="boolean" readonly>
       // Boolean data type
       isReady = true;
       cho "Is Ready: " . ($isReady ? "Yes" : "No") ;
       //output Is Ready: Yes
                              </textarea>
                    </div>

                </div>
            </div>




            
            <div class="main">
                <div class="heading">
                    <h1>array:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="array()"></span>
                        <textarea id="codeArea" class="array" readonly>
       // Array data type
       $fruits = array("apple", "banana", "orange");
       echo "Fruits: " . implode(", ", $fruits) .;

       //output Fruits: apple, banana, orange
                        </textarea>
                    </div>

                </div>
            </div>



            <div class="main">
                <div class="heading">
                    <h1>object:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="object()"></span>
                        <textarea id="codeArea" class="object">
         // Object data type
         class Person {
             public $name;
             public $age;
         
             public function __construct($name, $age) {
                 $this->name = $name;
                 $this->age = $age;
             }
         }
       
         $person = new Person("Jane Smith", 30);
         echo "Person: " . $person->name . " (" . $person->age . " years old);

         //output  Person: Jane Smith (30 years old)

         </textarea>
                    </div>

                </div>
            </div>



            <div class="main">
                <div class="heading">
                    <h1>null:</h1>
                </div>
                <div class="defination">
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="empty()"></span>
                               <textarea id="codeArea" class="empty" readonly>
                           
         // Null data type
         ity = null;
         ho "City: " . ($city ?? "Unknown") ;
         
         //output City: Unknown
         
                               </textarea>
                           </div>

                </div>
            </div>




        </div>
    </div>
    <?php include"../files/footer.php" ?>

    <script>
        function string(){
            var codeArea = document.querySelector('.string');
            codeArea.select();
            document.execCommand('copy');
        }
        function integer(){
            var codeArea = document.querySelector('.integer');
            codeArea.select();
            document.execCommand('copy');
        }
        function float(){
            var codeArea = document.querySelector('.float');
            codeArea.select();
            document.execCommand('copy');
        }
        function boolean(){
            var codeArea = document.querySelector('.boolean');
            codeArea.select();
            document.execCommand('copy');
        }
        function array(){
            var codeArea = document.querySelector('.array');
            codeArea.select();
            document.execCommand('copy');
        }
        function object(){
            var codeArea = document.querySelector('.object');
            codeArea.select();
            document.execCommand('copy');
        }
        function empty(){
            var codeArea = document.querySelector('.empty');
            codeArea.select();
            document.execCommand('copy');
        }
    </script>

</body>

</html>