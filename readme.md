# Corona WP MU-Plugin
This plugin was thought/created to be our default plugin for all new plugins built in wordpress for the company.
  
## Frontend devs info

How to use the plugin in the front end?

You should have access to the `$corona` variable. This variable should have an attribute for each page, like, `->Home` `->Beliefs` `->Future` and so on. You can access a couple of functions to retrieve ACF.

If you need **to get all ACF** as an array, you should call the method `all()`, like below.

```
$content = $corona->Home->all();
```
If you would like to get it as JSON, just add `json()` at the end like below.
```
$content = $corona->Home->all()->json();
```

If you need **to get a specific ACF**, you can find by Field Name with the method `find('field_name')->get()`. 

> Note that the find() method will return all records that match with
> the field_name passed, so you can receive more than one field, which
> means that you have two or more fields with the same name in ACF. So
> **make sure** that the field name is unique in the ACF.
> Also, don't forget to add the `->get()` to bring it as array or `->json()` to bring as JSON.

```
$content = $corona->Home->find('field_name')->get();
```
If you would like to get it as JSON only add `json()` at the end like below.
```
$content = $corona->Home->find('field_name')->json();
```
If you would make sure that you'll **get only the first** Field Name found, try to use the `fisrt()->get()`, look:
```
$content = $corona->Home->first('field_name')->get();
```
If you would like to get it as JSON only add `json()` instead of `get()` at the end like below.
```
$content = $corona->Home->first('field_name')->json();
```
And finally if you would like to see this result in you browser, you can use the `print_r()` or the `var_dump()` php functions. Try to add to the theme the below lines.
```
$content = $corona->Home->all()->json();
print_r($content);
var_dump($content);
```
  