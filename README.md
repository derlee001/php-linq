# Linq In PHP
Query arrays with a SQL-like syntax using LINQ

* @name        D3Linq | Linq In Php
* @version     1.6.1
* @author      Tufan Baris YILDIRIM 
* @link        htpp://www.tufyta.com
* @since       20.10.2009


## Phpclasses.org 
[Repo](http://www.phpclasses.org/linq-in-php) 
[January 2010 Winner](http://www.phpclasses.org/winners/year/2010/)

## v1.6.1
* - multicase in statement switch.
* 

## v1.6.0
* - d3grid Integrated.
* - i've re-written some complex code blocks.

## v1.5.5
* - xml_string() added for xml string vars.also xml_file can select from xml string var.
* - tags which have 2 letters (eg. li ul dt dl etc..) parsing bug [fixed]
* - added preg_quote to LIKE creater function. [fixed]
* - added a control for integer keys on unsetByArray [fixed]

## v1.5.4
* - html tag names lowered after crawl
* - unsetByArray added for unset variables which created by extract();
* - all rows was returning when first row is matched and other hasn't got same columns (resolved by usetByArray) [fixed]

## v1.5.3
* - GetContentsFunc public variable added  for change  file_get_contents func as u declared. Ex: curl
* - Notice Errors resolved.
* - much moreee stronger html parser (:
* - dir_file and dir_files functions added for select dirs or files from a dir. ex: select from dir_files(dirname) WHERE  name LIKE '%myfile%'

## v1.5.2
* - new json_file(  can read serialized data by php or json encoded data
* - performed about stabilization . unsetted big arrays and unnecessaried used variables
* - bug about dot obje to an array when child obje key is numeric [fixed]
*   -- Tools Funcsions Added --
* -  arrayRebuild
*    ------------
* - Can Rebuild an array by a template you given
* - getArrayName
*   -------------
* - return last array name .. or last created virtual arrayname after query. 
* - getResult 
*   -------------
* - get all result array.

## v1.5.1
* - text_file(); function added. 
*                  .Ex: select line,text from text_file(file.txt) where line=50 OR text LIKE '%linq%'
* - html_file(); function added.
*                  .Ex: select  innertHTML,text FROM html_file(http://tufyta.com).div WHERE class='post_title';
* - name of selected array by func cannot start with a numeric char [fixed]
* - "NOT" support added for LIKE claueses.
* - debug() func added. can selfdebug on error if OnError=='selfdebug';
* - Token Analyzer and Token errors Added.
* - CreateWhereClause Func Added for create a boolean returnable php code from WHERE clause you wroten

## v1.5.0
* - FirstOf() function changed.(used foreach).
* - Order by bug fixed (invalid column error when column has a space char).
* - Updatable keys and values (UPDATE array SET value=....).
* - Array Update errors added.
* - Func Support Added. (can create and use this func in queries)
*      . json_file().
*          - can read json to a global array and select from it
*      .xml_file().
*          - can read a xml file (as dataset) to a global array and select from it o a datatable in it.

## v1.4.0
* - UPDATE statement Added Thanx to Ridvan  http://www.phpclasses.org/browse/author/668797.html
* - data_seek bug [fixed] reported by Ridvan Karatas at  http://www.phpclasses.org/discuss/package/5893/thread/1/
* - Order by bug [fixed]
* - Delete bug (couldnt use after order ) [fixed]

## v1.3.0
* - Insert Statement Added. 
*      . Can use insert statement like '(key,value) VALUES (...,...) for 1 dimmensional arrays
*      . and like  (col1,col2,col3) VALUES (..)  for multi dimmensional arrays' 

## v1.2.1
* - Columns can be used as a string in where clause [added]
* - Last Column Name was wrong. [fixed]
* - Order was wrong for numerics. [fixed]
* - Distinct method had an error about implode. [fixed]

## v1.2.0
* - DISTINCT Support Added.

## v1.1.0
* - Created Wagons for Easy parse Tokens 
* - ORDER BY Support Added.
* - Unknown column Error added. Checker for columns are used on ORDER Clauses

## v1.0.2
* - affected_rows() func added.

## v1.0.1
* - Delete Statemend added. Can Delete any object from an array ( global )         

## v1.0
* - This Class can be used for select from arrays as a sql query
* - You;
* - Can use php codes in Where clauses 
* - Can also use alias for key and value
* - And can select array in array as  arrayname.elementname