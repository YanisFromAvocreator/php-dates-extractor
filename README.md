# php-dates-extractor
Extract all dates in any format from text.

# Dates extracted
This function can extract 30 date formats in french and english. Some examples are :

* 03 décembre 2015
* 3 décembre 2015
* 3 décembre 2015
* 3 december 2015
* 2015 december 3
* 2015 december 03
* 15 december 3
* 3 dec 2015
* 3 déc 2015
* 03 déc 2015
* 03 déc 15
* 03-12-2015
* 3-12-2015
* 3-déc-2015
* 3-12-15
* 03-12-2015
* 12-03-2015
* 12-3-2015
* 12-3-15
* 03/12/2015
* 3/12/2015
* 3/12/15
* 12/3/15
* 12/03/2015
* 03/déc/2015
...

# Usage

<pre>
include('dates-extractor.php');
$dates = extract_dates($text);

print_r($dates);
</pre>
