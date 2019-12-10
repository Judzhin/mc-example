##### 2. What will be the output of this query?

```bash
	SELECT a.id, a.name, b.grade FROM a
	LEFT JOIN b on b.id = a.id
```

*3 rows, 1 NULL value*

##### 3.1. Write an SQL statement to get all customers' name, city and salesmans' names, which the salesman's commission is between 12% and 14%.

```bash
SELECT 
    `c`.`Name` as `customer`,
    `c`.`city`,
    `s`.`Name` as `salesname`
FROM
    `customer` AS `c`
        JOIN
    `salesman` AS `s` ON `s`.`Id` = `c`.`Salesman_id`
WHERE
    `s`.`commission` BETWEEN 0.12 AND 0.14
```

##### 3.2. Write an SQL statement to get all salesmen that didn't sell anything.

```bash
SELECT 
    `s`.*
FROM
    `salesman` AS `s`
        LEFT JOIN
    `customer` AS `c` ON `c`.`Salesman_id` = `s`.`Id`
WHERE `c`.`Id` IS NULL
```

#### 4. jQuery method is used to perform an asynchronous HTTP request?

```bash
jQuery.ajax() ($.ajax())
```

#### 5. With jQuery, look at the following selector: $(“div.intro”). What does it select?

```bash
All div elements with class="intro"
```

#### 6. jQuery code to set the background color of all span elements to blue?
```bash
$(“span”).css(“background-color”,”blue”);
```

#### 7. How do you fetch the first span on the page, which has the class ‘green’?
```bash
$("span.green:first")
```