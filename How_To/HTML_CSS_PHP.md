# HTML, PHP and CSS

### In this section we'll learn how to work with PHP, CSS and HTML to develop a web application.

## Concepts
As we saw previously, HTML is a Hypertext Markup Language that helps us to develop the interface of our web pages, since this is so basic it is necessary to use other tools that help us to improve the behavior and aesthetics of our web application, thus, we introduce the concept of CSS (Cascading Style Sheets) and PHP (Hypertext Preprocessor).	
With CSS we can give different styles to our application giving a nice appearance, while with PHP we can improve the behavior of our application allowing us to implement different functionalities.

## Examples

### HTML

**HTML** provides you with different _tags_ that allow you to introduce different views to your application, some of these are:

- div
- label
- h1
- p
- table

All these _tags_ allow you to define the different spaces of your page, also to enter texts, buttons, forms, etc.

An example to define a title on your page is the following:

```html
<h1>My little title :)</h1>
```

That should show something similar to the following on your web page.

<h1>My little title :)</h1>

In this folder you will find some sample files ending with *.php*, there you will see many more examples. (Later we will see why *.php*)

---

### CSS

To use some styles it is useful to define your CSS guidelines in a new file.

In this folder you will find an example file called **starter-template.css**, there you will see many more examples.

---

**NOTE:** Before continuing, go to this [URL](https://www.apachefriends.org/download.html), download and install XAMPP to be able to set up a web server. (Follow the instructions given on the official page).

### PHP

PHP is known for being a specialized programming language on the web, which is why it integrates so well with HTML and is therefore one of the most widely used.

As you can see in the examples in this same directory, we can use php and html in the same file, so integrating it into our web applications will not be complex at all. We will not talk about system syntax, however we will analyze some examples to understand their behavior.

As we already know from the _WEB\_BASICS.md_ tutorial, we can send different data to a server through some of the methods that HTML and PHP provide us with POST and GET, for example, so then, we could take data from a user.

Here is an example:

```php
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Username parameter missing');
}
```

If you have used a programming language, you will notice that in this case the **$\_GET[\'name\']** variable behaves like an __array__, so we introduce the concept of __superglobal variables__, these are understood as predefined variables by PHP that can be used in any ambit.

You can also notice how a method is being applied to that array (isset) that tells us if the _\'name\'_ value is contained in the __GET_ array.

Another interesting thing is to see that since the **if** conditional is very similar to any other programming language, we understand that using PHP will not be difficult.

To start a _PHP tag_ in HTML the following syntax is used:

```php
<?php 
  // The code is written here
?>
```
