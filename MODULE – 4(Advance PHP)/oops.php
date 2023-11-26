<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Advance php</title>
</head>

<body>
   <strong><u>OOPS</u></strong><br>
   <li>What Is Object Oriented Programming?<br>
      <b>Ans :</b><br>
      <p align="justify">
         Object-oriented programming has a sweeping impact because it appeals at multiple levels and promises faster and
         cheaper development and maintenance. It follows a bottom-up approach to develop applications. <br>
         The word object-oriented is the combination of two words i.e. object and oriented. The dictionary meaning of
         the
         object is an article or entity that exists in the real world. The meaning of oriented is interested in a
         particular kind of thing or entity. In layman's terms, it is a programming pattern that rounds around an object
         or entity are called object-oriented programming. <br>
         It is the most popular programming model among developers. It is well suited for programs that are large,
         complex, and actively updated or maintained. It simplifies software development and maintenance by providing
         major concepts such as abstraction, inheritance, polymorphism, and encapsulation. These core concepts support
         OOP.<br>

         A real-world example of OOP is the automobile. It more completely illustrates the power of object-oriented
         design.<br>
      </p>
   </li>
   <li>
      What Are Properties Of Object Oriented Systems?<br>
      <b>Ans :</b><br>
      <pre>
      Object-oriented systems are built on the principles of object-oriented programming (OOP), which is a programming
      paradigm that organizes software design around objects and their interactions. Here are some key properties of
      object-oriented systems:

      1. **Encapsulation**:
      - Encapsulation refers to the bundling of data (attributes) and the methods (functions) that operate on that data
      into a single unit or object.
      - The object controls access to its own data, allowing only authorized methods to modify it. This helps in
      preventing unauthorized access and manipulation.

      2. **Abstraction**:
      - Abstraction involves focusing on the essential qualities of an object rather than its specific details. It hides
      the implementation details, allowing users to interact with objects using a simplified interface.
      - It provides a clear separation between the interface and the implementation.

      3. **Inheritance**:
      - Inheritance is the mechanism by which one class can inherit attributes and behaviors from another class.
      - This allows for the creation of new classes that extend or specialize the behavior of existing classes. It
      promotes code reuse and helps in modeling real-world relationships.

      4. **Polymorphism**:
      - Polymorphism means the ability of objects to take on multiple forms. In OOP, it typically refers to the ability
      of a method to do different things based on the object that it is acting upon.
      - It allows for the same method name to be used for different purposes depending on the context.

      5. **Message Passing**:
      - Objects communicate with each other by sending messages. A message is a request for a particular object to
      invoke one of its methods.
      - This forms the basis for the interaction between objects in an object-oriented system.

      6. **Classes and Objects**:
      - Classes are the blueprints or templates for creating objects. They define the structure (attributes) and
      behavior (methods) that all objects of that class will have.
      - Objects are instances of classes. They are created based on the class definition and represent concrete
      instances of the concepts modeled by the class.

      7. **Association**:
      - Association represents a relationship between two or more objects. It defines how objects are connected or
      interact with each other.
      - Associations can be one-to-one, one-to-many, or many-to-many.

      8. **Composition**:
      - Composition is a form of association where one object contains another object as a part. The contained object
      does not exist independently of the container.
      - It represents a "has-a" relationship, indicating that one object is composed of or owns another.

      9. **Aggregation**:
      - Aggregation is another form of association where one object contains another object, but the contained object
      can exist independently of the container.
      - It represents a looser form of relationship than composition.

      10. **Responsibility-driven Design**:
      - Object-oriented systems are designed by identifying the responsibilities of various objects and defining their
      interactions.
      - Each object is responsible for a specific aspect of the system's functionality.

      11. **Modularity**:
      - Object-oriented systems promote modularity by breaking down complex systems into smaller, manageable units
      (objects and classes).
      - This enhances maintainability, reusability, and scalability of the codebase.

      These properties collectively provide a powerful framework for organizing and developing complex software systems
      in a way that mirrors real-world concepts and relationships.
   </pre>
   </li>
   <li>
      What Is Difference Between Class And Interface? <br>
      <b>Ans :</b><br>
      <table border="0" width="80%" cellspacing="2" cellpadding="5" align="center">
         <tbody>
            <tr>
               <td style="background-color: #324b7a;" colspan="2">
                  <h3 style="text-align: center;"><span style="color: #ffffff;">Class vs Interface</span></h3>
               </td>
            </tr>
            <tr>
               <td style="background-color: #e3ebfa; padding-left: 30px;">A class is a reference type that is a
                  blueprint to create an object.</td>
               <td style="background-color: #f7f9fc; padding-left: 30px;">An interface is a reference type that cannot
                  be instantiated.</td>
            </tr>
            <tr>
               <td style="background-color: #5c739e; text-align: center;" colspan="2"><b>&nbsp;<span
                        style="color: #ffffff;">Object Instantiation</span></b></td>
            </tr>
            <tr>
               <td style="background-color: #e3ebfa; padding-left: 30px;">A class is used to instantiate an object.</td>
               <td style="background-color: #f7f9fc; padding-left: 30px;">An interface cannot be instantiated because
                  the methods are unable to perform any action.</td>
            </tr>
            <tr>
               <td style="background-color: #5c739e; text-align: center;" colspan="2"><span
                     style="color: #ffffff;"><b>Constructor</b></span></td>
            </tr>
            <tr>
               <td style="background-color: #e3ebfa; padding-left: 30px;">A class contain a constructor, to initialize
                  the variables.</td>
               <td style="background-color: #f7f9fc; padding-left: 30px;">An interface does not contain a constructor
                  because they are hardly any variables to initialize.</td>
            </tr>
            <tr>
               <td style="background-color: #5c739e; text-align: center;" colspan="2"><b
                     style="color: #ffffff;">&nbsp;Keyword</b></td>
            </tr>
            <tr>
               <td style="background-color: #e3ebfa; padding-left: 30px;">A class uses the keyword “class”.</td>
               <td style="background-color: #f7f9fc; padding-left: 30px;">An interface uses the keyword “interface”.
               </td>
            </tr>
            <tr>
               <td style="background-color: #5c739e; text-align: center;" colspan="2"><span
                     style="color: #ffffff;"><b>Access Specifier</b></span></td>
            </tr>
            <tr>
               <td style="background-color: #e3ebfa; padding-left: 30px;">Members of the class can be private, public
                  and protected.</td>
               <td style="background-color: #f7f9fc; padding-left: 30px;">Members of the interface should be always
                  public because the implementing classes define them.</td>
            </tr>
         </tbody>
      </table>
      <p><strong>Class:</strong></p>
      <ol>
         <li>
            <p><strong>Definition</strong>:</p>
            <ul>
               <li>A class is a blueprint or a template for creating objects. It defines the properties (attributes) and
                  behaviors (methods) that objects of that class will have.</li>
            </ul>
         </li>
         <li>
            <p><strong>Implementation</strong>:</p>
            <ul>
               <li>A class can have attributes (data members) and methods (functions) that define the behavior of
                  objects instantiated from that class.</li>
               <li>It can also have constructors to initialize objects.</li>
            </ul>
         </li>
         <li>
            <p><strong>Instantiation</strong>:</p>
            <ul>
               <li>Objects are instances of classes. When you create an object, you are creating a specific instance of
                  that class with its own set of data.</li>
            </ul>
         </li>
         <li>
            <p><strong>Purpose</strong>:</p>
            <ul>
               <li>Classes are used to model real-world entities or concepts. For example, a <code>Person</code> class
                  might have attributes like <code>name</code> and <code>age</code>, and methods like
                  <code>walk()</code> or <code>talk()</code>.
               </li>
            </ul>
         </li>
         <li>
            <p><strong>Inheritance</strong>:</p>
            <ul>
               <li>Classes can inherit attributes and behaviors from other classes through inheritance. This supports
                  the concept of code reuse and allows for the creation of more specialized classes.</li>
            </ul>
         </li>
         <li>
            <p><strong>Usage</strong>:</p>
            <ul>
               <li>Classes are used to define the structure and behavior of objects. They encapsulate data and behavior
                  into a single unit.</li>
            </ul>
         </li>
      </ol>
      <p><strong>Interface:</strong></p>
      <ol>
         <li>
            <p><strong>Definition</strong>:</p>
            <ul>
               <li>An interface is a contract or a specification that defines a set of methods (and possibly constants)
                  that a class must implement if it claims to implement that interface.</li>
            </ul>
         </li>
         <li>
            <p><strong>Implementation</strong>:</p>
            <ul>
               <li>An interface only contains method signatures (declarations) without any implementation details. It
                  does not have fields or method bodies.</li>
            </ul>
         </li>
         <li>
            <p><strong>Purpose</strong>:</p>
            <ul>
               <li>Interfaces are used to establish a common set of behaviors that multiple classes can adhere to. This
                  allows for polymorphism, where objects of different classes can be treated interchangeably if they
                  implement the same interface.</li>
            </ul>
         </li>
         <li>
            <p><strong>Multiple Inheritance</strong>:</p>
            <ul>
               <li>Unlike classes, interfaces support multiple inheritance, meaning a class can implement multiple
                  interfaces. This allows a class to exhibit behaviors from multiple sources.</li>
            </ul>
         </li>
         <li>
            <p><strong>Usage</strong>:</p>
            <ul>
               <li>Interfaces are often used to define contracts for behaviors that are expected across different
                  classes. For example, the <code>Comparable</code> interface in Java defines a <code>compareTo</code>
                  method that allows objects to be compared.</li>
            </ul>
         </li>
      </ol>
   </li>
   <li>
      What Is Overloading?<br>
      <b>Ans :</b><br>
      <h3>Overloading</h3><br>
      <ul class="points" type="circle">
         <li>Overloading in <strong>PHP</strong> provides means to dynamically <strong>create properties and
               methods</strong>.</li>
         <li><strong>These dynamic entities</strong> are processed via magic methods, one can establish in a class for
            various action types.</li>
         <li><strong>All</strong> overloading methods must be defined as <strong>Public</strong>.</li>
         <li>After creating object for a class, we can access set of entities that are properties or methods not defined
            within the scope of the class.</li>
         <li>Such entities are said to be <strong>overloaded properties or methods</strong>, and the process is called
            as overloading.</li>
         <li>For working with these overloaded properties or functions, <strong>PHP magic methods are used</strong>.
         </li>
         <li>Most of the magic methods will be triggered in object context except __callStatic() method which is used in
            static context.</li>
      </ul>
      <img src="https://static.javatpoint.com/phppages/images/php-opps-overloading-output1.png" alt="OVERLOADING">
      <h3 class="h2">Property overloading</h3>
      <ul class="points" type="circle">
         <li>PHP property overloading allows us to create dynamic properties in object context.</li>
         <li>For creating those properties no separate line of code is needed.</li>
         <li>A property which is associated with class instance, and not declared within the scope of the class, is
            considered as overloaded property.</li>
      </ul>
      <p><strong>Some of the magic methods which is useful for property overloading.</strong></p>
      <ul class="points" type="circle">
         <li><strong>__set():</strong> It is triggered while initializing overloaded properties.</li>
         <li><strong>__get():</strong> It is utilized for reading data from inaccessible Properties.</li>
         <li><strong>__isset():</strong> This magic method is invoked when we check overloaded properties with isset()
            function.</li>
         <li><strong>__unset():</strong> This function will be invoked on using PHP unset() for overloaded properties.
         </li>
      </ul>
   </li>
   <li>
      What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::)) with
      Example <br>
   </li>
   <b>Ans :</b><br>
   <p align="justify">
   <pre>
        The scope resolution operator also known as Paamayim Nekudotayim or more commonly known as the
        double colon is a token that allows access to static, constant, and overridden properties or methods of a class.

        It is used to refer to blocks or codes in context to classes, objects, etc. An identifier is used with the
        scope resolution operator. The most common example of the application of the scope resolution operator in PHP
        is to access the properties and methods of the class.

        The following examples show the usage of the scope resolution operator in various scenarios.

        Example 1: This type of definition is used while defining constants within a class.

        php
        class democlass
        {
           const PI = 3.14;
        }

        echo democlass::PI;
        ?>
   
        <b>output : </b>
      </pre>
   </p>
   <pre>
   Example 2: Three special keywords self, parent, and static are used to access properties or methods from inside the
   class definition.

   php
   // Declaring parent class
   class demo
   {

      public static $bar = 10;

      public static function func()
      {

         echo static::$bar . "\n";
      }
   }

   // Declaring child class
   class Child extends demo
   {

      public static $bar = 20;

   }

   // Calling for demo's version of func()
   demo::func();

   // Calling for child's version of func()
   Child::func();

   ?>

   <b>output : </b>
   </pre>
   <pre>
Example 3: When an extending class overrides its parent’s function, the compiler calls the child class’s version of the 
method but it is up to the child class to call its parent’s version of the method.

php 

class test{

   public function myfunc() {
      echo "myfunc() of parent class\n ";
   }
}

class childe extends test {

   public function myfunc(){

      // Calling parent's version 
      // of myfunc() method
      parent::myfunc();

      echo "myfunc() of child class";
   }
}

$class = new childe;
$class -> myfunc() 

?>

<b>output :</b>
</pre>
   <li>
      What are the differences between abstract classes and interfaces?<br>
      <b>ans: </b>
   </li>
   <p>Abstract class and interface both are used to achieve abstraction where we can declare the abstract methods.
      Abstract class and interface both can't be instantiated. <br>
      But there are many differences between abstract class and interface that are given below.
   </p>
   <table>
      <tbody>
         <tr>
            <th>Abstract class</th>
            <th>Interface</th>
         </tr>
         <tr>
            <td>1) Abstract class can <strong>have abstract and non-abstract</strong> methods.</td>
            <td>Interface can have <strong>only abstract</strong> methods. Since Java 8, it can have <strong>default and
                  static methods</strong> also.</td>
         </tr>
         <tr>
            <td>2) Abstract class <strong>doesn't support multiple inheritance</strong>.</td>
            <td>Interface <strong>supports multiple inheritance</strong>.</td>
         </tr>
         <tr>
            <td>3) Abstract class <strong>can have final, non-final, static and non-static variables</strong>.</td>
            <td>Interface has <strong>only static and final variables</strong>.</td>
         </tr>
         <tr>
            <td>4) Abstract class <strong>can provide the implementation of interface</strong>.</td>
            <td>Interface <strong>can't provide the implementation of abstract class</strong>.</td>
         </tr>
         <tr>
            <td>5) The <strong>abstract keyword</strong> is used to declare abstract class.</td>
            <td>The <strong>interface keyword</strong> is used to declare interface.</td>
         </tr>
         <tr>
            <td>6) An <strong>abstract class</strong> can extend another Java class and implement multiple Java
               interfaces.</td>
            <td>An <strong>interface</strong> can extend another Java interface only.</td>
         </tr>
         <tr>
            <td>7) An <strong>abstract class</strong> can be extended using keyword "extends".</td>
            <td> An <strong>interface</strong> can be implemented using keyword "implements".</td>
         </tr>
         <tr>
            <td>8) A Java <strong>abstract class</strong> can have class members like private, protected, etc.</td>
            <td>Members of a Java interface are public by default. </td>
         </tr>
         <tr>
            <td>9)<strong>Example:</strong><br> public abstract class Shape{<br>public abstract void draw();<br>}</td>
            <td><strong>Example:</strong><br> public interface Drawable{<br>void draw();<br>}</td>
         </tr>
      </tbody>
   </table>
   <p>Simply, abstract class achieves partial abstraction (0 to 100%) whereas interface achieves fully abstraction
      (100%).
   </p>
   <li>
      Define Constructor and Destructor?<br>
      <b>ans: </b>
   </li>
   <p><strong>Constructor</strong><strong>:</strong>&nbsp;<br>A constructor is a member function of a class that has the
      same name as the class name. It helps to initialize the object of a class. It can either accept the arguments or
      not. It is used to allocate the memory to an object of the class. It is called whenever an instance of the class
      is created. It can be defined manually with arguments or without arguments. There can be many constructors in a
      class. It can be overloaded but it can not be inherited or virtual. There is a concept of copy constructor which
      is used to initialize an object from another object.&nbsp;<br><strong>Syntax:</strong>&nbsp;&nbsp;
   </p>
   <ul>
      <li><strong>__construct():</strong>&nbsp;<br>&nbsp;</li>
   </ul>
   <pre>
      function __construct()
      {
       // initialize the object and its properties by assigning 
       //values
      }
   </pre>
   <p><strong>Destructor</strong><strong>:</strong>&nbsp;<br>Like a constructor, Destructor is also a member function of
      a class that has the same name as the class name preceded by a tilde(~) operator. It helps to deallocate the
      memory of an object. It is called while the object of the class is freed or deleted. In a class, there is always a
      single destructor without any parameters so it can’t be overloaded. It is always called in the reverse order of
      the constructor. if a class is inherited by another class and both the classes have a destructor then the
      destructor of the child class is called first, followed by the destructor of the parent or base
      class.&nbsp;<br><strong>Syntax:</strong>&nbsp;&nbsp;</p>
   <ul>
      <li><strong>__destruct():</strong>&nbsp;<br>&nbsp;</li>
   </ul>
   <pre>
      function __destruct() 
      {
       // destroying the object or clean up resources here 
      }
   </pre>
   <p><strong>Note:</strong> The constructor is defined in the public section of the Class. Even the values to
      properties of the class are set by Constructors.<br><strong>Constructor types:</strong>&nbsp;<br>&nbsp;
   </p>
   <ul>
      <li><strong>Default Constructor:</strong>It has no parameters, but the values to the default constructor can be
         passed dynamically.</li>
      <li><strong>Parameterized Constructor:</strong> It takes the parameters, and also you can pass different values to
         the data members.</li>
      <li><strong>Copy Constructor:</strong> It accepts the address of the other objects as a parameter.</li>
   </ul>
   <p><strong>Difference between Constructor and Destructor in php :&nbsp;</strong></p>
   <table>
      <thead>
         <tr>
            <th>Constructors</th>
            <th>Destructors</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Accepts one or more arguments.</td>
            <td>No arguments are passed. Its void.</td>
         </tr>
         <tr>
            <td>function name is _construct().</td>
            <td>function name is _destruct()</td>
         </tr>
         <tr>
            <td>It has same name as the class.</td>
            <td>It has same name as the class with prefix ~tilda.</td>
         </tr>
         <tr>
            <td>Constructor is involved automatically when the object is created.</td>
            <td>Destructor is involved automatically when the object is destroyed.</td>
         </tr>
         <tr>
            <td>Used to initialize the instance of a class.</td>
            <td>Used to de-initialize objects already existing to free up memory for new accommodation.</td>
         </tr>
         <tr>
            <td>Used to initialize data members of class.</td>
            <td>Used to make the object perform some task before it is destroyed.</td>
         </tr>
         <tr>
            <td>Constructors can be overloaded.</td>
            <td>Destructors cannot be overloaded.</td>
         </tr>
         <tr>
            <td>It is called each time a class is instantiated or object is created.</td>
            <td>It is called automatically at the time of object deletion .</td>
         </tr>
         <tr>
            <td>Allocates memory.</td>
            <td>It deallocates memory.</td>
         </tr>
         <tr>
            <td>Multiple constructors can exist in a class.</td>
            <td>Only one Destructor can exist in a class.</td>
         </tr>
         <tr>
            <td>If there is a derived class inheriting from base class and the object of the derived class is
               created,&nbsp;<br>the constructor of base class is created and then the constructor of the derived class.
            </td>
            <td>The destructor of the derived class is called and then the destructor of base class just the reverse
               order of&nbsp;<br>constructor.</td>
         </tr>
         <tr>
            <td>The concept of copy constructor is allowed where an object is initialized from the address of another
               object .&nbsp;<br>&nbsp;</td>
            <td>No such concept is allowed.</td>
         </tr>
      </tbody>
   </table>
   <li>
      How to Load Classes in PHP?<br>
      <b>Ans :</b>
      <p>PHP load classes are used for declaring its object etc. in object oriented applications. PHP parser loads it
         automatically, if it is registered with <strong>spl_autoload_register() </strong>function. PHP parser gets the
         least chance to load class/interface before emitting an error.</p>
      <p><strong>Syntax:</strong></p>
      <pre>spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});</pre>
      <p>The class will be loaded from its corresponding “<i>.php” </i>file when it comes into use for the first time.
      </p>
      <p><strong>Autoloading</strong></p>
      <p><strong>Example:</strong></p>
      <div class="noIdeBtnDiv">
         <div class="responsive-tabs-wrapper">
            <div class="responsive-tabs responsive-tabs--enabled">
               <div class="tabcontent responsive-tabs__panel responsive-tabs__panel--active" aria-hidden="false"
                  role="tabpanel" aria-labelledby="tablist1-tab1" id="tablist1-panel1">
                  <p></p>
                  <div class="code-block">
                     <div class="code-gutter">
                        <div class="editor-buttons-container">
                           <div class="editor-buttons">
                              <div class="editor-buttons-div" title="Run and Edit">
                                 <i id="copy-code-button" title="Copy Code"
                                    class="gfg-icon gfg-icon_copy code-sidebar-button padding-2px copy-code-button"></i>
                                 <p></p>
                                 <div id="run-and-edit-loader" class="ring-load"></div>
                                 <p> <i id="run-and-edit-button" title="Edit Code" lang="php"
                                       class="gfg-icon gfg-icon_edit_1 padding-2px code-sidebar-button"></i><br>
                                    <i id="close-code-editor-button" title="Close Editor"
                                       class="gfg-icon gfg-icon_close-editor padding-2px code-sidebar-button close-code-editor-button"></i>
                                 </p>
                                 <div id="run-code-loader" class="ring-load"></div>
                                 <p> <i id="run-code-button" lang="php" title="Run Code and See Output"
                                       class="gfg-icon gfg-icon_play padding-2px code-sidebar-button"></i></p>
                                 <div id="generate-url-loader" class="ring-load"></div>
                                 <p> <i id="generate-url-and-run-button" title="Run Code and Generate IDE URL"
                                       lang="php"
                                       class="gfg-icon gfg-icon_link padding-2px code-sidebar-button generate-url-and-run-button"></i><br>
                                    <i title="Light Mode"
                                       class="gfg-icon padding-2px code-sidebar-button light-editor-button gfg-icon_light-toggle"></i><br>
                                    <i id="edit-on-ide-button" title="Edit on IDE" lang="php"
                                       class="gfg-icon gfg-icon_code padding-2px code-sidebar-button edit-on-ide-button"></i>
                                 </p>
                              </div>
                              <p></p>
                           </div>
                           <p></p>
                        </div>
                        <p></p>
                     </div>
                     <div class="code-container">
                        <div id="highlighter_972415" class="syntaxhighlighter nogutter night">
                           <table border="0" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td class="code">
                                       <div class="container">
                                          <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code>
                                          </div>
                                          <div class="line number2 index1 alt1"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="plain">spl_autoload_register(</code><code
                                                class="keyword">function</code> <code class="plain">(</code><code
                                                class="variable">$class_name</code><code class="plain">) { </code></div>
                                          <div class="line number3 index2 alt2"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="keyword">include</code> <code class="variable">$class_name</code>
                                             <code class="plain">. </code><code class="string">'.php'</code><code
                                                class="plain">; </code>
                                          </div>
                                          <div class="line number4 index3 alt1"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="plain">}); </code></div>
                                          <div class="line number5 index4 alt2"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="variable">$obj</code> <code class="plain">= </code><code
                                                class="keyword">new</code> <code class="plain">mytest1(); </code></div>
                                          <div class="line number6 index5 alt1"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="variable">$obj2</code> <code class="plain">= </code><code
                                                class="keyword">new</code> <code class="plain">mytest2(); </code></div>
                                          <div class="line number7 index6 alt2"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="functions">echo</code> <code
                                                class="string">"Objects of mytest1 and mytest2 "</code></div>
                                          <div class="line number8 index7 alt1"><code
                                                class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                class="plain">+ </code><code
                                                class="string">"class created successfully"</code><code
                                                class="plain">; </code></div>
                                          <div class="line number9 index8 alt2"><code class="plain">?&gt;</code></div>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="code-editor-container"></div>
                     <p></p>
                  </div>
                  <div class="code-output-container">
                     <div class="output-block">
                        <i id="output-icon" title="Output"
                           class="gfg-icon gfg-icon_arrow-right-editor padding-2px code-sidebar-button output-icon"></i>
                        <p></p>
                        <pre class="output-pre"></pre>
                        <p></p>
                     </div>
                     <div class="ide-link-div">
                        <i id="copy-url-button" title="Copy Generated Ide URL"
                           class="gfg-icon gfg-icon_copy padding-2px code-sidebar-button copy-url-button"></i>
                        <p></p>
                        <pre id="ide-url"></pre>
                        <p></p>
                     </div>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <p><strong>Output:</strong></p>
      <pre><strong> </strong>Objects of test1 and test2 class created successfully.</pre>
      <p><strong>Note:</strong> If the corresponding “.php” file having class definition is not found, the following
         error will be displayed.</p>
   </li>
   <li>
      How to Call Parent Constructor?<br>
      <b>Ans :</b>
      <h4 class="wp-block-heading">Child class doesn’t have a constructor</h4>
      <div class="wp-block-image">
         <figure class="aligncenter size-large"><noscript><img decoding="async"
                  src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-inheritance.svg" alt="php inheritance"
                  class="wp-image-656" /></noscript><img decoding="async"
               src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-inheritance.svg"
               data-src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-inheritance.svg"
               alt="php inheritance" class="wp-image-656 lazyloaded"></figure>
      </div>
      <p>However, we haven’t discussed the constructors of the parent and child
         classes in the context of inheritance.</p>
      <p>The following adds a constructor to the <code>BankAccount</code> class, which accepts the <code>$balance</code>
         parameter. The constructor assigns the <code>$balance</code> argument to the <code>$balance</code> property:
      </p>
      <pre class="wp-block-code" aria-describedby="shcb-language-1" data-shcb-language-name="HTML, XML"
         data-shcb-language-slug="xml"><style>.wp-block-code {
   border: 0;
   padding: 0;
   -webkit-text-size-adjust: 100%;
   text-size-adjust: 100%;
}

.wp-block-code > span {
   display: block;
   overflow: auto;
}

.shcb-language {
   border: 0;
   clip: rect(1px, 1px, 1px, 1px);
   -webkit-clip-path: inset(50%);
   clip-path: inset(50%);
   height: 1px;
   margin: -1px;
   overflow: hidden;
   padding: 0;
   position: absolute;
   width: 1px;
   word-wrap: normal;
   word-break: normal;
}

.hljs {
   box-sizing: border-box;
}

.hljs.shcb-code-table {
   display: table;
   width: 100%;
}

.hljs.shcb-code-table > .shcb-loc {
   color: inherit;
   display: table-row;
   width: 100%;
}

.hljs.shcb-code-table .shcb-loc > span {
   display: table-cell;
}

.wp-block-code code.hljs:not(.shcb-wrap-lines) {
   white-space: pre;
}

.wp-block-code code.hljs.shcb-wrap-lines {
   white-space: pre-wrap;
}

.hljs.shcb-line-numbers {
   border-spacing: 0;
   counter-reset: line;
}

.hljs.shcb-line-numbers > .shcb-loc {
   counter-increment: line;
}

.hljs.shcb-line-numbers .shcb-loc > span {
   padding-left: 0.75em;
}

.hljs.shcb-line-numbers .shcb-loc::before {
   border-right: 1px solid #ddd;
   content: counter(line);
   display: table-cell;
   padding: 0 0.75em;
   text-align: right;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
   white-space: nowrap;
   width: 1%;
}</style><span><code class="hljs language-xml"><span class="php"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">BankAccount</span>
</span>{
   <span class="hljs-keyword">private</span> $balance;

   <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">($balance)</span>
   </span>{
      <span class="hljs-keyword">$this</span>-&gt;balance = $balance;
   }

   <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getBalance</span><span class="hljs-params">()</span>
   </span>{
      <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;balance;
   }

   <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">deposit</span><span class="hljs-params">($amount)</span>
   </span>{
      <span class="hljs-keyword">if</span> ($amount &gt; <span class="hljs-number">0</span>) {
         <span class="hljs-keyword">$this</span>-&gt;balance += $amount;
      }

      <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>;
   }
}</span></code></span><small class="shcb-language" id="shcb-language-1"><span class="shcb-language__label">Code language:</span> <span class="shcb-language__name">HTML, XML</span> <span class="shcb-language__paren">(</span><span class="shcb-language__slug">xml</span><span class="shcb-language__paren">)</span></small><i class="icon-copy btn-copy-code"></i>
</pre>
      <p>The <code>SavingAccount</code> class remains the same and doesn’t include its own constructor:</p>
      <pre class="wp-block-code" aria-describedby="shcb-language-2" data-shcb-language-name="HTML, XML"
         data-shcb-language-slug="xml">
         <span><code class="hljs language-xml"><span class="php"><span class="hljs-meta">&lt;?php</span> 
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SavingAccount</span>
<span class="hljs-keyword">extends</span> <span class="hljs-title">BankAccount</span>
</span>{
<span class="hljs-keyword">private</span> $interestRate;

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span>
<span class="hljs-title">setInterestRate</span><span class="hljs-params">($interestRate)</span>
</span>{
   <span class="hljs-keyword">$this</span>-&gt;interestRate = $interestRate;
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <spanclass="hljs-title">addInterest</span><span class="hljs-params">()</span>
</span>{
   <span class="hljs-comment">// calculate interest</span>
   $interest = <span class="hljs-keyword">$this</span>-&gt;interestRate * <span class="hljs-keyword">$this</span>-&gt;getBalance();
   <span class="hljs-comment">// deposit interest to the balance</span>
   <span class="hljs-keyword">$this</span>-&gt;deposit($interest);
}
}</span></code></span><small class="shcb-language" id="shcb-language-2"><span class="shcb-language__label">Code language:</span> <span class="shcb-language__name">HTML, XML</span> <span class="shcb-language__paren">(</span><span class="shcb-language__slug">xml</span><span class="shcb-language__paren">)</span></small><i class="icon-copy btn-copy-code"></i>
</pre>
      <p>When you create a new instance of the <code>SavingAccount</code>, PHP will call the constructor of the
         <code>SavingAccount</code> class. However, PHP cannot find the constructor in the
         <code>SavingAccount class</code>. Therefore, it continues to search for the constructor of the parent class of
         the <code>SavingAccount</code> class, which is the <code>BankAccount</code> class. And it invokes the
         constructor of the <code>BankAccount</code> class.
      </p>
      <p>If you don’t pass an argument to the constructor of the <code>SavingAccount</code> class, you’ll get an error:
      </p>
      <pre class="wp-block-code" aria-describedby="shcb-language-3" data-shcb-language-name="PHP"
         data-shcb-language-slug="php"><span><code class="hljs language-php">$account = <span class="hljs-keyword">new</span> SavingAccount();</code></span><small class="shcb-language" id="shcb-language-3"><span class="shcb-language__label">Code language:</span> <span class="shcb-language__name">PHP</span> <span class="shcb-language__paren">(</span><span class="shcb-language__slug">php</span><span class="shcb-language__paren">)</span></small><i class="icon-copy btn-copy-code"></i>
      </pre>
      <p>Error:</p>
      <pre class="wp-block-code" aria-describedby="shcb-language-4" data-shcb-language-name="JavaScript"
         data-shcb-language-slug="javascript"><span><code class="hljs language-javascript">Fatal error: Uncaught ArgumentCountError: Too few <span class="hljs-built_in">arguments</span> to <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">BankAccount</span>::<span class="hljs-title">__construct</span>(<span class="hljs-params"></span>), 0 <span class="hljs-title">passed</span> <span class="hljs-title">in</span> ... <span class="hljs-title">on</span> <span class="hljs-title">line</span> 5 <span class="hljs-title">and</span> <span class="hljs-title">exactly</span> 1 <span class="hljs-title">expected</span> <span class="hljs-title">in</span> ...</span></code></span><small class="shcb-language" id="shcb-language-4"><span class="shcb-language__label">Code language:</span> <span class="shcb-language__name">JavaScript</span> <span class="shcb-language__paren">(</span><span class="shcb-language__slug">javascript</span><span class="shcb-language__paren">)</span></small><i class="icon-copy btn-copy-code"></i>
      </pre>
      <p>But if you pass an argument to the constructor, it’ll work perfectly:</p>
      <pre class="wp-block-code" aria-describedby="shcb-language-5" data-shcb-language-name="PHP"
         data-shcb-language-slug="php"><span><code class="hljs language-php">$account = <span class="hljs-keyword">new</span> SavingAccount(<span class="hljs-number">100</span>);</code></span><small class="shcb-language" id="shcb-language-5"><span class="shcb-language__label">Code language:</span> <span class="shcb-language__name">PHP</span> <span class="shcb-language__paren">(</span><span class="shcb-language__slug">php</span><span class="shcb-language__paren">)</span></small><i class="icon-copy btn-copy-code"></i>
      </pre>
   </li>
   <li>
      Are Parent Constructor Called Implicitly When Create An ObjectOf Class?<br>
      <b>Ans :</b><br>
      <p>In PHP, when you create an object of a class, the parent class's constructor is not called implicitly. However,
         you can explicitly call the parent class's constructor using the <code>parent::__construct()</code> syntax
         within the constructor of the child class.</p>
      <p>Here's an example to illustrate:</p>
      <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-php"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ParentClass</span> </span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Parent constructor called\n"</span>;
    }
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ChildClass</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">ParentClass</span> </span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-comment">// Call the parent class's constructor explicitly</span>
        <span class="hljs-built_in">parent</span>::<span class="hljs-title function_ invoke__">__construct</span>();
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Child constructor called\n"</span>;
    }
}

<span class="hljs-comment">// Create an object of the child class</span>
<span class="hljs-variable">$childObj</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">ChildClass</span>();
</code></div></div></pre>
      <p>In this example, when you create an object of <code>ChildClass</code>, both the parent and child constructors
         will be called in the specified order. The output will be:</p>
      <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-kotlin">Parent <span class="hljs-keyword">constructor</span> called
Child <span class="hljs-keyword">constructor</span> called
</code></div></div></pre>
      <p>It's important to note that if the child class does not have a constructor, PHP will not automatically call the
         parent class's constructor unless you explicitly do so using <code>parent::__construct()</code>.</p>
   </li>
   <li>
      What Happen, If Constructor Is Defined As Private Or Protected?<br>
      <b>Ans :</b>
      <ol>
         <li>
            <p><strong>Private Constructor:</strong></p>
            <ul>
               <li>A private constructor can only be called within the class in which it is defined. Instances of the
                  class cannot be created from outside the class.</li>
               <li>This is useful in scenarios where you want to control the instantiation of objects and ensure that
                  they can only be created within the class itself or within its static methods.</li>
            </ul>
            <p>Example:</p>
            <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-php"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MyClass</span> </span>{
    <span class="hljs-keyword">private</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Private constructor called\n"</span>;
    }

    <span class="hljs-keyword">public</span> <span class="hljs-built_in">static</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">createInstance</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-comment">// Private constructor can be called within the class</span>
        <span class="hljs-keyword">return</span> <span class="hljs-keyword">new</span> <span class="hljs-built_in">self</span>();
    }
}
<span class="hljs-comment">// Attempting to create an instance from outside the class will result in an error</span>
<span class="hljs-variable">$obj</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">MyClass</span>();  <span class="hljs-comment">// Error: Call to private MyClass::__construct() from outside the class</span>
</code></div></div></pre>
         </li>
         <li>
            <p><strong>Protected Constructor:</strong></p>
            <ul>
               <li>A protected constructor allows instances of the class to be created within the class itself and
                  within its subclasses.</li>
               <li>It restricts instantiation from outside the class and its subclasses.</li>
            </ul>
            <p>Example:</p>
            <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-php"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MyClass</span> </span>{
    <span class="hljs-keyword">protected</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Protected constructor called\n"</span>;
    }
    <span class="hljs-keyword">public</span> <span class="hljs-built_in">static</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">createInstance</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-comment">// Protected constructor can be called within the class and its subclasses</span>
        <span class="hljs-keyword">return</span> <span class="hljs-keyword">new</span> <span class="hljs-built_in">self</span>();
    }
}
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MySubClass</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">MyClass</span> </span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>(<span class="hljs-params"></span>) </span>{
        <span class="hljs-comment">// Protected constructor can be called within the subclass</span>
        <span class="hljs-built_in">parent</span>::<span class="hljs-title function_ invoke__">__construct</span>();
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Subclass constructor called\n"</span>;
    }
}
<span class="hljs-comment">// Attempting to create an instance from outside the class or its subclasses will result in an error</span>
<span class="hljs-variable">$obj</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">MyClass</span>();  <span class="hljs-comment">// Error: Call to protected MyClass::__construct() from outside the class</span>
<span class="hljs-variable">$subObj</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">MySubClass</span>();  <span class="hljs-comment">// Outputs: Protected constructor called Subclass constructor called</span>
</code></div></div></pre>
         </li>
      </ol>
   </li>
   <li>
      What are PHP Magic Methods/Functions? List them Write program for Static
      Keyword in PHP?<br>
      <b>Ans :</b>
      <p>&nbsp;PHP magic methods are special methods that are called automatically when certain conditions are met.
         There are several magic methods in &nbsp;PHP. Every magic method follows certain rules –</p>
      <ul>
         <li>Every magic method starts with a double underscore ( &nbsp;__ ).</li>
         <li>They are predefined and neither can be created nor removed.</li>
         <li>Magic methods have reserved names and their name should not be used for other purposes.</li>
         <li>Magic methods are automatically called when certain criteria are met.</li>
      </ul>
      <figure class="table">
         <table>
            <tbody>
               <tr>
                  <td><strong>Method Names</strong></td>
                  <td><strong>Return types</strong></td>
                  <td><strong>Condition of calling</strong></td>
               </tr>
               <tr>
                  <td>__construct()</td>
                  <td>NaN</td>
                  <td>
                     <p>This method gets called automatically every time the object of a particular class is created.
                     </p>
                     <p>The function of this magic method is the same as the constructor in any OOP language.</p>
                  </td>
               </tr>
               <tr>
                  <td>__destruct()</td>
                  <td>NaN</td>
                  <td>
                     <p>As the name suggests this method is called when the object is destroyed and no longer in use.
                     </p>
                     <p>Generally at the end of the program and end of the function.</p>
                  </td>
               </tr>
               <tr>
                  <td>__call($name,$parameter)&nbsp;</td>
                  <td>Not mandatory</td>
                  <td>This method executes when a method is called which is not defined yet.</td>
               </tr>
               <tr>
                  <td>__toString()</td>
                  <td>String</td>
                  <td>
                     <p>This method is called when we need to convert the object into a string.&nbsp;</p>
                     <p>For example: &nbsp; echo $obj;</p>
                     <div id="GFG_AD_Desktop_InContent_ATF_336x280" style="text-align:center;max-height: 280px;"></div>
                     <p>The $obj-&gt;__toString(); will be called magically.</p>
                  </td>
               </tr>
               <tr>
                  <td>__get($name)</td>
                  <td>NaN</td>
                  <td>This method is called when an inaccessible variable or non-existing variable is used.</td>
               </tr>
               <tr>
                  <td>__set($name , $value)</td>
                  <td>NaN</td>
                  <td>This method is called when an inaccessible variable or non-existing variable is written.</td>
               </tr>
               <tr>
                  <td>__debugInfo()</td>
                  <td>array</td>
                  <td>This magic method is executed when an object is used inside var_dump() for debugging purposes.
                  </td>
               </tr>
            </tbody>
         </table>
      </figure>
      <p>The following are code snippets and examples to understand magic methods better.</p>
      <p><strong>__construct() Method: </strong>In the below example, the MagicMethod class has a magic method
         <strong>__construct() </strong>and it is called every time when a new object of MagicMethod class is created.
      </p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1"><code class="undefined spaces">&nbsp;&nbsp;</code>&nbsp;
                     </div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__construct() {</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code
                           class="string">"This is the construct magic method"</code><code class="plain">;</code></div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number7 index6 alt2"><code class="plain">}</code></div>
                     <div class="line number8 index7 alt1">&nbsp;</div>
                     <div class="line number9 index8 alt2"><code
                           class="comments">// Creating object of Magic method class</code></div>
                     <div class="line number10 index9 alt1"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number11 index10 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;</code>&nbsp;</div>
                     <div class="line number12 index11 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>This is the construct magic method</pre>
      <p><strong>__destruct() Method: </strong>In the below example, the MagicMethod class has a magic method
         <strong>__destruct()</strong> that gets called automatically when the object of MagicMethod destroys.&nbsp;
      </p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__destruct() {</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code class="string">"This destruct magic method "</code></div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="plain">+ </code><code class="string">"gets called when object destroys"</code><code
                           class="plain">;</code></div>
                     <div class="line number7 index6 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number8 index7 alt1"><code class="plain">}</code></div>
                     <div class="line number9 index8 alt2">&nbsp;</div>
                     <div class="line number10 index9 alt1"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number11 index10 alt2">&nbsp;</div>
                     <div class="line number12 index11 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>This destruct magic method gets called when object destroys</pre>
      <p><strong>__call($name, $parameters) Method: </strong>This method gets called when a method or property is called
         which has not been defined.</p>
      <p>This method takes two parameters:</p>
      <ul>
         <li><strong>$name: </strong>This contains the name of the method which was called.</li>
         <li><strong>$parameters: </strong>This is an array of parameters that were given to that method.</li>
      </ul>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__call(</code><code class="variable">$name</code> <code
                           class="plain">, </code><code class="variable">$parameters</code><code class="plain">){</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code class="string">"Name of method =&gt;"</code> <code
                           class="plain">. </code><code class="variable">$name</code><code class="plain">.</code><code
                           class="string">"\n"</code><code class="plain">;</code></div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code class="string">"Parameters provided\n"</code><code
                           class="plain">;</code></div>
                     <div class="line number7 index6 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="plain">print_r(</code><code class="variable">$parameters</code><code
                           class="plain">);</code></div>
                     <div class="line number8 index7 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number9 index8 alt2"><code class="plain">}</code></div>
                     <div class="line number10 index9 alt1">&nbsp;</div>
                     <div class="line number11 index10 alt2"><code class="comments">// Instantiating MagicMethod</code>
                     </div>
                     <div class="line number12 index11 alt1"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number13 index12 alt2">&nbsp;</div>
                     <div class="line number14 index13 alt1"><code class="variable">$obj</code><code
                           class="plain">-&gt;hello(</code><code class="string">"Magic"</code> <code
                           class="plain">, </code><code class="string">"Method"</code><code class="plain">);</code>
                     </div>
                     <div class="line number15 index14 alt2">&nbsp;</div>
                     <div class="line number16 index15 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>Name of method =&gt;hello
Parameters provided
Array
(
    [0] =&gt; Magic
    [1] =&gt; Method
)</pre>
      <p><strong>__toString() Method: </strong>This method gets called when an object is treated as a string. This
         method is also useful to represent an object as a String.</p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__toString(){</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="keyword">return</code> <code
                           class="string">"You are using MagicMethod object as a String "</code><code
                           class="plain">;</code></div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number7 index6 alt2"><code class="plain">}</code></div>
                     <div class="line number8 index7 alt1">&nbsp;</div>
                     <div class="line number9 index8 alt2"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number10 index9 alt1">&nbsp;</div>
                     <div class="line number11 index10 alt2"><code class="functions">echo</code> <code
                           class="variable">$obj</code><code class="plain">;</code></div>
                     <div class="line number12 index11 alt1">&nbsp;</div>
                     <div class="line number13 index12 alt2"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>You are using MagicMethod object as a String </pre>
      <p><strong>__get($name) Method: </strong>This method gets called when an inaccessible (private or protected
         &nbsp;) variable or non-existing variables are used.</p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__get(</code><code class="variable">$name</code><code
                           class="plain">){</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code class="string">"You are trying to get '"</code> <code
                           class="plain">. </code><code class="variable">$name</code> <code class="plain">. </code>
                     </div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="plain">"' which is either inaccessible </code></div>
                     <div class="line number7 index6 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="keyword">or</code> <code class="plain">non existing member"; </code></div>
                     <div class="line number8 index7 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number9 index8 alt2"><code class="plain">}</code></div>
                     <div class="line number10 index9 alt1">&nbsp;</div>
                     <div class="line number11 index10 alt2"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number12 index11 alt1"><code class="variable">$obj</code><code
                           class="plain">-&gt;value;</code></div>
                     <div class="line number13 index12 alt2">&nbsp;</div>
                     <div class="line number14 index13 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output</strong>
      <pre>You are trying to get 'value' which is either 
inaccessible or non existing member</pre>
      <p><strong>__set($name, $value) Method: </strong>This method is called when an inaccessible variable or
         non-existing variable is tried to modify or alter.</p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__set(</code><code class="variable">$name</code> <code
                           class="plain">, </code><code class="variable">$value</code><code class="plain">) {</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="functions">echo</code> <code class="string">"You are trying to modify '"</code></div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="plain">. </code><code class="variable">$name</code> <code class="plain">. </code><code
                           class="string">"' with '"</code> <code class="plain">. </code><code
                           class="variable">$value</code> <code class="plain">. </code></div>
                     <div class="line number7 index6 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="plain">"' which is either inaccessible </code></div>
                     <div class="line number8 index7 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="keyword">or</code> <code class="plain">non-existing member";</code></div>
                     <div class="line number9 index8 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number10 index9 alt1"><code class="plain">}</code></div>
                     <div class="line number11 index10 alt2"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number12 index11 alt1"><code class="variable">$obj</code><code
                           class="plain">-&gt;value = </code><code class="string">"Hello"</code><code
                           class="plain">;</code></div>
                     <div class="line number13 index12 alt2">&nbsp;</div>
                     <div class="line number14 index13 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>You are trying to modify 'value' with 'Hello' which is either inaccessible 
          or non-existing member</pre>
      <p><strong>__debugInfo() Method: </strong>This method is used when the var_dump() function is
         called with object as a parameter. This method should return an array containing all the variables which may be
         useful in debugging.
      </p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php</code></div>
                     <div class="line number2 index1 alt1">&nbsp;</div>
                     <div class="line number3 index2 alt2"><code class="keyword">class</code> <code
                           class="plain">MagicMethod {</code></div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code>
                        <code class="plain">__debugInfo(){</code>
                     </div>
                     <div class="line number5 index4 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="keyword">return</code> <code class="keyword">array</code><code
                           class="plain">(</code><code class="string">"variable"</code><code
                           class="plain">=&gt; </code><code class="string">"value"</code><code class="plain">);</code>
                     </div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}</code></div>
                     <div class="line number7 index6 alt2"><code class="plain">}</code></div>
                     <div class="line number8 index7 alt1">&nbsp;</div>
                     <div class="line number9 index8 alt2"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code
                           class="plain">MagicMethod();</code></div>
                     <div class="line number10 index9 alt1"><code class="plain">var_dump(</code><code
                           class="variable">$obj</code><code class="plain">);</code></div>
                     <div class="line number11 index10 alt2">&nbsp;</div>
                     <div class="line number12 index11 alt1"><code class="plain">?&gt;</code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <strong>Output :</strong>
      <pre>object(MagicMethod)#1 (1) {
  ["variable"]=&gt;
  string(5) "value"
}</pre>
      <p>The <code class="w3-codespan">static</code> keyword is used to declare properties and methods of a class as
         static. Static
         properties and methods can be used without creating an instance of the class.</p>
      <p>The <code class="w3-codespan">static</code> keyword is also used to declare variables in a function which keep
         their value
         after the function has ended.</p>
   </li>
   <li>
      Create multiple Traits and use it in to a single class?<br>
      <b>Ans :</b>
      <section class="abstract">
         <h4 id="overview" level="2">Overview</h4>
         <p>Traits in PHP that allows developers to reuse code in multiple classes without the need for inheritance. A
            trait is a collection of methods that can be used by multiple classes, giving them a common set of
            functionality. Traits enable code reuse and improve code organization by separating concerns and allowing
            for better modularization. Traits can be used to add functionality to a class without modifying its
            hierarchy, allowing developers to avoid some of the limitations of class inheritance.
         </p>
      </section>
      <section class="main">
         <h4 id="what-are-traits-" level="2">What are Traits?</h4>
         <p>Traits e in PHP that enable code reuse between multiple classes. They provide a way to compose classes and
            reuse code in a modular way, without the need for class inheritance. A trait is essentially a group of
            methods that can be shared between multiple classes, allowing them to share common functionality.
         </p>
         <p>When a trait is used in a class, all of its methods become available to that class as if they were defined
            within the class itself. This allows developers to add functionality to a class without the need to create a
            new subclass or modify the class hierarchy.
         </p>
         <p>Traits in PHP are particularly useful in situations where multiple classes share similar behavior but do not
            necessarily have a common base class. They can help to avoid code duplication and improve code organization
            and maintainability.
         </p>
         <p>In PHP, a class can use multiple traits, and traits can also use other traits. This allows for very flexible
            code composition and reuse. It is important to use traits judiciously, however, as overuse can lead to
            complex and hard-to-maintain code. It is generally recommended to use traits to share behavior that is
            common across multiple classes, but not to use them to implement business logic or application-specific
            functionality.
         </p>
      </section>
      <section class="main">
         <h4 id="using-multiple-traits" level="2">Using Multiple Traits</h4>
         <p>In PHP, it is possible to use multiple traits in a single class using the use keyword followed by the names
            of the traits separated by commas. This allows a class to reuse code from multiple traits, providing more
            flexibility and reducing code duplication.</p>
         <p>Here is an example of using multiple traits in a single class:</p>
         <pre><div class="code-box_snippetContainer__cJ6zK"><pre style="display: block; overflow-x: auto; padding: 0.5em; color: rgb(171, 178, 191); background: rgb(40, 44, 52);"><code class="language-php" style="white-space: pre;"><span class="hljs-class" style="color: rgb(249, 38, 114);">trait</span><span class="hljs-class"> </span><span class="hljs-class" style="color: rgb(97, 174, 238);">TraitA</span><span class="hljs-class"> </span><span>{
</span><span> </span><span style="color: rgb(177, 142, 177); font-style: italic;">// trait A code here</span><span>
</span>}

<span></span><span class="hljs-class" style="color: rgb(249, 38, 114);">trait</span><span class="hljs-class">  span><span class="hljs-class" style="color: rgb(97, 174, 238);">TraitB</span><span class="hljs-class"> </span><span>{
</span><span> </span><span style="color: rgb(177, 142, 177); font-style: italic;">// trait B code here</span><span>
</span>}

<span></span><span class="hljs-class" style="color: rgb(249, 38, 114);">class</span><span class="hljs-class">  span><span class="hljs-class" style="color: rgb(97, 174, 238);">MyClass</span><span class="hljs-class"> </span><span>{
</span><span> </span><span style="color: rgb(249, 38, 114);">use</span><span> </span><span style="color: rgb(97, 17  238);">TraitA</span><span>, </span><span style="color: rgb(97, 174, 238);">TraitB</span><span>;
</span>
<span> </span><span style="color: rgb(177, 142, 177); font-style: italic;">// class code here</span><span>
</span>}
        </code></pre>
         </div>
         </pre>
         <p><strong>Explanation</strong>
            In this example, the MyClass class uses both TraitA and TraitB. This allows the class to reuse code from
            both traits and avoid duplicating code.</p>
         <p>If there are methods with the same name in multiple traits, the class must provide an implementation of the
            method to avoid a fatal error. Here is an example of using multiple traits with conflicting method names:
         </p>
         <pre><div class="code-box_snippetContainer__cJ6zK"><pre style="display: block; overflow-x: auto; padding: 0.5em; color: rgb(171, 178, 191); background: rgb(40, 44, 52);"><code class="language-php" style="white-space: pre;"><span class="hljs-class" style="color: rgb(249, 38, 114);">trait</span><span class="hljs-class"> </span><span class="hljs-class" style="color: rgb(97, 174, 238);">TraitA</span><span class="hljs-class"> </span><span>{
</span><span>    </span><span style="color: rgb(249, 38, 114);">public</span><span> </span><span style="color: rgb(249, 38, 114);">function</span><span style="color: rgb(97, 174, 238);"> </span><span style="color: rgb(97, 174, 238);">method</span><span style="color: rgb(97, 174, 238);">(</span><span style="color: rgb(97, 174, 238);">) </span><span>{
</span><span>        </span><span style="color: rgb(177, 142, 177); font-style: italic;">// Trait A implementation</span><span>
</span>    }
}

<span></span><span class="hljs-class" style="color: rgb(249, 38, 114);">trait</span><span class="hljs-class"> </span><span class="hljs-class" style="color: rgb(97, 174, 238);">TraitB</span><span class="hljs-class"> </span><span>{
</span><span>    </span><span style="color: rgb(249, 38, 114);">public</span><span> </span><span style="color: rgb(249, 38, 114);">function</span><span style="color: rgb(97, 174, 238);"> </span><span style="color: rgb(97, 174, 238);">method</span><span style="color: rgb(97, 174, 238);">(</span><span style="color: rgb(97, 174, 238);">) </span><span>{
</span><span>        </span><span style="color: rgb(177, 142, 177); font-style: italic;">// Trait B implementation</span><span>
</span>    }
}

<span></span><span class="hljs-class" style="color: rgb(249, 38, 114);">class</span><span class="hljs-class"> </span><span class="hljs-class" style="color: rgb(97, 174, 238);">MyClass</span><span class="hljs-class"> </span><span>{
</span><span>    </span><span style="color: rgb(249, 38, 114);">use</span><span> </span><span style="color: rgb(97, 174, 238);">TraitA</span><span>, </span><span style="color: rgb(97, 174, 238);">TraitB</span><span>;
</span>
<span>    </span><span style="color: rgb(249, 38, 114);">public</span><span> </span><span style="color: rgb(249, 38, 114);">function</span><span style="color: rgb(97, 174, 238);"> </span><span style="color: rgb(97, 174, 238);">method</span><span style="color: rgb(97, 174, 238);">(</span><span style="color: rgb(97, 174, 238);">) </span><span>{
</span><span>        </span><span style="color: rgb(177, 142, 177); font-style: italic;">// Class Implementation</span><span>
</span>    }
}
</code></pre>
         </div>
         </pre>
      </section>
   </li>
   <li>
      Write PHP Script of Object Iteration?<br>
      <b>Ans :</b>
      <h3 class="title">Object Iteration</h3>
      <p class="para">
         PHP provides a way for objects to be defined so it is possible to iterate
         through a list of items, with, for example a <a href="control-structures.foreach.php" class="link">foreach</a>
         statement. By default,
         all <a href="language.oop5.visibility.php" class="link">visible</a> properties will be used
         for the iteration.
      </p>
      <p><strong>Example #1 Simple Object Iteration</strong></p>
      <div class="phpcode">
         <code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br></span><span style="color: #007700">{<br>    public </span><span style="color: #0000BB">$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 1'</span><span style="color: #007700">;<br>    public </span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 2'</span><span style="color: #007700">;<br>    public </span><span style="color: #0000BB">$var3 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 3'</span><span style="color: #007700">;<br><br>    protected </span><span style="color: #0000BB">$protected </span><span style="color: #007700">= </span><span style="color: #DD0000">'protected var'</span><span style="color: #007700">;<br>    private   </span><span style="color: #0000BB">$private   </span><span style="color: #007700">= </span><span style="color: #DD0000">'private var'</span><span style="color: #007700">;<br><br>    function </span><span style="color: #0000BB">iterateVisible</span><span style="color: #007700">() {<br>       echo </span><span style="color: #DD0000">"MyClass::iterateVisible:\n"</span><span style="color: #007700">;<br>       foreach (</span><span style="color: #0000BB">$this </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br>           print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> =&gt; </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>       }<br>    }<br>}<br><br></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br><br>foreach(</span><span style="color: #0000BB">$class </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br>    print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> =&gt; </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>}<br>echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br><br></span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iterateVisible</span><span style="color: #007700">();<br><br></span><span style="color: #0000BB">?&gt;</span></span></code>
      </div>
      <p>The above example will output:</p>
      <div class="cdata">
         <pre>var1 =&gt; value 1
var2 =&gt; value 2
var3 =&gt; value 3

MyClass::iterateVisible:
var1 =&gt; value 1
var2 =&gt; value 2
var3 =&gt; value 3
protected =&gt; protected var
private =&gt; private var
</pre>
      </div>
   </li>
   <li>
      Use of The <strong>$this</strong> keyword.<br>
      <b>Ans :</b>
      <p><b>$this</b> is a reserved keyword in PHP that refers to the calling object. It is usually the object to which
         the method belongs, but possibly another object if the method is called statically from the context of a
         secondary object. This keyword is only applicable to internal methods. </p>
      <p><strong>Example 1:</strong> A simple program to show the use of <em>$this</em> in PHP.</p>
      <table border="0" cellpadding="0" cellspacing="0">
         <tbody>
            <tr>
               <td class="code">
                  <div class="container">
                     <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                     <div class="line number2 index1 alt1"><code class="keyword">class</code> <code
                           class="plain">simple{ </code></div>
                     <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                     <div class="line number4 index3 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">public</code>
                        <code class="variable">$k</code> <code class="plain">= 9; </code>
                     </div>
                     <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                     <div class="line number6 index5 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">public</code>
                        <code class="keyword">function</code> <code class="plain">display(){ </code>
                     </div>
                     <div class="line number7 index6 alt2"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                           class="keyword">return</code> <code class="variable">$this</code><code
                           class="plain">-&gt;k; </code></div>
                     <div class="line number8 index7 alt1"><code
                           class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">} </code></div>
                     <div class="line number9 index8 alt2"><code class="plain">} </code></div>
                     <div class="line number10 index9 alt1"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                     <div class="line number11 index10 alt2"><code class="variable">$obj</code> <code
                           class="plain">= </code><code class="keyword">new</code> <code class="plain">simple(); </code>
                     </div>
                     <div class="line number12 index11 alt1"><code class="functions">echo</code> <code
                           class="variable">$obj</code><code class="plain">-&gt;display(); </code></div>
                     <div class="line number13 index12 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                     <div class="line number14 index13 alt1"><code class="plain">?&gt; </code></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <p><strong>Output:</strong></p>
      <pre>9</pre>
      <p><strong>$this – a pseudo-variable:</strong> Unlike other reserved keywords used in the context of class like
         the static, parent, etc does not need to be declared with the dollar sign (‘$’). This is because in PHP
         <em>$this</em> is treated as a pseudo-variable.<br>
         In PHP, this is declared like a variable declaration (with the ‘$’ sign) even though it is a reserved keyword.
         More specifically, <em>$this</em> is a special read-only variable that is not declared anywhere in the code and
         which represents a value that changes depending on the context of program execution.
      </p>
   </li>
</body>

</html>