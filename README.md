# Finglish (Farsi to English)

## how to use

```
use Gladx\Finglish\Finglish;

$text = 'می نوش که عمر جاودانی اینست';
echo  Finglish::t($text); // mi nvsh ke amr jodany inst

Finglish::setCustom(['نوش' => 'nosh', 'عمر' => 'omer', 'جاودانی' => 'javedani']);
echo  Finglish::t($text); //mi nosh ke omer javedani inst

Finglish::setCustom(['می' => 'may', 'اینست' => 'inast']);
echo  Finglish::t($text); //may nosh ke omer javedani inast
```